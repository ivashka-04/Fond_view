<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;


class MyAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/css?family=Marmelad&amp;subset=cyrillic',
        'css/site.css',
//    'css/main.css',
        'css/reset.css',
        'css/layout.css',
        'css/style.css',
        'css/main.css',
//    'css/bootstrap.css',
//   'css/bootstrap.min.css',

    ];
    public $js = [
        'js/html5.js',
        'js/jquery-3.1.1.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
       'yii\bootstrap\BootstrapPluginAsset',
    ];
}
