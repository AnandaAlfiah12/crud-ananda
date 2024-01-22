<?php 
// koneksi database 
include 'koneksi.php'; 
// menangkap data yang di kirim dari form 
$id = $_POST["ID_Buku"]; 
$kategori = $_POST["Kategori"]; 
$nama_buku = $_POST["Nama_Buku"]; 
$harga = $_POST["Harga"];
$stok = $_POST["Stok"];
$penerbit = $_POST["Penerbit"]; 
// update data ke database 
mysqli_query($koneksi,"update tb_product set Kategori='$Kategori', Nama_Buku='$Nama_Buku', Harga='$Harga', 
Stok='$Stok', Penerbit='$Penerbit' where ID_Buku='$id'"); 
 
// mengalihkan halaman kembali ke index.php 
header("location:Admin.php");
 
?>