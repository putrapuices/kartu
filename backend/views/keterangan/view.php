<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Keterangan */

$this->title = $model->keterangan_id;
$this->params['breadcrumbs'][] = ['label' => 'Keterangans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="keterangan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->keterangan_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->keterangan_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'keterangan_id',
            'keterangan_nama',
            'keterangan_tempat',
            'keterangan_tgl',
            'keterangan_jkl',
            'keterangan_alamat',
            'keterangan_kel',
            'keterangan_kec',
            'keterangan_hp',
            'keterangan_status',
            'keterangan_tb',
            'keterangan_bb',
            'keterangan_email:email',
            'id_daftar',
        ],
    ]) ?>

</div>
