<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DrhidnKelurahan */

$this->title = 'Create Drhidn Kelurahan';
$this->params['breadcrumbs'][] = ['label' => 'Drhidn Kelurahans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="drhidn-kelurahan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
