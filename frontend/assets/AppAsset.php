<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        'css/main.css',
    ];
    public $js = [
        'js/jquery.min.js',
        'js/jquery.dropotron.min.js',
        'js/skel.min.js',
        'js/skel-viewport.min.js',
        'js/util.js',
        'js/dev.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
