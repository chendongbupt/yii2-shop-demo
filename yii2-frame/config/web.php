<?php

$params = require(__DIR__ . '/params.php');

$config = [
//    'defaultRoute' => 'temp-test',
    'modules' => [
//        'demo' => 'app\module\Demo',
        'demo' => 'app\module\demo\Demo',
        'admin'=> 'app\module\admin\Admin'
    ],
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'KdsIbTIrv6kIPFMV6tRfyk9JrPXe4nDB',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
//        'urlManager' => [
//            'enablePrettyUrl' => true,    //启动美化
//            'showScriptName' => true,   //禁用index.php
//            'rules' => [
//                "<controller:\w+>/<action:\w+>/<id:\d+>"=>"<controller>/<action>",
//                "<controller:\w+>/<action:\w+>"=>"<controller>/<action>",
//                'suffix' => '.html'
//            ]
//        ],
        'view' => [
            'class' => 'yii\web\View',
            'renderers' => [
                'tpl' => [
                    'class' => 'yii\smarty\ViewRenderer',
                    //'cachePath' => '@runtime/Smarty/cache',
                ],
//                'twig' => [
//                    'class' => 'yii\twig\ViewRenderer',
//                    'cachePath' => '@runtime/Twig/cache',
//                    // Array of twig options:
//                    'options' => [
//                        'auto_reload' => true,
//                    ],
//                    'globals' => ['html' => '\yii\helpers\Html'],
//                    'uses' => ['yii\bootstrap'],
//                ]
            ]
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
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
        'db' => require(__DIR__ . '/db.php'),
    ],

    'params' => $params
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
