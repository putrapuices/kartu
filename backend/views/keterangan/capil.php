<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\DetailView;
use yii\data\ActiveDataProvider;
use backend\models\Akun;
use yii\grid\GridView;
use common\models\User;



/* @var $this yii\web\View */
/* @var $model frontend\models\Reqdukcapil */
/* @var $form yii\widgets\ActiveForm */

// var_dump($model);die();
$idname = $model->capil_nik;
$modelakunnya = new ActiveDataProvider([
            'query' => Akun::find()->where(['id_daftar'=> $idname])

        ]);
$rowvisible = 0;


$user = User::find()->orderBy(['id'=> SORT_DESC])->one();



$this->title = 'Pendaftaran AKUN';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="capil-form">


  
<div class="alert alert-success alert-dismissable">
         <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
  <?= Yii::$app->session->getFlash('msg') ?>
    </div>


 

<div class="reqdukcapil-form">

    <?php $form = ActiveForm::begin(); ?>
<div class="box">
            <div class="box-header with-border">
                <div class="box box-Danger">

<div class="col-md-6" >  
    <?= $form->field($model, 'capil_nik')->textInput(['autoFocus' => true,'required'=>true,'placeholder'=> 'NIK PENCAKER'])->label('NIK PENCAKER') ?>
</div>
<div class="col-md-6" >  
    <!-- ?= $form->field($model, 'capil_nik')->textInput(['autoFocus' => true,'required'=>true,'placeholder'=> 'NIK PENCAKER'])->label('NIK PENCAKER') ?> -->
</div>

<div class="col-md-4">

            <div class="form-group">
                <!-- ?= Html::submitButton($model->isNewRecord ? 'CARI NIK', ['class' => $model->isNewRecord ? 'btn btn-info glyphicon glyphicon-search' ]) ?> -->
                
            </div>

        </div>

       <div class="row">
                <div class="col-lg-6">
                    <div class="box-footer">
                    <?= Html::submitButton('CARI NIK',['class' => 'btn btn-info glyphicon glyphicon-search']) ?>
                    </div>
                </div>
        </div>

    <?php ActiveForm::end(); ?>

</div>
<div class="site-about">
    	
   

 <?php if ( $model->capil_no_kab==77) { ?>

        <div class="capil-view">




     <?= GridView::widget([
        'dataProvider' => $modelakunnya,
        'summary' => '',
        // 'filterModel' => $searchModel,
        // 'emptyCell'=>'-',
    // 'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => ''],  //Hide "not set" fields.
    // 'tableOptions' => ['class' => 'table'],
    // 'options' => ['style' => 'font-size: 1.2em;'],
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],

            // 'akun_id',

                    [
                        'attribute'=>  'id_daftar',
                        'header'=>'NIK/USER',
                        'value'=>'id_daftar',
                        'contentOptions'=>['style'=>'white-space: normal; background-color:#f3d8d8;'], 
                      'headerOptions' => ['style'=>'font-weight: normal; font-size: 15pt;'],            

                    ],
             [
                        'attribute'=>   'akun_pass',
                        'header'=>'PASSWORD',
                        'value'=> 'akun_pass',
                        'contentOptions' => ['style' => 'width: 50%; background-color:#f3d8d8;'],
                      'headerOptions' => ['style'=>'font-weight: normal; font-size: 15pt;'],            
                    ],

//                     [ 'attribute'=>'akun_kode',
//   'visible' => ($rowvisible==0) ,
//   'header' => 'Some Header',  
//   'contentOptions' => ['style' => 'width: 4%; background-color:#f3d8d8;'],
//   'headerOptions' => ['style'=>'font-weight: normal; font-size: 8pt;'],  
//   // 'value'=>    function ($model) {some arithmetic}
// ],
            // 'id_user',
           
            
            //'akun_status',

            // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


     <div class="col-md-3">
             <div class="box-tools pull-right">  
<?php if ($modelakunnya ) { ?>
           <a class="btn btn-success" href="createpencaker?id=<?=$idname?>" title="ISI FOMULIR AK/II" style="height:35px;margin-bottom:5px;margin-left:5px;margin-right:5px;">
                <i class="glyphicon glyphicon-registration-mark"> 
               ISI FOMULIR AK/II
                </i>
                </a>
              <?php } ?>    
            </div>
        </div>
    <?= DetailView::widget([
        'model' => $model,
        // 'template'=>'<tr><th>{label}</th><td><i class="glyphicon glyphicon-info-sign"></i></i> {value}</td></tr>',
        'attributes' => [
            // 'capil_id',
             [
            'label' => 'DUSUN',
            'value' => ($model->capil_dusun) ? $model->capil_dusun : 'NAMA BELUM DI INPUT',
            'contentOptions' => [
                    'class' => (!isset($model->capil_dusun)) ? 'danger' : '',
                        ],
             ],
            [
            // 'attribute'=>'status',
            'label' => 'NAMA LENGKAP',
            'value' => ($model->capil_nama_lgkp)? $model->capil_nama_lgkp : 'BELUM DI INPUT' ,
            // 'contentOptions' => ['class' => 'bg-red'],
            // 'captionOptions' => ['tooltip' => 'Tooltip'],

             ],
            // 'capil_nama_lgkp',
            // 'capil_stat_hbkel',
            [
            'label'=>'Hubungunan Keluarga',
            'value' => ($model->capil_stat_hbkel) ? $model->capil_stat_hbkel : 'BELUM DI INPUT' ,
            
            ],
            // 'capil_agama',
            [
            'label'=>'Agama',
            'value' => ($model->capil_agama) ? $model->capil_agama : 'BELUM DI INPUT' ,
            
            ],
            [
            'label'=>'Jenis Pekerjaan',
            'value' => ($model->capil_jenis_pkrjn) ? $model->capil_jenis_pkrjn : 'BELUM DI INPUT' ,
             'captionOptions' => ['tooltip' => 'Tooltip'],
            ],
            // 'capil_jenis_pkrjn',
            // 'capil_pddk_akh',
            [
            'label'=>'Pendidikan Akhir',
            'value' => ($model->capil_pddk_akh) ? $model->capil_pddk_akh : 'BELUM DI INPUT' ,
            
            ],
            // 'capil_tmpt_lhr',
            [
            'label'=>'Tempat Lahir',
            'value' => ($model->capil_tmpt_lhr) ? $model->capil_tmpt_lhr : 'BELUM DI INPUT' ,
            
            ],

             [
            'label'=>'Status Kawin',
            'value' => ($model->capil_status_kawin) ? $model->capil_status_kawin : 'BELUM DI INPUT' ,
            'contentOptions' => [
                    'class' => ($model->capil_status_kawin) ? 'warning' : '',
                        ],
            ],
            // 'capil_status_kawin',
            // 'capil_gol_darah',
            [
            'label'=>'Golongan Darah',
            'value' => ($model->capil_gol_darah) ? $model->capil_gol_darah : 'BELUM DI INPUT' ,
            
            ],


            // 'capil_nik_ibu',
             [
            'label'=>'NIK IBU',
            'value' => ($model->capil_nik_ibu) ? $model->capil_nik_ibu : 'BELUM DI INPUT' ,
            
            ],


            // 'capil_tgl_kwn',
            [
            'label'=>'Tanggal Kawin',
            'value' => ($model->capil_tgl_kwn) ? $model->capil_tgl_kwn : 'BELUM DI INPUT' ,
            
            ],

            // 'capil_no_akta_kwn',
            [
            'label'=>'No Akta Kawin',
            'value' => ($model->capil_no_akta_kwn) ? $model->capil_no_akta_kwn : 'BELUM DI INPUT' ,
            
            ],
            // 'capil_jenis_klmin',
            [
            'label'=>'Jenis Kelamin',
            'value' => ($model->capil_jenis_klmin) ? $model->capil_jenis_klmin : 'BELUM DI INPUT' ,
            
            ],
            // 'capil_tgl_crai',
            [
            'label'=>'Tanggal Cerai',
            'value' => ($model->capil_tgl_crai) ? $model->capil_tgl_crai : 'BELUM DI INPUT' ,
            
            ],
            // 'capil_no_kk',
            [
            'label'=>'Nomor KK',
            'value' => ($model->capil_no_kk) ? $model->capil_no_kk : 'BELUM DI INPUT' ,
            
            ],
            // 'capil_nik',
            [
            'label'=>'NIK',
            'value' => ($model->capil_nik) ? $model->capil_nik : 'BELUM DI INPUT' ,
            
            ],
            // 'capil_kab_name',
            [
            'label'=>'Kota',
            'value' => ($model->capil_kab_name) ? $model->capil_kab_name : 'BELUM DI INPUT' ,
            
            ],
            // 'capil_nama_lgkp_ayah',
            [
            'label'=>'Nama Lengkap Ayah',
            'value' => ($model->capil_nama_lgkp_ayah) ? $model->capil_nama_lgkp_ayah : 'BELUM DI INPUT' ,            
            ],
            // 'capil_no_rw',
            [
            'label'=>'No RW',
            'value' => ($model->capil_no_rw) ? $model->capil_no_rw : 'BELUM DI INPUT' ,            
            ],
            [
            'label'=>'Kecamatan',
            'value' => ($model->capil_kec_name) ? $model->capil_kec_name : 'BELUM DI INPUT' ,            
            ],
            // 'capil_kec_name',
            // 'capil_no_akta_lhr',
            [
            'label'=>'No Akta Lahir',
            'value' => ($model->capil_no_akta_lhr) ? $model->capil_no_akta_lhr : 'BELUM DI INPUT' ,            
            ],
            // 'capil_no_rt',
            [
            'label'=>'No RT',
            'value' => ($model->capil_no_rt) ? $model->capil_no_rt : 'BELUM DI INPUT' ,            
            ],
            // 'capil_no_kel',
            [
            'label'=>'Kode Kel',
            'value' => ($model->capil_no_kel) ? $model->capil_no_kel : 'BELUM DI INPUT' ,            
            ],
            // 'capil_alamat',
            [
            'label'=>'Alamat',
            'value' => ($model->capil_alamat) ? $model->capil_alamat : 'BELUM DI INPUT' ,            
            ],
            // 'capil_no_kec',
            [
            'label'=>'Kode Kecamatan',
            'value' => ($model->capil_no_kec) ? $model->capil_no_kec : 'BELUM DI INPUT' ,            
            ],
            // 'capil_nik_ayah',
            [
            'label'=>'NIK Ayah',
            'value' => ($model->capil_nik_ayah) ? $model->capil_nik_ayah : 'BELUM DI INPUT' ,            
            ],
            // 'capil_no_prop',
            [
            'label'=>'Kode Provinsi',
            'value' => ($model->capil_no_prop) ? $model->capil_no_prop : 'BELUM DI INPUT' ,            
            ],
            // 'capil_nama_lgkp_ibu',
            [
            'label'=>'Nama Lengkap Ibu',
            'value' => ($model->capil_nama_lgkp_ibu) ? $model->capil_nama_lgkp_ibu : 'BELUM DI INPUT' ,            
            ],
            // 'capil_no_akta_crai',
            [
            'label'=>'No Akta Cerai',
            'value' => ($model->capil_no_akta_crai) ? $model->capil_no_akta_crai : 'BELUM DI INPUT' ,            
            ],
            // 'capil_prop_name',
            [
            'label'=>'Provinsi',
            'value' => ($model->capil_prop_name) ? $model->capil_prop_name : 'BELUM DI INPUT' ,            
            ],
            // 'capil_no_kab',
            [
            'label'=>'Kode Kabupaten/Kota',
            'value' => ($model->capil_no_kab) ? $model->capil_no_kab : 'BELUM DI INPUT' ,            
            ],
            // 'capil_tgl_lhr',
            [
            'label'=>'Tanggal Lahir',
            'value' => ($model->capil_tgl_lhr) ? $model->capil_tgl_lhr : 'BELUM DI INPUT' ,            
            ],
            // 'capil_kel_name',
            [
            'label'=>'Kelurahan',
            'value' => ($model->capil_kel_name) ? $model->capil_kel_name : 'BELUM DI INPUT' ,            
            ],
            // 'capil_dateinput',
            // [
            // 'attribute'=>'Kode Kecamatan',
            // 'value' => ($model->capil_no_kec) ? $model->capil_no_kec : 'BELUM DI INPUT' ,            
            // ],
            // 'capil_ip',
            // [
            // 'attribute'=>'Kode Kecamatan',
            // 'value' => ($model->capil_no_kec) ? $model->capil_no_kec : 'BELUM DI INPUT' ,            
            // ],
        ],
    ]) ?>


</div>
<?php } ?>
 <p><center><small><i>IP Anda <?php echo Yii::$app->getRequest()->getUserIP() ?></i></small></center></p>



</div>
</div>
</div>
</div>
</div>
