<?php 

@include 'koneksi.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;1,300&family=Tiro+Kannada&display=swap" rel="stylesheet">
    <title>Product Data</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="CSS/admin.css">
</head>
<body>
    <div class="Container">
        <nav class="wrapper">
            <div class="brand">
                <div class="firstname">Product</div>
                <div class="lastname">Data</div>
            </div>
                <ul class="Navigation">
                    <li><a href="tambah.php" class="aedit">&nbsp;Add Produk</a></li>
                    <li><a href="logout.php" class="alogout">&nbsp;Log Out</a></li>
                </ul
        </nav>
    </div>
    <div class="w3-responsive">
    <table class="w3-table-all">
            <tr>
                <th>No</th>
                <th>Product</th>
                <th>Deskripsi</th>
                <th>Purchase Price</th>
                <th>Product Price</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            <?php
            $query="select 
                            id,
                            product_name,
                            deskripsi,
                            purchase_price,
                            product_price,
                            product_image
                            from productdb order by id desc";
                            
            $result=mysqli_query($koneksi, $query);

            if(!$result) {
                die("querry error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
            }
                $no =1;

                while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td style="text-align:center;"><?php echo $no; ?></td>
                <td><?php echo $row['product_name']; ?></td>
                <td><?php echo substr($row['deskripsi'], 0, 255); ?></td>
                <td>$ <?php echo number_format($row['purchase_price'], 0,',','.'); ?></td>
                <td>$ <?php echo number_format($row['product_price'], 0,',','.'); ?></td>
                <td><img src="Image/<?php echo $row['product_image']; ?>" style="width 50px; height:80px;float: left;margin-bottom: 5px;"></td>
                <td>
                    <div class="action">
                    <a class="atambah" href="edit.php?id=<?php echo $row['id']; ?>" style="margin-right:7,5px">Edit</a>
                    <a class="ahapus" href="proses_hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm
                    ('Anda yakin ingin menghapus data ini?')" style="margin-left: 7,5px;">Remove</a>
                    </div>
            </tr>
            <?php
                $no++;
                }
            ?>
        </tbody>
    </div>
</body>
</html>