<?php



/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Menu;

\app\assets\ltAppAssets::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <!--<title>Главная | Фонд А</title>-->

    <meta charset="<?= Yii::$app->charset ?>">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>




<!--     [if lt IE 9]>-->
    <!--<script type="text/javascript" src="js/html5.js"></script>
    <style type="text/css">
        .box1 figure {behavior:url(js/PIE.htc)}
    </style>-->
<!--    <![endif]-->
<!--[if lt IE 7]>--!>
		<!--<div style='clear:both;text-align:center;position:relative'>
			<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0" alt="" /></a>
		</div>-->
<!--[endif] -->

</head>
<body id="page1">
<?php $this->beginBody() ?>
<div class="body1">
    <div class="main">
        <!-- header -->
        <header>
            <div class="wrapper">
            <h1><a href="<?=Url::home() ?>" id="logo">Hope Center</a></h1>
                <nav>
                    <ul id="top_nav">
                        <li><a href="<?=Url::home() ?>"><img src="/images/top_icon1.gif" alt=""></a></li>
                        <li><a href="<?=Url::to(['/admin']) ?>" title="ADMIN PANEl"><img src="/images/top_icon2.gif" alt=""></a></li>
                        <li class="end"><a href="<?=Url::to(['site/contact']) ?>"><img src="/images/top_icon3.gif" alt=""></a></li>
                    </ul>
                </nav>
                <nav>
                    <ul id="menu">

                        <?= Menu::widget([
                            'options' => ['id' => 'menu'],
                            'items' => [
                                ['label' => 'Главная', 'url' => ['site/index']],
                                ['label' => 'О нас', 'url' => ['site/about']],
                                ['label' => 'предназначение', 'url' => ['site/mission']],
                                ['label' => 'новости', 'url' => ['news/view']],
                                ['label' => 'Истории', 'url' => ['stories/view']],
                                ['label' => 'Контакты', 'url' => ['site/contact']],


                            ],
                            'activeCssClass' => 'menu_active',
                        ]);
                        ?>

                       <!-- <li><a href="<?/*=Url::home() */?>">Главная</a></li>
                        <li><a href="<?/*=Url::to(['site/mission']) */?>">предназначение</a></li>
                        <li><a href="<?/*=Url::to(['site/newsall']) */?>">новости</a></li>
                        <li><a href="<?/*=Url::to(['site/stories']) */?>">Истории</a></li>
                        <li><a href="<?/*=Url::to(['site/contact']) */?>">Контакты</a></li>-->
                    </ul>
                </nav>
            </div>

        </header>



        <?= $content; ?>

                <!-- footer -->
        <footer>
            <div class="wrapper">
                <!-- <a href="index.html" id="footer_logo"><span>Hope</span>Center</a> -->
                <ul id="icons">
                    <li><a href="#" class="normaltip" title="Facebook"><img src="/images/icon1.gif" alt=""></a></li>
                    <li><a href="#" class="normaltip" title="Twitter"><img src="/images/icon2.gif" alt=""></a></li>
                    <li><a href="#" class="normaltip" title="Linkedin"><img src="/images/icon3.gif" alt=""></a></li>
                </ul>
            </div>
            <div class="wrapper">
                <nav>
                    <ul id="footer_menu">
                        <li id="menu_active"><a href="<?=Url::home() ?>">Главная</a></li>
                        <li id="menu_active"><a href="<?=Url::to(['site/about']) ?>">О нас</a></li>
                        <li id="menu_active"><a href="<?=Url::to(['site/mission']) ?>">Предназначение</a></li>
                        <li id="menu_active"><a href="<?=Url::to(['news/view']) ?>">Новости</a></li>
                        <li id="menu_active"><a href="<?=Url::to(['stories/view']) ?>">Истории</a></li>
                        <li id="menu_active"><a href="<?=Url::to(['site/contact']) ?>">Контакты</a></li>
                    </ul>
                </nav>
                <div class="tel"><span>8 (727) </span>291 65 58 </div>
            </div>
            <div id="footer_text">

<!--                Разработка --><?//=Html::a('Волынкин Иван', 'http://www.linkedin.com/in/volynkin-ivan', ['target' => '_blank', 'rel' => 'nofollow']); ?><!--<br>-->
<!--                Дизайн --><?//=Html::a('www.templates.com', 'http://www.templates.com', ['target' => '_blank', 'rel' => 'nofollow']); ?><!--<br>-->
            </div>
        </footer>
        <!-- / footer -->
    </div>
</div>

<?php $this->endBody() ?>
</body>


<!--<script type="text/javascript">
// $('ul#menu li').each(function () {if (this.getElementsByTagName('a')[0].href == location.href) this.id = "menu_active";});

</script>-->



</html>
<?php $this->endPage() ?>