<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use kartik\depdrop\DepDrop;
use yii\helpers\Url;
use backend\models\RegionProvince;
use backend\models\RegionDistrict;
use backend\models\RegionCity;
use fredyns\region\models\Province;
use yii\bootstrap\Tabs;


$data = ArrayHelper::map($datakecamatan, 'id', 'name');
$this->render('/layouts/dropdown.js') 


/* @var $this yii\web\View */
/* @var $model backend\models\Keterangan */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="keterangan-form">


    <?php $form = ActiveForm::begin(); ?>

    

    <div class="col-md-6">

        <?= $form->field($model, 'keterangan_nama')->textInput(['maxlength' => true])->label('Nama'); ?>
    </div>
    <div class="col-md-6">

        <?= $form->field($model, 'keterangan_tempat')->textInput(['maxlength' => true])->label('Tempat Lahir');?>
    </div>
    <div class="col-md-6">

        
        <div class=" col-sm-6">
            <?= $form->field($model, 'keterangan_tgl')->widget(DatePicker::className(),[
                'options' => ['placeholder' => '--Tanggal Lahir--'],
                'type' => DatePicker::TYPE_COMPONENT_PREPEND,
                'pluginOptions' => [
                    'autoclose'=>true,
                    'format' => 'yyyy-mm-dd',
                    'todayHighlight' => true
                ]
            ]) ?>

        </div>
    </div>
    <div class="col-md-6">
        <!-- ?= $form->field($model, 'lokasi_upah')->textInput() ?> -->
        <?= $form->field($model, 'keterangan_jkl', [
            'template' =>'{label}<br/>{input}{error}'
        ],['active' => true])->radioList(['1'=>'Laki - laki','2'=>'Perempuan'],['tag'=>'div','value'=>true,'required'=>true,'style' => 'display:inline','separator'=>'<br/>']);?>
    </div> 
    <div class="col-md-6">

      <div class="row">
        <div class="col-md-6">
            <!--Isian fenomena-->
            <?= $form->field($model, 'keterangan_alamat')->textarea(['rows' => 6])->label('Alamat Sesuai KTP')//ketinggian text area 6 baris ?>
        </div>
        <div class="col-md-6">
           
            <hr/>
            <i>

            </i>
        </div>
    </div>
</div>

<div class="form-group">
    <div class=" col-sm-6">         
            <?php        
            echo $form->field($model, 'keterangan_prov')->widget(Select2::classname(), [
                'data' => $data,
                
                'options'=>['placeholder'=>Yii::t('app','Pilih Provinsi'),'id'=>'input_id_kec',],
                'pluginOptions' => [
                    'allowClear' => true,
                    'initialize' => true,
                ],
            ])->label('Provinsi',['class'=>'body a',
          'style' => 'font-size: 20px']);

            echo $form->field($model, 'keterangan_kota')->widget(Select2::classname(), [
                'data' =>ArrayHelper::map(\backend\models\RegionCity::find()->asArray()->all(), 'id', 'name'),
               
                'options'=>['placeholder'=>Yii::t('app','Pilih Kecamatan'), 'id'=> 'input_id_kel',],
                'pluginOptions' => [
                    'allowClear' => true,
                    'initialize' => true,
                ],
            ])->label('Kota',['class'=>'body a',
          'style' => 'font-size: 20px']);

            echo $form->field($model, 'keterangan_kec')->widget(Select2::classname(), [
                'data' => ArrayHelper::map(\backend\models\RegionDistrict::find()->asArray()->all(), 'id', 'name'),
                
                'options'=>['placeholder'=>Yii::t('app','Pilih Kelurahan/Desa/Nagari'), 'id'=> 'input_id_dusun',],
                'pluginOptions' => [
                    'allowClear' => true,
                    'initialize' => true,
                ],
            ])->label('Kelurahan',['class'=>'body a',
          'style' => 'font-size: 20px']);

            ?>
        </div>
</div>



<div class="col-md-6">

    <?= $form->field($model, 'keterangan_hp')->textInput() ?>
</div>
<div class="col-md-6">

    <?= $form->field($model, 'keterangan_status')->textInput() ?>
</div>
<div class="col-md-6">

    <?= $form->field($model, 'keterangan_tb')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6">

    <?= $form->field($model, 'keterangan_bb')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6">

    <?= $form->field($model, 'keterangan_email')->textInput(['maxlength' => true]) ?>
</div>

<div class="col-md-6">

    <?= $form->field($model, 'keterangan_pendidikanstatus')->textInput() ?>
</div>
<div class="col-md-6">

    <?= $form->field($model, 'keterangan_pendidikandatehapus')->textInput() ?>
</div>
<div class="form-group">
    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>

</div>