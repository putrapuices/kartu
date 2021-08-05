<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Keterangan;
use backend\models\Pendidikan;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\KeteranganSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


$this->title = 'Kelola Data Pencaker Yang Ditempatkan';
$this->params['breadcrumbs'][] = $this->title;

$tombol = '{penempatan}  ';
$cariketerangan = Keterangan::find()
        -> where(['keterangan_pendidikanstatus'=> 3])->all();
$tgl =Yii::$app->formatter->asDatetime('now', 'php:Y-m-d');
$caripendidikan = Pendidikan::find()
        -> where(['>=','pendidikan_datehapus',$tgl])->all();

$cellData = [];
  foreach($caripendidikan as $seanse){

                 $cellData[] = $seanse->pendidikan_datehapus;


            }

// var_dump($cellData>=$tgl);die();


       // if ($tgl== $caripendidikan) {
       //      echo "sama <br/>";
       //  }elseif ($tgl>= $caripendidikan) {
       //      echo"Besar";
            
       //  }

       
// $tglhapus =Yii::$app->formatter->asDatetime(strtotime($caripendidikan->pendidikan_datehapus), "php:Y-m-d");

// $cellData = [];

//             foreach($tgl as $seanse){

//                  $cellData[] = $seanse->pendidikan_datehapus;

//                  // $cellData[] = $seanse->room->number_room;

//             }
            // return implode(', ', $cellData);

        // var_dump($seanse->pendidikan_datehapus);die();

?>
<div class="keterangan-index">


    <p>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Menu Penempatan  Pencaker</h3>
              <div class="box-tools pull-right">
              <p>
        <!-- ?= Html::a('TAMABAH AKUN PENCAKER', ['cek'], ['class' => 'glyphicon glyphicon-user btn btn-success']) ?> -->
    </p>
</div>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
         'summary'=>'',
         // 'layout'=>"{items}\n{summary}\n{pager}",
'options' => ['style' => 'overflow-x:scroll;width:100%'],
        'columns' => [
             ['class' => 'yii\grid\SerialColumn',
                'header'=> 'NO',
                'headerOptions' => ['style'=>'text-align:center; font-weight: normal;white-space: normal;color:#3c8dbc;font-size: 15pt;'],
        
            ],

            // 'keterangan_id',
               [
            'label' => 'NAMA',                
            'attribute'=>'id_daftar',
              // 'contentOptions' => ['style' => 'width: 4%; background-color:#f3d8d8;'],
              'contentOptions' => ['style' => 'width: 20%; '],
              'headerOptions' => ['style'=>'font-weight: normal; text-align:center;font-size: 15pt;'], 
             'value'=>'keterangan.keterangan_nama',
               ],
            

            [
            'label' => 'NIK',                
            'attribute'=>'id_daftar',
             'value'=>'id_daftar',
             'contentOptions' => ['style' => 'width: 20%; '],
              'headerOptions' => ['style'=>'font-weight: normal; text-align:center;font-size: 15pt;'], 
               ],
 
                   [
            'label' => 'JENIS KELAMIN',                
            'attribute'=>'id_daftar',
            'contentOptions' => ['style' => 'width: 20%; '],
              'headerOptions' => ['style'=>'font-weight: normal; text-align:center;font-size: 15pt;'], 
             'value'=>'keterangan.keterangan_nama',
             'value'=>'keterangan.keterangan_jkl',
            

                            'value' => function($model){

                   if ($model->keterangan->keterangan_jkl == 1) {
                                 return 'Laki - Laki';
                             } elseif ($model->keterangan->keterangan_jkl == 2) { 
                                 return 'Perempuan';

                             }

                         // $stat = $model->keterangan_jkl;
                         // return $stat;
                     },
               ],
                [
            'label' => 'ALAMAT',                
            'attribute'=>'id_daftar',
            'contentOptions' => ['style' => 'width: 20%; '],
              'headerOptions' => ['style'=>'font-weight: normal; text-align:center;font-size: 15pt;'], 
             'value'=>'keterangan.keterangan_nama',
             'value'=>'keterangan.keterangan_alamat',
               ],

                [
            'label' => 'Tanggal Hapus',                
            'attribute'=>'pendidikan_datehapus',
             'value'=>'pendidikan_datehapus',
            'format' => ['date', 'php:d/m/Y'],

             'contentOptions' => ['style' => 'width: 20%; '],
              'headerOptions' => ['style'=>'font-weight: normal; text-align:center;font-size: 15pt;'], 
               ],

                [
                    'attribute' => 'pendidikan_status',
                    'filter'=>array('1' => 'PENCAKER', '2' => 'Ditempatkan', '3' => 'Non-AKtif'),
                    'filterInputOptions' => [
                       'class' => 'form-control',         
                       'prompt' => 'Pilih Status'
                    ],
                    'value' => function($model){
                        $stat = $model->getstatusLabel();
                        return Html::tag(
                            'span', $stat['pendidikan_status'], ['class' => $stat['class']]
                        );
                    },
                    'format' => 'html'
                ],

//                                 [
//                                 'format'=>'raw',
//                                 'value' => function($data){
// $tgl =Yii::$app->formatter->asDatetime('now', 'php:Y-m-d');
// $caripendidikan = Pendidikan::find()
//          ->orderBy(['pendidikan_id'=>SORT_ASC])
//         ->all();

//         $angka = 1;
//         foreach ($caripendidikan as $index => $item) {
// $angka++;
//         }
// // var_dump($angka);die;
//         $cellData = [];
//   foreach($caripendidikan as $seanse){

//                  $cellData[] = $seanse->pendidikan_datehapus;


//             }
//                                     if ($caripendidikan>=$tgl ) {
//                                        return
//                                     Html::a('<span class="glyphicon glyphicon-eye-open"></span> View', ['view','id'=>$data->id_daftar], ['title' => 'view','class'=>'btn btn-success']);
//                                 }elseif($data->pendidikan_datehapus!=$tgl){
//                                         return "salah";
//                                 }
//                                    //  }elseif ($data->keterangan_pendidikanstatus ==2) {
//                                    //      return
//                                    // Html::a('<span class="glyphicon glyphicon-pencil"></span> Update', ['update','id'=>$data->id_daftar], ['title' => 'edit','class'=>'btn btn-info']);
//                                    //  }elseif ($data->keterangan_pendidikanstatus ==3) {
//                                    //     return
//                                    //   Html::a('<span class="glyphicon glyphicon-trash"></span> Delete', ['delete', 'id' => $data->id_daftar], [
//                                    //      'class' => 'btn btn-danger',
//                                    //      'data' => [
//                                    //          'confirm' => 'Are you sure you want to delete this item?',
//                                    //          'method' => 'post',
//                                    //      ],
//                                    //  ]);
//                                    //  }
//                                 // return
//                                 //     Html::a('<span class="glyphicon glyphicon-eye-open"></span> View', ['view','id'=>$data->id_daftar], ['title' => 'view','class'=>'btn btn-success']).' '.
//                                 //     Html::a('<span class="glyphicon glyphicon-pencil"></span> Update', ['update','id'=>$data->id_daftar], ['title' => 'edit','class'=>'btn btn-info']).' '.
//                                 //     Html::a('<span class="glyphicon glyphicon-trash"></span> Delete', ['delete', 'id' => $data->id_daftar], [
//                                 //         'class' => 'btn btn-danger',
//                                 //         'data' => [
//                                 //             'confirm' => 'Are you sure you want to delete this item?',
//                                 //             'method' => 'post',
//                                 //         ],
//                                 //     ]);
//                                 }
//                             ],

                 //                  [
 //            'attribute'=>'keterangan.keterangan_jkl',
 // // 'value' => '<span class="red">'.$model->keterangan->keterangan_jkl.'</span>',
 //             // 'label' => 'Jenis Kelamin',
 //             // 'header'=>'Jenis Kelamin',
 //             // 'format' => 'raw',
 //           'filter'=>array('1' => 'Pencaker', '2' => 'Penempatan', '3' => 'Non-Aktif'),
 //                    'filterInputOptions' => [
 //                       'class' => 'form-control',         
 //                       'prompt' => 'Pilih Status'
 //                    ],
 //             // 'filter' => Html::activeDropDownList($searchModel, 'keterangan', yii\helpers\ArrayHelper::map(Keterangan::find()->one(), 'keterangan_id', 'keterangan_jkl'), ['class' => 'form-control', 'prompt' => '---']),
          
 //             // 'value' => function($model){

 //             //       if ($model->keterangan->keterangan_jkl == 1) {
 //             //                     return '<span class="red">'.'Laki - Laki'.'</span>' ;
 //             //                 } elseif ($model->keterangan->keterangan_jkl == 2) { 
 //             //                     return '<span class="red">'.'Perempuan'.'</span>' ;

 //             //                 }

 //             //             // $stat = $model->keterangan_jkl;
 //             //             // return $stat;
 //             //         },
 //             ],

 //                   [
 //            'label' => 'NIK',                
 //            'attribute'=>'id_daftar',
 //             'value'=>'keterangan.keterangan_jkl',
            

 //                            'value' => function($model){

 //                   if ($model->keterangan->keterangan_jkl == 1) {
 //                                 return 'Laki - Laki';
 //                             } elseif ($model->keterangan->keterangan_jkl == 2) { 
 //                                 return 'Perempuan';

 //                             }

 //                         // $stat = $model->keterangan_jkl;
 //                         // return $stat;
 //                     },
 //               ],

 // [
 //            'attribute' => 'keterangan.keterangan_jkl',
 //            'label' => 'Role',
 //            'filter' => Keterangan::dropdown(),
 //            'value' => function($model, $index, $dataColumn) {
 //                // more optimized than $model->role->name;
 //                $roleDropdown = Keterangan::dropdown();

 //                     if ($model->keterangan->keterangan_jkl == 1) {
 //                                 return $roleDropdown.'Laki - Laki';
 //                             } elseif ($model->keterangan->keterangan_jkl == 2) { 
 //                                 return$roleDropdown.'Perempuan';

 //                             }
 //                // return $roleDropdown['keterangan.keterangan_jkl'];
 //            },
 //        ],
 //                  [
 //            'attribute'=>'keterangan.keterangan_jkl',
 // // 'value' => '<span class="red">'.$model->keterangan->keterangan_jkl.'</span>',
 //             // 'label' => 'Jenis Kelamin',
 //             // 'header'=>'Jenis Kelamin',
 //             // 'format' => 'raw',
 //           'filter'=>array('1' => 'Pencaker', '2' => 'Penempatan', '3' => 'Non-Aktif'),
 //                    'filterInputOptions' => [
 //                       'class' => 'form-control',         
 //                       'prompt' => 'Pilih Status'
 //                    ],
 //             // 'filter' => Html::activeDropDownList($searchModel, 'keterangan', yii\helpers\ArrayHelper::map(Keterangan::find()->one(), 'keterangan_id', 'keterangan_jkl'), ['class' => 'form-control', 'prompt' => '---']),
          
 //             // 'value' => function($model){

 //             //       if ($model->keterangan->keterangan_jkl == 1) {
 //             //                     return '<span class="red">'.'Laki - Laki'.'</span>' ;
 //             //                 } elseif ($model->keterangan->keterangan_jkl == 2) { 
 //             //                     return '<span class="red">'.'Perempuan'.'</span>' ;

 //             //                 }

 //             //             // $stat = $model->keterangan_jkl;
 //             //             // return $stat;
 //             //         },
 //             ],

//                [ 'attribute'=>'keterangan_nama',
//   'visible' => ($rowvisible==3) ,
//   'header' => 'Some Header',  
//   'contentOptions' => ['style' => 'width: 4%; background-color:#f3d8d8;'],
//   'headerOptions' => ['style'=>'font-weight: normal; font-size: 8pt;'],  
//   // 'value'=>    function ($model) {some arithmetic}
// ],
            // 'id_user',
           
            
            //'akun_status',

            // ['class' => 'yii\grid\ActionColumn'],
//                 [
//             'label' => 'Tempat Lahir',                
//             'attribute'=>'keterangan_tempat',
//                ],
//                [
//             'label' => 'Tanggal Lahir',                
//             'attribute'=>'keterangan_tgl',
//             'format' => ['date', 'php:d/m/Y']
//                ],
//                    [
//             'attribute'=>'keterangan_jkl',
//             // 'value' => '<span class="red">'.$model->keterangan_jkl.'</span>',
//             'label' => 'Jenis Kelamin',
//             'format' => 'raw',
//             'value' => function($model){

//                   if ($model->keterangan_jkl == 1) {
//                                 return 'Laki - Laki' ;
//                             } elseif ($model->keterangan_jkl == 2) { 
//                                  return 'Perempuan' ;
//                             }

//                         $stat = $model->keterangan_jkl;
//                         return $stat;
//                     },
//             ],
//                  [
//                     'attribute' => 'keterangan_pendidikanstatus',
//                     'label' => 'Status Pencaker',
//                     'filter'=>array('1' => 'Pencaker', '2' => 'Penempatan', '3' => 'Non-Aktif'),
//                     'filterInputOptions' => [
//                        'class' => 'form-control',         
//                        'prompt' => 'Pilih Status'
//                     ],
//                     'value' => function($model){
//                         $stat = $model->getstatusLabel();
//                         return Html::tag(
//                             'span', $stat['keterangan_pendidikanstatus'], ['class' => $stat['class']]
//                         );
//                     },
//                     'format' => 'html'
//                 ],

//                 [
//                                 'format'=>'raw',
//                                 'value' => function($data){
// $tgl =Yii::$app->formatter->asDatetime('now', 'php:Y-m-d');
// $caripendidikan = Pendidikan::find()
//         -> where(['>=','pendidikan_datehapus',$tgl])->all();

//         $cellData = [];
//   foreach($caripendidikan as $seanse){

//                  $cellData[] = $seanse->pendidikan_datehapus;


//             }
//                                     if ($cellData>=$tgl ) {
//                                        return
//                                     Html::a('<span class="glyphicon glyphicon-eye-open"></span> View', ['view','id'=>$data->id_daftar], ['title' => 'view','class'=>'btn btn-success']);
//                                 }elseif($cellData!=$tgl){
//                                         return "salah";
//                                 }
//                                    //  }elseif ($data->keterangan_pendidikanstatus ==2) {
//                                    //      return
//                                    // Html::a('<span class="glyphicon glyphicon-pencil"></span> Update', ['update','id'=>$data->id_daftar], ['title' => 'edit','class'=>'btn btn-info']);
//                                    //  }elseif ($data->keterangan_pendidikanstatus ==3) {
//                                    //     return
//                                    //   Html::a('<span class="glyphicon glyphicon-trash"></span> Delete', ['delete', 'id' => $data->id_daftar], [
//                                    //      'class' => 'btn btn-danger',
//                                    //      'data' => [
//                                    //          'confirm' => 'Are you sure you want to delete this item?',
//                                    //          'method' => 'post',
//                                    //      ],
//                                    //  ]);
//                                    //  }
//                                 // return
//                                 //     Html::a('<span class="glyphicon glyphicon-eye-open"></span> View', ['view','id'=>$data->id_daftar], ['title' => 'view','class'=>'btn btn-success']).' '.
//                                 //     Html::a('<span class="glyphicon glyphicon-pencil"></span> Update', ['update','id'=>$data->id_daftar], ['title' => 'edit','class'=>'btn btn-info']).' '.
//                                 //     Html::a('<span class="glyphicon glyphicon-trash"></span> Delete', ['delete', 'id' => $data->id_daftar], [
//                                 //         'class' => 'btn btn-danger',
//                                 //         'data' => [
//                                 //             'confirm' => 'Are you sure you want to delete this item?',
//                                 //             'method' => 'post',
//                                 //         ],
//                                 //     ]);
//                                 }
//                             ],
//                             [
// 'attribute'=>'keterangan_jkl',
// 'header'=>'Status',
// 'filter' => ['1'=>'Active', '2'=>'Deactive'],
//  'filterInputOptions' => [
//                        'class' => 'form-control',         
//                        'prompt' => 'Pilih Status'
//                     ],
// 'format'=>'raw',
// 'value' => function($model, $key, $index)
// {

//     $tgl =Yii::$app->formatter->asDatetime('now', 'php:Y-m-d');
// $caripendidikan = Pendidikan::find()
//         -> where(['>=','pendidikan_datehapus',$tgl])->all();

//         $cellData = [];
//   foreach($caripendidikan as $seanse){

//                  $cellData[] = $seanse->pendidikan_datehapus;


//             }

// if($cellData >= $tgl)
// {
// // return '<button class="btn green">Y</button>';
//     return Html::a('<span class="glyphicon glyphicon-eye-open"></span> View', ['view'], ['title' => 'view','class'=>'btn btn-success']);
// }
// else
// {
// return '<button class="btn red">N</button>';
// }
// },
// ],
            
          

                 // [
                 //                'format'=>'raw',
                 //                'value' => function($data){
                 //                return
                 //                    Html::a('<span class="glyphicon glyphicon-eye-open"></span> View', ['view','id'=>$data->id_daftar], ['title' => 'view','class'=>'btn btn-success']).' '.
                 //                    Html::a('<span class="glyphicon glyphicon-pencil"></span> Update', ['update','id'=>$data->id_daftar], ['title' => 'edit','class'=>'btn btn-info']).' '.
                 //                    Html::a('<span class="glyphicon glyphicon-trash"></span> Delete', ['delete', 'id' => $data->id_daftar], [
                 //                        'class' => 'btn btn-danger',
                 //                        'data' => [
                 //                            'confirm' => 'Are you sure you want to delete this item?',
                 //                            'method' => 'post',
                 //                        ],
                 //                    ]);
                 //                }
                 //            ],

 
    //             [

    //     'value' => function($model) {

    //         $cellData = [];

    //         foreach($model->seanses as $seanse){

    //              $cellData[] = $seanse->movie->name;

    //              $cellData[] = $seanse->room->number_room;

    //         }

    //         return implode(', ', $cellData);

    //     },

    // ],
            // 'keterangan_tgl',
            
            //'keterangan_alamat',
            //'keterangan_kel',
            //'keterangan_kec',
            //'keterangan_hp',
            //'keterangan_status',
            //'keterangan_tb',
            //'keterangan_bb',
            //'keterangan_email:email',
            //'id_daftar',

              [
                    'class' => 'yii\grid\ActionColumn',
                    'contentOptions'=>['style'=>'white-space: normal;width:110px;'],
                    'header' => 'Aksi',
                    'template' => $tombol,
                    'buttons' => [
                        'penempatan' => function ($url, $model, $key){
                            return Html::a('<i class="fa fa-handshake-o"></i>', ['penempatan','id'=>$model->id_daftar], [
                                'aria-label' => 'Penempatan Pencaker',
                                'title'=>'Penempatan Pencaker',
                                'style'=>'height:35px;width:40px;margin-bottom:5px;', 
                                'class' => 'btn btn-success', 
                                 'data-confirm'=>'Data Pencaker berubah ke penempatan?',
                                'data-method'=>'post',
                                ]);
                        },
                        'penghapusan' => function ($url, $model, $key){
                            return Html::a('<i class="glyphicon glyphicon-ban-circle"></i>', ['nonaktif','id'=>$model->id_daftar], [
                                'aria-label' => 'Non-Aktif Data Pencaker',
                                'title'=>'Non-Aktif Data Pencaker',
                                'style'=>'height:35px;width:40px;margin-bottom:5px;', 
                                'class' => 'btn btn-primary', 
                                 'data-confirm'=>'Pencaker di Non-Aktifkan?',
                                'data-method'=>'post',
                                ]);
                        },
                       
                     
                    ]
                ],
        ],
    ]); ?>
</div>

</div>
