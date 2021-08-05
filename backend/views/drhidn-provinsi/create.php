<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DrhidnProvinsi */

$this->title = 'Create Drhidn Provinsi';
$this->params['breadcrumbs'][] = ['label' => 'Drhidn Provinsis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="drhidn-provinsi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
