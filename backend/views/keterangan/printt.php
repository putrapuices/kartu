<?php
$this->title = '';
use yii\helpers\Url;
use backend\models\Keterangan;
use backend\models\Daftar;
use backend\models\Pendidikan;
use backend\models\Lokasi;

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

  $caripendidikan = Pendidikan::findOne(['id_daftar'=>$current_username]);
$cariforo = Lokasi::find()
-> where(['id_daftar'=> $current_username])->one();

?>

<style>
    
      #box{
        width:670px;
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
    </style>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= 
$this->title = 'CETAK';

?></title>


  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();">

<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
     <!--  <div class="col-12">
        <h2 class="page-header">
          <i class="fas fa-globe"></i> AdminLTE, Inc.
          <small class="float-right">Date: 2/10/2014</small>
        </h2>
      </div> -->
      <!-- /.col -->
    
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-5 invoice-col">
        <b><u>PENDIDIKAN FORMAL</u></b>
        <address>
          <!-- <strong>Admin, Inc.</strong> -->
          <br>
       <div class="col-sm-3 ">

         <?=$caripendidikan->sekolah->sekolah_nama?>
       </div>
       <div class="col-sm-5 ">
          <p class="center">

         <?=$caripendidikan->pendidikan_namasekolah?>
         <?=$caripendidikan->jurusan->jurusan_nama?>
</p>
       </div>
       <div class="col-sm-3 ">
         
         <?='TH'.'.'.$caripendidikan->pendidikan_thntamat?>
          </div>
        </address>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
               <div class="row">

       <div class="col-sm-6 ">

        <div style="border-bottom:2px dashed black ;">
</div>
<p class="solid" style="border-bottom:2px solid black;"></p>
</div>
       <div class="col-sm-6 ">
</div>
</div>
               <div class="row">
      
       <div class="col-sm-5 ">
        <br/>
        <br/>

        <u>KETERAMPILAN</u>

        <ul>
         <li>
          <?=$caripendidikan->pendidikan_keterampilan?>
          </li>

        </ul>
       </div>
<br/>
<br/>


       <div class="col-sm-7">
          <p class="center">

        Kepala Bidang Tenaga Kerja
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <u>IKA SEPTIA MAULANA</u><br/>
        NIP. 198709152007012001</p>


       </div>
     
        </div>
      </div>
      <!-- <p><u>KETERAMPILAN</u></p> -->
      <!-- /.col -->
     <!--  <div class="col-sm-4 invoice-col">
        To
        <address>
          <strong>John Doe</strong><br>
          795 Folsom Ave, Suite 600<br>
          San Francisco, CA 94107<br>
          Phone: (555) 539-1037<br>
          Email: john.doe@example.com
        </address>
      </div> -->
      <!-- /.col -->
      <div class="col-sm-7 invoice-col">
               <div class="row">
                <div class="col-xs-12 text-center" style=" height: 65px;" >
                  <table width="100%">
                    <tr>

                    <td width="19%"><img class="img" src="<?php echo Url::to('@web/images/logo.png')?>" alt="logo" style="width:65px; margin-top:-25px"></td>
                    <td width="100%">
                        <p style="font-size:18px;"><b>DINAS PENANAMAN MODAL, PTSP DAN TENAGA KERJA TENAGA KERJA</b></p>
                        <!-- <p style="font-size:19px; margin-top:-15px;"><b>DINAS PENDIDIKAN PEMUDA DAN OLAHRAGA KOTA PARIAMAN</b></p> -->
                        <p style="font-size:11px; margin-top:-15px;">Jln. Syech Burhanuddin no. 145 Desa Taluk, 25514 Telp: 08116606609</p><br>
                        </td>
                    <td width="15%"></td>
                  </tr>
                   </table>

                </div>
                <!-- /.col -->
            </div>
<br/>
<br/>
            <div id="box"><p class="center">KARTU TANDA BUKTI PENDAFTARAN PENCARI KERJA</p></div>
            <div class="row">
<br/>
<div class="col-md-12">
<div><b>No. Induk Kependudukan     :</b> 
  <span class="a"><?=$current_username[0];?></span> 
   <span class="a"><?=$current_username[1];?></span>
          <span class="a"><?=$current_username[2];?></span>
          <span class="a"><?=$current_username[3];?></span>
          <span class="a"><?=$current_username[4];?></span>
          <span class="a"><?=$current_username[5];?></span>
          <span class="a"><?=$current_username[6];?></span>
          <span class="a"><?=$current_username[7];?></span>
          <span class="a"><?=$current_username[8];?></span>
          <span class="a"><?=$current_username[9];?></span>
          <span class="a"><?=$current_username[10];?></span>
          <span class="a"><?=$current_username[11];?></span>
          <span class="a"><?=$current_username[12];?></span>
          <span class="a"><?=$current_username[13];?></span>
          <span class="a"><?=$current_username[14];?></span>
          <span class="a"><?=$current_username[15];?></span>
 </div>
          
      </div>
<div class="col-md-12">
<div><b>No. Induk Kependudukan     :</b> 
  <span class="a"><?=$current_username[0];?></span> 
   <span class="a"><?=$current_username[1];?></span>
          <span class="a"><?=$current_username[2];?></span>
          <span class="a"><?=$current_username[3];?></span>
          <span class="a"><?=$current_username[4];?></span>
          <span class="a"><?=$current_username[5];?></span>
          <span class="a"><?=$current_username[6];?></span>
          <span class="a"><?=$current_username[7];?></span>
          <span class="a"><?=$current_username[8];?></span>
          <span class="a"><?=$current_username[9];?></span>
          <span class="a"><?=$current_username[10];?></span>
          <span class="a"><?=$current_username[11];?></span>
          <span class="a"><?=$current_username[12];?></span>
          <span class="a"><?=$current_username[13];?></span>
          <span class="a"><?=$current_username[14];?></span>
          <span class="a"><?=$current_username[15];?></span>
 </div>
          
      </div>

      <br/>

</div>


<br/>
<br/>

      <!-- <div class="box-body no-padding"> -->
   

     

        <!-- </div> -->

     <div class="row">
      
       <div class="col-sm-5 ">

        <p class="center">

            <td width="90%"><img class="img" src="<?php echo Url::to('@web/files/foto/'.$cariforo->lokasi_foto)?>" alt="logo" style="width:95px; margin-top:-25px"></td>

            <!-- img class="mat" src="<?php //echo Url::to('@web/files/foto/'.$cariforo->lokasi_foto)?>"> -->
<br/>
<br/>
<br/>
<br/>
<br/>
        TTD Pencari Kerja:</p>
       </div>

       <div class="col-sm-7">
        
              <table class="table table-condensed">
              
                <tr>
                  <td></td>
                  <td style="width: 15%">Nama Lengkap</td>
                  <td> : <?= $caridata->keterangan_nama;?></td>
                </tr>
                <tr>
                  <td></td>
                  <td style="width: 15%">Tempat/Tgl Lahir</td>
                  <td> : <?= $caridata->keterangan_tempat.'/'.$caridata->keterangan_tgl;?></td>
                                
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
                   ?>
                     
                   </td>
                   
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
      <!-- batas  kolom -->

</div>



</div>
</div>
</section>
</div>

     

<!-- ./wrapper -->

<!-- script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script> -->


</body>
</html>

<!-- </html> -->
<?php $this->endPage() ?>
