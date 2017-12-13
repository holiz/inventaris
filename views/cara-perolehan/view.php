<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CaraPerolehan */

$this->title = $model->id_cp;
$this->params['breadcrumbs'][] = ['label' => 'Cara Perolehans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cara-perolehan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_cp], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_cp], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_cp',
            'cara_perolehan',
        ],
    ]) ?>

</div>
