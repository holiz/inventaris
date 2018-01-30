<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\grid\GridView;
use yii\web\getAlias;
$this->title = 'Belajar';


?>
<div>

<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}

</style>
<table id="customers"
<tr>
    <th>
          <?php
        $nim = '0987654321';
        $nama = 'Nur Kholis';
        $umur = '23' ;
        $nilai ='80';
        $status = true;


        echo "NIM :" . $nim . "<br>"; 
        echo "NAMA :" . $nama. "<br>";
        print "Umur :" .$umur ."<br>";
        printf("Nilai : %.2f<br>", $nilai);
        if ($status) 
            echo "Status : Aktif";
        else
            echo "Status: Tidak Aktif";
        ?>

    </th>
    <th>
        <?php
        define('NAMA','Nur Kholis');
        define('NILAI', '90');
        echo 'Nama :' . NAMA;
        echo ' <br>Nilai :' . NILAI;
        ?>
    </th>
    <th>Pegawai</th>
    <th>Ruang</th>
</tr>
</table>



