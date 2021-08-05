<?php

use yii\helpers\Html;
use backend\models\Keterangan;


/* @var $this yii\web\View */
/* @var $model backend\models\Lokasi */
 $nama = Keterangan::find()
        -> where(['id_daftar'=> $model->id_daftar])->one();

$this->title = 'Perbaharui Lokasi Pekerjaan: ' . $nama->keterangan_nama;

$this->params['breadcrumbs'][] = ['label' => 'Menu Pembaharuan Data', 'url' => ['//keterangan/updatepencaker', 'id' => $model->id_daftar]];
// $this->params['breadcrumbs'][] = 'Update';
?>
<div class="lokasi-update">

  <div class="box box-solid box-default ">    
        <div class="box-header">
            <h3 class="box-title">PERBAHARUI LOKASI PEKERJAAN </h3>
        </div>
        <div class="box-body">
    <?= $this->render('_formupdate', [
        'model' => $model,
    ]) ?>



</div>
