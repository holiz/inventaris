<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Mengajukan */

$this->title = $model->id_departemen;
$this->params['breadcrumbs'][] = ['label' => 'Mengajukans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mengajukan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_departemen], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_departemen], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_departemen',
            'id_depar',
            'id_barang',
            'id_pegawai',
            'approval',
            'tgl_approval',
            'jumlah_minta',
        ],
    ]) ?>

</div>
