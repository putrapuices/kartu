<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Pendidikan */

$this->title = $model->pendidikan_id;
$this->params['breadcrumbs'][] = ['label' => 'Pendidikans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pendidikan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->pendidikan_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->pendidikan_id], [
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
            'pendidikan_id',
            'pendidikan_nemipk',
            'pendidikan_sekolah',
            'pendidikan_jurusan',
            'pendidikan_keterampilan',
            'pendidikan_bahasa',
            'id_daftar',
        ],
    ]) ?>

</div>
