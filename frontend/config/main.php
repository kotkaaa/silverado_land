<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'defaultRoute' => 'love/index',
    'sourceLanguage' => 'ua',
    'bootstrap' => ['log', 'languages'],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'baseUrl' => '',
            'class' => 'common\components\Request'
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'i18n' => [
            'translations' => [
                'app' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    //'forceTranslation' => true,
                    'basePath' => '@frontend/messages',
                    'fileMap' => [
                        'app' => 'love.php'
                    ]
                ],
            ],
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'class' => 'common\components\UrlManager',
            'rules' => [
                'languages' => 'languages/default/index', //для модуля мультиязычности
            ],
        ],
    ],
    'modules' => [
        'languages' => [
            'class' => 'common\modules\languages\Module',
            'languages' => [
                'Русский' => 'ru',
                'Українська' => 'uk',
            ],
            'default_language' => 'ru',
            'show_default' => false,
        ]
    ],
    'params' => $params,
];
