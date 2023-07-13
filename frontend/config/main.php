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
    'bootstrap' => ['log', 'languageSelector'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'baseUrl' => '',
            'csrfParam' => '_csrf-frontend',
            'parsers' => [
                'application/json' => [
                    'class' => \yii\web\JsonParser::class,
                    'asArray' => true,
                ],
            ],
        ],
        'assetManager' => [
            'bundles' => [
                'yii\web\JqueryAsset' => [
                    'js'=>[]
                ],
                'yii\bootstrap\BootstrapPluginAsset' => [
                    'js'=>[]
                ],
                'yii\bootstrap\BootstrapAsset' => [
                    'css' => []
                ]
            ]
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
        'assetManager' => [
            'appendTimestamp' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => \yii\log\FileTarget::class,
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '' => 'site/index',
                'about' => 'site/about',
                'contact' => 'site/contact',
                // 'amo' => 'site/amo',
                'amo-dda' => 'site/amo-dda',
                'test' => 'site/test',
                // '<controller>' => '<controller>/index',
                // '<controller:\w+>' => '<controller>/index',
                // '<controller:\w+>/<id:\d+>' => '<controller>/view',
                // '<controller:\w+>/<slug:[\w-]+>' => '<controller>/view',
                // '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                // '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                'site/set-locale' => 'site/set-locale',
            ],
        ],
        'languageSelector' => [
            'class' => 'common\components\LanguageSelector',
        ],
    ],
    'as locale' => [
        'class' => common\behaviors\LocaleBehavior::class,
        'enablePreferredLanguage' => true
    ],
    'params' => $params,
];
