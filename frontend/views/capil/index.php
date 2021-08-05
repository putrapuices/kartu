<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\CapilSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Capils';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="capil-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Capil', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'capil_id',
            'capil_dusun',
            'capil_nama_lgkp',
            'capil_stat_hbkel',
            'capil_agama',
            //'capil_jenis_pkrjn',
            //'capil_pddk_akh',
            //'capil_tmpt_lhr',
            //'capil_status_kawin',
            //'capil_gol_darah',
            //'capil_nik_ibu',
            //'capil_tgl_kwn',
            //'capil_no_akta_kwn',
            //'capil_jenis_klmin',
            //'capil_tgl_crai',
            //'capil_no_kk',
            //'capil_nik',
            //'capil_kab_name',
            //'capil_nama_lgkp_ayah',
            //'capil_no_rw',
            //'capil_kec_name',
            //'capil_no_akta_lhr',
            //'capil_no_rt',
            //'capil_no_kel',
            //'capil_alamat',
            //'capil_no_kec',
            //'capil_nik_ayah',
            //'capil_no_prop',
            //'capil_nama_lgkp_ibu',
            //'capil_no_akta_crai',
            //'capil_prop_name',
            //'capil_no_kab',
            //'capil_tgl_lhr',
            //'capil_kel_name',
            //'capil_dateinput',
            //'capil_ip',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
