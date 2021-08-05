<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Capil */

$this->title = $model->capil_id;
$this->params['breadcrumbs'][] = ['label' => 'Capils', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
  <?= Yii::$app->session->getFlash('msg') ?>

<div class="capil-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <!-- ?= Html::a('Update', ['update', 'id' => $model->capil_id], ['class' => 'btn btn-primary']) ?> -->
       <!--  ?= Html::a('Delete', ['delete', 'id' => $model->capil_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?> -->
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'capil_id',
            'capil_dusun',
            'capil_nama_lgkp',
            'capil_stat_hbkel',
            'capil_agama',
            'capil_jenis_pkrjn',
            'capil_pddk_akh',
            'capil_tmpt_lhr',
            'capil_status_kawin',
            'capil_gol_darah',
            'capil_nik_ibu',
            'capil_tgl_kwn',
            'capil_no_akta_kwn',
            'capil_jenis_klmin',
            'capil_tgl_crai',
            'capil_no_kk',
            'capil_nik',
            'capil_kab_name',
            'capil_nama_lgkp_ayah',
            'capil_no_rw',
            'capil_kec_name',
            'capil_no_akta_lhr',
            'capil_no_rt',
            'capil_no_kel',
            'capil_alamat',
            'capil_no_kec',
            'capil_nik_ayah',
            'capil_no_prop',
            'capil_nama_lgkp_ibu',
            'capil_no_akta_crai',
            'capil_prop_name',
            'capil_no_kab',
            'capil_tgl_lhr',
            'capil_kel_name',
            'capil_dateinput',
            'capil_ip',
        ],
    ]) ?>

</div>
