<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
</head>
<body>
<form action="proses_daftar.php" method="POST">
<div>
        <div class="form">
            <h2>Daftar Akun</h2>
            <form>
                <div class="inputBox">
                <h2><td>Username :</td></h2>
                    <input type="text" name="username" placeholder="username">
                </div>
                <div class="inputBox">
                <h2><td>Password :</td></h2>
                    <input type="password" name="password" placeholder="password">
                </div>
                <input class="action-btn" type="submit" value="daftar"><br>
                <h2><a href="index.php">Back</a></h2>
            </form>
        </div>
    </div>
</body>
</html>