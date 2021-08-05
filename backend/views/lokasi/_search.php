<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\LokasiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lokasi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'lokasi_id') ?>

    <?= $form->field($model, 'lokasi_tempat') ?>

    <?= $form->field($model, 'lokasi_upah') ?>

    <?= $form->field($model, 'id_daftar') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
