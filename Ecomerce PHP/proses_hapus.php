<?php
include('koneksi.php');
if(isset($_GET['id'])){
$id = $_GET['id'];
$query = "DELETE FROM productdb where id = '$id'";
$result = mysqli_query($koneksi, $query);


if(!$result) {

    die("querry error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));

} else {

    echo "<script>alert('Data Deleted Successfully!');window.location='adminpage.php';</script>";

}
}