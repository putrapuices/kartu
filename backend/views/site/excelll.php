<?php
    use yii\helpers\Url;
    use yii\helpers\Html;
    use yii\bootstrap\Modal;

/* @var $this yii\web\View */


$this->title = 'Laporan Per Hari';
?>

<?php 

$filename  = 'kartu.xls';
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=".$filename);




$html = '';      
$html .= '
  <table border="1">
    <thead>
      <tr> 
              <th colspan=12>IPK III/2 : PENCARI KERJA YANG TERDAFTAR, DITEMPATKAN DAN DIHAPUSKAN DIRINCI MENURUT JENIS PENDIDIKAN</th></tr>
              <tr><th colspan=12>Dinas Pendidikan Pemuda dan Olahraga Kota Pariaman</th></tr>
              <th colspan=12>SMPN 
          Pariaman
              </th>
               
      </tr>
      <tr style="background: #aaa">
        <th rowspan="2" colspan="2" >JENIS PENDIDIKAN</th>
        <th colspan="2" >SISA BULAN YANG LALU</th>
        <th colspan="2" >YANG TERDAFTAR BULAIN INI</th>
        <th colspan="2" >PENEMPATAN BULAN INI</th>        
        <th colspan="2" >DIHAPUSKAN BULAN INI</th>
        <th colspan="2" >SISA AKHIR BULAN INI</th>
        
      </tr>
    </thead>
     
     
    <tr>
            <td> L </td>
            <td> P </td>       
             <td> L </td>
            <td> P </td>
            <td> L </td>
            <td> P </td>
            <td> L </td>
            <td> P </td>
            <td> L </td>
            <td> P </td>   
            
     </tr>
     <tr>
            <td colspan="2" > &#39;&#40;1&#41;</td>
            <td> &#39;&#40;2&#41;</td>
            <td> &#39;&#40;3&#41;</td>
            <td> &#39;&#40;4&#41;</td>
            <td> &#39;&#40;5&#41;</td>
            <td> &#39;&#40;6&#41;</td>
            <td> &#39;&#40;7&#41;</td>
            <td> &#39;&#40;8&#41;</td>
            <td> &#39;&#40;9&#41;</td>
            <td> &#39;&#40;10&#41;</td>
            <td> &#39;&#40;11&#41;</td>
                         
     </tr>
    
     

    <tbody>';    


$no = 1;
        

    $html .= '

 <tr>
            <td> 1000 </td>
            <td>SEKOLAH DASAR</td>
              <td >=SUM(C11)</td>
              <td >=SUM(d11)</td>
              <td >=SUM(e11)</td>
              <td >=SUM(f11)</td>
              <td >=SUM(g11)</td>
              <td >=SUM(h11)</td>
              <td >=SUM(i11)</td>
              <td >=SUM(j11)</td>
              <td >=SUM(k11)</td>
              <td >=SUM(l11)</td>
</tr>
 <tr>

         <td> 1101 </td>
          <td>TAMAT SD</td>
          <td>'.$tidaktamatsdl.'</td>
          <td>'.$tidaktamatsdp.'</td>
          <td>'.$tidaktamatsdl.'</td>
          <td>'.$tidaktamatsdp.'</td>
          <td>'.$tidaktamatsdl.'</td>
          <td>'.$tidaktamatsdp.'</td>
          <td>'.$tidaktamatsdl.'</td>
          <td>'.$tidaktamatsdp.'</td>
          <td>'.$tidaktamatsdl.'</td>
          <td>'.$tidaktamatsdp.'</td>

                  
     

        </tr> 
       <tr>

          <td> 1102 </td>
          <td>TAMAT SD</td>
          <td>'.$tamatsdl.'</td>
          <td>'.$tamatsdp.'</td>
          <td>'.$tamatsdl.'</td>
          <td>'.$tamatsdp.'</td>
          <td>'.$tamatsdl.'</td>
          <td>'.$tamatsdp.'</td>
          <td>'.$tamatsdl.'</td>
          <td>'.$tamatsdp.'</td>
          <td>'.$tamatsdl.'</td>
          <td>'.$tamatsdp.'</td>
                  
     

        </tr> 
        
    <tr>

         <td> 1103 </td>
          <td>SETINGKAT SD</td>
          <td>'.$setingkatsdl.'</td>
          <td>'.$setingkatsdp.'</td>
         <td>'.$setingkatsdl.'</td>
          <td>'.$setingkatsdp.'</td>
          <td>'.$setingkatsdl.'</td>
          <td>'.$setingkatsdp.'</td>
          <td>'.$setingkatsdl.'</td>
          <td>'.$setingkatsdp.'</td>
         <td>'.$setingkatsdl.'</td>
          <td>'.$setingkatsdp.'</td>
                  
     

        </tr> 
  <tr>
              <td colspan = 2> Sub Total </td>
              <td >=SUM(C8:C10)</td>
              <td >=SUM(d8:d10)</td>
              <td >=SUM(e8:e10)</td>
              <td >=SUM(f8:f10)</td>
              <td >=SUM(g8:g10)</td>
              <td >=SUM(h8:h10)</td>
              <td >=SUM(i8:i10)</td>
              <td >=SUM(j8:j10)</td>
              <td >=SUM(k8:k10)</td>
              <td >=SUM(l8:l10)</td>
  </tr>

        

  
      <tr>
             <td> 2000 </td>
             <td>PENDIDIKAN MENENGAH PERTAMA</td>
              <td >=SUM(C16)</td>
              <td >=SUM(d16)</td>
              <td >=SUM(e16)</td>
              <td >=SUM(f16)</td>
              <td >=SUM(g16)</td>
              <td >=SUM(h16)</td>
              <td >=SUM(i16)</td>
              <td >=SUM(j16)</td>
              <td >=SUM(k16)</td>
              <td >=SUM(l16)</td>
</tr>
 <tr>
             <td> 2001 </td>
             <td>SLTP UMUM</td>
  </tr>
 <tr>

         <td> 2101 </td>
          <td>SEKOLAH MENENGAH PERTAMA</td>
          <td>'.$smpl.'</td>
          <td>'.$smpp.'</td>
          <td>'.$smpl.'</td>
          <td>'.$smpp.'</td>
          <td>'.$smpl.'</td>
          <td>'.$smpp.'</td>
          <td>'.$smpl.'</td>
          <td>'.$smpp.'</td>
          <td>'.$smpl.'</td>
          <td>'.$smpp.'</td>

                  
     

        </tr> 
       <tr>

          <td> 2102 </td>
          <td>MADRASAH DINIYAH SANAWIYAH</td>
          <td>'.$mdsl.'</td>
          <td>'.$mdsp.'</td>
          <td>'.$mdsl.'</td>
          <td>'.$mdsp.'</td>
          <td>'.$mdsl.'</td>
          <td>'.$mdsp.'</td>
          <td>'.$mdsl.'</td>
          <td>'.$mdsp.'</td>
          <td>'.$mdsl.'</td>
          <td>'.$mdsp.'</td>
                  
     

        </tr> 
        
 
  <tr>
              <td colspan = 2> Sub Total </td>
              <td >=SUM(C14:C15)</td>
              <td >=SUM(d14:d15)</td>
              <td >=SUM(e14:e15)</td>
              <td >=SUM(f14:f15)</td>
              <td >=SUM(g14:g15)</td>
              <td >=SUM(h14:h15)</td>
              <td >=SUM(i14:i15)</td>
              <td >=SUM(j14:j15)</td>
              <td >=SUM(k14:k15)</td>
              <td >=SUM(l14:l15)</td>
  </tr>






  
 <tr>
             <td> 2002 </td>
             <td>SLTP KEJURUAN</td>
  </tr>
 <tr>

         <td> 2104 </td>
          <td>SLTP KEJURUAN</td>
          <td>'.$sltpkejuruanl.'</td>
          <td>'.$sltpkejuruanp.'</td>
          <td>'.$sltpkejuruanl.'</td>
          <td>'.$sltpkejuruanp.'</td>
          <td>'.$sltpkejuruanl.'</td>
          <td>'.$sltpkejuruanp.'</td>
          <td>'.$sltpkejuruanl.'</td>
          <td>'.$sltpkejuruanp.'</td>
          <td>'.$sltpkejuruanl.'</td>
          <td>'.$sltpkejuruanp.'</td>

                  
     

        </tr> 
     
        
 
  <tr>
              <td colspan = 2> Sub Total </td>
              <td >=SUM(C18)</td>
              <td >=SUM(d18)</td>
              <td >=SUM(e18)</td>
              <td >=SUM(f18)</td>
              <td >=SUM(g18)</td>
              <td >=SUM(h18)</td>
              <td >=SUM(i18)</td>
              <td >=SUM(j18)</td>
              <td >=SUM(k18)</td>
              <td >=SUM(l18)</td>
  </tr>




 <tr>
             <td> 2003 </td>
             <td>SETINGKAT SLTP </td>
  </tr>

<tr>

         <td> 2103 </td>
          <td>SLTP LAINNYA</td>
          <td>'.$sltplainnyal.'</td>
          <td>'.$sltplainnyap.'</td>
          <td>'.$sltplainnyal.'</td>
          <td>'.$sltplainnyap.'</td>
          <td>'.$sltplainnyal.'</td>
          <td>'.$sltplainnyap.'</td>
          <td>'.$sltplainnyal.'</td>
          <td>'.$sltplainnyap.'</td>
          <td>'.$sltplainnyal.'</td>
          <td>'.$sltplainnyap.'</td>

                  
     

        </tr> 
       <tr>

          <td> 2199 </td>
          <td>SLTP TAK TERDEFENISI</td>
          <td>'.$sltptakterdefenisil.'</td>
          <td>'.$sltptakterdefenisip.'</td>
          <td>'.$sltptakterdefenisil.'</td>
          <td>'.$sltptakterdefenisip.'</td>
          <td>'.$sltptakterdefenisil.'</td>
          <td>'.$sltptakterdefenisip.'</td>
          <td>'.$sltptakterdefenisil.'</td>
          <td>'.$sltptakterdefenisip.'</td>
          <td>'.$sltptakterdefenisil.'</td>
          <td>'.$sltptakterdefenisip.'</td>
                  
     

        </tr> 
        
 
  <tr>
              <td colspan = 2> Sub Total </td>
              <td >=SUM(C21:C22)</td>
              <td >=SUM(d21:d22)</td>
              <td >=SUM(e21:e22)</td>
              <td >=SUM(f21:f22)</td>
              <td >=SUM(g21:g22)</td>
              <td >=SUM(h21:h22)</td>
              <td >=SUM(i21:i22)</td>
              <td >=SUM(j21:j22)</td>
              <td >=SUM(k21:k22)</td>
              <td >=SUM(l21:l22)</td>
  </tr>




 <tr>
             <td> 3000 </td>
             <td>PENDIDIKAN MENENGAH ATAS  </td>
              <td >=SUM(C28)</td>
              <td >=SUM(d28)</td>
              <td >=SUM(e28)</td>
              <td >=SUM(f28)</td>
              <td >=SUM(g28)</td>
              <td >=SUM(h28)</td>
              <td >=SUM(i28)</td>
              <td >=SUM(j28)</td>
              <td >=SUM(k28)</td>
              <td >=SUM(l28)</td>
  </tr>
<tr>
             <td> 3001 </td>
             <td>SMU </td>
  </tr>
<tr>

         <td> 3801 </td>
          <td>SMU</td>
          <td>'.$smul.'</td>
          <td>'.$smup.'</td>
          <td>'.$smul.'</td>
          <td>'.$smup.'</td>
          <td>'.$smul.'</td>
          <td>'.$smup.'</td>
          <td>'.$smul.'</td>
          <td>'.$smup.'</td>
          <td>'.$smul.'</td>
          <td>'.$smup.'</td>

                  
     

        </tr> 
       <tr>

          <td> 3802 </td>
          <td>MADRASAH DINIYAH ALIYAH</td>
          <td>'.$mdal.'</td>
          <td>'.$mdap.'</td>
          <td>'.$mdal.'</td>
          <td>'.$mdap.'</td>
          <td>'.$mdal.'</td>
          <td>'.$mdap.'</td>
          <td>'.$mdal.'</td>
          <td>'.$mdap.'</td>
          <td>'.$mdal.'</td>
          <td>'.$mdap.'</td>
                  
     

        </tr> 
        
 
  <tr>
              <td colspan = 2> Sub Total </td>
              <td >=SUM(C26:C27)</td>
              <td >=SUM(d26:d27)</td>
              <td >=SUM(e26:e27)</td>
              <td >=SUM(f26:f27)</td>
              <td >=SUM(g26:g27)</td>
              <td >=SUM(h26:h27)</td>
              <td >=SUM(i26:i27)</td>
              <td >=SUM(j26:j27)</td>
              <td >=SUM(k26:k27)</td>
              <td >=SUM(l26:l27)</td>
  </tr>




<tr>
             <td> 3002 </td>
             <td>SMK</td>
              <td >=SUM(C28)</td>
              <td >=SUM(d28)</td>
              <td >=SUM(e28)</td>
              <td >=SUM(f28)</td>
              <td >=SUM(g28)</td>
              <td >=SUM(h28)</td>
              <td >=SUM(i28)</td>
              <td >=SUM(j28)</td>
              <td >=SUM(k28)</td>
              <td >=SUM(l28)</td>
  </tr>
<tr>
             <td> 3100 </td>
             <td>SMK - TEKNOLOGI DAN REKAYASA </td>
  </tr>
<tr>

         <td> 3101 </td>
          <td>TEKNIK BANGUNAN</td>
          <td>'.$tbangunanl.'</td>
          <td>'.$tbangunanp.'</td>
          <td>'.$tbangunanl.'</td>
          <td>'.$tbangunanp.'</td>
          <td>'.$tbangunanl.'</td>
          <td>'.$tbangunanp.'</td>
          <td>'.$tbangunanl.'</td>
          <td>'.$tbangunanp.'</td>
          <td>'.$tbangunanl.'</td>
          <td>'.$tbangunanp.'</td>

                  
     

        </tr> 
       <tr>

          <td> 3102 </td>
          <td>TEKNIK PLUMBING DAN SANITASI</td>
          <td>'.$tplumbingl.'</td>
          <td>'.$tplumbingp.'</td>
          <td>'.$tplumbingl.'</td>
          <td>'.$tplumbingp.'</td>
          <td>'.$tplumbingl.'</td>
          <td>'.$tplumbingp.'</td>
          <td>'.$tplumbingl.'</td>
          <td>'.$tplumbingp.'</td>
          <td>'.$tplumbingl.'</td>
          <td>'.$tplumbingp.'</td>
                  
      </tr> 
       

       <tr>

          <td> 3103 </td>
          <td>TEKNIK SURVEI DAN PEMETAAN</td>
          <td>'.$tplumbingl.'</td>
          <td>'.$tplumbingp.'</td>
          <td>'.$tplumbingl.'</td>
          <td>'.$tplumbingp.'</td>
          <td>'.$tplumbingl.'</td>
          <td>'.$tplumbingp.'</td>
          <td>'.$tplumbingl.'</td>
          <td>'.$tplumbingp.'</td>
          <td>'.$tplumbingl.'</td>
          <td>'.$tplumbingp.'</td>
                  
      </tr>  

      <tr>

          <td> 3103 </td>
          <td>TEKNIK SURVEI DAN PEMETAAN</td>
          <td>'.$tsurveil.'</td>
          <td>'.$tsurveip.'</td>
          <td>'.$tsurveil.'</td>
          <td>'.$tsurveip.'</td>
          <td>'.$tsurveil.'</td>
          <td>'.$tsurveip.'</td>
          <td>'.$tsurveil.'</td>
          <td>'.$tsurveip.'</td>
          <td>'.$tsurveil.'</td>
          <td>'.$tsurveip.'</td>
                  
      </tr>

      <tr>

          <td> 3104 </td>
          <td>TEKNIK KETENAGA LISTRIKAN<</td>
          <td>'.$tketenagal.'</td>
          <td>'.$tketenagap.'</td>
          <td>'.$tketenagal.'</td>
          <td>'.$tketenagap.'</td>
          <td>'.$tketenagal.'</td>
          <td>'.$tketenagap.'</td>
          <td>'.$tketenagal.'</td>
          <td>'.$tketenagap.'</td>
          <td>'.$tketenagal.'</td>
          <td>'.$tketenagap.'</td>
                  
      </tr>

       <tr>
          <td> 3105 </td>
          <td>TEKNIK PENDINGINAN DAN TATA UDARA<</td>
          <td>'.$tpendinginl.'</td>
          <td>'.$tpendinginp.'</td>
          <td>'.$tpendinginl.'</td>
          <td>'.$tpendinginp.'</td>
          <td>'.$tpendinginl.'</td>
          <td>'.$tpendinginp.'</td>
          <td>'.$tpendinginl.'</td>
          <td>'.$tpendinginp.'</td>
          <td>'.$tpendinginl.'</td>
          <td>'.$tpendinginp.'</td>                 
      </tr>


       <tr>
          <td> 3106 </td>
          <td>TEKNIK MESIN<</td>
          <td>'.$tmesinl.'</td>
          <td>'.$tmesinp.'</td>
          <td>'.$tmesinl.'</td>
          <td>'.$tmesinp.'</td>
          <td>'.$tmesinl.'</td>
          <td>'.$tmesinp.'</td>
          <td>'.$tmesinl.'</td>
          <td>'.$tmesinp.'</td>
          <td>'.$tmesinl.'</td>
          <td>'.$tmesinp.'</td>                  
      </tr>
      
       <tr>
          <td> 3107 </td>
          <td>TEKNIK MESIN</td>
          <td>'.$tmesinl.'</td>
          <td>'.$tmesinp.'</td>
          <td>'.$tmesinl.'</td>
          <td>'.$tmesinp.'</td>
          <td>'.$tmesinl.'</td>
          <td>'.$tmesinp.'</td>
          <td>'.$tmesinl.'</td>
          <td>'.$tmesinp.'</td>
          <td>'.$tmesinl.'</td>
          <td>'.$tmesinp.'</td>                  
      </tr>
      <tr>
          <td> 3108 </td>
          <td>TEKNIK TEKNOLOGI PESAWAT UDARA</td>
          <td>'.$tpesawatl.'</td>
          <td>'.$tpesawatp.'</td>
          <td>'.$tpesawatl.'</td>
          <td>'.$tpesawatp.'</td>
          <td>'.$tpesawatl.'</td>
          <td>'.$tpesawatp.'</td>
          <td>'.$tpesawatl.'</td>
          <td>'.$tpesawatp.'</td>
          <td>'.$tpesawatl.'</td>
          <td>'.$tpesawatp.'</td>                  
      </tr>
      <tr>
          <td> 3109 </td>
          <td>TEKNIK PERKAPALAN</td>
          <td>'.$tkapall.'</td>
          <td>'.$tkapalp.'</td>
          <td>'.$tkapall.'</td>
          <td>'.$tkapalp.'</td>
          <td>'.$tkapall.'</td>
          <td>'.$tkapalp.'</td>
          <td>'.$tkapall.'</td>
          <td>'.$tkapalp.'</td>
          <td>'.$tkapall.'</td>
          <td>'.$tkapalp.'</td>                  
      </tr>
  <tr>
              <td colspan = 2> Sub Total </td>
              <td >=SUM(C26:C27)</td>
              <td >=SUM(d26:d27)</td>
              <td >=SUM(e26:e27)</td>
              <td >=SUM(f26:f27)</td>
              <td >=SUM(g26:g27)</td>
              <td >=SUM(h26:h27)</td>
              <td >=SUM(i26:i27)</td>
              <td >=SUM(j26:j27)</td>
              <td >=SUM(k26:k27)</td>
              <td >=SUM(l26:l27)</td>
  </tr>
  '

        ;




$html .= '
    </tbody>
  </table> ';


echo $html;

exit();



?>



