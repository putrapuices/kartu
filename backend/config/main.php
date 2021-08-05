<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',
    'timezone' => 'Asia/Jakarta',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],

    
    // 'modules' => [
    //     'mimin' => [
    //     'class' => '\hscstudio\mimin\Module',
    // ],
    // ],
    // 'modules' => [
    //     'daerah-indonesia' => [
    //         'class' => 'fredyns\daerahIndonesia\Module',
    //     ],
    // ],
     'modules' => [
        'region' => [
            'class' => 'fredyns\region\Module',
        ],
    ],
    'components' => [

    //         'authManager' => [
    //     'class' => 'yii\rbac\DbManager', // only support DbManager
    // ],
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],

    //    'view' => [
    //      'theme' => [
    //          'pathMap' => [
    //             // '@app/views' => '@vendor/dmstr/yii2-adminlte-asset/example-views/yiisoft/yii2-app'
    //             '@app/views' => '@vendor/dmstr/yii2-adminlte-asset/example-views/yiisoft/yii2-app'
    //          ],
    //      ],
    // ],
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
            'baseUrl' => '/advanced/frontend/web/index.php',
            'enablePrettyUrl' => true,
        ],

        'urlManagerFrontend'=>[

            'enablePrettyUrl' => true,

            'class' => 'yii\web\UrlManager',

            'showScriptName'=>false,

            // 'suffix' => '.html',

            'hostInfo' => 'http://localhost/kartu/public/site/be',

            'baseUrl' => 'http://localhost/kartu/public/site/be',

        ],
        
    ],
    'params' => $params,
//         'as access' => [
//      'class' => '\hscstudio\mimin\components\AccessControl',
//      'allowActions' => [
//         // add wildcard allowed action here!
//         'site/*',
//         'gii/*',
//         'debug/*',
//         'mimin/*', // only in dev mode
//     ],
// ],

    
];
