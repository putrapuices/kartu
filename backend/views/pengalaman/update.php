<?php

use yii\helpers\Html;
use backend\models\Keterangan;

/* @var $this yii\web\View */
/* @var $model backend\models\Pengalaman */

$carinama=Keterangan::find()
        -> where(['id_daftar'=> $model->id_daftar])->one();
$this->title = 'PERBAHARUI PENGALAMAN: ' . $carinama->keterangan_nama;

?>
<div class="pengalaman-update">

     
           <div class="box box-solid box-warning">    
        <div class="box-header">
            <h3 class="box-title">PERBAHARUI PENGALAMAN </h3>
        </div>
        <div class="box-body">

    <?= $this->render('_formbiasa', [
        'model' => $model,
    ]) ?>

</div>
</div>
</div>

