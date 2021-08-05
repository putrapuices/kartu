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
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],

    //       'authClientCollection' => [
    //     'class' => 'yii\authclient\Collection',
    //     'clients' => [
    //         'google' => [
    //             'class' => 'yii\authclient\clients\GoogleOpenId'
    //         ],
    //     ],
    // ],

        'mailer' => [
        'class' => 'yii\swiftmailer\Mailer',
      
        'useFileTransport' => false,
        'transport' => [
            'class' => 'Swift_SmtpTransport',
            'host' => 'smtp.gmail.com',
            'username' => 'cobakirim82@gmail.com',
            'password' => 'cobakirimlagi',
            'port' => '465',
            'encryption' => 'ssl',
                        ],
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
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],

        'urlManagerBackend' => [
            'class' => 'yii\web\urlManager',
            'baseUrl' => '/kartu/public/be',
            'enablePrettyUrl' => true,
        ],
        
    ],
    'params' => $params,
];


