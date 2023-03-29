<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumus Bangun Datar</title>
</head>
<body>
    <h2> BANGUN DATAR JAJAR GENJANG </h2>

    <form method="POST">
        <table>
        <tr>
            <td> <h3> Rumus Mencari Luas</h3></td>
        </tr>
        <tr>
            <td> Alas </td>
        <td> 
            <input type="text" name="alas" require>
        </td>
        </tr>
        <tr>
            <td> Tinggi </td>
        <td> 
            <input type="text" name="tinggi" require>
        </td>
        </tr>
        <tr>
            <td> <input type="submit" name="submit" value="Hitung"></td>
        </tr>

        <tr>
            <td><h3> Rumus Mencari Keliling</h3></td>
        </tr>
        <tr>
            <td> Alas </td>
        <td> 
            <input type="text" name="alas1" require>
        </td>
        </tr>
        <tr>
            <td> Sisi Miring </td>
        <td> 
            <input type="text" name="sisimiring" require>
        </td>
        </tr>
        <tr>
            <td> <input type="submit" name="submit" value="Hitung"></td>
        </tr>

        
</body>
</html>

<?php
// Mencari Luas Jajar Genjang
if(isset($_POST['submit'])){
    $alas= $_POST['alas'];
    $tinggi = $_POST['tinggi'];

    $luas = $alas * $tinggi;
    echo '<hr><b> Hasil Luas Jajar Genjang </b>';
    echo '<br> Diketahui :';
    echo '<br> Alas : '.$alas .' cm';
    echo '<br> Tinggi : '.$tinggi .' cm';

    echo '<br> Maka Luasnya : ' .$luas .' cm²';
}

// Mencari Keliling Jajar Genjang
if(isset($_POST['keliling'])){
    $alas1= $_POST['alas'];
    $sisimiring = $_POST['sisimiring'];

    $sisimiring = 2 * ($alas1 + $sisimiring);
    echo '<hr><b> Hasil Keliling Jajar Genjang</b>';
    echo '<br> Diketahui :';
    echo '<br> Alas : '.$alas1 .' cm';
    echo '<br> Tinggi : '.$sisimiring .' cm';

    echo '<br> Maka Kelilingnya : ' .$keliling .' cm';
}
?>