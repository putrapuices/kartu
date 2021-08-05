<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PengalamanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pengalamen';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengalaman-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pengalaman', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'pengalaman_id',
            'pengalaman_jabatan',
            'pengalaman_tugas',
            'pengalaman_lama',
            'pengalaman_pemberi',
            //'id_daftar',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
