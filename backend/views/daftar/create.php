<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Daftar */

$this->title = 'Create Daftar';
$this->params['breadcrumbs'][] = ['label' => 'Daftars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="daftar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
