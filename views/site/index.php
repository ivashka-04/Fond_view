<?php

/* @var $this yii\web\View */
namespace app\widgets;

use yii\helpers\Url;



$this->title = 'NTR';

//Yii::$app->view->title = 'Фонд А';
?>



<div class="slider">
    <ul class="items">
        <li>
            <img src="/images/img11.jpg" alt="">
            <!--<div class="banner">
                <div class="wrapper"><span>“Our<em>Mission</em>is to<em>Help</em></span></div>
                <div class="wrapper"><strong>Those Who<em>Need</em>It”</strong></div>
            </div>-->
        </li>
        <li>
            <img src="/images/img22.jpg" alt="">
            <!--<div class="banner">
                <div class="wrapper"><span>“MAKE all the CHILDREN</span></div>
                <div class="wrapper"><strong>of the World HAPPY”</strong></div>
            </div>-->
        </li>
        <li>
            <img src="/images/img33.jpg" alt="">
            <!--<div class="banner">
                <div class="wrapper"><span>“TOGETHER we can CHANGE</span></div>
                <div class="wrapper"><strong>Many Young LIVES”</strong></div>
            </div>-->
        </li>
    </ul>
    <ul class="pagination">
        <li id="banner1"><a href="#">3D анимация<br>Состав <span>катализатора</span></a></li>
        <li id="banner2"><a href="#">Видео<span>Новый ролик</span></a></li>
        <li id="banner3"><a href="<?=Url::to(['site/contact']) ?>">Обратная <span>связь</span></a></li>
    </ul>
</div>
<?=StoryList::widget(); ?>


<div class="wrapper">
<h3 id="mission"><a id="mission" href="<?=Url::to(['site/mission']) ?>">Предназначение</a></h3>
<p class="quot">
    В недрах нашей страны можно найти много полезных ископаемых, а на поверхности – много вредных <img src="/images/quot2.png" alt="">
</p>
</div>

<?=NewsList:: widget(['newsId'=>$new->id, 'viewType'=>NewsList::VIEW_VERTICAL]);?>


<!--<script type="text/javascript">Cufon.now();</script>-->
<script>
    $(window).load(function(){
        $('.slider')._TMS({
            preset:'zabor',
            easing:'easeOutQuad',
            duration:800,
            pagination:true,
            banners:true,
            waitBannerAnimation:false,
            slideshow:6000,
            bannerShow:function(banner){
                banner
                    .css({right:'-700px'})
                    .stop()
                    .animate({right:'0'},600, 'easeOutExpo')
            },
            bannerHide:function(banner){
                banner
                    .stop()
                    .animate({right:'-700'},600,'easeOutExpo')
            }
        })
        $('.pagination li').hover(function(){
            if ($(this).hasClass('current')) {
            } else {
                $(this).find('a').stop().animate({backgroundPosition: '0 0'}, 600, 'easeOutExpo', function () {
                    $(this).parent().css({backgroundPosition: '-20px 0'})
                });
            }
        },function(){
            if (!$(this).hasClass('current')) {
                $(this).css({backgroundPosition:'0 0'}).find('a').stop().animate({backgroundPosition:'-250px 0'},600,'easeOutExpo');
            }
        })
    })
</script>

