<?php
return [
  'aliases' => [
    '@bower' => '@vendor/bower-asset',
    '@npm'   => '@vendor/npm-asset',
  ],

  
  'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
  'components' => [
    'authManager' => [
        'class' => 'yii\rbac\DbManager', // only support DbManager
      ],

          'i18n' => [
      'translations' => [
                // fallback configuration. all missing translation would fall to this setting
        '*' => [
          'class' => 'yii\i18n\PhpMessageSource',
        ],
      ],
    ],

  // 'authManager' => [
  //           // 'class' => 'yii\rbac\PhpManager', // or use 'yii\rbac\DbManager'
  //           'class' => 'yii\rbac\DbManager', // or use 'yii\rbac\DbManager'
  //       ]

        //  'authManager' => [
        //     // 'class' => 'yii\rbac\PhpManager', // or use 'yii\rbac\DbManager'
        //     'class' => 'yii\rbac\DbManager', // or use 'yii\rbac\DbManager'
        // ]
    ],
   //  'as access' => [
   //      'class' => 'mdm\admin\components\AccessControl',
   //      'allowActions' => [
   //      	'site/*',
   //          'admin/*', // add or remove allowed actions to this list
   //          'admin',
			// 'admin/route',
			// 'admin/permission',
			// 'admin/menu',
			// 'admin/role',
			// 'admin/assignment',
   //      ]
   //  ],

    


    //  'modules' => [
    //     'admin' => [
    //         'class' => 'mdm\admin\Module',
    //         'layout' => 'left-menu', // avaliable value 'left-menu', 'right-menu' and 'top-menu'
    //         'controllerMap' => [
    //              'assignment' => [
    //                 'class' => 'mdm\admin\controllers\AssignmentController',
    //                 'userClassName' => 'backend\models\User',
    //                 'idField' => 'user_id'
    //             ]
    //         ],
    //         'menus' => [
    //             'assignment' => [
    //                 'label' => 'Grand Access' // change label
    //             ],
    //             'route' => null, // disable menu
    //         ],
    //     ]

    // ],




];
