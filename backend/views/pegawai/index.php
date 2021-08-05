<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PegawaiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'DATA PEGAWAI';
$this->params['breadcrumbs'][] = $this->title;

$tombol = '{view} {update} {delete} {approval}';

?>
<div class="pegawai-index">


    

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">DAFTAR PEGAWAI</h3>
              <div class="box-tools pull-right">
              <p>
        <?= Html::a('TAMABAH PEGAWAI', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
</div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
              ['class' => 'yii\grid\SerialColumn',
                'header'=> 'NO',
                'headerOptions' => ['style'=>'text-align:center; white-space: normal;color:#3c8dbc;'],
        
            ],

            // 'pegawai_id',
            'pegawai_nama',
            'pegawai_jabatan',
            'pegawai_nip',
               [
                    'attribute' => 'pegawai_aktif',
                    'filter'=>array('1' => 'Disetujui', '2' => 'Belum Disetujui', '3' => 'Tidak Disetujui'),
                    'filterInputOptions' => [
                       'class' => 'form-control',         
                       'prompt' => 'Pilih Status'
                    ],
                    'value' => function($model){
                        $stat = $model->getstatusLabel();
                        return Html::tag(
                            'span', $stat['pegawai_aktif'], ['class' => $stat['class']]
                        );
                    },
                    'format' => 'html'
                ],

             [
                    'class' => 'yii\grid\ActionColumn',
                    'contentOptions'=>['style'=>'white-space: normal;width:110px;'],
                    'header' => 'Aksi',
                    'template' => $tombol,
                    'buttons' => [
                        'view' => function ($url, $model, $key){
                            return Html::a('<i class="fa fa-search"></i>', ['view','id'=>$key], [
                                'aria-label' => 'Lihat Detail Data',
                                'title'=>'Lihat Detail Data',
                                'style'=>'height:35px;width:40px;margin-bottom:5px;', 
                                'class' => 'btn btn-success', 
                                ]);
                        },
                        'update' => function ($url, $model, $key){
                            return Html::a('<i class="fa fa-pencil"></i>', ['update','id'=>$key], [
                                'aria-label' => 'Perbarui Data',
                                'title'=>'Perbarui Data',
                                'style'=>'height:35px;width:40px;margin-bottom:5px;', 
                                'class' => 'btn btn-primary', 
                                ]);
                        },
                        'delete' => function ($url, $model, $key){
                            return Html::a('<i class="fa fa-trash"></i>', ['delete','id'=>$key,'siswa'=>$model->pegawai_id], [
                                'aria-label' => 'Hapus Data',
                                'title'=>'Hapus Data',
                                'style'=>'height:35px;width:40px;margin-bottom:5px;', 
                                'class' => 'btn btn-danger',
                                'data-confirm'=>'Apakah Anda Ingin Menghapus Data Ini?',
                                'data-method'=>'post',
                                ]);
                        },
                        'approval' => function ($url, $model, $key){
                            return Html::a('<i class="fa fa-check-square-o"></i>', ['approval','id'=>$key], [
                                'aria-label' => 'Hapus Data',
                                'title'=>'Hapus Data',
                                'style'=>'height:35px;width:40px;margin-bottom:5px;', 
                                'class' => 'btn btn-warning',
                                'data-confirm'=>'Apakah Anda Ingin Mengaktifkan Pegawai ini?',
                                'data-method'=>'post',
                                ]);
                        },
                    ]
                ],
        ],
    ]); ?>

</div>
</div>

</div>
