<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Sekolah;
use backend\models\Jurusan;



/* @var $this yii\web\View */
/* @var $model backend\models\Pendidikan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pendidikan-form">

    <?php $form = ActiveForm::begin(); ?>
      <div class="row">
        
  <div class="form-group">

<div class=" col-sm-12"> 
    <?php
    // Html::beginForm();
$kategori = ArrayHelper::map(\backend\models\Sekolah::find()/*->asArray()*/->all(), 'sekolah_id', 'sekolah_nama');
      echo $form->field($model, 'pendidikan_sekolah',
  [ 'options' => [
    'style'=>
          'color: black']])->dropDownList($kategori,

// echo Html::dropDownList('Kategori', null, $kategori,
 [
    'required'=>true,
    'prompt' => '-Pilih Kecamatan-',
    'style'=>'height:30px',
    'onchange' => '$.post("'.Yii::$app->urlManager->createUrl('bio-siswa/kab').'?id="+$(this).val(), function(data){$("select#kab").html(data);});',
    'class' => 'form-control'
    ])->label('Kecamatan',['class'=>'body a',
          'style' => 'font-size: 20px'])?>

</div>
         <div class=" col-sm-12">           
                    <?php  
      $kel = Jurusan::find()->where(['jurusan_tingkat' => $model->pendidikan_jurusan])->all();
                   $kelList=ArrayHelper::map($kel,'jurusan_nama','jurusan_tingkat');
                        echo $form->field($model, 'pendidikan_jurusan',
    [ 'options' => [
    'style' => 'color: black','required'=>true]])->dropDownList($kel, [
      
      'style'=>'height:30px',
      'required'=>true,
                        'id' => 'kab',
                        'class' => 'form-control'
                    ])->label('Kelurahan/Desa',['class'=>'body a',
          'style' => 'font-size: 20px'])?>

</div>
</div>

   
       <div class="col-md-4">
    <!-- ?= $form->field($model, 'pendidikan_sekolah')->textInput() -->
    <!-- -label('Sekolah') ?> -->




       <?= 
$form->field($model, 'pendidikan_sekolah')->dropDownList(
        ArrayHelper::map(Sekolah::find()->all(),'sekolah_id','sekolah_nama'),
        ['prompt'=>'Pendidikan tertinggi']
)->label('Pendidikan Tertinggi')
?>
        </div>
        <div class="col-md-4">
    <?= $form->field($model, 'pendidikan_jurusan')->textInput(['maxlength' => true])
    ->label('Jurusan') ?>
</div>
     <div class=" col-sm-4">

  <td><?= $form->field($model, 'pendidikan_nemipk')->textInput([
  'min' => 0, 'max' => 10000,
    'maxlength' => 7,
    'style' => 'width:120px;',
    'type' => 'number', // this will set input to decimal number format
    'step' => '00.01' // and this
])?></td>
   </div>
<div class="col-md-6">

    <?= $form->field($model, 'pendidikan_keterampilan')->textInput(['maxlength' => true])
    ->label('Keterampilan') ?>
</div>
<div class="col-md-6">

    <?= $form->field($model, 'pendidikan_bahasa')->textInput(['maxlength' => true])
    ->label('Bahasa yang dikuasai') ?>
</div>
<div class="col-md-6">

    <!-- ?= $form->field($model, 'id_daftar')->textInput() ?> -->
</div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
</div>
    <?php ActiveForm::end(); ?>

</div>
