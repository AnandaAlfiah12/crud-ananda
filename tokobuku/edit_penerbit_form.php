<?php 
// koneksi database 
include 'koneksi.php'; 

// menangkap data yang dikirim dari form 
$id = $_POST["ID_Penerbit"]; 
$nama = $_POST["Nama"]; 
$alamat = $_POST["Alamat"]; 
$kota = $_POST["Kota"];
$telepon = $_POST["Telepon"];

// update data ke database 
$query = "UPDATE tb_penerbit SET Nama='$Nama', Alamat='$Alamat', Kota='$Kota', Telepon='$Telepon' WHERE ID_Penerbit='$id'";
mysqli_query($koneksi, $query);

// mengalihkan halaman kembali ke Penerbit.php 
header("location:penerbit.php");
?>