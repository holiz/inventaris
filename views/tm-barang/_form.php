<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TmBarang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tm-barang-form">

    <?php $form = ActiveForm::begin(); ?>

 	<?= $form->field($model, 'id_jenis')->textInput() ?>

    <?= $form->field($model, 'nomor_barang')->textInput() ?>

    <?= $form->field($model, 'barang_id_barang')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
