<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Keterangan */

$this->title = 'Perbaharui Keterangan: ' . $model->keterangan_nama;
$this->params['breadcrumbs'][] = ['label' => 'Keterangans', 'url' => ['index']];

?>
<div class="keterangan-update">
<div class="box">
            <div class="box-header with-border">
              <!-- <h3 class="box-title">DAFTAR PENCARI KERJA</h3> -->
     

    <?= $this->render('_formupdate', [
        'model' => $model,
    ]) ?>
</div>
</div>
</div>
