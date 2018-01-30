<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SumberDanaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sumber Dana';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sumber-dana-index">



    <p>
        <?= Html::a('Create Sumber Dana', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_sumberdana',
            'sumber_dana',
            'is_active:boolean',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
