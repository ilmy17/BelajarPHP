<?php 
require 'Pegawai.php';
$pegawai1 = new Pegawai('01111','<br>Andi','<br>Manager','<br>Islam','<br>Menikah');
$ar_pegawai = [$pegawai1];

foreach($ar_pegawai as $pegawai){
    $pegawai->cetak();
}
?>