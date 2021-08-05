<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Pendidikan */

$this->title = 'Pendidikan Formal & Pekerjaan Yang diinginkan';
$this->params['breadcrumbs'][] = ['label' => 'Pendidikans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pendidikan-create">
	 <div class="box box-solid box-success">
        <div class="box-header">
           <h3 class="box-title">
           	<!-- ?= Html::encode($this->title) ?> -->
           		
           	</h3>
        </div>
         
	    <div class="box-body">

    <?= $this->render('_form', [
        'model' => $model,
        // 'modelpendidikan' => $modelpendidikan,
    ]) ?>
</div>
</div>
</div>
