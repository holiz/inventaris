<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AtlasKategori */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="atlas-kategori-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kategori')->textInput() ?>

    <?= $form->field($model, 'urutan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
