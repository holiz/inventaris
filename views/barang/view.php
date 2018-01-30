<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Barang */

$this->title = $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Barang', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barang-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_barang], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_barang], [
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
            'id_barang',
            'jenis.jenis_barang',
            'sumberdana.sumber_dana',
            'depar.departemen',
            'pegawai.nama',
            'cp.cara_perolehan',
            'tmBarang.nomor_barang',
            'nama',
            'harga',
            'tgl_pembelian',
            'tgl_expired',
            [
                'attribute' => 'foto',
                'value' => function($model)
                {
                    return Html::img('uploads/barang/'.$model->foto,['width'=>'500px']);
                },
                'format' =>'html'
            ],
            
        ],
    ]) ?>

</div>
