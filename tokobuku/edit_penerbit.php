<?php
include 'koneksi.php';

// Memastikan bahwa parameter id_penerbit tersedia dan merupakan angka
if (isset($_GET['ID_Penerbit']) && is_numeric($_GET['ID_Penerbit'])) {
    // Mengambil ID penerbit dari parameter URL
    $id = $_GET['ID_Penerbit'];

    // Menyiapkan dan mengeksekusi query DELETE
    $query = "DELETE FROM tb_penerbit WHERE ID_Penerbit = '$id'";
    mysqli_query($koneksi, $query);

    // Mengalihkan ke halaman Penerbit.php setelah menghapus
    header("location: penerbit.php");
} else {
    // Menangani situasi jika parameter id_penerbit tidak tersedia atau tidak valid
    echo "Invalid request.";
}
?>