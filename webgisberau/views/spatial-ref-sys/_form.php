<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SpatialRefSys */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="spatial-ref-sys-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'srid')->textInput() ?>

    <?= $form->field($model, 'auth_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'auth_srid')->textInput() ?>

    <?= $form->field($model, 'srtext')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'proj4text')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
