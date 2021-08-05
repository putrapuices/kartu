<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Keterangan;
use backend\models\Pendidikan;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\KeteranganSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


$this->title = 'Daftar Data Pencaker Yang Harus Di Non-Aktifkan';
$this->params['breadcrumbs'][] = $this->title;

$tombol = ' {penghapusan}  ';
$cariketerangan = Keterangan::find()
        -> where(['keterangan_pendidikanstatus'=> 3])->all();
$tgl =Yii::$app->formatter->asDatetime('now', 'php:Y-m-d');
$caripendidikan = Pendidikan::find()
        -> where(['>=','pendidikan_datehapus',$tgl])->all();

$cellData = [];
  foreach($caripendidikan as $seanse){

                 $cellData[] = $seanse->pendidikan_datehapus;


            }


?>
<div class="keterangan-index">


    <p>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Menu Aksi  Non-Aktifkan Pencaker</h3>
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
                                   
//                                 }
//                             ],



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
