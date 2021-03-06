<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Pegawai */

$this->title = 'Update Pegawai: ' . $model->pegawai_id;
$this->params['breadcrumbs'][] = ['label' => 'Pegawais', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pegawai_id, 'url' => ['view', 'id' => $model->pegawai_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pegawai-update">
<div class="box">
            <div class="box-header with-border">
            	<div class="box box-success">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
</div>
</div>
</div>
