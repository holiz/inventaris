<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RuangSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ruang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_ruang') ?>

    <?= $form->field($model, 'id_depar') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'penangungjawab') ?>

    <?= $form->field($model, 'noruang') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
