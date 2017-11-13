<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use app\assets\AppAsset;
use yii\helpers\Url;
use yii\helpers\StringHelper;
/* @var $this yii\web\View */
AppAsset::register($this);

?>


<article id="content">
    <div class="wrapper">
        <div class="box1">
            <div class="line1">
                <div class="line2 wrapper">


                    <?php if(!empty($history)): ?>
                        <?php foreach ($history as $his): ?>


                            <section class="col1">
                                <?php
                                $mainImg = $his->getImage();
                               $i++; //color1|color2|color3 вывод 3х стилей для заголовков и кнопок
                                ?>
                                <h2 class="color<?=$i ?>"><strong>А</strong>втор:<span> <?=$his->author = StringHelper::truncateWords(strip_tags($his['author']), 1, '...', false) ?></span></h2>
                                <div class="pad_bot1"><figure><?=Html::img($mainImg->getUrl('264x104')); ?></figure></div>
                                <?=$his->text = StringHelper::truncate(strip_tags($his['text']), 58, '...', false) ?>
                                <a href="<?=Url::to(['stories/view', 'id'=> $his->id]) ?>" class="button1 color<?=$i ?>">Далее...</a>
                            </section>

                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</article>

