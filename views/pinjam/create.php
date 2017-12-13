<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Pinjam */

$this->title = 'Create Pinjam';
$this->params['breadcrumbs'][] = ['label' => 'Pinjams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pinjam-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
