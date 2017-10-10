<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use app\assets\AppAsset;
use yii\helpers\Url;
/* @var $this yii\web\View */
AppAsset::register($this);

?>
<!-- content -->
<article id="content">
    <div class="wrapper">
        <div class="box1">
            <div class="line1">
                <div class="line2 wrapper">
                    <?=StoryAll::widget(); ?>
                 </div>
            </div>
           </div>
    </div>
</article>
<!-- / content -->
