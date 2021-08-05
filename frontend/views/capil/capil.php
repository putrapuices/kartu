<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\DetailView;


/* @var $this yii\web\View */
/* @var $model frontend\models\Reqdukcapil */
/* @var $form yii\widgets\ActiveForm */

// var_dump($model);die();
?>
  <?= Yii::$app->session->getFlash('msg') ?>

<div class="reqdukcapil-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'capil_nik')->textInput(['autofocus'=>true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Cek', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?>
    	
    </h1>
                    <p><i>
                    	<!-- font color='red'>Warning !</font></i></p> -->
                    <!-- <p>Data Tidak Ditemukan</p> -->
                    <!-- <br><br><br><br><br><br><br><br><br><br><br><br><br> -->
                    <!-- <p><center><small><i>IP Anda <?php echo Yii::$app->getRequest()->getUserIP() ?></i></small></center></p> -->
        </div>

 <?php if ( $model->capil_no_kab==77) { ?>

        <div class="capil-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <!-- ?= Html::a('Update', ['update', 'id' => $model->capil_id], ['class' => 'btn btn-primary']) ?> -->
        <!-- ?= Html::a('Delete', ['delete', 'id' => $model->capil_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?> -->
    </p>




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