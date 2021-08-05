<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Lokasi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lokasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- ?= $form->field($model, 'lokasi_tempat')->textInput() ?> -->
     <div class="col-md-6">

    <?= $form->field($model, 'lokasi_tempat', [
    'template' =>'{label}<br/>{input}{error}'
])->radioList(['1'=>'Lokasi Tempat Tinggal (Dalam Negeri)','2'=>'Wilayah Lainnya (Dalam Negeri)','3'=>'Luar Negeri'],['tag'=>'div','separator'=>'<br/>']);?>

    
</div>
     <div class="col-md-6">

    <!-- ?= $form->field($model, 'lokasi_upah')->textInput() ?> -->
      <?= $form->field($model, 'lokasi_upah', [
    'template' =>'{label}<br/>{input}{error}'
])->radioList(['1'=>'< Rp. 1.000.000','2'=>' Rp. 1.000.001 - Rp. 2.500.000,-','3'=>'Rp. 2.500.000 - Rp. 5.000.000,-','4'=>'Rp.5.000.000 < Keatas'],['tag'=>'div','separator'=>'<br/>']);?>
</div>


      <div class="input-group date">
              <div class=" col-sm-12">


              <?php if(!empty($model->bio_foto)){?>
                  <img src="<?php echo Url::to('@web/admin/files/foto/'. $model->bio_foto);?>" alt="foto-siswa" class="img-thumbnail" style="width:100px">
              <?php }?>
              <?= $form->field($model, 'image',
  [ 'options' => [
          'style' => 'color: black']])->fileInput(['required'=>true])->label('Upload Foto')->hint('<p class="help-block"><small>Upload Foto Siswa dengan format <b>png, jpg, jpeg</b>,<b>Maximal</b> 2 Mb.</small></p>') ?>

            </div>
          </div>
     <div class="form-group">
       <div class="box-tools pull-right">
        <?= Html::submitButton('SIMPAN', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
        
<!-- 
?= Html::a('<i class="fa fa-arrow-left"></i> Kembali',['keterangan/updatepencaker','id'=>$model->id_daftar],['class'=>'btn btn-default']); ?> -->
</div>
</div>

    <?php ActiveForm::end(); ?>

</div>
