<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Capil */

$this->title = 'Update Capil: ' . $model->capil_id;
$this->params['breadcrumbs'][] = ['label' => 'Capils', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->capil_id, 'url' => ['view', 'id' => $model->capil_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="capil-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
