<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>pramaniknews</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Libraries Stylesheet -->
    <!-- <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> -->
    <!-- <link href="lib/animate/animate.min.css" rel="stylesheet"> -->

    <!-- Customized Bootstrap Stylesheet -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="style3.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="style-2.css" rel="stylesheet">
    
</head>

<body class = "pop" style = "background-image: url('./Images/back.jpg'); background-repeat: no-repeat; overflow-y: scroll;">

    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div> -->
    <!-- Spinner End -->


   
    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0" >
        <a href="./index2.php" class="navbar-brand p-0"><img src="./Images/logo.png" style="width: 90px;"/>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="./about2.php" class="nav-item nav-link">About</a>
                    <a href="./index2.php?page=login" class="nav-item nav-link active" >Login</a>
                    <a href="./index2.php?page=registration" class="nav-item nav-link">SignUp</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->



        <div class="container py-5" style="padding: top 2rem;">
            <div class="row g-5" style = "padding-top: 10%;">
                <div class="col-lg-7">
                    <p class="mb-4"><strong><u>"Pramanik News"</u></strong><br>is a platform which tells whether the content is wrong or right.It gives its audience a chance to vote on the topic and allows them to decide.It adds points if it's right, and it cuts points if it's wrong. The result will be based on database information by the voting.</p>
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
    <!-- </div> -->
    <!-- Quote End -->


   


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->

    <!-- <script src="lib/wow/wow.min.js"></script> -->
    <!-- <script src="lib/easing/easing.min.js"></script> -->
    <!-- <script src="lib/waypoints/waypoints.min.js"></script> -->
    <!-- <script src="lib/counterup/counterup.min.js"></script> -->
    <!-- <script src="lib/owlcarousel/owl.carousel.min.js"></script> -->

    <!-- Template Javascript -->
    <!-- <script src="main.js"></script> -->
</body>

</html>