<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DaftarSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="daftar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'daftar_id') ?>

    <?= $form->field($model, 'daftar_nik') ?>

    <?= $form->field($model, 'daftar_no') ?>

    <?= $form->field($model, 'daftar_tgl') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
