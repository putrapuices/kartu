<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DrhidnKelurahan */

$this->title = 'Update Drhidn Kelurahan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Drhidn Kelurahans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="drhidn-kelurahan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
