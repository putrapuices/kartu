<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Pendidikan */

$this->title = $modelpendidikan->keterangan->keterangan_nama;
$this->params['breadcrumbs'][] = ['label' => 'Pendidikans', 'url' => ['create']];
// $this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

// var_dump($modelpendidikan);die();
?>
<div class="pendidikan-view">

  <div class="box-header with-border">
              <div class="box-tools pull-right">
                             </div>
            </div>
           <div class="box box-solid box-success">    
        <div class="box-header">
            <h3 class="box-title">PENDIDIKAN FORMAL </h3>
        </div>
        <div class="box-body">

    <?= DetailView::widget([
        'model' => $modelpendidikan,
        'attributes' => [
         
       
         [
            'label' => 'Pendidikan Tertinggi',                
            'attribute'=>'sekolah.sekolah_nama',
        ],
        [
            'label' => 'Jurusan',                
            'attribute'=>'jurusan.jurusan_nama',
        ],
        [
            'label' => 'NEM/IPK',                
            'attribute'=>'pendidikan_nemipk',
        ],


            [
            'attribute'=>'pendidikan_inggris',
            // 'value' => '<span class="red">'.$model->pendidikan_inggris.'</span>',
            'label' => 'Bahasa Inggris',
            'format' => 'raw',
            'value' => function($model){

                  if ($model->pendidikan_inggris == 1) {
                                return 'Bisa Berbahasa Inggris' ;
                            } else { 
                                 return 'Tidak Bisa' ;
                            }

                        $stat = $model->pendidikan_inggris;
                        return $stat;
                    },
            ],

            [
            'attribute'=>'pendidikan_jerman',
            // 'value' => '<span class="red">'.$model->pendidikan_jerman.'</span>',
            'label' => 'Bahasa Jerman',
            'format' => 'raw',
            'value' => function($model){

                  if ($model->pendidikan_jerman == 1) {
                                return 'Bisa Berbahasa Jerman' ;
                            } else { 
                                 return 'Tidak Bisa' ;
                            }

                        $stat = $model->pendidikan_jerman;
                        return $stat;
                    },
            ],

              [
            'attribute'=>'pendidikan_jepang',
            // 'value' => '<span class="red">'.$model->pendidikan_jepang.'</span>',
            'label' => 'Bahasa Jepang',
            'format' => 'raw',
            'value' => function($model){

                  if ($model->pendidikan_jepang == 1) {
                                return 'Bisa Berbahasa Jepang' ;
                            } else { 
                                 return 'Tidak Bisa' ;
                            }

                        $stat = $model->pendidikan_jepang;
                        return $stat;
                    },
            ],

              [
            'attribute'=>'pendidikan_mandarin',
            // 'value' => '<span class="red">'.$model->pendidikan_mandarin.'</span>',
            'label' => 'Bahasa Mandarin',
            'format' => 'raw',
            'value' => function($model){

                  if ($model->pendidikan_mandarin == 1) {
                                return 'Bisa Berbahasa Mandarin' ;
                            } else { 
                                 return 'Tidak Bisa' ;
                            }

                        $stat = $model->pendidikan_mandarin;
                        return $stat;
                    },
            ],

              [
            'attribute'=>'pendidikan_belanda',
            // 'value' => '<span class="red">'.$model->pendidikan_belanda.'</span>',
            'label' => 'Bahasa Belanda',
            'format' => 'raw',
            'value' => function($model){

                  if ($model->pendidikan_belanda == 1) {
                                return 'Bisa Berbahasa Belanda' ;
                            } else { 
                                 return 'Tidak Bisa' ;
                            }

                        $stat = $model->pendidikan_belanda;
                        return $stat;
                    },
            ],

              [
            'attribute'=>'pendidikan_perancis',
            // 'value' => '<span class="red">'.$model->pendidikan_perancis.'</span>',
            'label' => 'Bahasa Perancis',
            'format' => 'raw',
            'value' => function($model){

                  if ($model->pendidikan_perancis == 1) {
                                return 'Bisa Berbahasa Perancis' ;
                            } else { 
                                 return 'Tidak Bisa' ;
                            }

                        $stat = $model->pendidikan_perancis;
                        return $stat;
                    },
            ],

              [
            'attribute'=>'pendidikan_arab',
            // 'value' => '<span class="red">'.$model->pendidikan_arab.'</span>',
            'label' => 'Bahasa Arab',
            'format' => 'raw',
            'value' => function($model){

                  if ($model->pendidikan_arab == 1) {
                                return 'Bisa Berbahasa Arab' ;
                            } else { 
                                 return 'Tidak Bisa' ;
                            }

                        $stat = $model->pendidikan_arab;
                        return $stat;
                    },
            ],

               [
            'attribute'=>'pendidikan_bahasa',
            // 'value' => '<span class="red">'.$model->pendidikan_bahasa.'</span>',
            'label' => 'Bahasa Lainnya',
            'format' => 'raw',
            'value' => function($model){

                  if ($model->pendidikan_bahasa ) {
                                return 'Bisa Berbahasa '.$model->pendidikan_bahasa ;
                            }else{
                                return 'Tidak Ada Bahasa Lainnya' ;

                            } 

                        $stat = $model->pendidikan_bahasa;
                        return $stat;
                    },
            ],

        
        ],
    ]) ?>

 <div class="form-group">
       <div class="box-tools pull-right">

<?= Html::a('<i class="glyphicon glyphicon-pencil"></i> EDIT',['keterangan/updatepencaker','id'=>$modelpendidikan->id_daftar],['class'=>'btn btn-default ']); ?>
<?= Html::a('<i class="fa fa-arrow-left"></i> Kembali',['keterangan/create'],['class'=>'btn btn-default']); ?>

</div>
</div>
</div>
</div>
</div>

