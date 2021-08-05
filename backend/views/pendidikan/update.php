<?php

use yii\helpers\Html;
use backend\models\Keterangan;


/* @var $this yii\web\View */
/* @var $model backend\models\Pendidikan */
$carinama=Keterangan::find()
        -> where(['id_daftar'=> $model->id_daftar])->one();
$this->title = 'Perbaharui Data Pendidikan: ' . $carinama->keterangan_nama;
// $this->params['breadcrumbs'][] = ['label' => 'Pendidikans', 'url' => ['index']];
// $this->params['breadcrumbs'][] = ['label' => 'Menu Perbaharui', 'url' => ['keterangan/updatepencaker', 'id' => $model->id_daftar]];
// $this->params['breadcrumbs'][] = 'Update';
?>
<div class="pendidikan-update">
     <div class="box-header with-border">
               <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse">
                  <!-- <i class="fa fa-minus"> -->
                    
                  <!-- </i> -->
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove">
                  <!-- <i class="fa fa-times"></i> -->
                </button>
              </div>
            </div>
           <div class="box box-solid box-warning">    
        <div class="box-header">
            <h3 class="box-title">PENDIDIKAN FORMAL </h3>
        </div>
        <div class="box-body">
    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

   
</div>
</div>
</div>
