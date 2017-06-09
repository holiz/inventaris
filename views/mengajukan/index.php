<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MengajukanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mengajukans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mengajukan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mengajukan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_departemen',
            'depar.departemen',
            'barang.nama',
            'pegawai.nama',
            'approval',
            'tgl_approval',
            'jumlah_minta',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
