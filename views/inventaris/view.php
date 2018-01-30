<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Inventaris */

$this->title = $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Inventaris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inventaris-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_inventaris], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_inventaris], [
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
            'id_inventaris',
            'nama',
            'nilai_barang',
            'tgl_perolehan',
            [
            'attribute' => 'foto',
            'value' => function ($model)
            {
                return Html::img('uploads/inventaris/'.$model->foto,['width'=>'300px']);
            },
            'format' => 'html'

            ],
           
            
        ],
    ]) ?>
    


</div>
