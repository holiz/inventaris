<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PinjamSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pinjams';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pinjam-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pinjam', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pinjam',
            'pegawai.nama',
            'barang.nama',
            'tgl_pinjam',
            'tgl_kembali',
            'nama_peminjam',
            'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
