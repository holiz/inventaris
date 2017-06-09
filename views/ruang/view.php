<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Ruang */

$this->title = $model->id_ruang;
$this->params['breadcrumbs'][] = ['label' => 'Ruangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ruang-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_ruang], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_ruang], [
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
            'id_ruang',
            'id_depar',
            'nama',
            'penangungjawab',
            'noruang',
        ],
    ]) ?>

</div>
