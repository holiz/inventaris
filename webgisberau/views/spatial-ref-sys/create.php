<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SpatialRefSys */

$this->title = 'Create Spatial Ref Sys';
$this->params['breadcrumbs'][] = ['label' => 'Spatial Ref Sys', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spatial-ref-sys-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
