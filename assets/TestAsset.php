<?php
/**
 * Created by PhpStorm.
 * User: Ivashka
 * Date: 23.08.2017
 * Time: 23:22
 */

namespace app\assets;


use yii\web\AssetBundle;
use yii\web\JqueryAsset;

class TestAsset extends JqueryAsset
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        /*'css/bootstrap.css',
        'css/bootstrap.min.css',*/

    ];

    public $js = [
//        'js/html5.js',
//        'js/jquery-3.1.1.js',



    ];
    public $jsOptions = [
        'condition' => 'lt IE9',
        'position' => \yii\web\View::POS_HEAD
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
        'yii\web\JqueryAsset',
    ];


}