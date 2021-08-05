<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use kartik\date\DatePicker;
use backend\models\KatPeng;
use backend\models\JenisPeng;
use backend\models\JuaraPeng;

$this->title = 'Perbaharui Foto';
$this->params['breadcrumbs'][] = ['label' => 'Pendaftaran Siswa', 'url' => ['biosiswamandiri']];
$this->params['breadcrumbs'][] = $this->title;

$js = '$(".dependent-input").on("change", function() {
    var value = $(this).val(),
        obj = $(this).attr("id"),
        next = $(this).attr("data-next");
    $.ajax({
        url: "' . Yii::$app->urlManager->createUrl('juara-peng/get') . '",
        data: {value: value, obj: obj},
        type: "POST",
        success: function(data) {
            $("#" + next).html(data);
        }
    });
});';

$this->registerJs($js);

// $dataJp = ArrayHelper::map(JenisPeng::find()->andWhere(['jp_status' => 1])->all(), 'jp_id', 'katJenis');

?>
<div class="input-prestasi-index">

    <div class="box box-solid box-success">
        <div class="box-header">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
        </div>

        <div class="box-body">
            <div class="bio-siswa-create">

            <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
            <div class="row">




            <div class="input-group date">
    <div class="col-md-6">
    <?= $form->field($model, 'image')->fileInput(['required'=>true])->label('Upload FOTO')->hint('<p class="help-block"><small>Upload File dengan format <b>JPG/JPEG</b>,<b>Maximal 2Mb</b></small></p>') ?>
    </div>
<!-- 
     div class="col-md-6"-->
   <!--  ?= $form->field($model, 'lulus')->fileInput()->label('Upload KK/DOMISILI')->hint('<p class="help-block"><small>Upload File dengan format <b>pdf, zip,rar, png, jpg, jpeg</b></small></p>') ? -->
    <!-- /div>  -->
    </div>


            <div class="col-md-12">

                <div class="form-group">
                    <?= Html::submitButton($model->isNewRecord ? 'Tambah' : 'Perbarui', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                </div>

            </div>
        <?php ActiveForm::end(); ?>

        </div>

        </div><!-- /.box -->
    </div>
</div>