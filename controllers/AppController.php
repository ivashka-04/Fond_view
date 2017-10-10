<?php
/**
 * Created by PhpStorm.
 * User: Ivashka
 * Date: 23.02.2017
 * Time: 22:54
 */

namespace app\controllers;


use yii\web\Controller;

class AppController extends Controller
{

    public function debug($arr){
        echo '<pre>' .print_r($arr, true). '</pre>';
    }

    protected function setMeta($keywords = null, $discription = null){

        $this->view->registerMetaTag(['name' => 'keywords', 'content' => "$keywords"]);
        $this->view->registerMetaTag(['name' => 'discription', 'content' => "$discription"]);

    }
}