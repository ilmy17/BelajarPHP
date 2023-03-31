<?php
require 'function_pegawai.php';
$manager = new pegawai('01111', 'ILMY', 'Manager', 'Islam', 'Menikah');
$asisten = new pegawai('02222', 'JIRA', 'Asisten Manager', 'Islam', 'Belum Menikah');
$keBag = new pegawai('03333', 'CACA', 'Kepala Bagian', 'Islam', 'Menikah');
$staff = new pegawai('04444', 'KESIA', 'Kepala Bagian', 'Islam', 'Menikah');
$staff2 = new pegawai('05555', 'NINA', 'Staff', 'Kristen', 'Menikah');

$ar_pegawai = [$manager, $asisten, $keBag, $staff, $staff2];

foreach ($ar_pegawai as $pegawai){
    $pegawai-> cetak();
}
?>