<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\JenisBarang */

$this->title = 'Create Jenis Barang';
$this->params['breadcrumbs'][] = ['label' => 'Jenis Barangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenis-barang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
