<?php 

// array indexed
$buah = array("nanas","apel","pisang");




// asosiatif array
$mobil = array(
    'nama1' => 'afrizal x jr',
    'nama2' => 'dayat',
    'nama3' => 'zaim',
);




// array multimdimensi
$mahasiswa=array(
    'nama'=>$mobil,
    'age'=>$buah,
);

// echo $mahasiswa['nama']['nama2'];

$mahasiswa1=array(
    'nama'=>'fofof',
    'age'=>23,
);

// echo $mahasiswa1['age'];
// foreach ($mahasiswa1 as $key => $value) {
//     echo $key ." = ". $value;
//     echo "<br>";
// }


$mahasiswa2=array(
    array(1,2,3),
    array(1,2,3),
    array(1,2,3),
    array(1,2,3),
);

// echo $mahasiswa2[0][2];
foreach ($mahasiswa2 as $key => $value) {
    echo $key."<br>";
    foreach ($value as $key => $value) {
        echo $key ." = ". $value."<br>";
    }
    echo "<br>";
}

                                                            $mahasiswa3=array(
                                                                'mhs1'=> array(
                                                                    'nama'=>'rizal',
                                                                    'hoby'=>'voly',
                                                                ),
                                                                'mhs2'=> array(
                                                                    'nama'=>'rizal',
                                                                    'hoby'=>'voly',
                                                                ),
                                                            );

                                                            foreach ($mahasiswa3 as $key => $value) {
                                                                echo $key."<br>";
                                                                foreach ($value as $key => $value) {
                                                                    echo $key ." = ". $value."<br>";
                                                                }
                                                                echo "<br>";
                                                            }



