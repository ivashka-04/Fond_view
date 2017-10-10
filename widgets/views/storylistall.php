<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use app\assets\AppAsset;
use yii\helpers\Url;
use yii\helpers\StringHelper;
use yii\widgets\LinkPager;
/* @var $this yii\web\View */
AppAsset::register($this);

?>



<div class="wrapper">
    <div class="box2">
        <div class="wrapper tab-content"">
        <?php if(!empty($history)): ?>
            <?php foreach ($history as $his): ?>
                <?php $i++; ?>
                <a href="<?=Url::to(['stories/view', 'id'=> $his->id]) ?>" >
                    <h4 class="color<?=$i; ?>">История: <span><?=$his->author ?></span></h4>
                </a>

                <p><?=$his->text = StringHelper::truncateWords(strip_tags($his['text']), 16, '...', false) ?></p>
            <?php endforeach;?>

            <?=LinkPager::widget(['pagination' =>$pages]) ?>


        <?php endif; ?>
    </div>
</div>
</div>