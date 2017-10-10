<?php
use app\assets\AppAsset;
use yii\helpers\Url;
use app\widgets\StoryList;
use app\widgets\StoryAll;
/* @var $this yii\web\View */
AppAsset::register($this);
$this->title = 'Project V | Истории';

//debug($post);

?>
<div class="box1">
<div class="wrapper">

    <?php
    $mainImg = $post->getImage();
    ?>

<h2><strong>И</strong>стория:<span> <?=$post->author ?></span></h2><br>
<div class="pad_bot1">
    <figure class="left marg_right1">


    <!--<img src="/images/page1_img1.jpg" alt="" align="right" >-->
        <?=\yii\helpers\Html::img($mainImg->getUrl('264x104')); ?>

    </figure></div>
    <p class="mission"> <?=$post->text ?></p>
</div>
</div>
<br>



<?/*=StoryList::widget(['hisId'=>$his->id]); */?>

<?=StoryAll::widget(['mySize' =>3 ]); ?>


