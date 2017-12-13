<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SpatialRefSys */

$this->title = $model->srid;
$this->params['breadcrumbs'][] = ['label' => 'Spatial Ref Sys', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spatial-ref-sys-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->srid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->srid], [
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
            'srid',
            'auth_name',
            'auth_srid',
            'srtext',
            'proj4text',
        ],
    ]) ?>

</div>
