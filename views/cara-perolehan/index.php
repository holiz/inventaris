<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CaraPerolehanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cara Perolehan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cara-perolehan-index">

    <p>
        <?= Html::a('Create Cara Perolehan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_cp',
            'cara_perolehan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
