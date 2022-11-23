<!DOCTYPE html>
<html lang="en">
<head>
    <title>login</title>
    </head>
<body>
    <center>

    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo "login gagal! username dan password salah!";
        }else if($_GET['pesan'] == "logout"){
            echo"anda telah berhasil logout";
        }else if($_GET['pesan'] == "belum_login"){
            echo"anda harus login untuk mengakses halaman komputer";
    }
}
?>
<img src="foto.jpeg">
    <form method="POST" action="cek_login.php">
    <div>
        <div class="form">
        <h2 class="text-center">FORM LOGIN </h2></br>
	<table>
    <a class="action-btn" href="daftar.php">Daftar</a>
      <tr>
        <td>Username</td>
        <td>:</td>
        <td><input type="text" name="username" placeholder="masukkan username"></td>
      </tr>
      <tr>
        <td>Password</td>
        <td>:</td>
        <td><input type="password" name="password" placeholder="masukkan password"></td>
      </tr>
      <tr>
      <td></td>
        <td></td>
        <td><input class="action-btn" type="submit" value="LOGIN"></td>
      </tr>
    </table>
    </div>
    </div>
    </form>
</center>
</body>
</html>