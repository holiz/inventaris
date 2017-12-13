<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SpatialRefSys */

$this->title = 'Update Spatial Ref Sys: ' . $model->srid;
$this->params['breadcrumbs'][] = ['label' => 'Spatial Ref Sys', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->srid, 'url' => ['view', 'id' => $model->srid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="spatial-ref-sys-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
