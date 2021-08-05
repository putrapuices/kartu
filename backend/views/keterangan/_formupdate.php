<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\DetailView;
use backend\models\Capil;



/* @var $this yii\web\View */
/* @var $model backend\models\Keterangan */
/* @var $form yii\widgets\ActiveForm */

$idname = Yii::$app->user->identity->username;
$modelapil  = Capil::find()
-> where(['capil_nik'=> $idname])->one();
// var_dump($modelapil);die;

?>

<div class="keterangan-form">

    <?php $form = ActiveForm::begin(); ?>

    

   <div class="col-md-6">
    <?= $form->field($model, 'keterangan_hp')->textInput(['autoFocus' => true,'required'=>true,'placeholder'=> 'Ketikan No HP Anda'])->label('Nomor HP') ?>
</div>



<div class="col-md-3" style="line-height: 2em;">

    


                            <?= $form->field($model, 'keterangan_tb')->input('number', ['min' => 0, 'max' => 200,'required'=>true,'start'=>50, 'step' => 1])->label('Tinggi Badan') ?>
</div>

<div class="col-md-3" style="line-height: 2em;">

    

 

                            <?= $form->field($model, 'keterangan_bb')->input('number', ['min' => 0, 'max' => 200,'required'=>true,'start'=>50, 'step' => 1])->label('Berat Badan') ?>
</div>



  <div class="col-md-6">
       <div class="form-group">
     <label class="sr-only" for="example">Email</label>   


 <?php echo $form->field($model, 'keterangan_email',
 [ 'template' =>

       '{label}<div class="input-group">
       
       <span class="input-group-addon">
       <i class="fa fa-envelope-o"></i>
       </span>{input}
       </div>
       '], 
        [
           'inputOptions' => ['autofocus' => 'autofocus', 'class' => 'form-control transparent']
     ])->textInput()->input('email', ['placeholder' => "Masukkan Email Anda"])->label("Email"); ?>
         

</div></div>

       
        <div class="col-md-4">

    <!-- ?= $form->field($model, 'lokasi_upah')->textInput() ?> -->
      <?= $form->field($model, 'keterangan_status', [
    'template' =>'{label}<br/>{input}{error}'
],['active' => true])->radioList(['1'=>'Belum Kawin','2'=>'Kawin'],['tag'=>'div','value'=>true,'required'=>true,'style' => 'display:inline','separator'=>'<br/>']);?>
</div>   


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
