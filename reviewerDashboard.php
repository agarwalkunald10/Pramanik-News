<?php
//include auth_session.php file on all user panel pages
include("./auth.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="./style-2.css" />
</head>
<body class = "dashBoard">
<div class = "homeScreen" style="width:90%;">
<!-- style="background:url('../Images/two.jpg');background-repeat: no-repeat;background-position: center;" -->

            <video autoplay loop muted plays-inline class="back_video">
                <source src="./Images/background.mp4" type="video/mp4">
            </video>
            <nav class="navbar">
                <div class="max-width">
                    <div class="logo"><a href="./index.php"><img src="./Images/logo.png" style="width: 8vw; height:5xh;"/></a></div>
                        <Ul class="menu">
                            <li><p class = "username">Hey, <?php echo $_SESSION['username']; ?></p></li>
                            <?php if($_SESSION['username']=='admin'){
                                ?>
                                <li><a href="./admindashboard.php">Post a NEWS</a></li>
                                <?php
                                }
                            ?>

                        
                            <li><a href="./logout.php">Logout</a></li>
                            <li><a href="./profile.php">My Profile</a></li>
                        </Ul>
                    </div>
                
            </nav>

    
    
    <div class = "mid" style="margin: 7% 3% 1% 9%;">

    <div style="color:white; font-size:25px;">
        <h3>Hey You have some new news to review</h3>
    </div>
        <div class = "mid1">

    
        <?php
        require('./db.php');
        
        $user=($_SESSION['username']);
        $response = ($_SESSION['username'])."responded";
        $query = "SELECT newsH, newsC, newsLink FROM news ";
        $result = mysqli_query($con, $query);
        if($result){
            while ($row1 = mysqli_fetch_array($result)) 
            {
                
                ?>
                    <div class="item">
                        <form action="./voteNews.php" method="post">
                            <span class="newsHolder">
                                <div class = "newsHeading">
                                    <input style = "outline: none;
                                                border-width: 0px;
                                                font-size: 25px ;
                                                font-weight: 700;
                                                border: 0;" type="label" name = "news" value="<?php echo $row1['newsH']; ?>" readonly></input><hr>
                                </div>
                    
                                <div class = "newsContent">
                                <?php echo $row1['newsC']; ?>
                                </div>
                       
                            </span>
                            <span style = "float:right;">
                                <div class = "newsContent">
                                <a href="<?php echo $row1['newsLink'];?>" target="_blank">Link</a><br><hr>
                                <a href="./newsValidation.php" target="_self" >vote and upload proofs</a>
                        
                                </div>
                            </span>
                        </form>
                    </div>
                <?php
            }
        }?>
        </div>        
    </div>
    
</body>
</html>