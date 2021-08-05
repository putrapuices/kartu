<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Pegawai */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pegawai-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pegawai_nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pegawai_jabatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pegawai_nip')->textInput(['maxlength' => true]) ?>

  <div class="form-group">
       <div class="box-tools pull-right">
        <?= Html::submitButton('SIMPAN', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
        

<?= Html::a('<i class="fa fa-arrow-left"></i> Kembali',['index'],['class'=>'btn btn-default']); ?>
</div>
</div>

    <?php ActiveForm::end(); ?>

</div>
