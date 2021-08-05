<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Daftar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="daftar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'daftar_id')->textInput() ?>

    <?= $form->field($model, 'daftar_nik')->textInput() ?>

    <?= $form->field($model, 'daftar_no')->textInput() ?>

    <?= $form->field($model, 'daftar_tgl')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
