<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\LokasiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lokasis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lokasi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Lokasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'lokasi_id',
            'lokasi_tempat',
            'lokasi_upah',
            'id_daftar',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
