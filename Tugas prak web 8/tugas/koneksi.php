<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "db_akademik";

// Create connection
$conn= mysqli_connect($host,$username,$password,$dbname);
// Check connection
if (!$conn) {
  die("Koneksi Gagal: " . mysqli_connect_error());
}
echo "Koneksi Berhasil.";