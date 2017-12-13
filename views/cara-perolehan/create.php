<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CaraPerolehan */

$this->title = 'Create Cara Perolehan';
$this->params['breadcrumbs'][] = ['label' => 'Cara Perolehans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cara-perolehan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
