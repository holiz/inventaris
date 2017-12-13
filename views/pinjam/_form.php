<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Pegawai;
use app\models\Barang;
use kartik\date\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\Pinjam */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pinjam-form">

    <?php $form = ActiveForm::begin(); ?>

     <?= $form->field($model, 'id_pegawai')->dropDownList(ArrayHelper::map(Pegawai::find()->all(),'id_pegawai','nama')); ?> 

    
    <?= $form->field($model, 'id_barang')->dropDownList(ArrayHelper::map(Barang::find()->all(),'id_barang','nama')); ?> 

    <?= $form->field($model, 'tgl_pinjam')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'Enter birth date ...'],
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);?>
    <?= $form->field($model, 'tgl_kembali')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'Enter birth date ...'],
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy-mm-dd'
        ],
    ]);?>

    <?= $form->field($model, 'nama_peminjam')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
