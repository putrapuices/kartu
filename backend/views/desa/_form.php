<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Desa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="desa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_desa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_desa')->textInput() ?>

    <?= $form->field($model, 'id_kecamatan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
