<?php 
require 'Pegawai.php';
$pegawai1 = new Pegawai('01111','ilmy','Manager','Islam','Menikah');
$ar_pegawai = [$pegawai1];

foreach($ar_pegawai as $pegawai){
    $pegawai->cetak();
}
?>