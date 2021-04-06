<html>
<head>
<title>Koneksi Database MySQL</title>
</head>
<body>

<h1>Demo Koneksi database MySQL<h1> 
<?php
    $host = "localhost";
    $username = "root";
    $password = "1234";
    $database = "db_akademik";
    $koneksi = mysqli_connect($host, $username, $password, $database);
if ($koneksi) {
    echo "OK";
} else {
    echo "Server not connected";
}
?>
</body>
</html>
