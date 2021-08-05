<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PendidikanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pendidikan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pendidikan_id') ?>

    <?= $form->field($model, 'pendidikan_nemipk') ?>

    <?= $form->field($model, 'id_sekolah') ?>

    <?= $form->field($model, 'id_jurusan') ?>

    <?= $form->field($model, 'pendidikan_keterampilan') ?>

    <?php // echo $form->field($model, 'id_daftar') ?>

    <?php // echo $form->field($model, 'pendidikan_inggris') ?>

    <?php // echo $form->field($model, 'pendidikan_jerman') ?>

    <?php // echo $form->field($model, 'pendidikan_jepang') ?>

    <?php // echo $form->field($model, 'pendidikan_mandarin') ?>

    <?php // echo $form->field($model, 'pendidikan_belanda') ?>

    <?php // echo $form->field($model, 'pendidikan_perancis') ?>

    <?php // echo $form->field($model, 'pendidikan_arab') ?>

    <?php // echo $form->field($model, 'pendidikan_bahasa') ?>

    <?php // echo $form->field($model, 'pendidikan_jkl') ?>

    <?php // echo $form->field($model, 'id_jabatan') ?>

    <?php // echo $form->field($model, 'id_pekerjaan') ?>

    <?php // echo $form->field($model, 'pendidikan_namasekolah') ?>

    <?php // echo $form->field($model, 'pendidikan_thntamat') ?>

    <?php // echo $form->field($model, 'pendidikan_date') ?>

    <?php // echo $form->field($model, 'pendidikan_datehapus') ?>

    <?php // echo $form->field($model, 'pendidikan_datepenempatan') ?>

    <?php // echo $form->field($model, 'pendidikan_status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
