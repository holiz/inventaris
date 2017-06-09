<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use kartik\dropdown\DropdownX;

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
    <?php
    NavBar::begin(['options' => ['class' => 'navbar-inverse navbar-fixed-top', ]]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
           //['label' => 'Barang', 'url' => ['/barang/index']],
           //['label' => 'Cara Memperoleh', 'url' => ['/cara-perolehan/index']],
           //['label' => 'Departemen', 'url' => ['/departemen/index']],
          // ['label' => 'Inventaris', 'url' => ['/inventaris/index']],
           //['label' => 'Jenis Barang', 'url' => ['/jenis-barang/index']],
           //['label' => 'mengajukan', 'url' => ['/mengajukan/index']],
           //['label' => 'pegawai', 'url' => ['/pegawai/index']],
           //['label' => 'pinjam', 'url' => ['/pinjam/index']],
           //['label' => 'ruang', 'url' => ['/ruang/index']],
           //['label' => 'Sumber Dana', 'url' => ['/sumber-dana/index']],
           //['label' => 'TM Barang', 'url' => ['/tm-barang/index']],
           ['label' => 'Home', 'url' => ['/site/index']],
           ['label' => 'About', 'url' => ['/site/about']],
           ['label' => 'Contact', 'url' => ['/site/contact']],
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
       ]);
    NavBar::end();
    ?>
   
    <div class="container">
    <?php
        echo ButtonDropdown::widget([
            'label' => 'Action',
            'dropdown'=> [
            'items'=> [
                        ['label'=>'DropdownA', 'url' => '/']
                        ['label'=>'DropdownA', 'url' => '/']]
                   ]
                ]
            );

            // echo Html::beginTag('div', ['class'=>'dropdown']);
        // echo Html::button('Dropdown Left <span class="caret"></span></button>', 
        //     ['type'=>'button', 'class'=>'btn btn-default', 'data-toggle'=>'dropdown']);
        // echo DropdownX::widget([
        //     'items' => [
        //         ['label' => 'Action', 'url' => '#'],
        //         ['label' => 'Submenu 1', 'items' => [
        //             ['label' => 'Action', 'url' => '#'],
        //             ['label' => 'Another action', 'url' => '#'],
        //             ['label' => 'Something else here', 'url' => '#'],
        //             '<li class="divider"></li>',
        //             ['label' => 'Submenu 2', 'items' => [
        //                 ['label' => 'Action', 'url' => '#'],
        //                 ['label' => 'Another action', 'url' => '#'],
        //                 ['label' => 'Something else here', 'url' => '#'],
        //                 '<li class="divider"></li>',
        //                 ['label' => 'Separated link', 'url' => '#'],
        //             ]],
        //         ]],
        //         ['label' => 'Something else here', 'url' => '#'],
        //         '<li class="divider"></li>',
        //         ['label' => 'Separated link', 'url' => '#'],
        //     ],
        // ]); 
        // echo Html::endTag('div'); 

    ?>
   

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
