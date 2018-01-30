<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RuangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ruang';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ruang-index">


    <p>
        <?= Html::a('Create Ruang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_ruang',
           [  
                'attribute'=>'id_depar',
                'value'=>'depar.departemen',
            ],
            'nama',
            'penangungjawab',
            'noruang',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
