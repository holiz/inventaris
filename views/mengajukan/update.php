<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mengajukan */

$this->title = 'Update Mengajukan: ' . $model->id_departemen;
$this->params['breadcrumbs'][] = ['label' => 'Mengajukans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_departemen, 'url' => ['view', 'id' => $model->id_departemen]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mengajukan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
