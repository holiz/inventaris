<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\JenisBarang */

$this->title = 'Update Jenis Barang: ' . $model->id_jenis;
$this->params['breadcrumbs'][] = ['label' => 'Jenis Barangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_jenis, 'url' => ['view', 'id' => $model->id_jenis]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jenis-barang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
