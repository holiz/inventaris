<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CaraPerolehanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cara Perolehans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cara-perolehan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

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
