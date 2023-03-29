<?php

echo 'Dokumen PHP Saya Ada di' .$_SERVER['DOCUMENT_ROOT'];
echo '<br> Nama File'.$_SERVER['SCRIPT_FILENAME'];
echo 'Hallo World';
//ini pemanggilan PHP

//Belajar Variable
$namaSiswa = "Ilmy";
$umur = 20;
$berat_badan = 40;
$_pekerjaan = "Mahasiswa";
$tes ="coba";

echo '<hr>';
echo 'Nama Siswa :' .$namaSiswa;
echo '<br> Umur :' .$umur;
echo '<br> Berat Badan :' .$berat_badan;
echo '<br> Pekerjaan :' .$_pekerjaan;
?>
<!-- Ini adalah Pemanggilan Dengan Menggunakan Document HTML-->
<hr>
Nama Siswa : <?= $namaSiswa ?>
<br> Umur : <?= $umur ?>
<br> Berat Badan : <?= $berat_badan?>
<br> Pekerjaan : <?= $_pekerjaan?>


