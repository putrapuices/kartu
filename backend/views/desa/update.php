<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Desa */

$this->title = 'Update Desa: ' . $model->desa_id;
$this->params['breadcrumbs'][] = ['label' => 'Desas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->desa_id, 'url' => ['view', 'id' => $model->desa_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="desa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
