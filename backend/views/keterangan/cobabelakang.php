
<?php
$this->title = '';
use yii\helpers\Url;
use backend\models\Keterangan;
use backend\models\Daftar;
use backend\models\Pendidikan;
use backend\models\Lokasi;
use backend\models\Pegawai;
use yii\helpers\ArrayHelper;
?>
<?php $this->beginPage() ?>

<?php
  $current_user=Yii::$app->user->id;
if (Yii::$app->user->identity->level == 40){ 

  $current_username=Yii::$app->user->identity->username;

}elseif (Yii::$app->user->identity->level == 1) {
  $current_username=$modelid;
  
}
  $caridata = Keterangan::findOne(['id_daftar'=>$current_username]);
  $caridaftartanggal = Daftar::findOne(['daftar_id'=>$current_username]);
  $tanggaldaftar = $caridaftartanggal->daftar_tgl;

  // $sekarang = Yii::$app->formatter->asDate('now', 'php:Y-m-d');

         $tambahenambulan = date('d-m-Y', strtotime('+6 month', strtotime($tanggaldaftar)));
         $tambahtahun = date('d-m-Y', strtotime('next years', strtotime($tanggaldaftar)));
         $tambahtahunkedua = date('d-m-Y', strtotime('+6 month next years', strtotime($tanggaldaftar)));
         $tambahtahunkeduaenambulan = date('d-m-Y', strtotime('+12 month next years', strtotime($tanggaldaftar)));

  $caripendidikan = Pendidikan::findOne(['id_daftar'=>$current_username]);
$cariforo = Lokasi::find()
-> where(['id_daftar'=> $current_username])->one();

$carittd = Pegawai::findOne(['pegawai_aktif'=>1]);


// $now = new \DateTime('2020-07-01');
$todayy = date('Ymd');

$kode = strtotime("now");


$coba =substr($kode,-2);
// echo $todayy.$coba;
$nomorregister =$caridaftartanggal->daftar_no;
// var_dump($todayy .'    '.$coba);die();


?>

<style>
    
      #box{
        width:750px;
        height:40px;
        /*background:green;*/
        border:solid 3px black;
      }

       #box1{
        width:70px;
        height:70px;
        /*background:green;*/
        border:solid 3px black;
      }


span.a {
  display: inline; /* the default for span */
  width: 20px;
  height: 20px;
        border:solid 3px black;

  /*padding: 5px;
  border: 1px solid blue;  
  background-color: yellow; */
}

img.mat {
  width: 50%;
  height: auto;
  display: block;
  /*margin: 4rem auto;*/
  /*padding: 10%;*/
  /*background-color: #A67B5B;*/
  /*background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/cardboard.jpg');*/
  /*background-repeat: no-repeat;*/
  /*background-size: cover;*/
/*border: 6px double #483C32;*/
/*box-shadow: 0 0 0 50px rgba(244, 240, 236, 0.4) inset, 0 0 0 11px rgb(180, 130, 90), 0 0 30px rgba(0, 0, 0, 0.8) inset;*/
outline: 2px solid #333;
outline-offset: 0px;
}

.left    { text-align: left;}
   .right   { text-align: right;}
   .center  { text-align: center;}
   .justify { text-align: justify;}
    
	
	body {
  margin: 0;
  background: #CCCCCC;
}

div.page {
  margin: 10px auto;
  border: solid 1px black;
  display: block;
  page-break-after: always;
  width: 209mm;
  height: 296mm;
  overflow: hidden;
  background: white;
}

div.landscape-parent {
  width: 296mm;
  height: 209mm;
}

div.landscape {
  width: 296mm;
  height: 209mm;
}

div.content {
  padding: 10mm;
}

body,
div,
td {
  font-size: 13px;
  font-family: Verdana;
}

@media print {
  body {
    background: none;
  }
  div.page {
    width: 209mm;
    height: 296mm;
  }
  div.landscape {
    transform: rotate(270deg) translate(-296mm, 0);
    transform-origin: 0 0;
  }
  div.portrait,
  div.landscape,
  div.page {
    margin: 0;
    padding: 0;
    border: none;
    background: none;
  }
}

table, th, td {
  border: 1px solid black;
}
</style>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <!-- <div class="row"> -->
    <!--   <div class="col-xs-12">
        <h2 class="page-header">
          <i class="fa fa-globe"></i>  Kartu AK I.
          <small class="pull-right">Date: 2/10/2014</small>
        </h2>
      </div> -->
      <!-- /.col -->
    <!-- </div> -->
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-6 ">

        <table  border="1">
          <tr >
            <th colspan="2">KETENTUAN :</th>
           
           </tr>
          <tr>
             <td>1.</td>
             <td>BERLAKU NASIONAL</td>
          </tr>
           <tr>
             <td>2.</td>
             <td>BILA ADA PERUBAHAN DATA / KETERANGAN LAINNYA ATAU TELAH MENDAPAT PEKERJAAN HARAP SEGERA MELAPOR</td>
          </tr>
          <tr>
             <td>3.</td>
             <td>APABILA PENCARI KERJA YANG BERSANGKUTAN TELAH DITERIMA BEKERJA MAKA INSTANSI / PERUSAHAAN YANG MENERIMA AGAR MENGEMBALIKAN KARTU AK I INI</td>
          </tr>
           <tr>
             <td>4.</td>
             <td>KARTU INI BERLAKU SELAMA 2 (DUA) TAHUN DENGAN KEHARUSAN KETENTUAN MELAPOR SETIAP 6 (ENAM) BULAN SEKALI BAGI PENCARI KERJA YANG BELUM MENDAPATKAN PEKERJAAN</td>
          </tr>

        </table>
        </div>
               <!-- <div class="row"> -->

       <div class="col-sm-6 ">
<table border="1">
  <tr>
    <th>LAPORAN</th>
    <th>TGL-BULAN-TAHUN</th>
    <th><p class="center">Tanda Tangan Pengantar Kerja / Petugas Pendaftar (Cantumkan NIP)</p></th>
  </tr>
  <tr>
    <td>PERTAMA</td>
    <td><?=$tambahenambulan?></td>
    <td></td>
  </tr>
   <tr>
    <td>KEDUA</td>
    <td><?=$tambahtahun?></td>
    <td></td>
  </tr>
  <tr>
    <td>KETIGA</td>
    <td><?=$tambahtahunkedua?></td>
    <td></td>
  </tr>
</table>
<br/>
<br/>

<table >
  <!-- <tr>
    <th>Month</th>
    <th>Savings</th>
  </tr> -->
  <tr>
    <td>DITERIMA</td>
    <td style="color:white">
      DITERIMADITERIMADITERIMADITERIMADITERIMADITERIMA
    </td>
  </tr>
  <tr>
    <td>TERHITUNG MULAI TANGGAL</td>
    <td style="color:white">
      DITERIMADITERIMADITERIMADITERIMADITERIMADITERIMA        
        
    </td>
  </tr>
</table>
      </div>
<!-- </div> -->
      
       

  
</body>