<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BarangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Barang';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barang-index">

 
    <p>
        <?= Html::a('Create Barang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],'id_barang',
            [  
                'attribute'=>'id_jenis',
                'value'=>'jenis.jenis_barang',
            ],
            [  
                'attribute'=>'id_sumberdana',
                'value'=>'sumberdana.sumber_dana',
            ],
            [  
                'attribute'=>'id_depar',
                'value'=>'depar.departemen',
            ],
            [  
                'attribute'=>'id_pegawai',
                'value'=>'pegawai.nama',
            ], 
            [  
                'attribute'=>'id_cp',
                'value'=>'cp.cara_perolehan',
            ], 
            [  
                'attribute'=>'id_tm_barang',
                'value'=>'tmBarang.nomor_barang',
            ], 
            
            'nama',
            'harga',
            'tgl_pembelian',
            'tgl_expired',
           [
           'attribute' => 'foto',
           'value' => function($model)
           {
            return Html::img('uploads/barang/'.$model->foto,['width'=>'70px']);
           },
           'format'=>'html'

           ],

            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
