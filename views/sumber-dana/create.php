<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SumberDana */

$this->title = 'Create Sumber Dana';
$this->params['breadcrumbs'][] = ['label' => 'Sumber Danas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sumber-dana-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
