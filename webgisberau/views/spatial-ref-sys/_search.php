<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SpatialRefSysSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="spatial-ref-sys-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'srid') ?>

    <?= $form->field($model, 'auth_name') ?>

    <?= $form->field($model, 'auth_srid') ?>

    <?= $form->field($model, 'srtext') ?>

    <?= $form->field($model, 'proj4text') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
