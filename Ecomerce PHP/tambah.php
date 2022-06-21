<?php include('koneksi.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="CSS/admin.css">
    <title>Add Product</title>
</head>
<body>
<div class="Container">
        <nav class="wrapper">
            <div class="brand">
                <div class="firstname">Add</div>
                <div class="lastname">Product</div>
            </div>
        </nav>
</div>
    <form class="w3-container" action="proses_tambah.php" method="post" enctype="multipart/form-data">
    <section class="">
            <p>
            <label class="w3-text"><b>Product Name</b></label>
            <input class="w3-input w3-border" type="text" name="product_name" autofocus="" required="" />
            </p>
            <p>
            <label class="w3-text"><b>Deskripsi</b></label>
            <input class="w3-input w3-border" type="text" name="deskripsi" />
            </p>
            <p>
            <label class="w3-text"><b>Purchase Price</b></label>
            <input class="w3-input w3-border" type="text" name="purchase_price" required="" />
            </p>
            <p>
            <label class="w3-text"><b>Product Price</b></label>
            <input class="w3-input w3-border" type="text" name="product_price" required="" />
            </p>
            <p>
            <label class="w3-text"><b>Product Image</b></label>
            <input class="w3-input" type="file" name="product_image" required="" style="width: 200px; height: 200px; float: left;margin-bottom: 5px;"/>
            </p>
        <div>
            <button type="submit">Save Product</button>
            <button type="submit"><a href="adminpage.php" style="text-decoration:none;">Back</a></button>
        </div>
    </section>
    </form>
</body>
</html>