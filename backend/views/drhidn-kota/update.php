<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DrhidnKota */

$this->title = 'Update Drhidn Kota: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Drhidn Kotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="drhidn-kota-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
