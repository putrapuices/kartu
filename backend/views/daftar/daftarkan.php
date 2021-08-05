<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Daftar */
/* @var $form yii\widgets\ActiveForm */
$this->title = 'Data Pribadi';
$this->params['breadcrumbs'][] = ['label' => 'Datas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="daftar-form">
	    <div class="box-body">


    <?php $form = ActiveForm::begin(); ?>

 
  <div class="col-md-6">

    <?= $form->field($modelD, 'daftar_nik')->textInput() ?>
</div>
  <div class="col-md-6">
    <?= $form->field($modelD, 'daftar_no')->textInput() ?>
</div>
  <div class="col-md-6">
    <?= $form->field($modelD, 'daftar_tgl')->widget(DatePicker::className(),[
		            'options' => ['placeholder' => '--Tanggal Lahir--'],
		            'type' => DatePicker::TYPE_COMPONENT_PREPEND,
		            'pluginOptions' => [
		                'autoclose'=>true,
		                'format' => 'yyyy-mm-dd',
		                'todayHighlight' => true
		            ]
		        ]) ?>

</div>

<!-- Table keterangan -->
  <div class="col-md-6">

  <?= $form->field($modelK, 'keterangan_nama')->textInput(['maxlength' => true]) ?>
</div>
  <div class="col-md-6">

    <?= $form->field($modelK, 'keterangan_tempat')->textInput(['maxlength' => true]) ?>
</div>
  <div class="col-md-6">
  	 <?= $form->field($modelK, 'keterangan_tgl')->widget(DatePicker::className(),[
		            'options' => ['placeholder' => '--Tanggal Lahir--'],
		            'type' => DatePicker::TYPE_COMPONENT_PREPEND,
		            'pluginOptions' => [
		                'autoclose'=>true,
		                'format' => 'yyyy-mm-dd',
		                'todayHighlight' => true
		            ]
		        ]) ?>

</div>
  <div class="col-md-6">

    <?= $form->field($modelK, 'keterangan_jkl')->textInput() ?>
</div>
  <div class="col-md-6">

    <?= $form->field($modelK, 'keterangan_alamat')->textInput(['maxlength' => true]) ?>
</div>
  <div class="col-md-6">

    <?= $form->field($modelK, 'keterangan_kel')->textInput() ?>
</div>
  <div class="col-md-6">

    <?= $form->field($modelK, 'keterangan_kec')->textInput() ?>
</div>
  <div class="col-md-6">

    <?= $form->field($modelK, 'keterangan_hp')->textInput() ?>
</div>
  <div class="col-md-6">

    <?= $form->field($modelK, 'keterangan_status')->textInput() ?>
</div>
  <div class="col-md-6">

    <?= $form->field($modelK, 'keterangan_tb')->textInput(['maxlength' => true]) ?>
</div>
  <div class="col-md-6">

    <?= $form->field($modelK, 'keterangan_bb')->textInput(['maxlength' => true]) ?>
</div>
  <div class="col-md-6">

    <?= $form->field($modelK, 'keterangan_email')->textInput(['maxlength' => true]) ?>
</div>


<!-- batas Table keterangan -->

<!-- table pendidikan formal -->
  <div class="col-md-6">

    <?= $form->field($modelPend, 'pendidikan_nemipk')->textInput(['maxlength' => true]) ?>
</div>
  <div class="col-md-6">

    <?= $form->field($modelPend, 'pendidikan_sekolah')->textInput() ?>
</div>
  <div class="col-md-6">

    <?= $form->field($modelPend, 'pendidikan_jurusan')->textInput(['maxlength' => true]) ?>
</div>
  <div class="col-md-6">

    <?= $form->field($modelPend, 'pendidikan_keterampilan')->textInput(['maxlength' => true]) ?>
</div>
  <div class="col-md-6">

    <?= $form->field($modelPend, 'pendidikan_bahasa')->textInput(['maxlength' => true]) ?>
</div>

    <!-- akhir table pendidikan formal -->\

    <!-- table pengalaman -->
  <div class="col-md-6">

<?= $form->field($modelPeng, 'pengalaman_jabatan')->textInput(['maxlength' => true]) ?>
	</div>
  <div class="col-md-6">

    <?= $form->field($modelPeng, 'pengalaman_tugas')->textInput(['maxlength' => true]) ?>
	</div>
  <div class="col-md-6">

    <?= $form->field($modelPeng, 'pengalaman_lama')->textInput(['maxlength' => true]) ?>
	</div>
  <div class="col-md-6">

    <?= $form->field($modelPeng, 'pengalaman_pemberi')->textInput(['maxlength' => true]) ?>
	</div>
 
    <!-- akhir table pengalama -->
<!-- table lokasi -->
  <div class="col-md-6">

  <?= $form->field($modelL, 'lokasi_tempat')->textInput() ?>
</div>
  <div class="col-md-6">

    <?= $form->field($modelL, 'lokasi_upah')->textInput() ?>
</div>


<!-- akhir table lokasi -->
<div class="col-md-12">

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
</div>
</div>
    <?php ActiveForm::end(); ?>

</div>
