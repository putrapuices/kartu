<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model backend\models\Keterangan */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="keterangan-form">


    <?php $form = ActiveForm::begin(); ?>

    

    <div class="col-md-6">

        <?= $form->field($model, 'keterangan_nama')->textInput(['maxlength' => true])->label('Nama'); ?>
    </div>
    <div class="col-md-6">

        <?= $form->field($model, 'keterangan_tempat')->textInput(['maxlength' => true])->label('Tempat Lahir');?>
    </div>
    <div class="col-md-6">

        <!-- ?= $form->field($model, 'keterangan_tgl')->textInput()->label('Tanggal Lahir'); ?> -->
        <div class=" col-sm-6">

            <?= $form->field($model, 'keterangan_tgl')->widget(DatePicker::className(),[
                'options' => ['placeholder' => '--Tanggal Lahir--'],
                'type' => DatePicker::TYPE_COMPONENT_PREPEND,
                'pluginOptions' => [
                    'autoclose'=>true,
                    'format' => 'yyyy-mm-dd',
                    'todayHighlight' => true
                ]
            ]) ?>

        </div>
    </div>
    <div class="col-md-6"> 

        <!-- ?= $form->field($model, 'lokasi_upah')->textInput() ?> -->
        <?= $form->field($model, 'keterangan_jkl', [
            'template' =>'{label}<br/>{input}{error}'
        ],['active' => true])->radioList(['1'=>'Laki - laki','2'=>'Perempuan'],['tag'=>'div','value'=>true,'required'=>true,'style' => 'display:inline','separator'=>'<br/>']);?>
    </div> 
    <div class="col-md-6">

              <div class="row">
                <div class="col-md-6">
                    <!--Isian fenomena-->
                    <?= $form->field($model, 'keterangan_alamat')->textarea(['rows' => 6])->label('Alamat Sesuai KTP')//ketinggian text area 6 baris ?>
                </div>
                <div class="col-md-6">
                    <!--Petunjuk isian fenomena-->
                    <hr/>
                    <i>
                       
                    </i>
                </div>
            </div>
    </div>
    <div class="col-md-6">

        <?= $form->field($model, 'keterangan_dusun')->textInput() ?>
    </div>
    <div class="col-md-6">

        <?= $form->field($model, 'keterangan_kel')->textInput() ?>
    </div>
    <div class="col-md-6">

        <?= $form->field($model, 'keterangan_kec')->textInput() ?>
    </div>
    <!--  -->
<!-- 
     <div class=" col-sm-6">         
           
            ?php
            $kecamatan = ArrayHelper::map(\backend\models\Kecamatan::find()->asArray()->all(), 'kec_id', 'kec_nama');
            echo $form->field($model, 'id_kec')->widget(Select2::classname(), [
                'data' => $data,                
                'options'=>['placeholder'=>Yii::t('app','Pilih Kecamatan'),'id'=>'input_id_kec',],
                'pluginOptions' => [
                    'allowClear' => true,
                    'initialize' => true,
                ],
            ]);
            ?>
        </div>
         <div class=" col-sm-6">         
            <div class="form-group">
            ?php
            echo $form->field($model, 'id_kel')->widget(Select2::classname(), [
                'data' =>ArrayHelper::map(\backend\models\Kelurahan::find()->asArray()->all(), 'kel_id', 'kel_nama'),
               
                'options'=>['placeholder'=>Yii::t('app','Pilih Kelurahan/Desa/Nagari'), 'id'=> 'input_id_kel',],
                'pluginOptions' => [
                    'allowClear' => true,
                    'initialize' => true,
                ],
            ]);

            echo $form->field($model, 'id_dusun')->widget(Select2::classname(), [
                'data' => ArrayHelper::map(\backend\models\Dusun::find()->asArray()->all(), 'dusun_id', 'dusun_nama'),
                
                'options'=>['placeholder'=>Yii::t('app','Pilih Dusun/RT/Korong'), 'id'=> 'input_id_dusun',],
                'pluginOptions' => [
                    'allowClear' => true,
                    'initialize' => true,
                ],
            ]);
            ?>
        </div>
        </div> -->
    <!--  -->

    
        <p>

            <?=
                $form
                ->field($model, 'provinsi_id')
                ->widget(Select2::classname(),
                    [
                    'data' => Provinsi::options(),
                    'pluginOptions' =>
                    [
                        'placeholder' => 'Pilih atau ketik nama Provinsi',
                        'multiple' => FALSE,
                        'allowClear' => TRUE,
                        'tags' => TRUE,
                        'maximumInputLength' => 255, /* country name maxlength */
                    ],
            ]);
            ?>

            <?=
                $form
                ->field($model, 'kota_id')
                ->widget(DepDrop::classname(),
                    [
                    'data' => [],
                    'type' => DepDrop::TYPE_SELECT2,
                    'select2Options' => [
                        'pluginOptions' => [
                            'multiple' => FALSE,
                            'allowClear' => TRUE,
                            'tags' => TRUE,
                            'maximumInputLength' => 255,
                        ],
                    ],
                    'pluginOptions' => [
                        'initialize' => TRUE,
                        'placeholder' => 'Pilih atau ketik nama Kota',
                        'depends' => ['kodepos-provinsi_id'],
                        'url' => Url::to([
                            "kota/depdrop-options",
                            'selected' => $model->kota_id,
                        ]),
                        'loadingText' => 'Memuat Kota ...',
                    ],
            ]);
            ?>

            <?=
                $form
                ->field($model, 'kecamatan_id')
                ->widget(DepDrop::classname(),
                    [
                    'data' => [],
                    'type' => DepDrop::TYPE_SELECT2,
                    'select2Options' => [
                        'pluginOptions' => [
                            'multiple' => FALSE,
                            'allowClear' => TRUE,
                            'tags' => TRUE,
                            'maximumInputLength' => 255,
                        ],
                    ],
                    'pluginOptions' => [
                        'initialize' => TRUE,
                        'placeholder' => 'Pilih atau ketik nama Kecamatan',
                        'depends' => ['kodepos-kota_id'],
                        'url' => Url::to([
                            "kecamatan/depdrop-options",
                            'selected' => $model->kecamatan_id,
                        ]),
                        'loadingText' => 'Memuat Kecamatan ...',
                    ],
            ]);
            ?>

            <?=
                $form
                ->field($model, 'kelurahan_id')
                ->widget(DepDrop::classname(),
                    [
                    'data' => [],
                    'type' => DepDrop::TYPE_SELECT2,
                    'select2Options' => [
                        'pluginOptions' => [
                            'multiple' => FALSE,
                            'allowClear' => TRUE,
                            'tags' => TRUE,
                            'maximumInputLength' => 255,
                        ],
                    ],
                    'pluginOptions' => [
                        'initialize' => TRUE,
                        'placeholder' => 'Pilih atau ketik nama Kelurahan',
                        'depends' => ['kodepos-kecamatan_id'],
                        'url' => Url::to([
                            "kelurahan/depdrop-options",
                            'selected' => $model->kelurahan_id,
                        ]),
                        'loadingText' => 'Memuat Kelurahan ...',
                    ],
            ]);
            ?>

        </p>
    <div class="col-md-6">

        <?= $form->field($model, 'keterangan_hp')->textInput() ?>
    </div>
    <div class="col-md-6">

        <?= $form->field($model, 'keterangan_status')->textInput() ?>
    </div>
    <div class="col-md-6">

        <?= $form->field($model, 'keterangan_tb')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">

        <?= $form->field($model, 'keterangan_bb')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">

        <?= $form->field($model, 'keterangan_email')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">

        <?= $form->field($model, 'id_daftar')->textInput() ?>
    </div>
    <div class="col-md-6">

        <?= $form->field($model, 'keterangan_pendidikanstatus')->textInput() ?>
    </div>
    <div class="col-md-6">

        <?= $form->field($model, 'keterangan_pendidikandatehapus')->textInput() ?>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>