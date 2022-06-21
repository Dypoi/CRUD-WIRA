<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Project</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;1,300&family=Tiro+Kannada&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/menu.css">
    <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   
</head>
<body>
    <!-- Header -->
    <div class="header">
        <div class="wrapper">
            <div class="logo">
                <h1><a href="">I<span>ntermediate</span>Store</a></h1>
            </div>
            <div class="menu">
                <form action="index.php" method="post">
                    <ul>
                        <li><a href="index.php" class="active">Home</a></li>
                        <li><a href="#partners">Partners</a></li>
                        <li><a href="#teams">Teams</a></li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
    <!-- hero -->
    <section id="hero">
        <div class="hero container">
            <div class="atas">
                <h1>Nice To Meet You <span></span></h1>
                <h1>Join as us a<span></span></h1>
                <h1>Shopping Center<span></span></h1>
            </div>
            <div class="tengah">
                <a href="login.php" type="button" class="cta">Get Started</a>
            </div>
                <img  alt="" style="background-image: radial-gradient( circle 993px at 0.5% 50.5%,  rgba(137,171,245,0.37) 0%, rgba(245,247,252,1) 100.2% )";></img>
            <div class="kananbawah">
                <h1>Stylish, <span></span></h1>
                <h1>Elegant, and<span></span></h1>
                <h1>Luxurious<span></span></h1>
            </div>
        </div>
    </section>
    <!-- PARTNERS ABOUT -->
    <?php include_once('about.php');?>
    <!-- FOOTER -->
    <div id="contact">
           <div class="footer">
            <div class="footer-section">
                
            <div class="footer-section">
                <h3>Contact</h3>
                <p>jl. Prabu kiansantang, periuk, kota Tangerang</p>
                <p>kode pos :115232</p>
            </div>
            <div class="footer-section">
                <h3>Social</h3>
                <p><b>Instagram : arief_lukman_nalar</b></p>
            </div>
           </div>
        </div>
    </div>

    <div id="copyright">
        <div class="">
            &copy; 2022. <b>RumahArief.</b> All Rights Reserved.
        </div>
    </div>
</body>
</html>