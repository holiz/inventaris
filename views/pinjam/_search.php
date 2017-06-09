<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PinjamSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pinjam-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_pinjam') ?>

    <?= $form->field($model, 'id_pegawai') ?>

    <?= $form->field($model, 'id_barang') ?>

    <?= $form->field($model, 'tgl_pinjam') ?>

    <?= $form->field($model, 'tgl_kembali') ?>

    <?php // echo $form->field($model, 'nama_peminjam') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
