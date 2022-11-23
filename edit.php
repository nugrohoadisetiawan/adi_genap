<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header("location:komputer.php?");
}
   $kode=$_GET['id'];
   $sql="SELECT * FROM tb_ruang where id=$kode";
   $query= mysqli_query($db, $sql);
   $komputer= mysqli_fetch_assoc($query);

   if(mysqli_num_rows($query) < 1){
    die ("Data tidak ditemukan");
   }
   ?>

<html>
<head>
<body>
    <h1>From Edit</h1>
    <form action="proses_edit.php" method="POST">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $komputer['id']?>" />
            <p>
                <label for="nama_ruang">Nama Ruang :</label>
                <input type="text" name="nama_ruang" value="<?php echo $komputer['nama_ruang']?>" />
            </p>

            <p>Jenis ruang :
                <label for="jenis_ruang"></label><br>
                <select name="jenis_ruang">
              <option value="labolatorium">labolatorium</option>
              <option value="kantin">kantin</option>
              <option value="aula">aula</option>
              <option value="mushola">mushola</option>
</select> 
            </p>
            <p>
                <label for="kondisi">Kondisi :</label>
                <input type="text" name="kondisi" value="<?php echo $komputer['kondisi']?>" />
            </p>
            <p>
                <input type="submit" value="kirim" name="kirim_data" />
            </p>
        </fieldset>
        <h3><a href="komputer.php">Back</a></h3>
</form>
</body>
</html>