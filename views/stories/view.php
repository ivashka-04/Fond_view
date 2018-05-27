<?php
use app\assets\AppAsset;
use yii\helpers\Url;
use app\widgets\StoryList;
use app\widgets\StoryAll;
/* @var $this yii\web\View */
AppAsset::register($this);
$this->title = 'NTR | Истории';

//debug($post);

?>

<article id="content" class="tabs">


    <?php
    $mainImg = $post->getImage();
    ?>

    <div class="box1">
        <div class="wrapper">

            <h2><strong>И</strong>стория:<span> <?=$post->author ?></span></h2>
            <div class="pad_bot1">
                <figure class="left marg_right1">

                    <!--<img src="/images/page3_img1.jpg" alt="" align="right">-->
                    <?=\yii\helpers\Html::img($mainImg->getUrl('264x104')); ?>

                </figure></div>
            <h2 class="color3"><span><?=$post_news->title ?></span></h2>

            <p class="pad_left2">
                <?=$post->text ?>
            </p>
        </div>

    </div>
</article>

<?/*=StoryList::widget(['hisId'=>$his->id]); */?>

<?=StoryAll::widget(['mySize' =>3 ]); ?>


