<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;


class ltAppAssets extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        /*'css/bootstrap.css',
        'css/bootstrap.min.css',*/

    ];

    public $js = [
        'js/html5.js',
//        'js/jquery-3.1.1.js',



    ];
     public $jsOptions = [
       'condition' => 'lt IE9',
         'position' => \yii\web\View::POS_HEAD
     ];
    public $depends = [
        'yii\web\YiiAsset',
       'yii\bootstrap\BootstrapAsset',
    ];

}
