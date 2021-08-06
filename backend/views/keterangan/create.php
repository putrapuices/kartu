<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Keterangan */

$this->title = 'Keterangan';
$this->params['breadcrumbs'][] = ['label' => 'Keterangans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="keterangan-create">
<div class="box box-solid box-success">
        <div class="box-header">
            <!-- h3 class="box-title"><?= Html::encode($this->title) ?></h3> -->
        </div>
    <h1><?= Html::encode($this->title) ?></h1>
<div class="box-body">
  <?php if (Yii::$app->user->identity->level == 40){ ?>
    <?= $this->render('_form', [
        'model' => $model,
        'datakecamatan' => $datakecamatan,
        
        // 'modelpendidikan' => $modelpendidikan,
        // 'modelpengalaman' => $modelpengalaman,
        // 'modellokasi' => $modellokasi,

        // 'step' => $step,
    ]) ?>
     <?php } elseif (Yii::$app->user->identity->level == 1) { ?>
        
 <?= $this->render('_form', [
        'model' => $model,
        'modelid' => $modelid,
        'modelpendidikan' => $modelpendidikan,
        'modelpengalaman' => $modelpengalaman,
        'modellokasi' => $modellokasi,

            ]) ?>

     <?php }  ?>
</div>

</div>
</div>
