<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Post News</title>
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="./style-2.css" />
</head>
<body class="popup">
<?php
    require('./db.php');
    
    // When form submitted, check and create user session.
    if (isset($_POST['newsH'])) {
        $newsH = stripslashes($_REQUEST['newsH']);    // removes backslashes
        $newsH = mysqli_real_escape_string($con, $newsH);
        $newsC = stripslashes($_REQUEST['newsC']);
        $newsC = mysqli_real_escape_string($con, $newsC);
        $response = "";
        // Check user is exist in the database
        $query    = "INSERT into news (newsH,newsC,response)
        Values ('$newsH','$newsC','$response')";
        // $result = mysqli_query($con, $query) or die(mysql_error());
        $result   = mysqli_query($con, $query);
        if ($result) {
            $_SESSION['newsH'] = $newsH;
            echo '<script>alert("News Posted Successfully");location.href = "./dashboard.php"</script>';
            // Redirect to user dashboard page
        } else {
            echo '<script>alert("Please try again");location.href = "./dashboard.php"</script>';
        }
    } else {
?>
    <form class="loginform" method="post" name="login">
        <h1 class="login-title">Post News</h1>
        <input type="text" class="login-input" name="newsH" placeholder="News Heading" autofocus="true"/>
        <textarea class="login-input-area" name="newsC" rows="4" cols="20" placeholder="News Content"></textarea>
        <input type="submit" value="Post" name="submit" class="login-button"/>
  </form>
<?php
    }
?>
</body>
</html>