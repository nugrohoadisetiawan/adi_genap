<?php
include("koneksi.php");
if(isset($_POST['Daftar'])){
    $kode=$_POST['id'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="INSERT INTO tb_user(id, username, password) VALUES ('$kode','$username', '$password')";
    $query=mysqli_query($db, $sql);

    if($query){
        header('location:index.php?status:sukses');
    }else{
        header('location:index.php?status:gagal'); 
    }
}
?>