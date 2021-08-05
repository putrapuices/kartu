<?php
$this->title = '';
use yii\helpers\Url;
use backend\models\Keterangan;
use backend\models\Daftar;

?>
<?php $this->beginPage() ?>

<?php
  $current_user=Yii::$app->user->id;
  $current_username=Yii::$app->user->identity->username;
  $caridata = Keterangan::findOne(['id_daftar'=>$current_username]);
  $caridaftartanggal = Daftar::findOne(['daftar_id'=>$current_username]);
  $tanggaldaftar = $caridaftartanggal->daftar_tgl;

  // $sekarang = Yii::$app->formatter->asDate('now', 'php:Y-m-d');

         $tambahenambulan = date('d-m-Y', strtotime('+6 month', strtotime($tanggaldaftar)));
         $tambahtahun = date('d-m-Y', strtotime('next years', strtotime($tanggaldaftar)));
         $tambahtahunkedua = date('d-m-Y', strtotime('+6 month next years', strtotime($tanggaldaftar)));
         $tambahtahunkeduaenambulan = date('d-m-Y', strtotime('+12 month next years', strtotime($tanggaldaftar)));
  // var_dump($tambahenambulan.'  '.$tambahtahun.'  '.$tambahtahunkedua);die();


// $diff  = date_diff( date_create('1992-03-19'), date_create() );
// $diff  = date_diff( date_create($tanggaldaftar), date_create() );

// echo $diff->format('<br>Usia anda adalah %Y tahun %m bulan %d hari');
  // var_dump($diff->format('<br>Usia anda adalah %Y tahun %m bulan %d hari'));die();


//  $carisekolahsiswa= $carisiswa->id_kel;
//  $carizona= Zona::find()
//  ->where(['id_kel'=>$carisekolahsiswa])
//  ->one();

//  $carizonasekolah= $carizona->id_sekolah;

//  $carisekolahnama= Sekolah::find()
//  ->where(['sekolah_id'=>$carizonasekolah])
//  ->one();

// $carinomordaftar = UserSiswa::find()
// ->where(['id_bio'=>$current_username])
// ->one();
// date_default_timezone_set('Asia/Jakarta');
// $waktu= date('d-m-Y'); // Hasil: 20-01-2017 05:32:15
// $waktu= date('d-m-Y H:i:s'); // Hasil: 20-01-2017 05:32:15
?>
<style>
    
      #box{
        width:900px;
        height:40px;
        /*background:green;*/
        border:solid 3px black;
      }
      #box1{
        width: 30px;
     height: 20px;
     border: 4px solid #575D63;
     padding: 10px;
     margin: 20px;

      }
       #box2{
        width: 300px;
     height: 200px;
     border: 4px solid #575D63;
     padding: 10px;
     margin: 20px;

      }

th {
  border: 0px solid red;
}

/*#table1 {
  border-collapse: collapse;
  border-color: blue;
}

#table2 {
  border-collapse: separate;
  border-color: blue;
}*/
      
/*html,body{
    height:297mm;
    width:210mm;
}


html,body{
    height:29.7cm;
    width:21cm;
}*/

/*html,body{
    height: 842px;
    width: 595px;
}*/
     /* body {
  background: rgb(204,204,204); 
}
page {
  background: white;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}
page[size="A4"] {  
  width: 21cm;
  height: 29.7cm; 
}
page[size="A4"][layout="portrait"] {
  width: 29.7cm;
  height: 21cm;  
}
@media print {
  body, page {
    margin: 0;
    box-shadow: 0;
  }*/

    </style>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= 
$this->title = 'Bukti | PPDB';

?></title>


  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();">

  <!-- <page size="A4">A4</page> -->
<!-- <page size="A4" layout="portrait">A4 portrait -->
<page size="A4" layout="landscape">A4 portrait
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <i class="fa fa-globe"></i> Bukti | PPDB
          <small class="pull-right"><?//=$waktu?></small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
<div id="box1"><?=$current_username[0];?></div>

<div id="box1"><?=$current_username[0];?></div>

        <div class="row">
                <div class="col-xs-12 text-center" style=" height: 65px;" >
                  <table width="100%">
                    <tr>

                    <td width="15%"><img class="img" src="<?php echo Url::to('@web/images/logo.png')?>" alt="logo" style="width:65px; margin-top:-25px"></td>
                    <td width="70%">
                        <p style="font-size:16px;"><b>DINAS PENANAMAN MODAL, PTSP DAN TENAGA KERJA TENAGA KERJA</b></p>
                        <!-- <p style="font-size:19px; margin-top:-15px;"><b>DINAS PENDIDIKAN PEMUDA DAN OLAHRAGA KOTA PARIAMAN</b></p> -->
                        <p style="font-size:11px; margin-top:-15px;">Jln. Syech Burhanuddin no. 145 Desa Taluk, 25514 Telp: 08116606609</p><br>
                        </td>
                    <td width="15%">
                    </tr>

                    </table>

                </div>
                <!-- /.col -->
            </div>
            <div style="margin-top:10px;">
            <hr />
            </div>

 <!-- /.box -->

          <!-- <div class="box"> -->
              <div class="box-header">
              <!-- <h3 class="box-title">Tahun Ajaran : 2020/2021  </h3> -->
            </div>

<div id="box">KARTU TANDA BUKTI PENDAFTARAN PENCARI KERJA</div>

             <table border="1">
              <!-- <table class="table"> -->

        <tr>
         <td > <?='Saya jajbja              ';?>

          <td><?=$current_username[0];?></td>
          <td><?=$current_username[1];?></td>
          <td><?=$current_username[2];?></td>
          <td><?=$current_username[3];?></td>
          <td><?=$current_username[4];?></td>
          <td><?=$current_username[5];?></td>
          <td><?=$current_username[6];?></td>
          <td><?=$current_username[7];?></td>
          <td><?=$current_username[8];?></td>
          <td><?=$current_username[9];?></td>
          <td><?=$current_username[10];?></td>
          <td><?=$current_username[11];?></td>
          <td><?=$current_username[12];?></td>
          <td><?=$current_username[13];?></td>
          <td><?=$current_username[14];?></td>
          <td><?=$current_username[15];?></td>
            <!-- <th rowspan="2" bgcolor="yellow">Bulan</th> -->
            <!-- <th colspan="2" bgcolor="#00ff80">Hasil Panen</th> -->
        </tr>
        <tr>
                
       
        </tr>
     
    </table>
            <!-- /.box-header -->

            <!-- <img class="profile-user-img img-responsive img-circle" src="<?php// echo Url::to('@web/files/foto/'.$carisiswa->bio_foto)?>" alt="User profile picture"> -->

              <h3 class="profile-username text-center">
              <!-- ?=
               // $carisiswa->bio_nama;
              ?-->
                
              </h3>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-condensed">
               <!--  <tr>
                  <th style="width: 10px">#</th>
                  <th>Task</th>
                  <th>Progress</th>
                  <th style="width: 40px">Label</th>
                </tr> -->
                <tr>
                  <td></td>
                  <td style="width: 15%">Nama Lengkap</td>
                   <td> : <?= $caridata->keterangan_nama;?></td>

                </tr>
                <tr>
                  <td></td>
                  <td style="width: 15%">Tempat/Tgl Lahir</td>
                   <td> : <?= $caridata->keterangan_tempat.'/'.$caridata->keterangan_tgl;?></td>
                   
                  <!--  -->
                   
                </tr>
                <tr>
                  <td></td>
                  <td style="width: 15%">Jenis Kelamin</td>
                   <td> : <?php 
                   if($caridata->keterangan_jkl == 1){
                    echo "Laki - Laki";
                   }else{

                    echo "Perempuan";
                   }
                   ?></td>
                   
                
                   <!--  -->
                </tr>
                <tr>
                  <td></td>
                 <td style="width: 15%">Status</td>
                   <td> : <?php 
                   if($caridata->keterangan_status == 1){
                    echo "Belum Kawin";
                   }else{

                    echo "Kawin";
                   }
                   ?></td>
                  
                  <td>
                    <!--  -->
                </tr>

                <tr>
                  <td></td>
                  <td style="width: 30%">Alamat</td>
                   <td> : <?= $caridata->keterangan_alamat;?></td>
                   
                 <!--  -->
                </tr>

                  <tr>
                  <td></td>
                  <td style="width: 30%">No. Telp</td>
                   <td> : <?= $caridata->keterangan_hp;?></td>
                   
                 <!--  -->
                </tr>

                  <tr>
                  <td></td>
                  <td style="width: 30%">Berlaku s.d</td>
                   <td> : <?=$tambahtahunkeduaenambulan?> </td>
                 <!--  -->
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          <!-- </div> -->
          <!-- /.box -->
 

    <!-- <div class="row"> -->
      <!-- accepted payments column -->
      <!-- <div class="col-xs-6"> -->
        <!-- <p class="lead">Catatan Penting:</p> -->
        <!-- <img src="../../dist/img/credit/visa.png" alt="Visa">
        <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
        <img src="../../dist/img/credit/american-express.png" alt="American Express">
        <img src="../../dist/img/credit/paypal2.png" alt="Paypal"> -->

        <!-- <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;"> -->
        <!-- Bawalah Kartu ini untuk melakukan verifikasi pada sekolah yang dituju paling lambat tanggal:....... -->
        <!-- </p> -->
      <!-- </div> -->
      <!-- /.col -->
   <!--    <div class="col-xs-6">
        <p class="lead">Amount Due 2/22/2014</p>

        <div class="table-responsive">
          <table class="table">
            <tr>
              <th style="width:50%">Subtotal:</th>
              <td>$250.30</td>
            </tr>
            <tr>
              <th>Tax (9.3%)</th>
              <td>$10.34</td>
            </tr>
            <tr>
              <th>Shipping:</th>
              <td>$5.80</td>
            </tr>
            <tr>
              <th>Total:</th>
              <td>$265.24</td>
            </tr>
          </table>
        </div>
      </div -->
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</page>
</body>
</html>
<?php $this->endPage() ?>