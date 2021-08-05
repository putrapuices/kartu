<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\KeteranganSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'DAFTAR PENCARI KERJA';
$this->params['breadcrumbs'][] = $this->title;


?>
<div class="keterangan-index">


    <p>
       
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Halamaan Informasi Pasar Kerja (IPK)</h3>
              <div class="box-tools pull-right">
              <p>
        <?= Html::a('IPKIII/2', ['cek'], ['class' => 'glyphicon glyphicon-user btn btn-success']) ?>
    </p>

 <p class="text-center btn btn-success"><a href="<?=Yii::getAlias('@web').'/pegawai/printipktigadua';?>">IPK III/2</a></p>
<br /><br />
<p class="text-center btn btn-primary"><a href="<?=Yii::getAlias('@web').'/docs/contohsurat.docx';?>">Unduh Contoh Surat (btn-primary)</a></p>
<br /><br />
<p class="text-center btn btn-danger"><a href="<?=Yii::getAlias('@web').'/docs/contohsurat.docx';?>">Unduh Contoh Surat (btn-danger)</a></p>
<br /><br />
<p class="text-center btn btn-info"><a href="<?=Yii::getAlias('@web').'/docs/contohsurat.docx';?>">Unduh Contoh Surat (btn-info)</a></p>
<br /><br />
<p class="text-center btn btn-warning"><a href="<?=Yii::getAlias('@web').'/docs/contohsurat.docx';?>">Unduh Contoh Surat (btn-warning)</a></p>

<?php $this->registerCss("
a {
    color:white;
}
"); ?>
 
<?php $this->registerCss("
a {
    color:white;
}
"); ?>
</div>