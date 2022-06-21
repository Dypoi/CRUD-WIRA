<?php include('koneksi.php'); 

    if(isset($_POST['id'])){
        $id_produks = $_POST['id'];
       
        $result = mysqli_query($koneksi, "SELECT * FROM productdb where id = '$id_produks'");
        if(!$result) {
            die("Query Error :".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
        }
        $data = mysqli_fetch_array($result);

        if(!count($data)) {
            echo "<script>alert('Data not found.');windows.location='adminpage.php';</script>";
        


    } else {
        echo "<script>alert('Enter the ID you wan't to edit!');windows.location='adminpage.php';</script>";

    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="CSS/admin.css">
    <title>Edit Product</title>
</head>
<body>
<div class="Container">
        <nav class="wrapper">
            <div class="brand">
                <div class="firstname">Edit</div>
                <div class="lastname">Product</div>
                
            </div>
        </nav>
        <?php
	include"koneksi.php";
	$no = 1;
	$query = mysqli_query ($koneksi, " select 
                                        id,
                                        product_name,
                                        deskripsi,
                                        purchase_price,
                                        product_price,
                                        product_image
                                        from productdb
									  where id = $_GET[id]");
	$data = mysqli_fetch_array ($query);
	
?>
</div>
    <form action="proses_edit.php" method="post" class="w3-container" enctype="multipart/form-data">
    <section class="">
            <p>
            <label class="w3-text"><b>Product Name</b></label>
            <input class="w3-input w3-border" type="text" name="product_name" autofocus="" required="" value="<?php echo $data['product_name'] ?>">
            <input  type="hidden" name="id" value="<?php echo $data['id'] ?>">
            </p>
            <p>
            <label class="w3-text"><b>Deskripsi</b></label>
            <input class="w3-input w3-border" type="text" name="deskripsi" value="<?php echo $data['deskripsi'] ?>">
            </p>
            <p>
            <label class="w3-text"><b>Purchase Price</b></label>
            <input class="w3-input w3-border" type="text" name="purchase_price" required="" value="<?php echo $data['purchase_price'] ?>">
            </p>
            <p>
            <label class="w3-text"><b>Product Price</b></label>
            <input class="w3-input w3-border" type="text" name="product_price" required="" value="<?php echo $data['product_price'] ?>"/>
            </p>
            <p>
            <i style="font-size: 16px;color: red; margin-left: 10px;">Ignore if you don't change the product image</i>
            <br>
            <label class="w3-text" style="margin-left: 10px;position:relative;"><b>Product Image</b></label>
            <img src="Image/<?php echo $data['product_image'] ?>" style="width: 200px; height: 200px;float: left;margin-left: 5px;">
            <input class="" type="file" name="product_image" />
            
            </p>
        <div>
            <br>
            <button type="submit" style="float: left; margin-left: 10px;"><i>Save Changes</i></button>
        </div>
    </section>
    </form>
    
</body>
</html>