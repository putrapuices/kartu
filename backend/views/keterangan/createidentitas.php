×
<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Keterangan */

$this->title = 'Daftar Isian Pencari Kerja';
$this->params['breadcrumbs'][] = ['label' => 'Keterangans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="keterangan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_formidentitas', [
        'model' => $model,
        'datakecamatan' => $datakecamatan,
    ]) ?>

</div>