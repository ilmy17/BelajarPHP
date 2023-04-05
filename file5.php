<?php

$nama = "ilmy";
$nilai = 30;

if($nilai >= 85 && $nilai <= 100) $grade = "A";
else if ($nilai >= 75 && $nilai <= 84) $grade ="B";
else if ($nilai >= 60 && $nilai <= 74) $grade ="C";
else if ($nilai >= 30 && $nilai <= 59) $grade ="D";
else if ($nilai >=0 && $nilai <= 29) $grade ="E";
else $grade = "";

switch ($grade) {
    case "A": $predikat = "Masukkan"; break;
    case "B": $predikat = "Masukkan"; break; 
    case "C": $predikat = "Masukkan"; break;
    case "D": $predikat = "Masukkan"; break;
    case "E": $predikat = "Masukkan"; break;
    default: $predikat="";
}
?>

Nama : <?= $nama ?>
<br> Nilai : <?= $nilai ?>
<br> $grade : <?= $grade ?>