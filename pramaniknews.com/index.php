<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <meta name="keywords" content="pramaniknews,PRAMANIKNEWS,pramanik news,PRAMANIK NEWS,Pramanik News,pramanikNEWS,PRAMANIKnews,pramanik-news,PRAMANIK-NEWS,PRAMANIK-news,pramanik-NEWS,pramanik_news,PRAMANIK_NEWS,PRAMANIK_news,pramanik_NEWS">
        <title>Pramanik News</title>
    	<link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="style-2.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
        
        <div class="homeScreen">
            <video autoplay loop muted plays-inline class="back_video">
                <source src="./Images/background.mp4" type="video/mp4">
            </video>

            <nav class="navbar">
                <div class="max-width">
                    <div class="logo"><a href="./index.php"><img src="./Images/logo.png" style="width: 7vw; height:5xh;"/></a></div>
                    <Ul class="menu">
                        <li><a href="./about.php">About</a></li>
                        <li><a href="./index.php?page=login">Login</a></li>
                        <li><a href="./index.php?page=signup">Sign up</a></li>
                    </Ul>
                </div>
            </nav>
            <div class="content">
                <div class="abstract">

                    
                    <p><strong><u>"Pramanik News"</u></strong></p><p>is a platform which tells whether the content is wrong or right. It gives its audience a chance to vote on the topic and allows them to decide.</p><p> It adds points if it's right, and it cuts points if it's wrong. The result will be based on database information by the voting.</p>

                </div>

                <div class = "login-signup" id="loader" >
                    <?php
                        if(isset($_GET['page'])){
                        
                            if($_GET['page'] == "login")
                                include'./login.php'; 
                            else if($_GET['page'] == "signup")
                                include'./registration.php';

                        }?>
                    
                    
                </div>
                
            </div>
            
        </div>
    </body>
</html>
