<?php
// bikin array mahasiswa
$mahasiswa = ["liza", "icha", "sandra", "riyan"];
// tampilin data pertama (liza)
echo $mahasiswa[0];
echo "<br>";
// tampilin semua data arry 
foreach ($mahasiswa as $mhs) {
    echo $mhs . "<br>";
}