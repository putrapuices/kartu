<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PengalamanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pengalaman-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pengalaman_id') ?>

    <?= $form->field($model, 'pengalaman_jabatan') ?>

    <?= $form->field($model, 'pengalaman_tugas') ?>

    <?= $form->field($model, 'pengalaman_lama') ?>

    <?= $form->field($model, 'pengalaman_pemberi') ?>

    <?php // echo $form->field($model, 'id_daftar') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
