<?php
require_once('component.php')
?>
<div id="header">
    <nav class="navbar navbar-expand w3-pale-blue"
    style="background-color: #FBDA61;
    background-image: linear-gradient(45deg, #FBDA61 0%, #FF5ACD 100%);
    z-index: 1;
    width:100%;
    position:fixed;
    overflow:hidden;
    top:0;">
        <a href="index.php" class="navbar-brand">
            <h4 class="px-5">
                <b>I</b>ntermedia<b>Store</b>
                <br>
            </h4>
        </a>
        <button class="navbar-toggler"
            type="button"
            data-toggler="collapse"
            data-target="#navbarNavAltMarkup"
            aria-control="navbarNavAltMarkup"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end py-0" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="cart.php" class="nav-item nav-link active mt-0 py-0"> 
                    <h5 class="px-5 mt-0 cart">
                    <i class="px-5 py-0"><a href="customer.php"
                    onMouseOver="this.style.backgroundColor='#3'"
                    onMouseOver="this.style.Color='white'"
                    onMouseOut="this.style.backgroundColor=''"
                        style="
                        color:#333;
                        text-decoration:none;
                        background-size: 20px;
                        margin-top: -7px;
                        margin-bottom: 1px;
                        margin-left: 20px;
                        position: relative;
                        float:right;
                        font-weight:700;
                        padding: 10px 10px;
                        ">Profile</a></i>
                        <i class="fas fa-shopping-cart px-4 py-0 mt-0"></i>
                        
                        <?php
                            
                            if(isset($_SESSION['cart'])){
                                $count = count($_SESSION['cart']);
                                echo"<span id=\"cart_count\" class=\"text-warning bg-light \">$count</span>";
                            } else{
                                echo"<span id=\"cart_count\" class=\"text-warning bg-dark \">0</span>";
                            }
                        ?>
                        
                    </h5>
                </a>
            </div>
        </div>
    </nav>
</div>
