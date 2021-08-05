<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Lokasi */

$this->title = 'Create Lokasi';
$this->params['breadcrumbs'][] = ['label' => 'Lokasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lokasi-create">

    <h1><?= Html::encode($this->title) ?></h1>
<div class="box-body">
    <?= $this->render('_form', [
        'model' => $model,
        // 'model' => $modellokasi,
    ]) ?>

</div>
</div>
