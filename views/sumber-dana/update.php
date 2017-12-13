<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SumberDana */

$this->title = 'Update Sumber Dana: ' . $model->id_sumberdana;
$this->params['breadcrumbs'][] = ['label' => 'Sumber Danas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_sumberdana, 'url' => ['view', 'id' => $model->id_sumberdana]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sumber-dana-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
