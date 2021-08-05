<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Dusun */

$this->title = 'Update Dusun: ' . $model->dusun_id;
$this->params['breadcrumbs'][] = ['label' => 'Dusuns', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dusun_id, 'url' => ['view', 'id' => $model->dusun_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dusun-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
