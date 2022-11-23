<html>
<head>
<body>
    <h1>Aplikasi Pendataan PC Lab RPL</h1>
    <form action="proses_tambah.php" method="POST">
        <fieldset>
            <p>
                <label for="nama_ruang">Nama Ruang :</label>
                <input type="text" name="nama_ruang" />
            </p>

            <p>Jenis_ruang :
                <label for="jenis_ruang"></label><br>
                <select name="jenis_ruang">
              <option value="labolatorium">labolatorium</option>
              <option value="kantin">kantin</option>
              <option value="aula">aula</option>
              <option value="mushola">mushola</option>
</select> 
            </p>
            <p>
                <label for="kondisi">kodisi :</label>
                <input type="text" name="kodisi" />
            </p>
            <p>
                <input type="submit" value="kirim" name="kirim_data" />
            </p>
        </fieldset>
        <h3><a href="komputer.php">Back</a></h3>
</form>
</body>
</html>