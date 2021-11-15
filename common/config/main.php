<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\DummyCache',
        ],
        'sms' => [
            'class' => \common\components\Turbosms::class,
            'viewPath' => '@frontend/views/sms',
            'sender' => 'SILVERADO',
            'login' => 'fcdkkillthemall',
            'password' => '2c4uk915',
            'logToDb' => false
        ],
        'delivery' => [
            'class' => \common\components\delivery\NovaPoshta::class,
            'key' => 'f5448915db7670b0f15886b76c0da1a8'
        ],
    ],
];
