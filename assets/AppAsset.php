<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;
use yii\web\View;
/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/web';
    public $css = [
        'css/site.css',
        'css/main.css',
        'css/header/header.css',
        'css/index.css',
        'css/lib/fontawesome.css',
        'css/lib/solid.css',
        'css/lib/regular.css',
        'css/lib/brands.css',
        'owlcarousel/owl.carousel.min.css',
        'owlcarousel/owl.theme.default.min.css',
        'css/lib/bootstrap.min.css',
    ];
    public $js = [
        'js/lib/jquery-3.6.0.min.js',
        'owlcarousel/owl.carousel.min.js',
        'js/lib/bootstrap.bundle.min.js'
        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];

    public $jsOptions = [
        'position' => View::POS_HEAD, // Load JS in <head>
    ];
}
