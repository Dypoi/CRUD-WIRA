<?php
    include('koneksi.php');

    $nama_produk = $_POST['product_name'];
    $deskripsi = $_POST['deskripsi'];
    $harga_beli = $_POST['purchase_price'];
    $harga_jual = $_POST['product_price'];
    $gambar_produk = $_FILES['product_image']['name'];
    
    if($gambar_produk != "") {
        $ektensi_diperbolehkan = array('png', 'jpg','jpeg');
        $x = explode('.', $gambar_produk);
        $ektensi = strtolower(end($x));
        $file_tmp = $_FILES['product_image']['tmp_name'];
        $angka_acak = rand(1, 999);
        $nama_gambar_baru = $angka_acak.'-'.$gambar_produk;
        $path = "Image/";
        if(in_array($ektensi, $ektensi_diperbolehkan) === true){
            move_uploaded_file($file_tmp, 'Image/'.$nama_gambar_baru);

            $query = "INSERT INTO productdb (product_name, deskripsi, purchase_price, product_price, product_image)
                values ('$nama_produk','$deskripsi','$harga_beli','$harga_jual','$nama_gambar_baru')";
            $result = mysqli_query($koneksi, $query);

            if(!$result) {

                die("Query error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));

            } else {

                echo "<script>alert('Data added successfully!');window.location='adminpage.php';</script>";

            }

        
    } else {

        echo "<script>alert('Image extension can only jpg and png!');window.location='tambah.php'</script>";
    }

    } else {

        $query = "INSERT INTO productdb (product_name, deskripsi, purchase_price, product_price, product_image)
            values ('$nama_produk','$deskripsi','$harga_beli','$harga_jual','$nama_gambar_baru')";
        $result = mysqli_query($koneksi, $query);

    if(!$result) {

        die("Query error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));

    } else {

        echo "<script>alert('Data added successfully!');window.location='adminpage.php';</script>";
    }
}
?>