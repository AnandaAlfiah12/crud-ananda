<!DOCTYPE html> 
<html> 
<head> 
    <title>Edit Data</title> 
    <style> 
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
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
            width: 400px; 
            margin:auto; 
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
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
            <a href="admin.php">Kembali</a>
        </div>
    </nav>
    <fieldset> 
        <!-- Judul pada fieldset--> 
        <legend align="center">Edit Data Buku</legend> 
        <h3>Edit Data</h3> 
        <?php 
        include "koneksi.php"; 
        $id = $_GET['ID_Buku']; 
        $edit = mysqli_query($koneksi,"SELECT * FROM tb_product WHERE ID_Buku='$id'");
        while ($row = mysqli_fetch_array($edit)) { 
        ?>
        <form method="post" action="edit_proses.php"> 
            <table>
                <tr> 
                    <td>ID Buku</td> 
                    <td>
                        <input type="text" name="ID_Buku" value="<?php echo $row['ID_Buku']; ?>"> 
                    </td> 
                </tr>

                <tr> 
                    <td>Kategori</td> 
                    <td> 
                        <input type="text" name="Kategori" value="<?php echo $row['Kategori']; ?>"> 
                    </td> 
                </tr>

                <tr> 
                    <td>Nama Buku</td> 
                    <td> 
                        <input type="text" name="Nama_Buku" value="<?php echo $row['Nama_Buku']; ?>"> 
                    </td> 
                </tr>

                <tr>
                    <td>Harga</td> 
                    <td> 
                        <input type="text" name="Harga" value="<?php echo $row['Harga']; ?>"> 
                    </td> 
                </tr>

                <tr>
                    <td>Stok</td> 
                    <td> 
                        <input type="text" name="Stok" value="<?php echo $row['Stok']; ?>"> 
                    </td> 
                </tr>

                <tr>
                    <td>Penerbit</td> 
                    <td> 
                        <input type="text" name="Penerbit" value="<?php echo $row['Penerbit']; ?>"> 
                    </td> 
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" value="SIMPAN">
                    </td> 
                </tr> 
            </table> 
        </form> 
        <?php 
        } 
        ?> 
    </fieldset> 
</body> 
</html>