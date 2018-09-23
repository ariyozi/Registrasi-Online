<?php 
include "../config.php"; 
if (isset($_POST['name'])&&$_POST['name']!="") {
	$name = trim($_POST['name']);
	$address = trim($_POST['address']);
	$phone = trim($_POST['phone']);
	if (mysqli_query($koneksi,"INSERT INTO registrasi (nama,alamat,phone) Values('$name','$address','$phone')")) {
		echo "success";
	}
}
?>