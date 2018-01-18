<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class PublicAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'public/css/owl.carousel.min.css',
        'public/css/owl.theme.default.min.css',
        'public/css/jquery-ui.min.css',
    ];
    public $js = [
        'public/js/owl.carousel.min.js',
        'public/js/owl.carousel.js',
        'public/js/jquery-ui.min.js',
        'public/js/script.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
