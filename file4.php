<?php
$nama = "arip";
$totalBelanja = 300000;
$keterangan = "";

if($totalBelanja > 100000){
    $keterangan = "Selamat $nama Anda Mendapatkan Hadiah";
} else {
    $keterangan = "Terimakasih $nama Sudah Berbelanja";
}
?>

Nama Pelanggan : <?= $nama ?>
<br> Total Belanja : <?= $totalBelanja ?>
<br> Keterangan : <?= $keterangan ?>