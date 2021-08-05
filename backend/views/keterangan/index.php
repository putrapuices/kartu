<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\KeteranganSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'DAFTAR PENCARI KERJA';
$this->params['breadcrumbs'][] = $this->title;

$tombol = '{view} {update} {delete} ';

?>
<div class="keterangan-index">


    <p>
       
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">DAFTAR PENCARI KERJA</h3>
              <div class="box-tools pull-right">
              <p>
        <?= Html::a('TAMABAH AKUN PENCAKER', ['cek'], ['class' => 'glyphicon glyphicon-user btn btn-success']) ?>
    </p>
</div>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
             ['class' => 'yii\grid\SerialColumn',
                'header'=> 'NO',
                'headerOptions' => ['style'=>'text-align:center; white-space: normal;color:#3c8dbc;'],
        
            ],

            // 'keterangan_id',
               [
            'label' => 'NAMA',                
            'attribute'=>'keterangan_nama',
               ],
                [
            'label' => 'Tempat Lahir',                
            'attribute'=>'keterangan_tempat',
               ],
               [
            'label' => 'Tanggal Lahir',                
            'attribute'=>'keterangan_tgl',
            'format' => ['date', 'php:d/m/Y']
               ],
                [
            'attribute'=>'keterangan_jkl',
            // 'value' => '<span class="red">'.$model->keterangan_jkl.'</span>',
            'label' => 'Jenis Kelamin',
            'format' => 'raw',
            'value' => function($model){

                  if ($model->keterangan_jkl == 1) {
                                return 'Laki - Laki' ;
                            } elseif ($model->keterangan_jkl == 2) { 
                                 return 'Perempuan' ;
                            }

                        $stat = $model->keterangan_jkl;
                        return $stat;
                    },
            ],

            // 'keterangan_tgl',
            
            //'keterangan_alamat',
            //'keterangan_kel',
            //'keterangan_kec',
            //'keterangan_hp',
            //'keterangan_status',
            //'keterangan_tb',
            //'keterangan_bb',
            //'keterangan_email:email',
            //'id_daftar',

              [
                    'class' => 'yii\grid\ActionColumn',
                    'contentOptions'=>['style'=>'white-space: normal;width:110px;'],
                    'header' => 'Aksi',
                    'template' => $tombol,
                    'buttons' => [
                        'view' => function ($url, $model, $key){
                            return Html::a('<i class="fa fa-search"></i>', ['keterangan/createpencaker','id'=>$model->id_daftar], [
                                'aria-label' => 'Lihat Detail Data',
                                'title'=>'Lihat Detail Data',
                                'style'=>'height:35px;width:40px;margin-bottom:5px;', 
                                'class' => 'btn btn-success', 
                                ]);
                        },
                        'update' => function ($url, $model, $key){
                            return Html::a('<i class="fa fa-pencil"></i>', ['updatepencaker','id'=>$model->id_daftar], [
                                'aria-label' => 'Perbarui Data',
                                'title'=>'Perbarui Data',
                                'style'=>'height:35px;width:40px;margin-bottom:5px;', 
                                'class' => 'btn btn-primary', 
                                ]);
                        },
                        'delete' => function ($url, $model, $key){
                            return Html::a('<i class="fa fa-trash"></i>', ['delete','id'=>$key,'siswa'=>$model->keterangan_id], [
                                'aria-label' => 'Hapus Data',
                                'title'=>'Hapus Data',
                                'style'=>'height:35px;width:40px;margin-bottom:5px;', 
                                'class' => 'btn btn-danger',
                                'data-confirm'=>'Apakah Anda Ingin Menghapus Data Ini?',
                                'data-method'=>'post',
                                ]);
                        },
                     
                    ]
                ],
        ],
    ]); ?>
</div>

</div>
