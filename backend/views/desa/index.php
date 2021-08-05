<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DesaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Desas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="desa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Desa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'desa_id',
            'nama_desa',
            'kd_desa',
            'id_kecamatan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
