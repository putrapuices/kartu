<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DrhidnKecamatan */

$this->title = 'Create Drhidn Kecamatan';
$this->params['breadcrumbs'][] = ['label' => 'Drhidn Kecamatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="drhidn-kecamatan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
