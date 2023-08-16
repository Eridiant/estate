<?php
use yii\helpers\Html;
use yii\helpers\Url;
// use backend\modules\language\models\Language;

?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="<?=$assetDir?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">DDA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?=$assetDir?>/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= Yii::$app->user->identity->username; ?></a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <!-- href be escaped -->
        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            echo \hail812\adminlte\widgets\Menu::widget([
                'items' => [
                    [
                        'label' => 'Сообщения',
                        'icon' => 'file-code-o',
                        'url' => '/admin/message/index',
                        'permission' => ['canSupper', 'canAdmin']
                    ],
                    [
                        'label' => 'График',
                        'icon' => 'file-code-o',
                        'url' => '/admin/graph/index',
                        'permission' => ['canSupper', 'canAdmin']
                    ],
                    [
                        'label' => 'Options',
                        'icon' => 'file-code-o',
                        'url' => ['/option/index'],
                        'permission' => ['canSupper', 'canAdmin']
                    ],
                    [
                        'label' => 'Проекты',
                        'icon' => 'file-code-o',
                        'url' => ['/project/index'],
                        'permission' => ['canSupper', 'canAdmin']
                    ],
                    [
                        'label' => 'Районы',
                        'icon' => 'file-code-o',
                        'url' => ['/district/index'],
                        'permission' => ['canSupper', 'canAdmin']
                    ],
                    [
                        'label' => 'Локализация',
                        'icon' => 'file-code-o',
                        'url' => '/admin/language/languages/active',
                        'permission' => ['canSupper', 'canAdmin']
                    ],
                    // ['label' => 'Yii2 PROVIDED', 'header' => true],
                    ['label' => 'Login', 'url' => ['site/login'], 'icon' => 'sign-in-alt', 'visible' => Yii::$app->user->isGuest],
                    // [
                    //     'label' => 'Gii',
                    //     'icon' => 'file-code',
                    //     'url' => ['/gii'],
                    //     'target' => '_blank',
                    //     'permission' => ['canSupper', 'canAdmin'],
                    //     "allowedIPs" => ['127.0.0.1']
                    // ],
                    // ['label' => 'Debug', 'icon' => 'bug', 'url' => ['/debug'], 'target' => '_blank'],
                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>