<?php


use yii\helpers\Html;
use app\assets\AdminAsset;
use yii\widgets\Menu;


AdminAsset::register($this);




?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title>Админ-панель | <?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?=\yii\helpers\Url::to('/admin/'); ?>">Admin Panel</a>
        </div>
            <div class="menu collapse navbar-collapse navbar-ex1-collapse">
                 <ul id="active" class="nav navbar-nav side-nav">


                     <?= Menu::widget([
                         'items' => [
                             ['label' => '<i class="fa fa-bullseye"></i> Вернуться на сайт', 'url' => ['/']],
                             ['label' => '<i class="fa fa-globe"></i> Новости', 'url' => ['/admin/news/index']],
                             ['label' => '<i class="fa fa-tasks"></i> Истории', 'url' => ['/admin/stories/index']],
                             ['label' => '<i class="fa fa-list-ol"></i> Комментарии новостей', 'url' => ['/admin/comment/index']],
                             ['label' => '<i class="fa fa-table"></i> Письма(Демо)', 'url' => ['#']],
                         ],
                         'options' => ['id' => 'active', 'class' => 'nav navbar-nav side-nav'],
                         'encodeLabels' => false,
                         'activeCssClass' => 'selected',


                     ]);

                    ?>
                    <!--<li><a href="<?/*=\yii\helpers\Url::to('/'); */?>"><i class="fa fa-bullseye"></i> Вернуться на сайт</a></li>
                     <li><a href="<?/*=\yii\helpers\Url::to('/admin/news'); */?>"><i class="fa fa-globe"></i> Новости</a></li>
                     <li><a href="<?/*=\yii\helpers\Url::to('/admin/stories'); */?>"><i class="fa fa-tasks"></i> Истории</a></li>
                     <li><a href="#"><i class="fa fa-list-ol"></i> Отчеты(Демо)</a></li>
                     <li><a href="#"><i class="fa fa-table"></i> Письма(Демо)</a></li>-->
                </ul>
            <ul class="nav navbar-nav navbar-right navbar-user">
                <li class="dropdown messages-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span class="badge">2</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-header">2 New Messages</li>
                        <li class="message-preview">
                            <a href="#">
                                <span class="avatar"><i class="fa fa-bell"></i></span>
                                <span class="message">Security alert</span>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li class="message-preview">
                            <a href="#">
                                <span class="avatar"><i class="fa fa-bell"></i></span>
                                <span class="message">Security alert</span>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#">Go to Inbox <span class="badge">2</span></a></li>
                    </ul>
                </li>

                <?php if (!Yii::$app->user->isGuest): ?>
                <li class="dropdown user-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?=Yii::$app->user->identity['username'] ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                        <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                        <li class="divider"></li>

                        <li><a href="<?=\yii\helpers\Url::to(['/site/logout']) ?>"><i class="fa fa-power-off"></i> Выход</a></li>


                    </ul>
                </li>
                <?php endif; ?>
                <li class="divider-vertical"></li>
                <!--<li>

                  <form class="navbar-search">

                       <input type="text" placeholder="Search" class="form-control">

                   </form>

                </li>-->
            </ul>
        </div>
    </nav>



        <div class="panel panel-default ">
            <div class="panel-body">
        <?=$content; ?>
            </div>
        </div>

        <?php
/*        debug(Yii::$app->user->identity)
        */?>


    </div>
</div>
<!-- /#wrapper -->



<?php $this->endBody() ?>
</body>

<script>
//    $('div.menu li').each(function () {if (this.getElementsByTagName("a")[0] == location.href) this.className = "selected";});

</script>

</html>
<?php $this->endPage() ?>