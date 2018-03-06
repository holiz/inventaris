<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/avatar5.png" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Nur Kholis</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'MENU', 'options' => ['class' => 'header']],
                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    ['label' => 'Debug', 'icon' => 'map', 'url' => ['/debug']],
                    ['label' => 'BARANG', 'icon' => 'automobile', 'url' => ['/barang'],],
                    ['label' => 'INVENTARIS', 'icon' => 'bank', 'url' => ['/inventaris'],],
                    ['label' => 'CARA PEROLEHAN', 'icon' => 'hand-lizard-o', 'url' => ['/cara-perolehan'],],
                            ['label' => 'DEPARTEMEN', 'icon' => 'dashboard', 'url' => ['/departemen'],],
                            ['label' => 'JENIS BARANG', 'icon' => 'dashboard', 'url' => ['/jenis-barang'],],
                            ['label' => 'MENGAJUKAN', 'icon' => 'dashboard', 'url' => ['/mengajukan'],],
                            ['label' => 'KARYAWAN', 'icon' => 'dashboard', 'url' => ['/pegawai'],],
                            ['label' => 'PEMINJAMAN', 'icon' => 'dashboard', 'url' => ['/pinjam'],],
                            ['label' => 'RUANG BARANG', 'icon' => 'dashboard', 'url' => ['/ruang'],],
                            ['label' => 'SUMBER DANA', 'icon' => 'dashboard', 'url' => ['/sumber-dana'],],
                            ['label' => 'TM BARANG', 'icon' => 'dashboard', 'url' => ['/tm-barang'],],
                            ['label' => 'HALAMAN', 'icon' => 'dashboard', 'url' => ['site/halaman'],],
                  ['label' => 'LOGIN', 'icon' => 'dashboard', 'url' => ['site/login'],],
                  ['label' => 'CONSTANT', 'icon' => 'dashboard', 'url' => ['site/contact'],],
                  ['label' => 'CONSTANT', 'icon' => 'dashboard', 'url' => ['/content'],],
                    [
                        'label' => 'MENU UTAMA',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            
                         /*   [
                                'label' => 'Level One',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],*/
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
