<?php
require_once 'Abstract.php';

class Segitiga extends Bentuk2D {
    public $alas;
    public $tinggi;

    public function __construct($alas, $tinggi){
        $this-> alas = $alas;
        $this-> tinggi = $tinggi;
    }

    public function namaBidang(){
        echo '<table align="center">
        <tr>
            <td colspan="2" align="center"><b>SEGITIGA</b></td>
        </tr>
    
        <tr>
            <td>Diketahui :</td>
        </tr>
        <tr>
            <td>Alas</td>
            <td>: '.$this->alas.' cm</td>
        </tr>
        <tr>
            <td>Tinggi</td>
            <td>: '.$this->tinggi.' cm</td>
        </tr>
        <tr>
            <td colspan="2"><hr></td>
        </tr>
        <tr>
            <td>Maka Hasilnya :</td>
        </tr>';
    }

    public function luasBidang(){
        $luas = 0.5 * $this->alas * $this->tinggi;
        return $luas;
    }

    public function kelilingBidang(){
        $keliling = $this->alas * 3;
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