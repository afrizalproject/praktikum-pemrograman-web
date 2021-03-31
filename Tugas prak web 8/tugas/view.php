<?php
include_once('koneksi.php');

$sql = "SELECT * FROM bukutamu";
$guests = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td{
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th{
            background-color: salmon;
            border: 1px solid #dddddd;
        }

    </style>
</head>

<body>
    <center>
        <h2>
            BUKU TAMU
        </h2>
        <table>
            <tr>
            <th>ID Buku Tamu</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Komentar</th>
            </tr>
            <?php
            if (mysqli_num_rows($guests)>0) {
                while($guest = mysqli_fetch_array($guests)){
                    echo "<tr>";
                        echo "<td>" . $guest['id_bukutamu'] . "</td>";
                        echo "<td>" . $guest['nama'] . "</td>";
                        echo "<td>" . $guest['email'] . "</td>";
                        echo "<td>" . $guest['komentar'] . "</td>";                    
                    echo "</tr>";
                }
            }            
            ?>
        </table>
    </center>
</body>

</html>