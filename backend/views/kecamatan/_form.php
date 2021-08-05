<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Kecamatan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kecamatan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_kec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_kecamatan')->textInput() ?>

    <?= $form->field($model, 'id_kota')->textInput() ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'index')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
