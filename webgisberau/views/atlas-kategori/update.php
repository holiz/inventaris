<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AtlasKategori */

$this->title = 'Update Atlas Kategori: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Atlas Kategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="atlas-kategori-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
