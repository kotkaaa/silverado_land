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
        'js/libs/inputmask/dist/inputmask.min.js',
        'js/libs/inputmask/dist/jquery.inputmask.min.js',
        'js/libs/inputmask/dist/bindings/inputmask.binding.js',
        'js/love.js'
    ];

    /** @var string[] */
    public $depends = [
        AppAsset::class,
    ];
}