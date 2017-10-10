<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
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
/*    'css/bootstrap.css',
    'css/bootstrap.min.css',*/

    ];
    public $js = [
    'js/jquery-1.6.js',
//    'js/jquery-3.1.1.js',
    'js/cufon-yui.js',
    'js/cufon-replace.js',
    'js/jquery.easing.1.3.js',
    'js/tms-0.3.js',
    'js/tms_presets.js',
    'js/backgroundPosition.js',
    'js/atooltip.jquery.js',
    'js/script.js',
//    'js/html5.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
      'yii\bootstrap\BootstrapPluginAsset',
    ];
}
