<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Pegawai */

$this->title = $model->pegawai_nama;
$this->params['breadcrumbs'][] = ['label' => 'Menu Pegawai', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pegawai-view">
<div class="box">
            <div class="box-header with-border">
                <div class="box box-Danger">


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'pegawai_id',
              [
            'label' => 'NAMA PEGAWAI',                
            'attribute'=>'pegawai_nama',
              ],
          [
            'label' => 'JABATAN',                
            'attribute'=>'pegawai_jabatan',
          ],
          [
            'label' => 'NIP ',                
            'attribute'=>'pegawai_nip',
          ],
            
            
            
        ],
    ]) ?>

      <div class="form-group">
       <div class="box-tools pull-right">
       
        

<?= Html::a('<i class="fa fa-arrow-left"></i> Kembali',['index'],['class'=>'btn btn-default']); ?>
</div>
</div></div>
</div>
</div>

