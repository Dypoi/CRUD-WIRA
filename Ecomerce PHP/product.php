<?php 
// user session
@include 'koneksi.php';

session_start();
//start session


require_once('component.php'); 

require_once('CreateDb.php');
//create instance of Createdb class
$database = new CreateDb(dbname:"Newdb", tablename:"Productdb");

if(isset($_POST['add'])){
    //print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_Array_id = array_column($_SESSION['cart'],"product_id");
        
        if(in_array($_POST['product_id'], $item_Array_id)){
            echo"<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'product.php'</script";
        } else{

            $count = count($_SESSION['cart']);
            $item_Array = array(
                'product_id'=>$_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_Array;
            
        }
    } else{

        $item_Array = array(
            'product_id'=>$_POST['product_id']
        );

    //Create new session variable
    $_SESSION['cart'][0] = $item_Array;
    print_r($_SESSION['cart']);
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
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-win8.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-2021.css">

    <title>Shopping Cart</title>
</head>
<body style="background-image:radial-gradient( circle farthest-corner at 10% 20%,  rgba(239,246,249,1) 0%, rgba(206,239,253,1) 90% );">
<?php require_once('header.php'); ?>
<div class="rounded" style="padding-top:80px;">
    .<div class="text-center">
        <img src="Image/LogoPartner.jpeg" class="rounded-circle" width="250" height="250">
    </div>
</div>
    <div class="px-5 w3-2021-buttercream ">
        <h1 class="display-3">Gucci</h1>
        <p class="pb-3">ini produk gucci yang sangat terkenal dan mewah</p>
    </div>
</div>
<div class="container">
    <div class="row text-center py-5">
        <?php 
        $result = $database->getData();
        while($row = mysqli_fetch_assoc($result)){
            component($row['product_name'],$row['product_price'],$row['product_image'], $row['id']);
        }
        ?>
    </div>
</div>
<hr color="black">






<!-- JavaScript Bundle with Popper -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>