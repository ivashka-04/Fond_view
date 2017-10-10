<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use app\assets\AppAsset;
use yii\helpers\Url;
use yii\helpers\StringHelper;
use yii\widgets\LinkPager;
use app\widgets\StoryAll;
/* @var $this yii\web\View */
AppAsset::register($this);

$this->title = 'Фонда А | Истории';

?>



<?=StoryAll::widget(['mySize' =>10]); ?>

