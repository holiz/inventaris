<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Departemen;
/* @var $this yii\web\View */
/* @var $model app\models\Ruang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ruang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_depar')->dropDownList(ArrayHelper::map(Departemen::find()->all(),'id_depar','departemen')); ?> 

    <?= $form->field($model, 'nama')->textInput() ?>

    <?= $form->field($model, 'penangungjawab')->textInput() ?>

    <?= $form->field($model, 'noruang')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
