<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DusunSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dusuns';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dusun-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Dusun', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'dusun_id',
            'nama_dusun',
            'id_desa',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
