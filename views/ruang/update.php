<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ruang */

$this->title = 'Update Ruang: ' . $model->id_ruang;
$this->params['breadcrumbs'][] = ['label' => 'Ruangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_ruang, 'url' => ['view', 'id' => $model->id_ruang]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ruang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
