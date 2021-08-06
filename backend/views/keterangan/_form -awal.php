<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\DetailView;
use backend\models\Capil;
use backend\models\Keterangan;
use backend\models\Desa;
use backend\models\Lokasi;
use backend\models\Pendidikan;
use backend\models\Daftar;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;
use yii\helpers\Url;

// use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Keterangan */
/* @var $form yii\widgets\ActiveForm */
if (Yii::$app->user->identity->level == 40) {
  $idname = Yii::$app->user->identity->username;
 } elseif (Yii::$app->user->identity->level == 1) { 
  $idname = $modelid;

}
$modelapil  = Capil::find()
-> where(['capil_nik'=> $idname])->one();
// var_dump($modelapil);die;
$modelketerangan = Keterangan::find()
-> where(['id_daftar'=> $idname])->one();




$cariforo = Lokasi::find()
-> where(['id_daftar'=> $idname])->one();

?>

<div class="keterangan-form">
<div class="col-md-2">
                    <center>
                     <?php if (!$cariforo) { ?>  
                    <img class="profile-user-img img-responsive img" src="<?php echo Url::to('@web/files/foto/')?>" alt="Foto Kakak Belum Ada " style="width: 100%">
                    <?php } elseif($cariforo->lokasi_foto) { ?>
                    <img class="profile-user-img img-responsive img" src="<?php echo Url::to('@web/files/foto/'.$cariforo->lokasi_foto)?>" alt="Foto Kakak Belum Di Upload" style="width: 100%">
                    <?php } ?>
                    </center>
                </div>

                <div class="col-md-2">
             <div class="box-tools pull-right">  
<?php if ($cariforo) { ?>
           <a class="btn btn-success" href="perbaharuifoto/?id=<?=$cariforo->lokasi_id?>" title="Perbaharui Photo" style="height:35px;margin-bottom:5px;margin-left:5px;margin-right:5px;">
                <i class="glyphicon glyphicon-pencil"> 
               Perbaharui Photo
                </i>
                </a>
              <?php } ?>    
            </div>
        </div>
        
   <?= DetailView::widget([
        'model' => $modelketerangan,
        'attributes' => [
            // 'keterangan_id',
            'keterangan_nama',
            'keterangan_tempat',
            [
            'label' => 'NIK',                
            'attribute'=>'id_daftar',
        ],
            

              [
            'label' => 'Tanggal Lahir',                
            'attribute'=>'keterangan_tgl',
            'value' => function($model){

                   return Yii::$app->formatter->asDateTime($model->keterangan_tgl, 'php:d/m/Y');
                    },
            // 'capil_tgl_lhr:date',  // = time() for 09/01/2004
            ],
          

                 [
            'attribute'=>'keterangan_jkl',
            // 'value' => '<span class="red">'.$model->keterangan_jkl.'</span>',
            'label' => 'Jenis Kelamin',
            'format' => 'raw',
            'value' => function($model){

                  if ($model->keterangan_jkl == 1) {
                                return 'Laki - Laki' ;
                            } elseif ($model->keterangan_jkl == 2) { 
                                 return 'Perempuan' ;
                            }

                        $stat = $model->keterangan_jkl;
                        return $stat;
                    },
            ],

            [
                'label'=>       'Alamat',
                'attribute' => 'keterangan_alamat',
            ],
             

                    [
                'label'     =>    'kelurahan/Desa',
                'format' => 'text',
                'attribute' =>    'keterangan_kec',
                // 'value'=>$model->getvoucher(),
                   // 'value' => function($model){
 // 'value' => implode(\yii\helpers\ArrayHelper::map($model->desa, 'kd_desa', 'nama_desa')),
'value' =>
function($model){

  return implode(\yii\helpers\ArrayHelper::map(Desa::find()
                            ->where(['id_kecamatan'=>$model->keterangan_kec,'kd_desa'=>$model->keterangan_kel])
                            ->all(), 'desa_id', 'nama_desa'));
//   if ($model->keterangan_kec == 2) {
//  return implode(\yii\helpers\ArrayHelper::map(Desa::find()
//                             ->where(['id_kecamatan'=>$model->keterangan_kec,'kd_desa'=>$model->keterangan_kel])
//                             ->all(), 'desa_id', 'nama_desa'));


// }else  if ($model->keterangan_kec == 3) {
//  return implode(\yii\helpers\ArrayHelper::map(Desa::find()
//                             ->where(['id_kecamatan'=>$model->keterangan_kec,'kd_desa'=>$model->keterangan_kel])
//                             ->all(), 'desa_id', 'nama_desa'));


// }else  if ($model->keterangan_kec == 4) {
//  return implode(\yii\helpers\ArrayHelper::map(Desa::find()
//                             ->where(['id_kecamatan'=>$model->keterangan_kec,'kd_desa'=>$model->keterangan_kel])
//                             ->all(), 'desa_id', 'nama_desa'));


// }else{
//   return $model->desa->nama_desa;
// }
                  
                  
            
},
        ],   
            [
                'label'     =>    'Kecamatan',
                'attribute' =>    'kec.nama_kec',

//                   'value' => function($model){

// 'data' => ArrayHelper::map(PerangkatDesa::find()
//                             ->where(['desa'=>$adm->id_KEL])
//                             ->all(), 'jabatan', 'jabatan')

//                   }
                 //       if ($model->keterangan_kec == 1) {
                 // ArrayHelper::map(Desa::find()
                 //                    -> where(['id_kecamatan'=> 1]));
                 //                    //->one());
                 //            }
                 //            // elseif ($model->keterangan_kec == 2) { 
                 //                 // return ArrayHelper::map(Desa::find()
                 //                 //    -> where(['id_kecamatan'=> 2])->one());
                 //            // } 
                 //    },

                  // 'value' => function($model){

                  // if ($model->keterangan_kec == 1) {
                  //               return 'Laki - Laki' ;
                  //           } elseif ($model->keterangan_kec == 2) { 
                  //                return 'Perempuan' ;
                  //           }

                  //       $stat = $model->keterangan_jkl;
                  //       return $stat;
                  //   },
// 'widgetOptions' => [
//                     // 'data'=>ArrayHelper::map(LUTargetSpecies::find()->orderBy('DisplayName')->asArray()->all(), 'LookupID', 'DisplayName'),
//                    'data'=>ArrayHelper::map(Desa::find()-> where(['keterangan_kec'=> 2])) 
//                 ]

               // 'value' => implode(\yii\helpers\ArrayHelper::map($model->desa, 'id', 'name_hobby')),
                 // 'value' => function($data) {
                 //       return $data->getDesa()->kd_desa;
                 //   }
            ],
         
     

          // array(
          //       'format' => 'text',
          //       'value'=>$model->getvoucher(),
          //       // 'attribute'=>'voucher_category_id',
          //       ), 

       
            // 'keterangan_hp',
            // 'keterangan_status',
            // 'keterangan_tb',
            // 'keterangan_bb',
            // 'keterangan_email:email',
        ],
    ]) ?>
<?php
if (Yii::$app->user->identity->level == 40) {

 $idname = Yii::$app->user->identity->username;
$carilokasi = Lokasi::find()
             -> where(['id_daftar'=> $idname])
             ->one();
}elseif (Yii::$app->user->identity->level == 1) {
              $carilokasi = Lokasi::find()
             -> where(['id_daftar'=> $modelid])
             ->one();
             }
// var_dump($carilokasi==true);die();

?>
 <div class="box box-solid box-warning">    
        <div class="box-header">
            <!-- <h3 class="box-title">/*Biodata Siswa :*/ <? /*=$model->bio_nama*/?></h3> -->
            <?php if($carilokasi):?>
              <?php if (Yii::$app->user->identity->level == 40) {?>
             <a href="kartu" target="_blank" class="btn box-solid box-danger"style="font-size:24px;color:black"><i class="fa fa-print"></i> <b> Print Depan Kartu AK I</b></a>
             <a href="kartubelakang" target="_blank" class="btn box-solid box-danger"style="font-size:24px;color:black"><i class="fa fa-print"></i> <b> Print Belakang Kartu AK I</b></a>

            <?php }elseif (Yii::$app->user->identity->level == 1) {?>
              <a href="kartupencaker?id=<?=$modelid?>" target="_blank" class="btn box-solid box-danger"style="font-size:24px;color:black"><i class="fa fa-print"></i> <b> Print Depan Kartu AK I</b></a>
             <a href="kartubelakangpencaker?id=<?=$modelid?>" target="_blank" class="btn box-solid box-danger"style="font-size:24px;color:black"><i class="fa fa-print"></i> <b> Print Belakang Kartu AK I</b></a>
           <?php }?>
           <?php endif?>
       </div>
     </div>
<?php if (!$carilokasi){?>
    <?php $form = ActiveForm::begin(); ?>

    
    <div class="row">

<div class="col-md-6">
    <?= $form->field($model, 'keterangan_hp')->textInput(['autoFocus' => true,'required'=>true,'placeholder'=> 'Ketikan No HP Anda'])->label('Nomor HP') ?>
</div>



<div class="col-md-3" style="line-height: 2em;">

    


                            <?= $form->field($model, 'keterangan_tb')->input('number', ['min' => 0, 'max' => 200,'required'=>true,'start'=>50, 'step' => 1])->label('Tinggi Badan') ?>
</div>

<div class="col-md-3" style="line-height: 2em;">

    

 

                            <?= $form->field($model, 'keterangan_bb')->input('number', ['min' => 0, 'max' => 200,'required'=>true,'start'=>50, 'step' => 1])->label('Berat Badan') ?>
</div>



  <div class="col-md-6">
       <div class="form-group">
     <label class="sr-only" for="example">Email</label>   


 <?php echo $form->field($model, 'keterangan_email',
 [ 'template' =>

       '{label}<div class="input-group">
       
       <span class="input-group-addon">
       <i class="fa fa-envelope-o"></i>
       </span>{input}
       </div>
       '], 
        [
           'inputOptions' => ['autofocus' => 'autofocus', 'class' => 'form-control transparent']
     ])->textInput()->input('email', ['placeholder' => "Masukkan Email Anda"])->label("Email"); ?>
         

</div></div>

       
        <div class="col-md-4">

    <!-- ?= $form->field($model, 'lokasi_upah')->textInput() ?> -->
      <?= $form->field($model, 'keterangan_status', [
    'template' =>'{label}<br/>{input}{error}'
],['active' => true])->radioList(['1'=>'Belum Kawin','2'=>'Kawin'],['tag'=>'div','value'=>true,'required'=>true,'style' => 'display:inline','separator'=>'<br/>']);?>
</div>   
     
                    <hr/>


  
      <div class="col-md-4">

            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Simpan' : 'Perbarui', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                
            </div>

        </div>
</div>
    <?php ActiveForm::end(); ?>

</div>
<?php 

}elseif($carilokasi==true){?>




    


     <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">PENDIDIKAN FORMAL</a></li>
          <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">PEKERJAAN YANG DIINGINKAN</a></li>
          <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="true">PENGALAMAN KERJA</a></li>          
          <li class=""><a href="#tab_4" data-toggle="tab" aria-expanded="true">LOKASI</a></li>          
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="tab_1">
           
              
  


    <?= GridView::widget([
                'dataProvider' => $modelpendidikan,
                // 'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    
                     [
                        'attribute'=>'pendidikan_nemipk',
                        'header'=>'NEM/IPK',
                        'value'=>'pendidikan_nemipk',
                        'contentOptions'=>['style'=>'white-space: normal;'],            
                    ],

                      [
                        'attribute'=>  'id_sekolah',
                        'header'=>'Pendidikan Tertinggi',
                        'value'=>'sekolah.sekolah_nama',
                        'contentOptions'=>['style'=>'white-space: normal;'],            
                    ],
            


                      [
                        'attribute'=>  'id_jurusan',
                        'header'=>'Jurusan',
                        'value'=>'jurusan.jurusan_nama',
                        'contentOptions'=>['style'=>'white-space: normal;'],            
                    ],


                      [
                        'attribute'=>  'pendidikan_keterampilan',
                        'header'=>'Keterampilan',
                        'value'=>'pendidikan_keterampilan',
                        'contentOptions'=>['style'=>'white-space: normal;'],            
                    ],
            

             [
                        'class' => 'yii\grid\ActionColumn',
                        'contentOptions'=>['style'=>'white-space: normal;'],
                        'header' => 'Aksi',
                        'template' =>'{cek-regis}',
                        'buttons' => [
                            'cek-regis' => function ($url, $model, $key){
                                return Html::a('<i class="fa fa-search"></i> Detail', ['lihat','id'=>$model->id_daftar], [
                                    'aria-label' => 'Lihat Detail Pendidikan',
                                    'title'=>'Lihat Detail Pendidikan',
                                    'style'=>'height:35px;margin-bottom:5px;', 
                                    'class' => 'btn btn-success',
                                    'target' => "_blank" 
                                    ]);
                            },
                        ]
                    ],
           
                ],
            ]); ?>
          </div><!-- /.tab-pane -->
          <div class="tab-pane" id="tab_2">
           



    <?= GridView::widget([
                'dataProvider' => $modelpendidikan,
                // 'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    
                     [
                        'attribute'=>'id_jabatan',
                        'header'=>'Jabatan',
                        'value'=>'jabatan.jabatan_nama',
                        'contentOptions'=>['style'=>'white-space: normal;'],            
                    ],

                      [
                        'attribute'=>  'id_pekerjaan',
                        'header'=>'Pekerjaan',
                        'value'=>'pekerjaan.pekerjaan_nama',
                        'contentOptions'=>['style'=>'white-space: normal;'],            
                    ],
            

            
             
        
                ],
            ]); ?>
          </div><!-- /.tab-pane -->
          <div class="tab-pane" id="tab_3">
            <?= GridView::widget([
                'dataProvider' => $modelpengalaman,
                // 'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    
                     [
                        'attribute'=>'pengalaman_jabatan',
                        'header'=>'JABATAN',
                        'value'=>'pengalaman_jabatan',
                        'contentOptions'=>['style'=>'white-space: normal;'],            
                    ],

                      [
                        'attribute'=>  'pengalaman_tugas',
                        'header'=>'URAIAN TUGAS',
                        'value'=>'pengalaman_tugas',
                        'contentOptions'=>['style'=>'white-space: normal;'],            
                    ],

                    [
                        'attribute'=>  'pengalaman_lama',
                        'header'=>'LAMA KERJA',
                        'value'=>'pengalaman_lama',
                        'contentOptions'=>['style'=>'white-space: normal;'],            
                    ],

                    [
                        'attribute'=>  'pengalaman_pemberi',
                        'header'=>'PEMBERI/PENGGUNA',
                        'value'=>'pengalaman_pemberi',
                        'contentOptions'=>['style'=>'white-space: normal;'],            
                    ],             
        
                ],
            ]); ?>
          </div><!-- /.tab-pane -->
          <div class="tab-pane" id="tab_4">
       <?= DetailView::widget([
        'model' => $modellokasi,
        'attributes' => [
            

                 [
            'attribute'=>'lokasi_tempat',
            // 'value' => '<span class="red">'.$model->lokasi_tempat.'</span>',
            'label' => 'Lokasi Pekerjaan Yang Diinginkan',
            'format' => 'raw',
            'value' => function($model){

                  if ($model->lokasi_tempat == 1) {
                                return 'Lokasi Tempat Tinggal (Dalam Negeri)' ;
                            } elseif ($model->lokasi_tempat == 2) { 
                                 return 'Wilayah Lainnnya (Dalam Negeri)' ;
                            }elseif ($model->lokasi_tempat == 3) {
                                 return 'DiLuar Negeri' ;
                              
                            }

                        $stat = $model->lokasi_tempat;
                        return $stat;
                    },
            ],


                [
            'attribute'=>'lokasi_upah',
            // 'value' => '<span class="red">'.$model->lokasi_upah.'</span>',
            'label' => 'Besaranya Upah Yang Diinginkan',
            'format' => 'raw',
            'value' => function($model){

                  if ($model->lokasi_upah == 1) {
                                return '< Rp. 1.000.000' ;
                            } elseif ($model->lokasi_upah == 2) { 
                                 return 'Rp. 1.000.001 - Rp 2.500.000,-' ;
                            }elseif ($model->lokasi_upah == 3) {
                                 return 'Rp. 2.500.001 - Rp. 5.000.000,-' ;
                              
                            }elseif ($model->lokasi_upah == 4) {
                                 return 'Rp. 5.000.000 < Keatas' ;
                              
                            }

                        $stat = $model->lokasi_upah;
                        return $stat;
                    },
            ],
            
             
        ],
    ]) ?>
          </div>
          <!-- /.tab-pane -->

    </div>
</div>
    
        



<?php }?>
