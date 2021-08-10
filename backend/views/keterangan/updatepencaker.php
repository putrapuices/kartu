  <?php
  use yii\widgets\DetailView;
  use yii\grid\GridView;
  use backend\models\Capil;
  use backend\models\Akun;
  use backend\models\UserForm;
  use backend\models\Daftar;
  use backend\models\Keterangan;
  use backend\models\Lokasi;
  use backend\models\DrhidnKecamatan;
  use backend\models\DrhidnKota;
  use backend\models\DrhidnProvinsi;
  use yii\bootstrap\ActiveForm;
  use yii\helpers\Html;






  $modelapil  = Capil::find()
  -> where(['capil_nik'=> $id])->one();
  $modelketerangan = Keterangan::find()
  -> where(['id_daftar'=> $id])->one();
  $cariforo = Lokasi::find()
  -> where(['id_daftar'=> $id])->one();

  $this->title = 'HALAMAN PEMBAHARUAN DATA DIRI';
  $this->params['breadcrumbs'][] = $this->title
  ?>


  <div class="box box-danger">
    <div class="box-header with-border">
      <i class="fa fa-refresh" aria-hidden="true"></i>

      <h3 class="box-title">DATA DIRI</h3>
      <div class="box-tools pull-right">  
       <a class="btn btn-success" href="updatedatadiri/?id=<?=$id?>" title="Perbaharui Photo" style="height:35px;margin-bottom:5px;margin-left:5px;margin-right:5px;">
        <i class="glyphicon glyphicon-pencil"> 
         PERBAHARUI DATA DIRI
       </i>
     </a>
     
   </div>
   <div class="box-tools pull-right">
    <button type="button" class="btn btn-box-tool" data-widget="collapse">
      <!-- <i class="fa fa-minus"> -->
        
        <!-- </i> -->
      </button>
      <button type="button" class="btn btn-box-tool" data-widget="remove">
        <!-- <i class="fa fa-times"></i> -->
      </button>
    </div>
  </div>
  <div class="box-body">
    
   <?= DetailView::widget([
        // 'options' =>['class' => 'table table-striped table-bordered table-hover toggle-circle table-green '],
    'options' =>['class' => 'table table-striped  table-hover detail-view fix-width '],

                // 'options' => ['class' => 'table table-striped table-bordered detail-view fix-width'],
    'model' => $modelketerangan,
        // 'template' => "<tr><th style='width: 20%;'>{label}</th><td>{value}.</td></tr>",
    'attributes' => [

            // 'keterangan_id',
      [
       'attribute'=>'lokasi_foto',
       'label'=>' ',

       'value'=>('@web/files/foto/' . $cariforo->lokasi_foto),

       'format' => ['image',['width'=>'200','height'=>'200']],
       'contentOptions' => ['style' => 'max-width:60px;'],

     ],
     [

      'label' => '',
      'value'=>Html::a('Perbaharui Foto Profile','perbaharuifotopencaker?id='.$cariforo->lokasi_id),  

      'format' => 'raw'
    ],
    
    [
      'label' => 'NAMA',                
      'attribute'=>'keterangan_nama',
            'contentOptions' => ['class' => 'bg-green','style' => 'max-width:20px;'],     // настройка HTML атрибутов для тега, соответсвующего value
            'captionOptions' => ['tooltip' => 'Tooltip'],

          ],
          
          [
            'label' => 'NIK',                
            'attribute'=>'id_daftar',
            'contentOptions' => ['class' => 'bg-red'],     // настройка HTML атрибутов для тега, соответсвующего value
            'captionOptions' => ['tooltip' => 'Tooltip'],

          ],
          
          [
            'label' => 'TEMPAT LAHIR',                
            'attribute'=>'keterangan_tempat',
            // 'contentOptions' => ['class' => 'bg-red'],     // настройка HTML атрибутов для тега, соответсвующего value
            'captionOptions' => ['tooltip' => 'Tooltip'],

          ],
          
          [
            'label' => 'Tanggal Lahir',                
            'attribute'=>'keterangan_tgl',
            'value' => function($model){

             return Yii::$app->formatter->asDateTime($model->keterangan_tgl, 'php:d/m/Y');
           },
            // 'capil_tgl_lhr:date',  // = time() for 09/01/2004
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

       [
        'label'=>       'Alamat KTP',
        'attribute' => 'keterangan_alamat',
      ],
      

      [
        'label'     =>    'Kecamatan',
        'format' => 'text',
        'attribute' =>    'keterangan_kec',        
        'value' =>
        function($model){
          // var_dump($model->keterangan_kec);die();
          return implode(\yii\helpers\ArrayHelper::map(DrhidnKecamatan::find()
            ->where(['nomor'=>$model->keterangan_kec/*,'id'=>$model->keterangan_kota*/])
            ->all(), 'id', 'nama'));         
        },
      ],  

      [
        'label'     =>    'Kota',
        'format' => 'text',
        'attribute' =>    'keterangan_kota',        
        'value' =>
        function($model){
                    return implode(\yii\helpers\ArrayHelper::map(DrhidnKota::find()
            ->where(['nomor'=>$model->keterangan_kota])
            ->all(), 'id', 'nama'));         
        },
      ],  
       [
        'label'     =>    'Provinsi',
        'format' => 'text',
        'attribute' =>    'keterangan_prov',        
        'value' =>
        function($model){
                    return implode(\yii\helpers\ArrayHelper::map(DrhidnProvinsi::find()
            ->where(['nomor'=>$model->keterangan_prov])
            ->all(), 'id', 'nama'));         
        },
      ],  
      //
      
       [
        'label'=>       'Alamat saat ini',
        'attribute' => 'keterangan_alamat_domisili',
      ],

      
    ],
  ]) ?>

</div>
<!-- /.box-body -->
</div>


<?php
if (Yii::$app->user->identity->level == 40) {

 $idname = Yii::$app->user->identity->username;
 $carilokasi = Lokasi::find()
 -> where(['id_daftar'=> $idname])
 ->one();
}elseif (Yii::$app->user->identity->level == 1) {
  $carilokasi = Lokasi::find()
  -> where(['id_daftar'=> $id])
  ->one();
}
// var_dump($carilokasi==true);die();

?>
<div class="box box-solid box-warning">    
  <div class="box-header">
    <!-- <h3 class="box-title">/*Biodata Siswa :*/ <? /*=$model->bio_nama*/?></h3> -->
    
    <a class="btn box-solid box-danger"style="font-size:24px;color:black"><i class="glyphicon glyphicon-refresh"></i> <b> SILAHKAN PERBAHARUI DATA ANDA</b></a>

    
  </div>
</div>









<div class="nav-tabs-custom">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">PENDIDIKAN FORMAL</a></li>
    <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">PEKERJAAN YANG DIINGINKAN</a></li>
    <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="true">PENGALAMAN KERJA</a></li>          
    <li class=""><a href="#tab_4" data-toggle="tab" aria-expanded="true">LOKASI</a></li>          
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="tab_1">
     
      
      


      <?= GridView::widget([
        'dataProvider' => $modelpendidikan,
                // 'filterModel' => $searchModel,
        'columns' => [
                    // ['class' => 'yii\grid\SerialColumn'],
          
         [
          'attribute'=>'pendidikan_nemipk',
          'header'=>'NEM/IPK',
          'value'=>'pendidikan_nemipk',
          'contentOptions'=>['style'=>'white-space: normal;'],            
        ],

        [
          'attribute'=>  'id_sekolah',
          'header'=>'Pendidikan Tertinggi',
          'value'=>'sekolah.sekolah_nama',
          'contentOptions'=>['style'=>'white-space: normal;'],            
        ],
        


        [
          'attribute'=>  'id_jurusan',
          'header'=>'Jurusan',
          'value'=>'jurusan.jurusan_nama',
          'contentOptions'=>['style'=>'white-space: normal;'],            
        ],


        [
          'attribute'=>  'pendidikan_keterampilan',
          'header'=>'Keterampilan',
          'value'=>'pendidikan_keterampilan',
          'contentOptions'=>['style'=>'white-space: normal;'],            
        ],
        

        [
          'class' => 'yii\grid\ActionColumn',
          'contentOptions'=>['style'=>'white-space: normal;'],
          'header' => 'Aksi',
          'template' =>'{cek-regis},{perbaharui}',
          'buttons' => [
            'cek-regis' => function ($url, $model, $key){
              return Html::a('<i class="fa fa-search"></i> Detail', ['lihat','id'=>$model->id_daftar], [
                'aria-label' => 'Lihat Detail Pendidikan',
                'title'=>'Lihat Detail Pendidikan',
                'style'=>'height:35px;margin-bottom:5px;', 
                'class' => 'btn btn-success',
                'target' => "_blank" 
              ]);
            },

            'perbaharui' => function ($url, $model, $key){
              return Html::a('<i class="fa fa-pencil"></i>', ['//pendidikan/update','id'=>$model->id_daftar], [
                'aria-label' => 'Perbarui Data',
                'title'=>'Perbarui Data',
                'style'=>'height:35px;width:40px;margin-bottom:5px;', 
                'class' => 'btn btn-primary', 
              ]);
            },
          ]
        ],
        
      ],
    ]); ?>
  </div><!-- /.tab-pane -->
  <div class="tab-pane" id="tab_2">
   



    <?= GridView::widget([
      'dataProvider' => $modelpendidikan,
                // 'filterModel' => $searchModel,
      'columns' => [
                    // ['class' => 'yii\grid\SerialColumn'],
        
       [
        'attribute'=>'id_jabatan',
        'header'=>'Jabatan',
        'value'=>'jabatan.jabatan_nama',
        'contentOptions'=>['style'=>'white-space: normal;'],            
      ],

      [
        'attribute'=>  'id_pekerjaan',
        'header'=>'Pekerjaan',
        'value'=>'pekerjaan.pekerjaan_nama',
        'contentOptions'=>['style'=>'white-space: normal;'],            
      ],
      

      
      
      
    ],
  ]); ?>
</div><!-- /.tab-pane -->
<div class="tab-pane" id="tab_3">
  <div class="box-tools pull-right"> 
   <p>
    <?= Html::a('Tambah Pengalaman', ['/pengalaman/createtabularpencaker','id'=>$id], ['class' => 'btn btn-success glyphicon glyphicon-plus']) ?>
  </p>
</div>
<?= GridView::widget([
  'dataProvider' => $modelpengalaman,
                // 'filterModel' => $searchModel,
  'summary'=>'',
  'tableOptions' => [
        //'id' => 'exampleFooAddRemove',
    'class' => 'table table-bordered table-hover toggle-circle table-green ',
    'data-page-size' => '0',
  ],
  'columns' => [
   ['class' => 'yii\grid\SerialColumn',
   'header'=> 'NO',
   'headerOptions' => ['style'=>'text-align:center; white-space: normal;color:#3c8dbc;'],
   
 ],
 
 [
  'attribute'=>'pengalaman_jabatan',
  'header'=>'JABATAN',
  'value'=>'pengalaman_jabatan',
  'contentOptions'=>['style'=>'white-space: normal;'],            
],

[
  'attribute'=>  'pengalaman_tugas',
  'header'=>'URAIAN TUGAS',
  'value'=>'pengalaman_tugas',
  'contentOptions'=>['style'=>'white-space: normal;'],            
],

[
  'attribute'=>  'pengalaman_lama',
  'header'=>'LAMA KERJA',
  'value'=>'pengalaman_lama',
  'contentOptions'=>['style'=>'white-space: normal;'],            
],

[
  'attribute'=>  'pengalaman_pemberi',
  'header'=>'PEMBERI/PENGGUNA',
  'value'=>'pengalaman_pemberi',
  'contentOptions'=>['style'=>'white-space: normal;'],            
], 

[
  'class' => 'yii\grid\ActionColumn',
  'contentOptions'=>['style'=>'white-space: normal;'],
  'header' => 'Aksi',
  'template' =>'{perbaharui},{delete}',
  'buttons' => [
    'detail' => function ($url, $model, $key){
      return Html::a('<i class="fa fa-search"></i> Detail', ['//pengalaman/view','id'=>$key], [
        'aria-label' => 'Lihat Detail Pengalaman',
        'title'=>'Lihat Detail Pengalaman',
        'style'=>'height:35px;margin-bottom:5px;', 
        'class' => 'btn btn-success',
        'target' => "_blank" 
      ]);
    },

    'perbaharui' => function ($url, $model, $key){
      return Html::a('<i class="fa fa-pencil"></i>', ['//pengalaman/update','id'=>$key], [
        'aria-label' => 'Perbarui Data',
        'title'=>'Perbarui Data',
        'style'=>'height:35px;width:40px;margin-bottom:5px;', 
        'class' => 'btn btn-primary', 
      ]);
    },

    'delete' => function ($url, $model, $key){
      return Html::a('<i class="fa fa-trash"></i>', ['//pengalaman/delete','id'=>$key], [
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
</div><!-- /.tab-pane -->
<div class="tab-pane" id="tab_4">
 <?= DetailView::widget([
  'model' => $modellokasi,
  'options' =>['class' => 'table table-striped  table-hover detail-view fix-width '],
  
  'attributes' => [
    

   [
    'attribute'=>'lokasi_tempat',
            // 'value' => '<span class="red">'.$model->lokasi_tempat.'</span>',
    'label' => 'Lokasi Pekerjaan Yang Diinginkan',
    'format' => 'raw',
    'value' => function($model){

      if ($model->lokasi_tempat == 1) {
        $lokal= 'Lokasi Tempat Tinggal (Dalam Negeri)' ;
        return Html::a($lokal, ['//lokasi/update', 'id' => $model->lokasi_id]);
      } elseif ($model->lokasi_tempat == 2) { 
       $wilayah= 'Wilayah Lainnnya (Dalam Negeri)' ;
       return Html::a($wilayah, ['//lokasi/update', 'id' => $model->lokasi_id]);
     }elseif ($model->lokasi_tempat == 3) {
       $luar= 'DiLuar Negeri' ;
       return Html::a($luar, ['//lokasi/update', 'id' => $model->lokasi_id]);
     }

     $stat = $model->lokasi_tempat;
     return $stat;
   },
 ],


 [
  'attribute'=>'lokasi_upah',
            // 'value' => '<span class="red">'.$model->lokasi_upah.'</span>',
  'label' => 'Besaranya Upah Yang Diinginkan',
  'format' => 'raw',
  'value' => function($model){

    if ($model->lokasi_upah == 1) {
      $satu= '< Rp. 1.000.000' ;
      return Html::a($satu, ['//lokasi/update', 'id' => $model->lokasi_id]);
    } elseif ($model->lokasi_upah == 2) { 
     $satulebih= 'Rp. 1.000.001 - Rp 2.500.000,-' ;
     return Html::a($satulebih, ['//lokasi/update', 'id' => $model->lokasi_id]);
   }elseif ($model->lokasi_upah == 3) {
     $dualima='Rp. 2.500.001 - Rp. 5.000.000,-' ;
     return Html::a($dualima, ['//lokasi/update', 'id' => $model->lokasi_id]);
   }elseif ($model->lokasi_upah == 4) {
     $lima = 'Rp. 5.000.000 < Keatas' ;

     return Html::a($lima, ['//lokasi/update', 'id' => $model->lokasi_id]);
     
   }

   $stat = $model->lokasi_upah;
                        // return $stat;
   
 },

],


],
]) ?>
</div>