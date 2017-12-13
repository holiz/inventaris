<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CaraPerolehan */

$this->title = 'Update Cara Perolehan: ' . $model->id_cp;
$this->params['breadcrumbs'][] = ['label' => 'Cara Perolehans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_cp, 'url' => ['view', 'id' => $model->id_cp]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cara-perolehan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
