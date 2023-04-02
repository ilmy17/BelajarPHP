<?php
require_once 'Abstract.php';

class lingkaran extends Bentuk2D {
    public $jari2;
    
    public function __construct($jari2){
        $this-> jari2 = $jari2;
    }

    public function namaBidang(){
        echo '<table align="center">
        <tr>
            <td colspan="2" align="center"><b>LINGKARAN</b></td>
        </tr>
    
        <tr>
            <td>Diketahui :</td>
        </tr>
        <tr>
            <td>Jari-jari</td>
            <td>: '.$this->jari2.' cm</td>
        </tr>
        <tr>
            <td colspan="2"><hr></td>
        </tr>
        <tr>
            <td>Maka Hasilnya :</td>
        </tr>';
    }

    public function luasBidang(){
        $luas = 3.14 * $this->jari2 * $this->jari2;
        return $luas;
    }

    public function kelilingBidang(){
        $keliling = 2 * 3.14 * $this->jari2;
        return $keliling;
    }

    public function cetak(){
        echo '
        <tr>
            <td>Luas</td>
            <td> : '.$this->luasBidang().' cm²</td>
        </tr>
        <tr>
            <td>Keliling</td>
            <td> : '.$this->kelilingBidang().' cm</td>
        </tr>
        ';
        echo '</table><hr>'; 
    }
}
?>