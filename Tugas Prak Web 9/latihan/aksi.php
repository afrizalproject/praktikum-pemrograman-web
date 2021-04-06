<?php 
include "koneksi.php";
$nama = $_POST['nama'];
$sql = "insert into matkul (nm_matkul) values ('$nama')";
$a = $koneksi->query($sql);
    if ($a===true) {
        header('location: hasil.php');
    }else{
        echo "error";
    }
?>