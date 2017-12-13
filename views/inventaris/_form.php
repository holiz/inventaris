<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use kartik\date\DatePicker;


/* @var $this yii\web\View */
/* @var $model app\models\Inventaris */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inventaris-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_inventaris')->textInput() ?>

    <?= $form->field($model, 'nama')->textInput() ?>

    <?= $form->field($model, 'tgl_perolehan')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'Enter birth date ...'],
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);?>


    <?= $form->field($model, 'nilai_barang')->textInput() ?>

    <?= $form->field($model, 'foto')->widget(FileInput::classname(), [
    'options' => ['accept'=>'image/*'],
    'pluginOptions'=>[
        'showUpload' => true,
        'overwriteInitial' => false,
    ],
    ]);

    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
