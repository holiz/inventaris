<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PinjamSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pinjam';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pinjam-index">


    <p>
        <?= Html::a('Create Pinjam', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pinjam',
            [ 
            'attribute'=>'id_pegawai',
            'value'=>'pegawai.nama'
            ],
            [
            'attribute'=>'id_barang',
            'value'=>'barang.nama'
            ],

            'tgl_pinjam',
            'tgl_kembali',
            'nama_peminjam',
            'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
