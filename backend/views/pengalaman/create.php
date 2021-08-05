<?php

use yii\helpers\Html;
use backend\models\Pengalaman;


/* @var $this yii\web\View */
/* @var $model backend\models\Pengalaman */

$this->title = 'Pengalaman Kerja';
// $this->params['breadcrumbs'][] = ['label' => 'Pengalamen', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengalaman-create">

 <div class="box-body">
    <?= $this->render('_form', [
        'model' => $model,
        // 'prts' => $prts,
        'modelsPrestasi' => (empty($modelsPrestasi)) ? [new Pengalaman] : $modelsPrestasi,
    ]) ?>
</div>

</div>
