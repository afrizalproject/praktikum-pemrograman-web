<?php
  require('datamhs.php');

$nama = array_column($mahasiswa, 'nama');
array_multisort($nama, SORT_ASC, $mahasiswa);

?>
<style>
    table,
    th,
    td {
        padding: 10px;
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
<center>
    <table>
        <tr style="background-color: lightblue;">
            <th>Nama</th>
            <th>NRP</th>
        </tr>
        <?php
        echo "<h2>Nama Ascending</h2>";
        foreach ($mahasiswa as $m) {
            echo '<tr>';
            echo '<td>' . $m['nama'] . '</td>';
            echo '<td>' . $m['nrp'] . '</td>';
            echo '</tr>';
        }
        ?>
    </table>
    <?php
    $nrp = array_column($mahasiswa, 'nrp');
    array_multisort($nrp, SORT_DESC, $mahasiswa);
    ?>
    <table>
        <tr style="background-color: lightblue;">
            <th>Nama</th>
            <th>NRP</th>
        </tr>
        <?php
        echo "<h2>NRP Descending</h2>";
        foreach ($mahasiswa as $m) {
            echo '<tr>';
            echo '<td>' . $m['nama'] . '</td>';
            echo '<td>' . $m['nrp'] . '</td>';
            echo '</tr>';
        }
        ?>
    </table>
</center>