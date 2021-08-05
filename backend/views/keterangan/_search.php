<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\KeteranganSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="keterangan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'keterangan_id') ?>

    <?= $form->field($model, 'keterangan_nama') ?>

    <?= $form->field($model, 'keterangan_tempat') ?>

    <?= $form->field($model, 'keterangan_tgl') ?>

    <?= $form->field($model, 'keterangan_jkl') ?>

    <?php // echo $form->field($model, 'keterangan_alamat') ?>

    <?php // echo $form->field($model, 'keterangan_kel') ?>

    <?php // echo $form->field($model, 'keterangan_kec') ?>

    <?php // echo $form->field($model, 'keterangan_hp') ?>

    <?php // echo $form->field($model, 'keterangan_status') ?>

    <?php // echo $form->field($model, 'keterangan_tb') ?>

    <?php // echo $form->field($model, 'keterangan_bb') ?>

    <?php // echo $form->field($model, 'keterangan_email') ?>

    <?php // echo $form->field($model, 'id_daftar') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
