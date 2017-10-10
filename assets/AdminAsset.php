<?php
/**
 * Created by PhpStorm.
 * User: Ivashka
 * Date: 21.04.2017
 * Time: 14:55
 */

namespace app\assets;


use yii\web\AssetBundle;

class AdminAsset extends AssetBundle
{

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.css',
        'css/bootstrap.min.css',
        'font-awesome/css/font-awesome.min.css',
        'css/local.css',
        'http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css',
        'http://www.shieldui.com/shared/components/latest/css/dark-bootstrap/all.min.css',


    ];
    public $js = [
//        'js/jquery-1.10.2.min.js',
//        'js/jquery-3.1.1.js',
        'js/bootstrap.js',
        'js/bootstrap.min.js',
        'http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js',
        'http://www.prepbootstrap.com/Content/js/gridData.js',


    ];
    /*public $jsOptions = [
        'condition' => 'lt IE9',
        'position' => \yii\web\View::POS_HEAD
    ];*/
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];


}