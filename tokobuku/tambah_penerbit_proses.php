<?php 
include "koneksi.php"; 
// menangkap data yang di kirim dari form 
$id = $_POST["ID_Penerbit"]; 
$nama = $_POST["Nama"]; 
$alamat = $_POST["Alamat"]; 
$kota = $_POST["Kota"];
$telepon = $_POST["Telepon"];
 
// menginput data ke database 
$sql = "INSERT INTO tb_penerbit (ID_Penerbit, Nama, Alamat, Kota, Telepon) 
VALUES('$id','$nama','$alamat','$kota','$telepon')"; 
$query = mysqli_query($koneksi, $sql); 
// mengalihkan halaman kembali ke Beranda 
header("location:index.php");