<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\JenisBarang;
use app\models\SumberDana;
use app\models\Departemen;
use app\models\Pegawai;
use app\models\CaraPerolehan;
use app\models\TmBarang;
use kartik\date\DatePicker;
use kartik\file\FileInput

/* @var $this yii\web\View */
/* @var $model app\models\Barang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="barang-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'id_jenis')->dropDownList(ArrayHelper::map(JenisBarang::find()->all(),'id_jenis','jenis_barang')); ?> 
    <?= $form->field($model, 'id_sumberdana')->dropDownList(ArrayHelper::map(SumberDana::find()->all(),'id_sumberdana','sumber_dana')); ?> 
    <?= $form->field($model, 'id_depar')->dropDownList(ArrayHelper::map(Departemen::find()->all(),'id_depar','departemen')); ?> 
    <?= $form->field($model, 'id_pegawai')->dropDownList(ArrayHelper::map(Pegawai::find()->all(),'id_pegawai','nama')); ?> 
    <?= $form->field($model, 'id_cp')->dropDownList(ArrayHelper::map(CaraPerolehan::find()->all(),'id_cp','cara_perolehan')); ?> 
    <?= $form->field($model, 'id_tm_barang')->dropDownList(ArrayHelper::map(TmBarang::find()->all(),'id_tm_barang','nomor_barang')); ?> 

    <?= $form->field($model, 'nama')->textInput() ?>

    <?= $form->field($model, 'harga')->textInput() ?>

    <?= $form->field($model, 'tgl_pembelian')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'Enter birth date ...'],
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);?>

    <?= $form->field($model, 'tgl_expired')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'Enter birth date ...'],
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);?>
        
    <?= $form->field($model, 'foto')->widget(FileInput::classname(), [
    'options' => ['accept'=>'image/*'],
    'pluginOptions'=>[
        'showUpload' => true,
        'overwriteInitial' => false,
    ],
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
