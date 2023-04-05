<?php
require_once 'Lingkaran.php';
require_once 'PersegiPanjang.php';
require_once 'Segitiga.php';

$b1 = new Lingkaran (10);
$b2 = new PerPan (20,15);
$b3 = new Segitiga (30,40);

$ar_data = [$b1, $b2, $b3];

foreach ($ar_data as $data){
    $data-> namaBidang();
    $data-> cetak();
}
?>