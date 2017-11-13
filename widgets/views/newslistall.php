<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use app\assets\AppAsset;
use yii\helpers\Url;
use yii\helpers\StringHelper;
use yii\widgets\LinkPager;
/* @var $this yii\web\View */
//AppAsset::register($this);

?>


<div class="wrapper">
    <div class="box2">
        <div class="wrapper tab-content"">
        <?php if (!empty($news)) :   ?>
        <?php foreach ($news as $new): ?>
        <a href="<?=Url::to(['news/view', 'id'=> $new->id]) ?>" >
            <h4 class="color3"><span><?=$new->date_create ?></span></h4>
        </a>
            <p class="pad_bot2"><strong><?=$new->title; ?></strong></p>
        <p><?=$new->text = StringHelper::truncateWords(strip_tags($new['text']), 15, '...', false) ?></p>
            <?php endforeach;?>

        <?=LinkPager::widget(['pagination' =>$pages]) ?>


        <?php endif; ?>
        </div>
    </div>
</div>