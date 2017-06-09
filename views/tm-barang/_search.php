<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TmBarangSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tm-barang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_tm_barang') ?>

    <?= $form->field($model, 'id_jenis') ?>

    <?= $form->field($model, 'nomor_barang') ?>

    <?= $form->field($model, 'barang_id_barang') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
