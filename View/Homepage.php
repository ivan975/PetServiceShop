<?php
    // include '../Controller/userLoggedInCheck.php';
    // if(userLoggedInCheck()==false){
    //     header("Location: login.php");
    // }
    ?>
<html>
    <head>
        <title>Homepage</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="../View/css/Homepage.css">
    </head>
   
    <body>
                <header class="header">
                    <a href="#" class="logo"><i class="fas fa-bone"></i>Pet Service</a>

                    <nav class="navbar">
                        <a href="Homepage.php">Homepage</a>
                        <a href="about.php">About Us</a>
                        <a href="shop.php">Shop</a>
                        <a href="plan.php">Plan</a>
                        <a href="Services.php">Services</a>
                        <a href="ContactUs.php">Contact Us</a>
                    </nav>

                    <div class="icons">
                        <div class="fas fa-search" id="search-icon"></div>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-shopping-cart"></a>
                    </div>

                    <form action="" id="search-action">
                        <input type="search"  id="search" placeholder="Search here">
                        <label for="search" class="fas fa-search"></label>
                    </form>
                </header>  
                
                <section class="home" id="home">
                    <div class="content">
                        <span>upto 70% off</span>
                        <h3>we care about <br> your pet!!!</h3>
                        <a href="#" class="btn">Get Started</a>
                    </div>
                </section>
    </body>
</html>