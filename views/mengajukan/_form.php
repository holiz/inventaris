<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;
use kartik\switchinput\SwitchInput;
use app\models\Departemen;
use app\models\Barang;
use app\models\Pegawai;


/* @var $this yii\web\View */
/* @var $model app\models\Mengajukan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mengajukan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_depar')->dropDownList(ArrayHelper::map(Departemen::find()->all(),'id_depar','departemen')); ?> 

    <?= $form->field($model, 'id_barang')->dropDownList(ArrayHelper::map(Barang::find()->all(),'id_barang','nama')); ?> 

    <?= $form->field($model, 'id_pegawai')->dropDownList(ArrayHelper::map(Pegawai::find()->all(),'id_pegawai','nama')); ?> 

    <?= $form->field($model, 'approval')->widget(SwitchInput::classname(),[
     'type' => SwitchInput::CHECKBOX
    ]);?>

    <?= $form->field($model, 'tgl_approval')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'Enter birth date ...'],
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);?>

    <?= $form->field($model, 'jumlah_minta')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
