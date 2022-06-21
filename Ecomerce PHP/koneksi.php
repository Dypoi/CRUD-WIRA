<?php
$koneksi = mysqli_connect 
			(
				"localhost",
				"root",
				"",
				"newdb"
			);
$conn = mysqli_connect
			(
				"localhost",
				"root",
				"",
				"user_db"
			);

if (mysqli_connect_errno())
	{
		echo "Koneksi Gagal"
		.mysqli_connect_error();
	}
?>
