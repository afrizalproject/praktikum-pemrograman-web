<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Data</title>
</head>
<body>
    <a href="formJadwal.php">[tambah]</a>
    <table border=1>
        <tr>
            <thead>
                <th>No.</th>
                <th>Mata Kuliah</th>
                <th>Hari</th>
                <th>Jam</th>
                <th>Ruangan</th>  
            </thead>
        </tr>
        <tr>
            <tbody>
                <?php
                    $no = 1;
                    include "koneksi.php";
                    $sql = "SELECT*FROM jadwal,matkul WHERE jadwal.id_matkul=matkul.id_matkul";
                    $b = $koneksi->query($sql);
                    while ($c=$b->fetch_array()) { ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $c['nm_matkul']?></td>
                            <td><?php echo $c['hari']?></td>
                            <td><?php echo $c['jam']?></td>
                            <td><?php echo $c['ruang']?></td>
                        </tr>
                    <?php
                    }
                ?>
            </tbody>
        </tr>
    </table>
</body>
</html>