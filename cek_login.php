<?php
session_start();
include 'koneksi.php';
    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = mysqli_query($db,"SELECT * FROM tb_user WHERE username='$username' AND password='$password'");

    $cek = mysqli_num_rows($data);

    if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:komputer.php");
    }else{
        header("location:index.php?pesan=gagal");
    }
    ?>