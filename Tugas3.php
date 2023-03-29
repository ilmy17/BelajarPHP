<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>
<body>

<?php 
$m1 = ['NIM'=>'01111021', 'Nama'=>'nurul', 'Nilai'=>80];
$m2 = ['NIM'=>'01111022', 'Nama'=>'Ani', 'Nilai'=>70];
$m3 = ['NIM'=>'01111023', 'Nama'=>'ilmy', 'Nilai'=>50];
$m4 = ['NIM'=>'01111024', 'Nama'=>'Ari', 'Nilai'=>40];
$m5 = ['NIM'=>'01111025', 'Nama'=>'Alin', 'Nilai'=>90];
$m6 = ['NIM'=>'01111026', 'Nama'=>'Ain', 'Nilai'=>75];
$m7 = ['NIM'=>'01111027', 'Nama'=>'adi', 'Nilai'=>30];
$m8 = ['NIM'=>'01111028', 'Nama'=>'ani', 'Nilai'=>85];

$mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8];
$ar_judul = ['No','NIM','Nama','Nilai','Keterangan','Grade','Predikat'];

$jumlah_data = count($mahasiswa);
$jml_nilai = array_column($mahasiswa,'Nilai');
$rata_nilai = array_sum($jml_nilai);

$max_ni = max ($jml_nilai);
$min_ni = min ($jml_nilai);
$rata_ni = $rata_nilai / $jumlah_data;


$nilai = [
    'Jumlah Mahasiswa'=>$jumlah_data,
    'Nilai Tertingi'=>$max_ni,
    'Nilai Terendah'=>$min_ni,
    'Nilai Rata-rata'=>$rata_ni
]

?>

<table>
    <thead>

    <tr>
    <?php 
    foreach($ar_judul as $judul){
    ?>

        <th>
            <?= $judul ?>
        </th>

    <?php }?>
    </tr>
    
    </thead>
    <tbody>

    <?php
    $no = 1;
    foreach($mahasiswa as $mhs){

        $ket = ($mhs['Nilai']>= 60) ? 'Lulus' : 'Tidak Lulus';

        // GRADE
        if($mhs['Nilai'] >= 85 && $mhs['Nilai'] <= 100) $grade ='A';
        else if($mhs['Nilai'] >= 75 && $mhs['Nilai'] <= 80) $grade ='B';
        else if($mhs['Nilai'] >= 60 && $mhs['Nilai'] <= 74) $grade ='C';
        else if($mhs['Nilai'] >= 30 && $mhs['Nilai'] <= 59) $grade ='D';
        else if($mhs['Nilai'] >= 0 && $mhs['Nilai'] <= 29) $grade ='E';
        else $grade = '';

        // Predikat Nilai
        switch ($grade){
            case "A" : $predikat = "Memuaskan"; break;
            case "B" : $predikat = "Bagus"; break;
            case "C" : $predikat = "Cukup"; break;
            case "D" : $predikat = "Kurang"; break;
            case "E" : $predikat = "Buruk"; break;
            default: $predikat ="";
        }
    ?>

        <tr>
            <td><?= $no ?></td>
            <td><?= $mhs ['NIM'] ?></td>
            <td><?= $mhs ['Nama'] ?></td>
            <td><?= $mhs ['Nilai'] ?></td>
            <td><?= $ket ?></td>
            <td><?= $grade ?></td>
            <td><?= $predikat ?></td>
        </tr>

    <?php $no++; } ?>
    </tbody>

    <tfoot>
        <?php
        foreach($nilai as $ni => $hasil){
        ?>

        <tr>
            <td colspan="5"><?= $ni ?></td>
            <td colspan="2"><?= $hasil ?></td>
        </tr>
    </tfoot>
    
    <?php }?>
</table>
</body>
</html>


<style>
    body {
        background: boolval;
    }
    table,th,td {
        border-collapse: collapse;
        border: 1px solid;
        text-align: left;
        width: 500px;
    }

    thead {
        height: 30px;
    }

    tbody td {
        height: 20px;
    }
</style>