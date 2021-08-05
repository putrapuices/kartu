<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\DetailView;
use backend\models\Capil;



/* @var $this yii\web\View */
/* @var $model backend\models\Keterangan */
/* @var $form yii\widgets\ActiveForm */

$idname = Yii::$app->user->identity->username;
$modelapil  = Capil::find()
-> where(['capil_nik'=> $idname])->one();
// var_dump($modelapil);die;

?>

<div class="keterangan-form">
 <?= DetailView::widget([
        'model' => $modelapil,
        'formatter' => [

            'class' => '\yii\i18n\Formatter',

            'dateFormat' => 'MM/dd/yyyy',

            'datetimeFormat' => 'MM/dd/yyyy HH:mm::ss',

        ],
        'attributes' => [
            // 'capil_id',
           
            

            [
            'attribute'=>'capil_nama_lgkp',
            'label' => 'Nama Lengkap',
            ],
          
            [
            'attribute'=>'capil_tmpt_lhr',
            // 'value' => '<span class="red">'.$model->capil_tmpt_lhr.'</span>',
            'label' => 'Tempat Lahir',

            'format' => 'raw',
            'value' => function($model){
                        $stat = $model->capil_tmpt_lhr;
                        return $stat;
                    },
            ],

            [
            'attribute'=>'capil_jenis_klmin',
            // 'value' => '<span class="red">'.$model->capil_jenis_klmin.'</span>',
            'label' => 'Jenis Kelamin',

            'format' => 'raw',
            'value' => function($model){
                        $stat = $model->capil_jenis_klmin;
                        return $stat;
                    },
            ],

            [
            'label' => 'Tanggal Lahir',                
            'attribute'=>'capil_tgl_lhr',
            'value' => function($model){

                   return Yii::$app->formatter->asDateTime($model->capil_tgl_lhr, 'php:m/d/Y');
                    },
            // 'capil_tgl_lhr:date',  // = time() for 09/01/2004
            ],

            [

            'attribute'=>'capil_dusun',
            'label' => 'Dusun',
            // 'value' =>  'capil_dusun',
            ],

              [
            'attribute'=>'capil_alamat',
            // 'value' => '<span class="red">'.$model->capil_alamat.'</span>',
            'label' => 'Alamat',
            'format' => 'raw',
            'value' => function($model){
                        $stat = $model->capil_alamat;
                        return $stat;
                    },
            ],

              [
            'attribute'=>'desa.nama_desa',
            // 'value' => '<span class="red">'.$model->capil_no_kel.'</span>',
            'label' => 'Desa/Kelurahan',
            'format' => 'raw',
            // 'value' => function($model){
                    //     $stat = $model->capil_no_kel;
                    //     return $stat;
                    // },
               
            ],
             'capil_no_kel',
            // 'capil_alamat',
            'capil_stat_hbkel',
            'capil_agama',
            'capil_jenis_pkrjn',
            'capil_pddk_akh',
           
            'capil_status_kawin',
            'capil_gol_darah',
            'capil_nik_ibu',
            'capil_tgl_kwn',
            'capil_no_akta_kwn',
            
            'capil_tgl_crai',
            'capil_no_kk',
            'capil_nik',
            'capil_kab_name',
            'capil_nama_lgkp_ayah',
            'capil_no_rw',
            'capil_kec_name',
            'capil_no_akta_lhr',
            'capil_no_rt',
           
            
            'capil_no_kec',
            'capil_nik_ayah',
            'capil_no_prop',
            'capil_nama_lgkp_ibu',
            'capil_no_akta_crai',
            'capil_prop_name',
            'capil_no_kab',
            // 'capil_tgl_lhr',

            'capil_kel_name',
            // 'capil_dateinput',
            // 'capil_ip',
        ],
    ]) ?>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'keterangan_nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan_tempat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan_tgl')->textInput() ?>

    <?= $form->field($model, 'keterangan_jkl')->textInput() ?>

    <?= $form->field($model, 'keterangan_alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan_kel')->textInput() ?>

    <?= $form->field($model, 'keterangan_kec')->textInput() ?>

    <?= $form->field($model, 'keterangan_hp')->textInput() ?>

    <?= $form->field($model, 'keterangan_status')->textInput() ?>

    <?= $form->field($model, 'keterangan_tb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan_bb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_daftar')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
