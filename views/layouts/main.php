
<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use kartik\dropdown\DropdownX;
use yii\widgets\Menu;
use yii\debug\toobar;
use yii\helpers\ArrayHelper;
use app\models\Product;
use app\widgets\Template;
AppAsset::register($this);


?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
   <?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'options'=> ['class'=> 'navbar-inverse navbar-fixed-top'],
        ]);
  echo Nav::widget([
       'items' => [
                
        ['label' => 'Tambah Barang',
            'items' => [
                 ['label' => 'Barang', 'url' => ['/barang']],
                  '<li class="divider"></li>',
                 ['label' => 'Cara Perolehan', 'url' => ['/cara-perolehan']],
                  '<li class="divider"></li>',
                 ['label' => 'Jenis Barang', 'url' => ['/jenis-barang']],
                 '<li class="divider"></li>',
                  ['label' => 'Inventaris', 'url' => ['/inventaris']],
                 '<li class="divider"></li>',
                  ['label' => 'Sumber Dana', 'url' => ['/sumber-dana']],
   
            ],

        ],
        ['label' => 'Peminjaman',
            'items' => [
                 ['label' => 'Departemen', 'url' => ['/departemen']],
                  '<li class="divider"></li>',
                 ['label' => 'Ruang', 'url' => ['/ruang']],
                  '<li class="divider"></li>',
                 ['label' => 'Peminjaman', 'url' => ['/pinjam']],
                 '<li class="divider"></li>',
                 ['label' => 'Pegawai', 'url' => ['/pegawai']],
            ],

        ],
         ['label' => 'Pengajuan Barang',
            'items' => [
                 ['label' => 'Mengajukan', 'url' => ['/mengajukan']],
                  '<li class="divider"></li>',
                 ['label' => 'TM Barang', 'url' => ['/tm-barang']],
                 ],
        ],
          
        Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
                

            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
 
    ],

    'options' => ['class' =>'nav-pills navbar-left'], 
   
]);

       
            // NavBar::begin([
    //     'brandLabel' => 'My Company',
    //     'brandUrl' => Yii::$app->homeUrl,
    //     'options' => [
    //         'class' => 'navbar-inverse navbar-fixed-top',
    //     ],
    // ]);
    // echo Nav::widget([
    //        'options' => ['class' => 'navbar-nav navbar-right'],
    //     'items' => [
           
         
    //         ['label' => 'Home', 'url' => ['/site/index']],
    //         ['label' => 'About', 'url' => ['/site/about']],
    //         ['label' => 'Contact', 'url' => ['/site/contact']],
    //         // Yii::$app->user->isGuest ? (
    //         //     ['label' => 'Login', 'url' => ['/site/login']]
    //         // ) : (
    //         //     '<li>'
    //         //     . Html::beginForm(['/site/logout'], 'post')
    //         //     . Html::submitButton(
    //         //         'Logout (' . Yii::$app->user->identity->username . ')',
    //         //         ['class' => 'btn btn-link logout']
    //         //     )
    //         //     . Html::endForm()
    //         //     . '</li>'
    //         // )
    //     ],
    // ]);
    NavBar::end();
    ?>
   <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>