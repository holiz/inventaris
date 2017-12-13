<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Atlas */

$this->title = 'Create Atlas';
$this->params['breadcrumbs'][] = ['label' => 'Atlas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="atlas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
