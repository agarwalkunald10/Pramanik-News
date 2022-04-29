<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="./style-2.css" />
</head>
<body class = "popup">
<?php
    require('./db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $cnfpass = stripslashes($_REQUEST['cnfPass']);
        $cnfpass = mysqli_real_escape_string($con, $cnfpass);
        if($username!=null && $password!=null && $cnfpass!=null){
            if($password==$cnfpass){
                // $query    = "INSERT into `users` (username, password)
                //      VALUES ('$username', '" . md5($password) . "')";
                $query = "INSERT into users (username,password)
                Values ('$username','$password')";
                $result   = mysqli_query($con, $query);
                if ($result) {
                    echo "<div class='form'>
                    <h3>You are registered successfully.</h3><br/>
                    <p class='link'>Click here to <a href='./index.php'>Login</a></p>
                    </div>";
                } else {
                    echo "<div class='form'>
                    <h3>Required fields are missing.</h3><br/>
                    <p class='link'>Click here to <a href='./registration.php'>registration</a> again.</p>
                    </div>";
                }
            }
            else{
                echo "Password mismatch";
            }
        }
        else{
            echo "All fields are mandatory";
        }
        
    } else {
        ?>
            <form class="loginform" action="" method="post">
                <h1 class="login-title">Registration</h1>
                <input type="text" class="login-input" name="username" placeholder="Enter Username" required />
                <input type="password" class="login-input" name="password" placeholder="Enter Password">
                <input type="password" class="login-input" name="cnfPass" placeholder="Re-Enter Password">
                <input type="submit" name="submit" value="Register" class="login-button">
                <p class="link"><a href="./index.php">Click to Login</a></p>
            </form>
        <?php
            }
?>
</body>
</html>