<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AkunSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="akun-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'akun_id') ?>

    <?= $form->field($model, 'id_daftar') ?>

    <?= $form->field($model, 'id_user') ?>

    <?= $form->field($model, 'akun_pass') ?>

    <?= $form->field($model, 'akun_kode') ?>

    <?php // echo $form->field($model, 'akun_status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
