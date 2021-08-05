<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Akun */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="akun-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_daftar')->textInput() ?>

    <?= $form->field($model, 'id_user')->textInput() ?>

    <?= $form->field($model, 'akun_pass')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'akun_kode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'akun_status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
