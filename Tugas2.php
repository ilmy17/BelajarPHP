<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENENTUKAN GAJI POKOK PEGAWAI</title>
</head>
<body>
    <form method="post">
        <table>
            <tr>
                <td>Jabatan</td>
                <td>
                    <select name="jabatan">
                        <option value: disabled Value: selected>Pilih</option>
                        <option value="Manager">Manager</option>
                        <option value="Asisten">Asisten Manager</option>
                        <option value="Staff">Staff</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>
                    <select name="agama">
                        <option value: disabled Value: selected>Pilih</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Status</td>
                <td>
                    <select name="status">
                    <option value: disabled Value: selected>Pilih</option>
                        <option value="Sudah Menikah">Sudah Menikah</option>
                        <option value="Belum Menikah">Belum Menikah</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jumlah Anak</td>
                <td><input type="number" name="anak" placeholder="Masukkan Jumlah Anak"></td>
            </tr>
            <tr>
                <td>
                    <button name="proses" type="submit">Save</button>
                </td>
            </tr>
        </table>
    </form>

    <?php 

    error_reporting(0);

    // Gaji Perjabatan
    $manager = 20000000;
    $asisten = 15000000;
    // kepala Bagian
    $kebag = 10000000;
    $staff = 4000000;

    $jabatan = $_POST ['jabatan'];
    $agama = $_POST ['agama'];
    $status = $_POST ['status'];
    $anak = $_POST ['anak'];
    $tombol = $_POST ['proses'];

    // Gaji Jabatan
    switch ($jabatan){
        case "Manager" : $gaji = $manager; break;
        case "Asisten" : $gaji = $asisten; break;
        case "Staff" : $gaji = $staff; break;
        default: $gaji ="";
    }
    // Tunjangan Anak
    if($anak >= 1 && $anak <= 2 && $status == "Sudah Menikah") $tun_kel = $gaji * 0.05;
    else if ($anak >= 3 && $anak  <= 5 && $status == "Sudah Menikah") $tun_kel = $gaji * 0.1 ;
    else $tun_kel = "0";
    // Tunjangan Jabatan
    switch ($jabatan){
        case "Manager" : $tunjangan = $manager * 0.2; break;
        case "Asisten" : $tunjangan = $asisten * 0.2; break;
        case "Staff" : $tunjangan = $staff * 0.2; break;
        default: $tunjangan ="";
    }
    // Gaji Kotor
    $gajiKotor = $gaji + $tunjangan + $tun_kel;

     // Menentukan Zakat
     $zakat = ($agama == 'Islam' && $gajiKotor >= 6000000 ) ? $gajiKotor * 0.025 : 0 ;

    // Take Home
    $take_home = ($gaji + $tunjangan + $tun_kel) - $zakat;

    if(isset($tombol)){
    ?>
<br>
<table>
    <tr>
        <td>Jabatan</td>
        <td> : <?= $jabatan ?></td>
    </tr>
    <tr>
        <td>Agama</td>
        <td> : <?= $agama ?></td>
    </tr>
    <tr>
        <td>Gaji</td>
        <td> : Rp. <?= number_format($gaji, 0, '', '.') ?></td>
    </tr>
    <tr>
        <td>Tunjangan Jabatan (20%)</td>
        <td> : Rp. <?= number_format($tunjangan, 0, '', '.') ?></td>
    </tr>
    <tr>
        <td>Status Nikah</td>
        <td> : <?= $status ?></td>
    </tr>
    <tr>
        <td>Jumlah Anak</td>
        <td> : <?= $anak ?></td>
    </tr>
    <tr>
        <td>Tunjangan Keluarga</td>
        <td> : Rp. <?= number_format($tun_kel, 0, '', '.') ?></td>
    </tr>
    <tr>
        <td>Gaji Kotor</td>
        <td> : Rp. <?= number_format($gajiKotor, 0, '', '.') ?></td>
    </tr>
    <tr>
        <td>Bayar Zakat (2,5%)</td>
        <td> : Rp. <?= number_format($zakat, 0, '', '.') ?></td>
    </tr>
    <tr>
        <td>Uang Bawa Pulang</td>
        <td><b> : Rp. <?= number_format($take_home, 0, '', '.') ?> <b></td>
    </tr>
</table>

    <?php } ?>
</body>
</html>