<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data</title>
    <style>
        footer {
        background-color: #000;
        color: white;
        text-align: center;
        padding: 10px;
        position: fixed;
        width: 100%;
        bottom: 0;
        }
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            margin-bottom: 50px;
        }
        nav {
            background-color: #C560D2;
            overflow: hidden;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
        }
        nav a {
            color: white;
            text-align: center;
            text-decoration: none;
            padding: 10px;
            margin: 0 5px;
        }
        nav a:hover {
            background-color: #ddd;
            color: black;
        }
        fieldset {
            width: 80%;
            margin: auto;
            margin-top: 20px;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        #JaeBook {
            font-size: 40px; 
            font-family: 'Arial', sans-serif; 
            color: white;
        }
    </style>
</head>
<body>
    <nav>
        <div id="JaeBook">JaeBook</div>
        <div>
            <a href="index.php">Home</a>
            <a href="penerbit.php">Pengadaan</a>
            <a href="admin.php">Admin</a>
        </div>
    </nav>
    <fieldset>
    <center>
        <h1>Selamat Datang Di JaeBook</h1>
    </center>
    <form method="GET" action="index.php" style="text-align: center;">
        <label>Cari Buku :</label>
        <input type="text" name="kata_cari" value="<?php echo isset($_GET['kata_cari']) ? $_GET['kata_cari'] : ''; ?>" />
        <button type="submit">Cari</button>
    </form>
    <br>
    <table border="2">
        <thead>
            <tr>
                <th>ID Buku</th>
                <th>Kategori</th>
                <th>Nama Buku</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Penerbit</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // untuk me-include kan koneksi
            include 'koneksi.php';

            // jika kita klik cari, maka yang tampil query cari ini
            if(isset($_GET['kata_cari'])) {
                // menampung variabel kata_cari dari form pencarian
                $kata_cari = $_GET['kata_cari'];

                $query = "SELECT * FROM tb_product WHERE ID_Buku LIKE '%".$kata_cari."%' OR Nama_Buku LIKE '%".$kata_cari."%' ORDER BY ID_Buku ASC";
            } else {
                // jika tidak ada pencarian, default yang dijalankan query ini
                $query = "SELECT * FROM tb_product ORDER BY ID_Buku ASC";
            }

            $result = mysqli_query($koneksi, $query);
            if(!$result) {
                die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
            }
            // kalau ini melakukan foreach atau perulangan
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $row['ID_Buku']; ?></td>
                <td><?php echo $row['Kategori']; ?></td>
                <td><?php echo $row['Nama_Buku']; ?></td>
                <td><?php echo $row['Harga']; ?></td>
                <td><?php echo $row['Stok']; ?></td>
                <td><?php echo $row['Penerbit']; ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</fieldset>
</body>
</html>