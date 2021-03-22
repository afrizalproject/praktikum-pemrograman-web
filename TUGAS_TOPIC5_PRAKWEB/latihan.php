<?php
$panjang = $_POST['panjang'];
$lebar = $_POST['lebar'];
$luas = $panjang * $lebar;
?>

<html>

<head>
    <title>Hasil</title>
</head>

<body>
    <table border="3px" cellspacing="0" cellpadding="5">
        <thead>
            <tr>
                <th>Panjang</th>
                <th>Lebar</th>
                <th>Luas</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $panjang ?></td>
                <td><?php echo $lebar ?></td>
                <td><?php echo $luas ?></td>
            </tr>
        </tbody>
    </table>
</body>

</html>