<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Pengalaman */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pengalaman-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pengalaman_jabatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pengalaman_tugas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pengalaman_lama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pengalaman_pemberi')->textInput(['maxlength' => true]) ?>


       <div class="form-group">
       <div class="box-tools pull-right">
        <?= Html::submitButton('SIMPAN', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
        

<?= Html::a('<i class="fa fa-arrow-left"></i> Kembali',['keterangan/updatepencaker','id'=>$model->id_daftar],['class'=>'btn btn-default']); ?>
</div>
</div>

    <?php ActiveForm::end(); ?>

</div>