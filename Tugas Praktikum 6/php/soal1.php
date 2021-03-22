<?php 
  require('datamhs.php');

        echo "<b>Cara dengan if-else kombinasi dengan for-loop</b>";
        echo "<br>";
        foreach ($mahasiswa as $mhs => $value) {
              for ($i=0; $i < 1; $i++) { 
                if ($mahasiswa [$mhs]['ipk'] > 3.00 && $mahasiswa [$mhs]['ipk'] < 3.25 
                && $mahasiswa [$mhs]['rambut']== "hitam dan lurus" && $mahasiswa [$mhs]['berat'] == 50
                && $mahasiswa [$mhs]['tinggi'] == 160 && $mahasiswa [$mhs]['ket'] == "tidak cuti") {
                    echo "Nama: ". $mahasiswa[$mhs]['nama'].", NRP: ". $mahasiswa[$mhs]['nrp'];
                    echo "<br>";
                }      
            }
        }

        echo "<hr>";

        echo "<b>Cara dengan switch-case</b>";
        echo "<br>";
        foreach ($mahasiswa as $mhs => $value) {
            switch ($mahasiswa[$mhs]) {
                case ($mahasiswa [$mhs]['ipk'] > 3.00 && $mahasiswa [$mhs]['ipk'] < 3.25 
                && $mahasiswa [$mhs]['rambut']== "hitam dan lurus" && $mahasiswa [$mhs]['berat'] == 50
                && $mahasiswa [$mhs]['tinggi'] == 160 && $mahasiswa [$mhs]['ket'] == "tidak cuti"):
                    echo "Nama: ". $mahasiswa[$mhs]['nama'].", NRP: ". $mahasiswa[$mhs]['nrp'];
                    echo "<br>";
                break;     
            }
        }

        echo "<hr>";

        echo "<b>Cara dengan while</b>";
        echo "<br>";
        foreach ($mahasiswa as $mhs => $value) {

            $kondisi = ($mahasiswa [$mhs]['ipk'] > 3.00 && $mahasiswa [$mhs]['ipk'] < 3.25 
            && $mahasiswa [$mhs]['rambut']== "hitam dan lurus" && $mahasiswa [$mhs]['berat'] == 50
            && $mahasiswa [$mhs]['tinggi'] == 160 && $mahasiswa [$mhs]['ket'] == "tidak cuti");

           while($kondisi){
            echo "Nama: ". $mahasiswa[$mhs]['nama'].", NRP: ". $mahasiswa[$mhs]['nrp'];
            echo "<br>";
            $kondisi=false;
           }
        }

        
        echo "<hr>";

        echo "<b>Cara dengan do-while</b>";
        echo "<br>";
        foreach ($mahasiswa as $mhs => $value) {

            $kondisi = ($mahasiswa [$mhs]['ipk'] > 3.00 && $mahasiswa [$mhs]['ipk'] < 3.25 
            && $mahasiswa [$mhs]['rambut']== "hitam dan lurus" && $mahasiswa [$mhs]['berat'] == 50
            && $mahasiswa [$mhs]['tinggi'] == 160 && $mahasiswa [$mhs]['ket'] == "tidak cuti");

            do {
                echo "Nama: ". $mahasiswa[$mhs]['nama'].", NRP: ". $mahasiswa[$mhs]['nrp'];
                echo "<br>";
                $kondisi=false;

            } while ($kondisi);
        }
?>