<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Sekolah;
use backend\models\Jurusan;
use backend\models\Bahasa;
use kartik\select2\Select2;
use unclead\multipleinput\MultipleInput;


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
      echo $form->field($model, 'id_sekolah',
  [ 'options' => [
    'style'=>
          'color: black']])->dropDownList($kategori,

// echo Html::dropDownList('Kategori', null, $kategori,
 [
    'required'=>true,
    'prompt' => '-Pilih Kecamatan-',
    'style'=>'height:30px',
    'onchange' => '$.post("'.Yii::$app->urlManager->createUrl('pendidikan/kab').'?id="+$(this).val(), function(data){$("select#kab").html(data);});',
    'class' => 'form-control'
    ])->label('Kecamatan',['class'=>'body a',
          'style' => 'font-size: 20px'])?>

</div>
         <div class=" col-sm-12">           
                    <?php  
      $kel = Jurusan::find()->where(['id_sekolah' => $model->id_sekolah])->all();
                   $kelList=ArrayHelper::map($kel,'jurusan_id','jurusan_nama');
                        echo $form->field($model, 'id_jurusan',
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
    
        </div>
<div class="col-md-6">

    <?= $form->field($model, 'pendidikan_keterampilan')->textInput(['maxlength' => true])
    ->label('Keterampilan') ?>
</div>
<div class="col-md-6">

           


<?= $form->field($model, 'pendidikan_bahasa')->widget(MultipleInput::className(), [
                            'max' => 10,
                            'allowEmptyList' => false,
                            'enableGuessTitle' => true,
                            'addButtonPosition' => MultipleInput::POS_ROW,
                          'columns' => [
        [
            'name'  => 'user_id',
            'type'  => \kartik\select2\Select2::class,
            'enableError' => true,
            'title' => 'User',
            'defaultValue' => '33',
            /* it can be an anonymous function
            'items' => function($data) {
                return [
                    31 => 'item 31',
                    32 => 'item 32',
                    33 => 'item 33',
                    34 => 'item 34',
                    35 => 'item 35',
                    36 => 'item 36',
                ];
            }
            */
            // 'items' =>  [
            //     31 => '31',
            //     32 => '32',
            //     33 => '33',
            //     34 => '34',
            //     35 => '35',
            //     36 => '36',
            // ],
            'options' => [
                'name' => 'user_id',
                'value' => '',
                'data' => [
                    31 => '31',
                    32 => '32',
                    33 => '33',
                    34 => '34',
                    35 => '35',
                    36 => '36',
                ],
                'options' => ['multiple' => true, 'placeholder' => 'Select states ...']
            ]
        ],
                        ]]);
// ->label(false);
?>

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
