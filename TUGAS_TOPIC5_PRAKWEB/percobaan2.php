<html>

<head>
    <title>Pemrograman PHP dengan Array</title>
</head>

<body>
    <?php
    $nama[] = " Muhammad Afrizal Rizky Widyanto ";
    $nama[] = " Afrizal ";
    $nama[] = " Rizky ";
    echo $nama[1] . $nama[2] . $nama[0];
    echo "<br>";
    $jumlaharray = count($nama);
    echo "Jumlah Data Array: $jumlaharray";
    ?>
</body>

</html>