<?php
namespace app\components;


use yii\base\Widget;
use yii\helpers\Html;

class Hello extends Widget
{

    public function run(){
        return $this->render('test');
    }

}

