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
                            <li><a href="./admindashboard.php?page=post">Post a NEWS</a></li>
                            <?php
                            }
                            ?>

                        
                        <li><a href="./logout.php">Logout</a></li>
                        <li><a href="./profile.php">My Profile</a></li>
                    </Ul>
                </div>
            </nav>

            
    <div class = "mid" style="margin: 7% 3% 1% 9%;">

        <div class = "mid1">

    
        <?php
        require('./db.php');
        
        $user=($_SESSION['username']);
        $response = ($_SESSION['username'])."responded";
        $query = "SELECT newsH, newsC, newsLink FROM news where response = '$response'";
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
                        <a href="<?php echo $row1['newsLink'];?>" target="_blank">Link</a>
                        
                        </div>
                        </span>
                <!-- Displaying Data Read From Database -->
            </form>
                    
                    </div>
                
                <?php
            }
        }?>
        </div>
        <br>
        <hr>
        
        <hr style="5px">
        <br>
        <div class = "mid2">
        <?php
        require('./db.php');
        $response = ($_SESSION['username'])."responded";
        $user=($_SESSION['username']);
        $query = "SELECT newsH, newsC FROM news where response != '$response'";
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
                        <input class ="voteBtn" name = "vote" type="submit" value="true"/><br><input name = "vote" class ="voteBtn" type="submit" value="false"/>
                        </span>
                        
                <!-- Displaying Data Read From Database -->
            </form>
                    
                    </div>
                
                <?php
            }
        }
        else{

        }
        ?>
        </div>
        
    </div>

    <div class = "login-signup" id="loader" >
                    <?php
                        if(isset($_GET['page'])){
                        
                            if($_GET['page'] == "post")
                                include'./addNews.php'; 

                        }?>
                    
                    
                </div>

                <?php if($_SESSION['username']!='admin'){
                            ?>
                            <div class = "Voter" style="    height: fit-content;
                                                width: fit-content;
                                                min-width: 20vh;
                                                min-height: 20vh;
                                                align-self: flex-end;background:rgb(255,255,255);margin:5vh;padding:10px;font-weight:500;font-size:18px">

                <div><span>Voted:</span></div><hr><br>
                <?php
        require('./db.php');
        $response = ($_SESSION['username'])."responded";
        $user=($_SESSION['username']);
        $query = "SELECT * from votes where user='$user' and vote='true'";
        $result = mysqli_query($con, $query);
        $countT = 0;
        $query1 = "SELECT * from votes where user='$user' and vote='false'";
        $result1 = mysqli_query($con, $query1);
        $countF = 0;
        $query2 = "SELECT credits from users where username='$user'";
        $result2 = mysqli_query($con,$query2);
        $row=$result2 ->fetch_assoc();
        $credits = intval($row['credits']);
        if($result){
            while ($row1 = mysqli_fetch_array($result)) {
                $countT++;
                $credits = $credits + 10;
            }}
            if($result1){
                while ($row1 = mysqli_fetch_array($result1)) {
                    $countF++;
                    $credits = $credits - 10;
                }}    
                
                ?>

                <div><span>True:&emsp;<?php echo $countT ?></span></div>
                <br>
                <hr>
                <br>
                <div><span>False:&emsp;<?php echo $countF ?></span></div>
                <br>
                <hr>
                <br>
                <div><span>Credits:&emsp;<?php echo $credits ?></span></div>   
                    
                </div>
                            <?php
                            }
                            ?>
                
    
    
</div>
    
</body>
</html>