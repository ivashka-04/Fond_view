<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use app\assets\AppAsset;
use yii\helpers\Url;
use yii\helpers\StringHelper;
/* @var $this yii\web\View */
AppAsset::register($this);
?>



<div class="wrapper">
    <div class="box2">
        <div class="line1"><div class="line2 wrapper">
               <?php if (!empty($news)) :   ?>
                <?php foreach ($news as $new): ?>
                       <?php $i++; //color1|color2|color3 вывод 3х стилей для заголовков и кнопок ?>
                <section class="col1 pad_left1">
                    <h4 class="color<?=$i ?>"><span> <?=$new->date_create ?></span></h4>
                    <p class="pad_bot2"><strong><?=$new->title = StringHelper::truncateWords($new['title'], 3, '...', false); ?></strong></p>
                    <p><?=$new->text = StringHelper::truncateWords(strip_tags($new['text']), 8, '...', false) ?></p>
                    <a href="<?=Url::to(['news/view', 'id'=> $new->id]) ?>" class="button2 color<?=$i ?>">Далее...</a>
                </section>
              <?php endforeach;?>
                <?php endif; ?>
            </div></div>
    </div>
</div>


