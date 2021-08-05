<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DrhidnKota */

$this->title = 'Create Drhidn Kota';
$this->params['breadcrumbs'][] = ['label' => 'Drhidn Kotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="drhidn-kota-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
