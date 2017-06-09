<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BarangSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="barang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_barang') ?>

    <?= $form->field($model, 'id_jenis') ?>

    <?= $form->field($model, 'id_sumberdana') ?>

    <?= $form->field($model, 'id_depar') ?>

    <?= $form->field($model, 'id_pegawai') ?>

    <?php // echo $form->field($model, 'id_cp') ?>

    <?php // echo $form->field($model, 'id_tm_barang') ?>

    <?php // echo $form->field($model, 'nama') ?>

    <?php // echo $form->field($model, 'harga') ?>

    <?php // echo $form->field($model, 'tgl_pembelian') ?>

    <?php // echo $form->field($model, 'tgl_expired') ?>

    <?php // echo $form->field($model, 'foto') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
