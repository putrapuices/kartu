<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Sekolah;
use backend\models\Jurusan;
use backend\models\Bahasa;
use backend\models\Pekerjaan;
use kartik\select2\Select2;
use unclead\multipleinput\MultipleInput;
use kartik\date\DatePicker;
use richardfan\widget\JSRegister;

/* @var $this yii\web\View */
/* @var $model backend\models\Pendidikan */
/* @var $form yii\widgets\ActiveForm */

$this->title = ' ';
$this->params['breadcrumbs'][] = 'PENDIDIKAN FORMAL';
?>
<style>
    /*Modifikasi sedikit pada CSS agar tampilan margin pada div dengan class row lebih bagus*/
    .row {
        margin-right: 0px!important;
        margin-left: 0px!important;
    }
    hr {
        margin-top: 0.25px!important;
    }


.ui-datepicker-calendar {
        display: none;
    }
</style>
<br/>
<div class="pendidikan-form">

    <?php $form = ActiveForm::begin(); ?>
<div class="box">
            <div class="box-header with-border">
              <div class="box box-success">
    <div class="row">
        <h3>
     <b>PENDIDIKAN FORMAL</b>
   </h3>
     <br/>
   </div>

      <div class="row">

<div class=" col-sm-6"> 
    <?php
    // Html::beginForm();
$kategori = ArrayHelper::map(\backend\models\Sekolah::find()/*->asArray()*/->all(), 'sekolah_id', 'sekolah_nama');
      echo $form->field($model, 'id_sekolah',
  [ 'options' => [
    'style'=>
          'color: black']])->dropDownList($kategori,

// echo Html::dropDownList('Kategori', null, $kategori,
 [
    'required'=>true,
    'prompt' => '-Pilih Pendidikan-',
    'style'=>'height:30px' ,'width:900px',
    'onchange' => '$.post("'.Yii::$app->urlManager->createUrl('pendidikan/kab').'?id="+$(this).val(), function(data){$("select#kab").html(data);});',
    'class' => 'form-control'
    ])->label('Pendidikan Tertinggi',['class'=>'body a',
          'style' => 'font-size: 20px'])?>

</div>

    <div class=" col-sm-6">           
                    <?php  
      $kel = Jurusan::find()->where(['id_sekolah' => $model->id_sekolah])->all();
                   $kelList=ArrayHelper::map($kel,'jurusan_id','jurusan_nama');
                        echo $form->field($model, 'id_jurusan',
    [ 'options' => [
    'style' => 'color: black','required'=>true,]])->dropDownList($kel, [
      
      'style'=>'height:30px' ,'width:900px',
      'required'=>true,
                        'id' => 'kab',
                        'class' => 'form-control'
                    ])->label('Jurusan',['class'=>'body a',
          'style' => 'font-size: 20px'])?>

</div>

     <div class=" col-sm-4">

  <td><?= $form->field($model, 'pendidikan_nemipk')->textInput([
  'min' => 0, 'max' => 10000,
    'maxlength' => 7,
    'style' => 'width:120px;',
    'type' => 'number', // this will set input to decimal number format
    'step' => '00.01', // and this
    'style' => 'background-color: #fff !important;','placeholder'=>"00.01"
])->label('NEM / IPK',['class'=>'body a',
          'style' => 'font-size: 20px'])?></td>
   </div>

   <div class="col-md-6">

    <?= $form->field($model, 'pendidikan_keterampilan')->textInput(['labelOptions'=>array('style'=>'padding:100px;'),'maxlength' => true,'style' => 'background-color: #fff !important',
     'prepend' => '<i class="icon-4x icon-globe" style="line-height: 54px;"></i>','placeholder'=>"Keterampilan"])
    ->label('Keterampilan',['class'=>'body a',
          'style' => 'font-size: 20px']) ?>
</div>
<div class="col-md-6">

    <?= $form->field($model, 'pendidikan_namasekolah')->textInput(['labelOptions'=>array('style'=>'padding:100px;'),'maxlength' => true,'style' => 'background-color: #fff !important',
     'prepend' => '<i class="icon-4x icon-globe" style="line-height: 54px;"></i>','placeholder'=>"Nama Sekolah Asal"])
    ->label('Nama Sekolah Asal',['class'=>'body a',
          'style' => 'font-size: 20px']) ?>
</div>


 <div class="col-md-6" >

  <div class="input-group date">
      <?php echo $form->field($model, 'pendidikan_thntamat')->widget(etsoft\widgets\YearSelectbox::classname(), [
    'yearStart' => 1980,
    'yearStartType' => 'fix',
    'yearEnd' => 0,
 ])->label('Tahun Tamat')
?>
  </div>
</div>
                      </div>

              <hr/>  

      <div class="row">

<h4>
    <b>Bahasa Asing Yang Dikuasai</b>
</h4> 
 <div class="col-md-4" >

                        <!--Isian komp01 s.d. komp04-->
                        <?= $form->field($model, 'pendidikan_inggris')->checkbox(array('label'=>'Inggris'))
                        ->label(''); ?>
                       <?= $form->field($model, 'pendidikan_jerman')->checkbox(array('label'=>'Jerman'))
                        ->label(''); ?>
                        <?= $form->field($model, 'pendidikan_jepang')->checkbox(array('label'=>'Jepang'))
                        ->label(''); ?>
                        <?= $form->field($model, 'pendidikan_mandarin')->checkbox(array('label'=>'Mandarin'))
                        ->label(''); ?>
                         <?= $form->field($model, 'pendidikan_belanda')->checkbox(array('label'=>'Belanda'))
                        ->label(''); ?>
                        <?= $form->field($model, 'pendidikan_perancis')->checkbox(array('label'=>'Perancis'))
                        ->label(''); ?>
                        <?= $form->field($model, 'pendidikan_arab')->checkbox(array('label'=>'Arab'))
                        ->label(''); ?>
                         
                  </div>

                   <div class="col-sm-6">

                       <?= $form->field($model, 'pendidikan_bahasa')->textInput(['maxlength' => true,'style' => 'background-color: #fff !important;'])
    ->label('Bahasa Lainnya',['class'=>'body a',
          'style' => 'font-size: 14px']) ?>
                    </div>
</div>

              <hr/>  

      <div class="row">

                 <h3>
                    <b>Pekerjaan Yang di inginkan</b>
                </h3> 
<div class=" col-sm-6"> 
    <?php
    // Html::beginForm();
$kategori = ArrayHelper::map(\backend\models\Jabatan::find()/*->asArray()*/->all(), 'jabatan_id', 'jabatan_nama');
      echo $form->field($model, 'id_jabatan',
  [ 'options' => [
    'style'=>
          'color: black']])->dropDownList($kategori,

// echo Html::dropDownList('Kategori', null, $kategori,
 [
    'required'=>true,
    'prompt' => '-Pilih Jabatan-',
    'style'=>'height:30px' ,'width:900px',
    'onchange' => '$.post("'.Yii::$app->urlManager->createUrl('pendidikan/jabatan').'?id="+$(this).val(), function(data){$("select#jabatan").html(data);});',
    'class' => 'form-control'
    ])->label('Jabatan',['class'=>'body a',
          'style' => 'font-size: 20px'])?>

</div>

      <div class=" col-sm-6">           
                    <?php  
      $kel = Pekerjaan::find()->where(['id_jabatan' => $model->id_jabatan])->all();
                   $kelList=ArrayHelper::map($kel,'pekerjaan_id','pekerjaan_nama');
                        echo $form->field($model, 'id_pekerjaan',
    [ 'options' => [
    'style' => 'color: black','required'=>true,]])->dropDownList($kel, [
      
      'style'=>'height:30px' ,'width:900px',
      'required'=>true,
                        'id' => 'jabatan',
                        'class' => 'form-control'
                    ])->label('Pekerjaan',['class'=>'body a',
          'style' => 'font-size: 20px'])?>

</div>
</div>
    <div class="form-group">
        <?= Html::submitButton('SIMPAN', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
    </div>



    <?php ActiveForm::end(); ?>

</div>
</div>
</div>
</div>
