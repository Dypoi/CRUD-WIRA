<?php
    include('koneksi.php');

    $id_produks = $_POST['id'];
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

        if(in_array($ektensi, $ektensi_diperbolehkan) === true){
            move_uploaded_file($file_tmp, 'Image/'.$nama_gambar_baru);

            $query = "UPDATE productdb SET product_name = '$nama_produk', deskripsi = '$deskripsi'
            ,purchase_price = $harga_beli, product_price = $harga_jual, product_image = '$nama_gambar_baru' WHERE id = $id_produks";
            $result = mysqli_query($koneksi, $query);

            if(!$result) {

                die("querry error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));

            } else {

                echo "<script>alert('Data changed successfully!');window.location='adminpage.php';</script>";

            }

        
    } else {

        echo "<script>alert('Image extension can only jpg and png!');window.location='edit.php'</script>";
    }

    } else {
        $query = "UPDATE productdb SET product_name = '$nama_produk', deskripsi = '$deskripsi'
        , purchase_price = $harga_beli, product_price = $harga_jual WHERE id = $id_produks";
        $result = mysqli_query($koneksi, $query);

        if(!$result) {

            die("querry error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));

        } else {

            echo "<script>alert('Data changed successfully!');window.location='adminpage.php';</script>";

        }
}
?>