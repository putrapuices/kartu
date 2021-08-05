<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Akun */

$this->title = 'Update Akun: ' . $model->akun_id;
$this->params['breadcrumbs'][] = ['label' => 'Akuns', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->akun_id, 'url' => ['view', 'id' => $model->akun_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="akun-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
