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
                        <a href="discount.php">Plan</a>
                        <a href="Services.php">Services</a>
                        <a href="ContactUs.php">Contact Us</a>
                    </nav>

                    <div class="icons">
                        <div class="fas fa-search" id="search-icon"></div>
                        <a href="../Controller/ajax.php" class="fas fa-user-alt"></a>
                        <a href="addToCart.php" class="fas fa-shopping-cart"></a>
                        <a href="../Controller/ajax.php" class="far fa-file"></a>
                        <a href="login.php" class="fas fa-power-off"></a>
                    </div>

                    <form action="" id="search-action">
                        <input type="search"  id="search" placeholder="Search here">
                        <label for="search" class="fas fa-search"></label>
                    </form>
                </header>  
                
                <section class="home" id="home">
                    <div class="content">
                        <span>upto 70% off</span>
                        <h3>We care about <br> your pet!!!</h3>
                        <a href="#" class="btn">Get Started</a>
                    </div>
                </section>
                <section class="category" id="category">

            <h1 class="heading"> <i class="fas fa-paw"></i> Shop by Category <i class="fas fa-paw"></i> </h1>

            <div class="box-container">
         
                <div class="box">
                    <img src="../View/images/c1.webp" alt="">
                    <h3>Food for Dogs</h3>
                    <a href="" class="btn">shop now</a>
                </div>
        
         <div class="box">
             <img src="../View/images/c2.webp" alt="">
             <h3>food for cats</h3>
             <a href="services.php" class="btn">shop now</a>
         </div>
        
         <div class="box">
             <img src="../View/images/c3.webp" alt="">
             <h3>Food for Rabbits</h3>
             <a href="services.php" class="btn">Shop Now</a>
         </div>
        
         <div class="box">
             <img src="../View/images/c4.webp" alt="">
             <h3>Food for Birds</h3>
             <a href="services.php" class="btn">Shop Now</a>
         </div>
    </div>
</section>
    </body>
</html>