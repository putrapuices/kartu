<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use backend\models\Kategori;
use backend\models\Jenis;
use backend\models\Peringkat;
use yii\helpers\Url;
use wbraganca\dynamicform\DynamicFormWidget;
// use kartik\widgets\FileInput;
use kartik\file\FileInput;


/* @var $this yii\web\View */
/* @var $model backend\models\TambahStok */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tambah-stok-form">

    <?php $form = ActiveForm::begin(['id' => 'dynamic-form', 'options' => ['enctype' => 'multipart/form-data']]); ?>

    <div class="row">
       
        
        <div class="col-md-12">

        <div class="panel panel-info">
            <div class="panel-heading"><h4><i class="glyphicon glyphicon-edit"></i>Pengalaman Kerja</h4></div>

        <div class="panel-body">
        <?php DynamicFormWidget::begin([
            'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
            'widgetBody' => '.container-items', // required: css class selector
            'widgetItem' => '.item', // required: css class
            'limit' => 100, // the maximum times, an element can be cloned (default 999)
            'min' => 1, // 0 or 1 (default 1)
            'insertButton' => '.add-item', // css class
            'deleteButton' => '.remove-item', // css class
            'model' => $modelsPrestasi[0],
            'formId' => 'dynamic-form',
            'formFields' => [
                'pengalaman_jabatan',
                'pengalaman_tugas',
                
                'pengalaman_lama',
                'pengalaman_pemberi',

            ],
        ]); ?>

        <div class="container-items"><!-- widgetContainer -->
        <?php foreach ($modelsPrestasi as $i => $modelTambah): ?>
            <div class="item panel panel-default col-sm-12"><!-- widgetBody -->
                <div class="panel-heading">
                    <h3 class="panel-title pull-left">Tambah Pengalaman Kerja</h3>
                    <div class="pull-right">
                        <button type="button" class="add-item btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></button>
                        <button type="button" class="remove-item btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    <?php
                    // necessary for update action.
                    if (! $modelTambah->isNewRecord) {
                        echo Html::activeHiddenInput($modelTambah, "[{$i}]prestasisiswa_id");
                    }
                ?>
                    <div class="row">
                       

			<div class="col-md-6">
              <?= $form->field($modelTambah, "[{$i}]pengalaman_jabatan")->textInput(['maxlength' => true])->label('Jabatan') ?>
             </div>
             <div class="col-md-6">
              <?= $form->field($modelTambah, "[{$i}]pengalaman_tugas")->textInput(['maxlength' => true])->label('Uraian Tugas') ?>
             </div>
    <div class="col-md-6">
              <?= $form->field($modelTambah, "[{$i}]pengalaman_lama")->textInput(['maxlength' => true])->label('Lama Kerja') ?>
             </div>          

             <div class="col-md-6">
              <?= $form->field($modelTambah, "[{$i}]pengalaman_pemberi")->textInput(['maxlength' => true])->label('Pember/Pengguna') ?>
             </div>
                        <div class="col-sm-6">
                            <!-- ?= $form->field($modelTambah, "[{$i}]tambaha_jumlah")->textInput(['maxlength' => true]) ? -->
                                    
                        </div>
                    </div><!-- .row -->
                </div>
            </div>
        <?php endforeach; ?>
        </div>
        <?php DynamicFormWidget::end(); ?>

        <div class="col-md-12">

            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Tambah' : 'Perbarui', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                <!-- ?= Html::a('<i class="fa fa-arrow-left"></i> Kembali',['index'],['class'=>'btn btn-default']); ?> -->
            </div>

        </div>

    </div>

    <?php ActiveForm::end(); ?>

</div>
