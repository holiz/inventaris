<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CaraPerolehan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cara-perolehan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cara_perolehan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
