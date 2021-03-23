<?php
$hasilPerhitungan=$_POST['hasil'];
// echo $hasilPerhitungan;
?>

<html>
    <head>
        <title>Hasil Proses</title>
        <style>
            body {
                background-color: sandybrown;
                color: white;
            }
        </style>
    </head>
    <body>
        <table align="center">
            <thead>
                <tr>
                    <th><?php echo $hasilPerhitungan; ?></th>
                </tr>
            </thead>
        </table>
    </body>
</html>