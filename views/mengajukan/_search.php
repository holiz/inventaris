<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MengajukanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mengajukan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_departemen') ?>

    <?= $form->field($model, 'id_depar') ?>

    <?= $form->field($model, 'id_barang') ?>

    <?= $form->field($model, 'id_pegawai') ?>

    <?= $form->field($model, 'approval') ?>

    <?php // echo $form->field($model, 'tgl_approval') ?>

    <?php // echo $form->field($model, 'jumlah_minta') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
