<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="./style-2.css" />

</head>
<body class="popup">
<?php
    require('./db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='$password';";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: ./dashboard.php");
        } else {
            echo "<div class='loginform'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link2' style='color:black;'>Click here to <a href='./index.php'>Try again</a></p>
                  </div>";
        }
    } else {
?>
    <form class="loginform" method="post">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="./registration.php">New Registration</a></p>
  </form>
<?php
    }
?>
</body>
</html>