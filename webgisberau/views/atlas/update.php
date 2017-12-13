<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Atlas */

$this->title = 'Update Atlas: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Atlas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="atlas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
