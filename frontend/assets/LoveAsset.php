<?php

namespace frontend\assets;

/**
 * Class LoveAsset
 * @package frontend\assets
 */
class LoveAsset extends \yii\web\AssetBundle
{
    /** @var string[] */
    public $css = [
        'css/love.css'
    ];

    /** @var string[] */
    public $js = [
        'js/libs/locomotive-scroll/dist/locomotive-scroll.min.js',
        'js/love.js'
    ];

    /** @var string[] */
    public $depends = [
        AppAsset::class,
    ];
}