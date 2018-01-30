<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MengajukanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mengajukan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mengajukan-index">


    <p>
        <?= Html::a('Create Mengajukan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_departemen',
            [  
                'attribute'=>'id_depar',
                'value'=>'depar.departemen',
            ],
            [  
                'attribute'=>'id_pegawai',
                'value'=>'pegawai.nama',
            ], 
            [
            'attribute'=>'id_barang',
            'value'=>'barang.nama'
            ],
            'approval',
            'tgl_approval',
            'jumlah_minta',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
