<?php
include("koneksi.php");
if(isset($_POST['kirim_data'])){
    $kode=$_POST['id'];
    $nama_ruang=$_POST['nama_ruang'];
    $jenis_ruang=$_POST['jenis_ruang'];
    $kondisi=$_POST['kondisi'];

    $sql="INSERT INTO tb_ruang(id, nama_ruang, jenis_ruang, kondisi) VALUES ('$kode','$nama_ruang', '$jenis_ruang', '$kondisi')";
    $query=mysqli_query($db, $sql);

    if($query){
        header('location:komputer.php?status:sukses');
    }else{
        header('location:komputer.php?status:gagal'); 
    }
}
?>