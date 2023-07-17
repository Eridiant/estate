<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => \yii\caching\FileCache::class,
        ],
        'mailer' =>[
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false,
        ],
        'languageSelector' => [
            'class' => 'common\components\LanguageSelector',
        ],
        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\DbMessageSource',
                    // исходный язык, на котором изначально
                    // написаны фразы в приложении
                    'sourceLanguage' => 'ru-RU',
                    'sourceMessageTable' => '{{%lg_source_message}}',
                    'messageTable' => '{{%lg_message}}'
                ],
                // 'on missingTranslation' => ['common\components\TranslationEventHandler', 'handleMissingTranslation']
            ],
        ],
    ],
];
