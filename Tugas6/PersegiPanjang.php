<?php
require_once 'Abstract.php';

class PerPan extends Bentuk2D {
    public $panjang;
    public $lebar;

    public function __construct($panjang, $lebar){
        $this-> panjang = $panjang;
        $this-> lebar = $lebar;
    }

    public function namaBidang(){
        echo '<table align="center">
        <tr>
            <td colspan="2" align="center"><b>PERSEGI PANJANG</b></td>
        </tr>
    
        <tr>
            <td>Diketahui :</td>
        </tr>
        <tr>
            <td>Panjang</td>
            <td>: '.$this->panjang.' cm</td>
        </tr>
        <tr>
            <td>Lebar</td>
            <td>: '.$this->lebar.' cm</td>
        </tr>
        <tr>
            <td colspan="2"><hr></td>
        </tr>
        <tr>
            <td>Maka Hasilnya :</td>
        </tr>';
    }

    public function luasBidang(){
        $luas = $this->panjang * $this->lebar;
        return $luas;
    }

    public function kelilingBidang(){
        $kelBi = 2 * ($this->panjang + $this->lebar);
        return $kelBi;
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