<?php

require 'Gempa.php';
$g1 = new gempa('Banten',0.1);
$g2 = new gempa('Tokyo',2);
$g3 = new gempa('Tel aviv',4);
$g4 = new gempa('florida',6);

$ar_data = [$g1,$g2,$g3,$g4];

foreach ($ar_data as $d){
    $d->cetak();
}
?>