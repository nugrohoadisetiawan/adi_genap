<?php
include("koneksi.php");

if(isset($_POST['kirim_data'])){;
    $kode=$_POST['id'];
    $nama_ruang=$_POST['nama_ruang'];
    $jenis_ruang=$_POST['jenis_ruang'];
    $kondisi=$_POST['kondisi'];

$sql = "UPDATE tb_ruang SET nama_ruang='$nama_ruang' , jenis_ruang='$jenis_ruang' , kondisi='$kondisi' WHERE id=$kode";
$query= mysqli_query($db, $sql);
if($query){
    header('location:komputer.php');
}else{
    die ("gagal mengedit");
}}
else{
    die  ("akses dilarang");
}
?>