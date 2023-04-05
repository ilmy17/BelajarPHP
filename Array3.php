<?php 
$m1 = ['NIM'=>'888', 'nama'=>'Ilmy', 'nilai'=>80];
$m2 = ['NIM'=>'777', 'nama'=>'Ina', 'nilai'=>70];
$m3 = ['NIM'=>'666', 'nama'=>'Ila', 'nilai'=>50];
$m4 = ['NIM'=>'555', 'nama'=>'QIla', 'nilai'=>40];
$m5 = ['NIM'=>'444', 'nama'=>'Akam', 'nilai'=>90];
$m6 = ['NIM'=>'333', 'nama'=>'Alim', 'nilai'=>75];
$m7 = ['NIM'=>'222', 'nama'=>'Bila', 'nilai'=>30];
$m8 = ['NIM'=>'111', 'nama'=>'lisa', 'nilai'=>85];
$mahasiswa = [$m1,$m1,$m3,$m4,$m5,$m6,$m7,$m8];
$ar_judul = ['No','NIM','Nama','Nilai','Keterangan','Grade','Predikat']

?>
<table border="1px" width="100%" bgcolor="blue">
<thead>
    <tr>
    <?php 
    foreach($ar_judul as $judul){
        ?>
        <th><?= $judul ?></th>
        <?php }?>
    </tr>

</thead>
<tbody>
<?php
$no = 1;
foreach($mahasiswa as $mhs){
$ket = ($mhs['nilai']>= 60) ? 'Lulus' : 'Tidak lulus';
//grade 
if ($mhs['nilai'] >= 85 && $mhs['nilai'] <= 100) $grade = 'A';
else if ($mhs['nilai']>= 75 && $mhs['nilai'] < 80) $grade = 'B';
else if ($mhs['nilai']>= 60 && $mhs['nilai'] < 74) $grade = 'B';
else if ($mhs['nilai']>= 30 && $mhs['nilai'] < 59) $grade = 'B';
else if ($mhs['nilai']>= 0 && $mhs['nilai'] < 29) $grade = 'B';
else $grade = '';
    ?>
    <tr>
        <td><?= $no ?> </td>
        <td><?= $mhs['NIM']?></td>
        <td><?= $mhs['nama']?></td>
        <td><?= $mhs['nilai']?></td>
        <td><?= $ket ?></td>
</tr>
<?php $no++; } ?>
</tbody>