<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Daftar */

$this->title = 'Update Daftar: ' . $model->daftar_id;
$this->params['breadcrumbs'][] = ['label' => 'Daftars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->daftar_id, 'url' => ['view', 'id' => $model->daftar_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="daftar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
