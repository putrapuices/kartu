<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AkunSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Akuns';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="akun-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Akun', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'akun_id',
            'id_daftar',
            'id_user',
            'akun_pass',
            'akun_kode',
            //'akun_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
