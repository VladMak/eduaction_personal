<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.css',
        'css/flexslider.css',
        'css/fontawesome-all.css',
        'css/jquery.countdown.css',
        'css/site.css',
        'https://use.fontawesome.com/releases/v5.3.1/css/all.css',
    ];
    public $js = [
        'js/jquery-2.1.4.min.js',
        'js/jquery.countup.js',
        'js/jquery.flexslider.js',
        'js/jquery.waypoints.min.js',
        'js/bootstrap.js',
        'js/easing.js',
        'js/move-top.js',
        'js/simplyCountdown.js',
        'js/SmoothScroll.min.js',
        'js/vue.js',
        'js/vue_main.js',
        'js/main.js',
    ];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
