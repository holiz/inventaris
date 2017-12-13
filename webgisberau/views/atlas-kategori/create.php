<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AtlasKategori */

$this->title = 'Create Atlas Kategori';
$this->params['breadcrumbs'][] = ['label' => 'Atlas Kategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="atlas-kategori-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
