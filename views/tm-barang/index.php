<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TmBarangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tm Barang';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tm-barang-index">


    <p>
        <?= Html::a('Create Tm Barang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_tm_barang',
            'id_jenis',
            'nomor_barang',
            'barang_id_barang',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
