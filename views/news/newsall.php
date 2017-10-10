<?php

//use app\assets\AppAsset;
use app\widgets\NewsAll;

/* @var $this yii\web\View */
\app\assets\MyAsset::register($this);

$this->title = 'Фонда А | Новости';

?>
<?=NewsAll:: widget(['mySize' =>15 ]);?>

