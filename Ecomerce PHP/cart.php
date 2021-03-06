<?php 

session_start();

require_once('CreateDb.php');
require_once('component.php');

$db = new CreateDb("Newdb","Productdb");

if(isset($_POST['remove'])){
   if($_GET['action'] == 'remove'){
    foreach($_SESSION['cart'] as $key => $value){
        if($value["product_id"] == $_GET['id']){
            unset($_SESSION['cart'][$key]);
            echo "<script>alert('Product has been Removed...!')</script>";
            echo "<script>window.location = 'cart.php'</script>";
        }
    }
   }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
     <!-- w3 school -->
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body class="bg-light" 
style="padding-top: 80px;
background-image:radial-gradient( circle farthest-corner at 10% 20%,  rgba(239,246,249,1) 0%, rgba(206,239,253,1) 90% );">
<?php require_once('header.php'); ?>
    <div class="container-fluid">
        <div class="row px-5">
            <div class="col-md-7">
                <div class="shopping-cart">
                    <h6><b>My Cart</b></h6>
                    <hr color="black">

                    <?php

                    $total = 0;
                    if(isset($_SESSION['cart'])){
                        $product_id = array_column($_SESSION['cart'],'product_id');

                        $result = $db->getData();
                        while($row = mysqli_fetch_assoc($result)){
                            foreach($product_id as $id){
                                if($row['id'] == $id){
                                    cartElement($row['product_image'],$row['product_name'],$row['product_price'],$row['id']);
                                    $total = $total + (int)$row['product_price'];
                                }
                            }
                        }
                    }else{
                        echo "<h5>Cart is Empty</h5>";
                    }

                    ?>

                </div>
            </div>
                <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">
                    <div class="pt-4">
                        <h6>PRICE DETAILS</h6>
                        <hr color="black">
                        <div class="row price-details">
                            <div class="col-md-6">
                                <?php
                                    if(isset($_SESSION['cart'])){
                                        $count = count($_SESSION['cart']);
                                        echo "<h6>Price($count items)</h6>";
                                    }else{
                                        echo "<h6>Price (0 items)</h6>";
                                    }
                                ?>
                                <h6>Delivery Charges</h6>
                                <hr color="black">
                                <h6>Amount Payable</h6>
                            </div>
                            <div class="col-md-6">
                                <h6>$<?php echo $total; ?></h6>
                                <h6 class="text-success">FREE</h6>
                                <hr>
                                <h6>$<?php
                                    echo $total;
                                ?></h6>
                            </div>
                        </div>
                    </div>

                </div>
        </div>
    </div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>