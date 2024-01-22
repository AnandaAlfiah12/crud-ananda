<?php 
include "koneksi.php"; 
// menangkap data yang di kirim dari form 
$id = $_POST["ID_Buku"]; 
$kategori = $_POST["Kategori"]; 
$nama_buku = $_POST["Nama_Buku"]; 
$harga = $_POST["Harga"];
$stok = $_POST["Stok"];
$penerbit = $_POST["Penerbit"]; 
 
// menginput data ke database 
$sql = "INSERT INTO tb_product (ID_Buku, Kategori, Nama_Buku, Harga, Stok, Penerbit) 
VALUES('$id','$Kategori','$Nama_Buku','$Harga','$Stok','$Penerbit')"; 
$query = mysqli_query($koneksi, $sql); 
// mengalihkan halaman kembali ke Beranda 
header("location:index.php");