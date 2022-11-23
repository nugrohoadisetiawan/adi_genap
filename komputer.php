<?php
include("koneksi.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <?php
    session_start();
    if($_SESSION['status']!="login"){
        header("location:../index.php?pesan=belum_login");
    }
    ?>

                    <h2> selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h2>
                    <br>
                    <br>
                        <table border="1">
        <tr>
            <th>Id</th>
            <th>Nama Ruang</th>
            <th>Jenis Ruang</th>
            <th>Kondisi</th>
            
</tr>
                        <?php
   include("koneksi.php");
   $sql='SELECT * FROM tb_ruang';
   $query= mysqli_query($db, $sql);

   while($komputer=mysqli_fetch_array($query)){
    echo "<tr>";
               echo "<td>".$komputer['id']."</td>";
               echo "<td>".$komputer['nama_ruang']."</td>";
               echo "<td>".$komputer['jenis_ruang']."</td>";
               echo "<td>".$komputer['kondisi']."</td>";
               echo "<td>";
               echo "<a href='edit.php?id=".$komputer['id']."'>Edit</a> |";
               echo "<a href='hapus.php?id=".$komputer['id']."'>hapus</a>";
               echo "</td>";
    echo "</tr>";
   }
?>

</table>
<h4><a href="tambah.php" class="btn">Tambah</a></h4>  
<h2><a href="index.php">Logout</a></h2>
</body>
</html>