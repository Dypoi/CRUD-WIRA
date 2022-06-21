<?php

@include 'koneksi.php';

session_start();

if(!isset($_SESSION['customer_name'])){
   header('location:login.php');
}

if(isset($_POST['id'])){
	$id_customer = $_POST['id'];
   
	$result = mysqli_query($conn, "SELECT * FROM user_form where id = '$id_customer'");
	if(!$result) {
		die("Query Error :".mysqli_errno($conn)."-".mysqli_error($conn));
	}
	$data = mysqli_fetch_array($result);
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
    <link rel="stylesheet" href="style.css">
    <!-- w3 school -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Profile</title>
</head>
<body>
<?php
 include"koneksi.php";

 ?>
 <?php require_once('menu.php') ?>
 
<form action="customer.php" method="$_POST">
	<div class="row">
		<div class="col-md-12 col-md-offset-2 mt-5"> 
			<p>
				<center>
					<h1>Detail </h1><hr>
				</center>
			</p>
			<br>
			<div class="px-5 margin-left-10" style = "margin-left:200px; margin-right:200px;">
				<table class="table table-stripped ml-5">
					<tr>
						<td class="">
							Name
							
						</td>
						<td>
							: <?php echo $_SESSION['customer_name']; ?>
							 
						</td>
					</tr>
					<tr>
						<td>
							Email
						</td>
						<td>
							: <?php echo $_SESSION['email']; ?>
						</td>
					</tr>
					<tr>					
						<td>
							Address
							
						</td>
						<td>
							: <?php echo $_SESSION['address']; ?>
						</td>
					</tr>
					<tr>		
						<td>
							Number Phone
						</td>
						<td>
							: <?php echo $_SESSION['phone']; ?>
						</td>
					</tr>
					
					
				</table>
				<div class="py-3">
				<p>
					<a class="btn btn-outline-success px-5 mx-5" href="product.php">Kembali</a>
				</p>
				<div class="">
				<p>
					<a class="btn btn-outline-danger px-5" href="logout.php">Log Out</a>
				</p>
				</div>
			</div>
		</div>
	</div>
</form>
</body>
</html>

