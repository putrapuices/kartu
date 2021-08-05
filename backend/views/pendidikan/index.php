<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PendidikanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pendidikans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pendidikan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pendidikan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'pendidikan_id',
            'pendidikan_nemipk',
            'pendidikan_sekolah',
            'pendidikan_jurusan',
            'pendidikan_keterampilan',
            //'pendidikan_bahasa',
            //'id_daftar',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
