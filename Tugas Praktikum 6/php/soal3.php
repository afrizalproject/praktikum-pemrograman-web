
   <?php


        function cekMahasiswa($nrp){
            require('datamhs.php');
            $nama=array_column($mahasiswa, 'nama');
            array_multisort($nama, SORT_ASC, $mahasiswa);
            $keys = array_keys($mahasiswa);
            $found_key=array_search($nrp, array_column($mahasiswa, 'nrp'));
            $namaMhs="";
            for ($i=0; $i < count($mahasiswa); $i++) { 
                if ($found_key == $i) {
                    if ($mahasiswa[$keys[$i]]['statusKeatifanDiHimit'] =='aktif' && 
                         $mahasiswa[$keys[$i]]['dosen_wali'] =='Desy Intan Permatasari' &&
                         $mahasiswa[$keys[$i]]['nilaiMatkulKonsepPemrograman'] =='A' &&
                         $mahasiswa[$keys[$i]]['kelas'] =='D4-A dan D4-B') {
                        $namaMhs = $mahasiswa[$keys[$i]]['nama'].
                        " adalah mahasiswa kelas ".$mahasiswa[$keys[$i]]['kelas'].
                        " yang aktif di HIMTIF";
                    }
                    
                    else{
                            $namaMhs = $mahasiswa[$keys[$i]]['nama'].
                            " adalah mahasiswa kelas ".$mahasiswa[$keys[$i]]['kelas'].
                            " yang tidak aktif di HIMTIF";
                }
            }
           
        }
        return $namaMhs;
    }

    echo cekMahasiswa(1);
   
   ?>   