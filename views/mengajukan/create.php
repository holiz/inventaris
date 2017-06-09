<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Mengajukan */

$this->title = 'Create Mengajukan';
$this->params['breadcrumbs'][] = ['label' => 'Mengajukans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mengajukan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
