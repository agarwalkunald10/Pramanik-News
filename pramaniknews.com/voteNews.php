<?php
    require('./db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_SESSION['username']) && isset($_REQUEST['news'])){ 
        $voteID = ($_SESSION['username']).($_REQUEST['news']);
        $user = ($_SESSION['username']);
        $vote = ($_REQUEST['vote']);
        $news = ($_REQUEST['news']);
        $response = ($_SESSION['username'])."responded";
        try {
            $query    = "INSERT into votes (user,news,vote,voteId)
                        Values ('$user','$news','$vote','$voteID')";
            $query1 = "UPDATE news
            SET response = '$response'
            WHERE newsH = '$news'";            
            $result   = mysqli_query($con, $query);
            $result1 = mysqli_query($con, $query1);
            if($result && $result1){
                echo '<script>alert("Vote Successfull");location.href = "./dashboard.php"</script>';
            }
            else{
                echo '<script>alert("Already Voted to this News");location.href = "./dashboard.php"</script>';
            }
            
            
        } catch (Exception $e) {
            echo '<script>alert("Already Voted to this News");location.href = "./dashboard.php"</script>';
            //header("Location: ../Database/dashboard.php");
            
        } finally {
            // header("Location: ../Database/dashboard.php");
        }
        // $query    = "INSERT into votes (user,news,vote,voteId)
        // Values ('$user','$news','$vote','$voteID')";
        // // $result = mysqli_query($con, $query) or die(mysql_error());
        // $result   = mysqli_query($con, $query);
        // if ($result) {
        //     echo '<script>alert("Vote Successfull")</script>';
        //     // Redirect to user dashboard page
        //     header("Location: ../Database/dashboard.php");
        // } else {
        //     echo '<script>alert("Please Try Again")</script>';
        // }
    }
        
?>
