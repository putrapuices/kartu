<?php

use backend\models\Keterangan;
use backend\models\Pendidikan;
use backend\models\Pengalaman;
use backend\models\Lokasi;


/* @var $this \yii\web\View */
/* @var $content string */
date_default_timezone_set('Asia/Jakarta');
$waktu= date('d-m-Y H:i:s'); // Hasil: 20-01-2017 05:32:15

?>

<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

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


        <?php if (Yii::$app->user->identity->level == 1){ ?>

            <?= dmstr\widgets\Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                    'items' => [
                    // ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                    // ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    // ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                    // ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                        ['label' => 'Dashboard', 'icon' => 'home', 'url' => ['/']],
                    // ['label' => 'Daftarkan PencaKer', 'icon' => 'user-plus', 'url' => ['/keterangan/cek']],
                        ['label' => 'Data PencaKer', 'icon' => 'list', 'url' => ['/keterangan']],
                        [
                            'label' => 'Data Utama',
                            'icon' => 'pie-chart',
                            'url' => '#',
                            'items' => [
                                ['label' => 'Pegawai Naker', 'icon' => 'map', 'url' => ['/pegawai']],
                                ['label' => 'Kelola Data Penempatan Pencaker', 'icon' => 'university', 'url' => ['/keterangan/keloladatapenempatan']],

                                ['label' => 'Kelola Data Non-Aktif', 'icon' => 'map-o', 'url' => ['/keterangan/keloladata']],
                                ['label' => 'Pencaker Keseluruhan', 'icon' => 'calendar', 'url' => ['/keterangan/monitorpencaker']],
                            // ['label' => 'Zonasi', 'icon' => 'map-marker', 'url' => ['/zona']],
                            // ['label' => 'Kuota Final', 'icon' => 'cubes', 'url' => ['/kuota']],
                            ],
                        ],
                        [
                            'label' => 'Cetak',
                            'icon' => 'print',
                            'url' => '#',
                            'items' => [
                                ['label' => 'Halaman Laporan IPK', 'icon' => 'user', 'url' => ['/pegawai/halaman']],
                            // ['label' => 'Bulanan', 'icon' => 'book', 'url' => ['/laporan/bulanan']],
                            // ['label' => 'Pilih Tanggal', 'icon' => 'calendar', 'url' => ['/laporan/harian']],
                            ],
                        ],
                    // [
                    //     'label' => 'Pengaturan Prestasi',
                    //     'icon' => 'trophy',
                    //     'url' => '#',
                    //     'items' => [
                    //         ['label' => 'Kategori Prestasi', 'icon' => 'tags', 'url' => ['/kat-peng']],
                    //         ['label' => 'Jenis Prestasi', 'icon' => 'sitemap', 'url' => ['/jenis-peng']],
                    //         ['label' => 'Daftar Juara', 'icon' => 'star', 'url' => ['/juara-peng']],
                    //         ['label' => 'Skor Prestasi', 'icon' => 'thumbs-up', 'url' => ['/skor-peng']],
                    //     ],
                    // ],
                    // ['label' => 'Data Calon Siswa', 'icon' => 'users', 'url' => ['/bio-siswa']],

                    // [
                    //     'label' => 'Pengguna',
                    //     'icon' => 'user-secret',
                    //     'url' => '#',
                    //     'items' => [
                    //         ['label' => 'Daftar Pengguna', 'icon' => 'user', 'url' => ['/user']],
                    //         ['label' => 'Operator', 'icon' => 'laptop', 'url' => ['/operator']],
                    //         ['label' => 'Siswa', 'icon' => 'users', 'url' => ['/user-siswa']],
                    //     ],
                    // ],



                    ],
                ]
            ) ?>

            <?php 
        } else { 
            $caripencakerketerangan = Keterangan::find()->where(['id_daftar'=>Yii::$app->user->identity->username])->one();
            $caripencakerpendidikan = Pendidikan::find()->where(['id_daftar'=>Yii::$app->user->identity->username])->one();
            $caripencakerpengalaman = Pengalaman::find()->where(['id_daftar'=>Yii::$app->user->identity->username])->one();
            $caripencakerlokasi = Lokasi::find()->where(['id_daftar'=>Yii::$app->user->identity->username])->one();
            // var_dump($caripencakerketerangan == true);die();
            if($caripencakerketerangan == false){ 
            ?>
            <?= dmstr\widgets\Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                    'items' => [

                        ['label' => 'Menu SIDAK', 'options' => ['class' => 'header']],
                        ['label' => 'Dashboard', 'icon' => 'home', 'url' => ['/']],                       
                        ['label' => 'Daftar', 'icon' => 'file-code-o', 'url' => ['/keterangan/create'],],
                     

                    // ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    // ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                    // ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    // [
                    //     'label' => 'Pengaturan User',
                    //     'icon' => 'share',
                    //     'url' => '#',
                    //     'items' => [
                    //         ['label' => 'user', 'icon' => 'file-code-o', 'url' => ['/user'],],
                    //         ['label' => 'mimin/user', 'icon' => 'file-code-o', 'url' => ['/mimin/user'],],
                    //         ['label' => 'mimin/role', 'icon' => 'file-code-o', 'url' => ['/mimin/role'],],
                    //         ['label' => 'mimin/route', 'icon' => 'file-code-o', 'url' => ['/mimin/route'],],
                    //         ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                    //         [
                    //             'label' => 'Level One',
                    //             'icon' => 'circle-o',
                    //             'url' => '#',
                    //             'items' => [
                    //                 ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                    //                 [
                    //                     'label' => 'Level Two',
                    //                     'icon' => 'circle-o',
                    //                     'url' => '#',
                    //                     'items' => [
                    //                         ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                    //                         ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                    //                     ],
                    //                 ],
                    //             ],
                    //         ],
                    //     ],
                    // ],
                    ],
                ]
            ) ?>

                        
        <?php }elseif(($caripencakerketerangan == true ) && ($caripencakerpendidikan==false)){ ?>
            <?= dmstr\widgets\Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                    'items' => [
                        ['label' => 'Menu SIDAK', 'options' => ['class' => 'header']],
                        ['label' => 'Dashboard', 'icon' => 'home', 'url' => ['/']],                       
                        ['label' => 'Daftar', 'icon' => 'file-code-o', 'url' => ['/pendidikan/createbiasa'],],             
                    ],
                ]
            ) ?>

        <?php }elseif(($caripencakerketerangan == true ) && ($caripencakerpendidikan==true)  && ($caripencakerpengalaman == false)){ ?>
              <?= dmstr\widgets\Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                    'items' => [
                        ['label' => 'Menu SIDAK', 'options' => ['class' => 'header']],
                        ['label' => 'Dashboard', 'icon' => 'home', 'url' => ['/']],                       
                        ['label' => 'Daftar', 'icon' => 'file-code-o', 'url' => ['/pengalaman/createtabular'],],             
                    ],
                ]
            ) ?>
               <?php }elseif(($caripencakerketerangan == true ) && ($caripencakerpendidikan==true)  && ($caripencakerpengalaman == true) &&($caripencakerlokasi == false)){ ?>
              <?= dmstr\widgets\Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                    'items' => [
                        ['label' => 'Menu SIDAK', 'options' => ['class' => 'header']],
                        ['label' => 'Dashboard', 'icon' => 'home', 'url' => ['/']],                       
                        ['label' => 'Daftar', 'icon' => 'file-code-o', 'url' => ['/lokasi/create'],],             
                    ],
                ]
            ) ?>
        <?php }else{ ?>
                   <?= dmstr\widgets\Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                    'items' => [
                        ['label' => 'Menu SIDAK', 'options' => ['class' => 'header']],
                        // ['label' => 'Dashboard', 'icon' => 'home', 'url' => ['/']],                       
                        ['label' => 'Daftar', 'icon' => 'file-code-o', 'url' => ['/keterangan/create'],],             
                    ],
                ]
            ) ?>
        <?php } ?>
        <?php } ?>

    </section>

</aside>
