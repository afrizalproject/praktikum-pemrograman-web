<?php
require('array.php')
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
        <tr>
            <th>NRP</th>
            <th>Nama</th>
            <th>Tinggi Badan</th>
            <th>Berat Badan</th>
            <th>IPK</th>
            <th>Rambut</th>
            <th>Status</th>
        </tr>
        <?php
        echo "<h2>Condition Loop</h2>";
        $table_set;
        foreach ($mahasiswa as $m) {
            $table_set = "<tr>"
                . "<td>" . $m['nrp'] . "</td>"
                . "<td>" . $m['nama'] . "</td>"
                . "<td>" . $m['tb'] . "</td>"
                . "<td>" . $m['bb'] . "</td>"
                . "<td>" . $m['ipk'] . "</td>"
                . "<td>" . $m['rambut'] . "</td>"
                . "<td>" . $m['status'] . "</td>"
                . "</tr>";
            if ($m['ipk'] >= 3.0 && $m['ipk'] <= 3.25) {
                echo $table_set;
            } else if ($m['rambut'] == "hitam lurus") {
                echo $table_set;
            } else if ($m['bb'] == "50 kg" && $m['tb'] == "160 cm") {
                echo $table_set;
            } else if ($m['status'] == "active") {
                echo $table_set;
            }
        }
        // foreach ($mahasiswa as $m) {
        //     $table_set = "<tr>"
        //         . "<td>" . $m['nrp'] . "</td>"
        //         . "<td>" . $m['nama'] . "</td>"
        //         . "<td>" . $m['tb'] . "</td>"
        //         . "<td>" . $m['bb'] . "</td>"
        //         . "<td>" . $m['ipk'] . "</td>"
        //         . "<td>" . $m['rambut'] . "</td>"
        //         . "<td>" . $m['status'] . "</td>"
        //         . "</tr>";

        //     //NRP 1-5
        //     if ($m['nrp'] >= 1 && $m['nrp'] <= 5) {
        //         if ($m['ipk'] >= 3.0 && $m['ipk'] <= 3.25) {
        //             echo $table_set;
        //         } else if ($m['rambut'] == "hitam lurus") {
        //             echo $table_set;
        //         } else if ($m['bb'] == "50 kg" && $m['tb'] == "160 cm") {
        //             echo $table_set;
        //         } else if ($m['status'] == "active") {
        //             echo $table_set;
        //         }
        //     }
        //     //NRP 6-10
        //     if ($m['nrp'] >= 6 && $m['nrp'] <= 10) {
        //         switch ($m) {
        //             case $m['ipk'] >= 3.0 && $m['ipk'] <= 3.25:
        //                 echo $table_set;
        //                 break;
        //             case $m['rambut'] == "hitam lurus":
        //                 echo $table_set;
        //                 break;
        //             case $m['bb'] == "50 kg" && $m['tb'] == "160 cm":
        //                 echo $table_set;
        //                 break;
        //             case $m['status'] == "active":
        //                 echo $table_set;
        //                 break;
        //         }
        //     }
        //     if ($m['nrp'] == 11) {
        //         break;
        //     }
        // }
        // // NRP 11-15
        // $d = 11;
        // do {
        //     if ($mahasiswa[$d]['nrp'] >= 11 && $mahasiswa[$d]['nrp'] <= 15) {
        //         $table_set = "<tr>"
        //         . "<td>" . $mahasiswa[$d]['nrp'] . "</td>"
        //         . "<td>" . $mahasiswa[$d]['nama'] . "</td>"
        //         . "<td>" . $mahasiswa[$d]['tb'] . "</td>"
        //         . "<td>" . $mahasiswa[$d]['bb'] . "</td>"
        //         . "<td>" . $mahasiswa[$d]['ipk'] . "</td>"
        //         . "<td>" . $mahasiswa[$d]['rambut'] . "</td>"
        //         . "<td>" . $mahasiswa[$d]['status'] . "</td>"
        //         . "</tr>"; 
        //         if ($mahasiswa[$d]['ipk'] >= 3.0 && $mahasiswa[$d]['ipk'] <= 3.25) {
        //             echo $table_set;
        //         }
        //         else if ($mahasiswa[$d]['rambut'] == "hitam lurus") {
        //             echo $table_set;
        //         }
        //         else if ($mahasiswa[$d]['bb'] == "50 kg" && $mahasiswa[$d]['tb'] == "160 cm") {
        //             echo $table_set;
        //         }
        //         else if ($mahasiswa[$d]['status'] == "active") {
        //             echo $table_set;
        //         }
        //     }
        //     $d++;
        // } while ($d <= 15);
        // //NRP 16-20
        // //NRP 6-10
        ?>
    </table>

</center>