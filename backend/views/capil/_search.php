<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CapilSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="capil-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'capil_id') ?>

    <?= $form->field($model, 'capil_dusun') ?>

    <?= $form->field($model, 'capil_nama_lgkp') ?>

    <?= $form->field($model, 'capil_stat_hbkel') ?>

    <?= $form->field($model, 'capil_agama') ?>

    <?php // echo $form->field($model, 'capil_jenis_pkrjn') ?>

    <?php // echo $form->field($model, 'capil_pddk_akh') ?>

    <?php // echo $form->field($model, 'capil_tmpt_lhr') ?>

    <?php // echo $form->field($model, 'capil_status_kawin') ?>

    <?php // echo $form->field($model, 'capil_gol_darah') ?>

    <?php // echo $form->field($model, 'capil_nik_ibu') ?>

    <?php // echo $form->field($model, 'capil_tgl_kwn') ?>

    <?php // echo $form->field($model, 'capil_no_akta_kwn') ?>

    <?php // echo $form->field($model, 'capil_jenis_klmin') ?>

    <?php // echo $form->field($model, 'capil_tgl_crai') ?>

    <?php // echo $form->field($model, 'capil_no_kk') ?>

    <?php // echo $form->field($model, 'capil_nik') ?>

    <?php // echo $form->field($model, 'capil_kab_name') ?>

    <?php // echo $form->field($model, 'capil_nama_lgkp_ayah') ?>

    <?php // echo $form->field($model, 'capil_no_rw') ?>

    <?php // echo $form->field($model, 'capil_kec_name') ?>

    <?php // echo $form->field($model, 'capil_no_akta_lhr') ?>

    <?php // echo $form->field($model, 'capil_no_rt') ?>

    <?php // echo $form->field($model, 'capil_no_kel') ?>

    <?php // echo $form->field($model, 'capil_alamat') ?>

    <?php // echo $form->field($model, 'capil_no_kec') ?>

    <?php // echo $form->field($model, 'capil_nik_ayah') ?>

    <?php // echo $form->field($model, 'capil_no_prop') ?>

    <?php // echo $form->field($model, 'capil_nama_lgkp_ibu') ?>

    <?php // echo $form->field($model, 'capil_no_akta_crai') ?>

    <?php // echo $form->field($model, 'capil_prop_name') ?>

    <?php // echo $form->field($model, 'capil_no_kab') ?>

    <?php // echo $form->field($model, 'capil_tgl_lhr') ?>

    <?php // echo $form->field($model, 'capil_kel_name') ?>

    <?php // echo $form->field($model, 'capil_dateinput') ?>

    <?php // echo $form->field($model, 'capil_ip') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
