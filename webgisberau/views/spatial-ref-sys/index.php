<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SpatialRefSysSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Spatial Ref Sys';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spatial-ref-sys-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Spatial Ref Sys', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'srid',
            'auth_name',
            'auth_srid',
            'srtext',
            'proj4text',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
