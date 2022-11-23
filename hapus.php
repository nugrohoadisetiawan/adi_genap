<?php
include("koneksi.php");
isset($_GET['id']);
$kode = $_GET['id'];
$sql= "DELETE FROM tb_ruang where id=$kode";
$query = mysqli_query($db, $sql);

if($query){
    header("Location:komputer.php?status=sukses");
}else{
    die("akses dilarang");  
}
?>