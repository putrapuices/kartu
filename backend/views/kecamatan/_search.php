<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\KecamatanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kecamatan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kecamatan_id') ?>

    <?= $form->field($model, 'nama_kec') ?>

    <?= $form->field($model, 'kd_kecamatan') ?>

    <?= $form->field($model, 'id_kota') ?>

    <?= $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'index') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
