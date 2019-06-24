<?php
  use app\models\MasterPegawai;
 ?>

<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?php
                      $namaPegawai=MasterPegawai::findOne(Yii::$app->user->id);
                      echo $namaPegawai->nama;
                    ?>
                  </p>

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
                    // ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    //['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                    //['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    ['label' => 'PUBLIKASI', 'icon' => 'dashboard', 'url' => ['/master-publikasi/index'],
                      'items' => [
                          ['label' => ' Publikasi ARC', 'icon' => ' fa-calendar-check-o ', 'url' => ['/master-publikasi/index'],],
                          ['label' => ' Publikasi NON ARC', 'icon' => ' fa-book', 'url' => ['/master-publikasi-non-a-r-c/index'],],
                          ['label' => ' Status Publikasi', 'icon' => ' fa-question', 'url' => ['/master-publikasi/index'],],
                      ]
                    ],

                    ['label' => 'ADMINISTRASI', 'icon' => 'dashboard', 'url' => ['/debug'],
                      'items' => [
                          ['label' => 'Publikasi Siap Cetak', 'icon' => 'file-code-o', 'url' => ['/master-publikasi/index'],],
                          ['label' => 'Distribusi Publikasi', 'icon' => 'dashboard', 'url' => ['/master-publikasi/index'],],
                          ['label' => 'Master Instansi', 'icon' => 'dashboard', 'url' => ['/master-instansi-distribusi/index'],],
                      ]
                  ],
                    /*[
                        'label' => 'Some tools',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                            [
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
                            ],
                        ],
                    ],
                    */
                ],
            ]
        ) ?>

    </section>

</aside>
