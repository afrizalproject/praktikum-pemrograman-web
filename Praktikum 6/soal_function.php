<?php
require('array.php');
?>
   <?php
        function cekMahasiswa($nrp){
            global $mahasiswa;
            $key = array_search($nrp,array_column($mahasiswa,'nrp'));
            $m = $mahasiswa[$key];
                if ($m['status'] == "active") {
                    echo $m['nama']." Adalah Mahasiswa yang tergabung di kelas ".$m['kelas']." yang aktif di HIMIT";   
                }else{
                    echo $m['nama']." Adalah Mahasiswa yang tergabung di kelas ".$m['kelas']." tapi tidak aktif di HIMIT";   
                }
            return $m['nama'];

        }

        cekMahasiswa(12);
   ?>   