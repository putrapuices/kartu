<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Capil */
/* @var $form yii\widgets\ActiveForm */



?>




<div class="capil-form">

    <?php $form = ActiveForm::begin(); ?>



    <?= $form->field($model, 'capil_dusun')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'capil_nama_lgkp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'capil_stat_hbkel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'capil_agama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'capil_jenis_pkrjn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'capil_pddk_akh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'capil_tmpt_lhr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'capil_status_kawin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'capil_gol_darah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'capil_nik_ibu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'capil_tgl_kwn')->textInput() ?>

    <?= $form->field($model, 'capil_no_akta_kwn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'capil_jenis_klmin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'capil_tgl_crai')->textInput() ?>

    <?= $form->field($model, 'capil_no_kk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'capil_nik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'capil_kab_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'capil_nama_lgkp_ayah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'capil_no_rw')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'capil_kec_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'capil_no_akta_lhr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'capil_no_rt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'capil_no_kel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'capil_alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'capil_no_kec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'capil_nik_ayah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'capil_no_prop')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'capil_nama_lgkp_ibu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'capil_no_akta_crai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'capil_prop_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'capil_no_kab')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'capil_tgl_lhr')->textInput() ?>

    <?= $form->field($model, 'capil_kel_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'capil_dateinput')->textInput() ?>

    <?= $form->field($model, 'capil_ip')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
