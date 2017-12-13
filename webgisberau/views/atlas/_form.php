<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Atlas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="atlas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'judul')->textInput() ?>

    <?= $form->field($model, 'legenda')->textInput() ?>

    <?= $form->field($model, 'atlas_kategori_id')->textInput() ?>

    <?= $form->field($model, 'url_tms')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
