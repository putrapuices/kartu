<?php
    use yii\helpers\Url;
    use yii\helpers\Html;
    use yii\bootstrap\Modal;

/* @var $this yii\web\View */


$this->title = 'Laporan Per Hari';

?>
<style>
p.a {
  /*font-family: "Times New Roman", Times, serif;*/
  font-family: Tahoma, Verdana, Segoe, sans-serif;
  font-size:15px;
    text-align: center;
}

p.b {
  /*font-family: Arial, Helvetica, sans-serif;*/
   font-family: Tahoma, Verdana, Segoe, sans-serif;
  font-size:13px;
  text-align: left;

  white-space: -o-pre-wrap; 
    word-wrap: break-word;
    white-space: pre-wrap; 
    white-space: -moz-pre-wrap; 
    white-space: -pre-wrap; 
}
td { white-space:pre }

td.sub
{
  /*border-left:8px solid black;*/
/*border-top:1px solid black;*/

border-left: 1px solid blue;  
border-bottom: 1px solid blue;
border-top: 1px solid blue;
border-right: 1px solid blue;
 text-align: center;
 vertical-align: middle;


}


tr.sub
{
  /*border-left:8px solid black;*/
/*border-top:1px solid black;*/

border-left: 1px solid blue;  
border-bottom: 1px solid blue;
border-top: 1px solid blue;
border-right: 1px solid blue;
 text-align: center;
 vertical-align: middle;


}
.subtotal
{
  border-left: 1px solid black;  
border-bottom: 1px solid black;
border-top: 1px solid black;
border-right: 1px solid black;

}
#mytable  { background: yellow; 
/*column-width: 90px;*/
text-align: center;
 vertical-align: middle;
 border: 2px solid red;
color: red;
}

#nowrap{
  text-align: left;
 vertical-align: middle;
 padding: none;
}
table
{
 /* table-layout: fixed;*/
 /*column-width: 90px;*/
}
/*{border-right:1px solid black;
border-bottom:1px solid black;}*/
</style>
<?php 

// $filename  = 'kartu.xls';
$filename = 'Data-'.Date('YmdGis').'-kartu.xls';

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=".$filename);




$html = '';      
$html .= '
  <table >
    <thead>
      <tr> 
              <th colspan=13 rowspan=2>
              <p class="a">IPK III/2 : PENCARI KERJA YANG TERDAFTAR, DITEMPATKAN DAN DIHAPUSKAN DIRINCI MENURUT JENIS PENDIDIKAN
              </p>
              </th>
      </tr>
       </thead>
      </table>

      <table>
    <thead>

 <tr>
        <th><p class="b">
       Bulan</p></th>
      </tr>
 
      
              <tr >
              <th><p class="b"><div style="text-align: left;white-space: nowrap;">DINAS PENANAMAN MODAL, PELAYANAN TERPADU SATU PINTU DAN TENAGA KERJA</div></th>
              </tr>
              <tr colspan=12><th><p class="b"><div style="text-align: left;white-space: nowrap;">Jl. Nasri Nasar No. 1 Pariaman</div></th>
              </tr>
              <tr><th><p class="b"><div style="text-align: left;white-space: nowrap;">Telp/Fax . ( 0751 ) 91529 </div></th></tr>
              <tr><th></th></tr>
               
      </tr>
      </thead>
     </table>

      <table border="1" width="200px">



      <tr style="background: #aaa">
        <td  width="150" colspan="3"  rowspan ="3" ><div style="text-align: center;vertical-align: middle; white-space: nowrap;width=30px column-width: 90px;">JENIS PENDIDIKAN</div></td>
        <td width="150" colspan="2" rowspan="2" ><div style="text-align: center;vertical-align: middle;">SISA BULAN YANG LALU</div></td>
        <td width="150" colspan="2" rowspan="2" ><div style="text-align: center;vertical-align: middle;">YANG TERDAFTAR BULAIN INI</div></td>
        <td width="150" colspan="2" rowspan="2"><div style="text-align: center;vertical-align: middle;">PENEMPATAN BULAN INI</div></td>        
        <td width="150" colspan="2" rowspan="2" ><div style="text-align: center;vertical-align: middle;">DIHAPUSKAN BULAN INI</div></td>
        <td width="150" colspan="2" rowspan="2" ><div style="text-align: center;vertical-align: middle;">SISA AKHIR BULAN INI</div></td>
 
   </tr>
   <tr>
   </tr>
    <tr style="background: #aaa">
            <td><div style="text-align: center;vertical-align: middle;"> L</div> </td>
            <td><div style="text-align: center;vertical-align: middle;"> P</div> </td>       
             <td><div style="text-align: center;vertical-align: middle;"> L</div> </td>
            <td><div style="text-align: center;vertical-align: middle;"> P</div> </td>
            <td><div style="text-align: center;vertical-align: middle;"> L</div> </td>
            <td><div style="text-align: center;vertical-align: middle;"> P</div> </td>
            <td><div style="text-align: center;vertical-align: middle;"> L</div> </td>
            <td><div style="text-align: center;vertical-align: middle;"> P</div> </td>
            <td><div style="text-align: center;vertical-align: middle;"> L</div> </td>
            <td><div style="text-align: center;vertical-align: middle;"> P</div> </td>   
            
     </tr>

      <tr style="background: #aaa">
            <td width="150" colspan="3" ><div style="text-align: center;vertical-align: middle;"> &#39;&#40;1&#41;</div></td>
            <td> <div style="text-align: center;vertical-align: middle;">&#39;&#40;2&#41;</div></td>
            <td> <div style="text-align: center;vertical-align: middle;">&#39;&#40;3&#41;</div></td>
            <td> <div style="text-align: center;vertical-align: middle;">&#39;&#40;4&#41;</div></td>
            <td><div style="text-align: center;vertical-align: middle;"> &#39;&#40;5&#41;</div></td>
            <td><div style="text-align: center;vertical-align: middle;"> &#39;&#40;6&#41;</div></td>
            <td> <div style="text-align: center;vertical-align: middle;">&#39;&#40;7&#41;</div></td>
            <td> <div style="text-align: center;vertical-align: middle;">&#39;&#40;8&#41;</div></td>
            <td><div style="text-align: center;vertical-align: middle;"> &#39;&#40;9&#41;</div></td>
            <td><div style="text-align: center;vertical-align: middle;"> &#39;&#40;11&#41;</div></td>
            <td> <div style="text-align: center;vertical-align: middle;">&#39;&#40;12&#41;</div></td>
                         
     </tr>
   


    
    
     

    <tbody>';    


$no = 1;
        

    $html .= '

 <tr>
            <td> 1000 </td>
            <td colspan="2">SEKOLAH DASAR</td>
              
              <td >=D16</td>
              <td >=E16</td>
              <td >=f16</td>
              <td >=g16</td>
              <td >=h16</td>
              <td >=i16</td>
              <td >=j16</td>
              <td >=k16</td>
              <td >=l16</td>
              <td >=m16</td>
</tr>
 <tr>

         <td> 1101 </td>
          <td colspan="2">TIDAK TAMAT SD</td>
             
          <td>'.$blnlalutidaktamatsdl.'</td>
          <td>'.$blnlalutidaktamatsdp.'</td>
          <td>'.$blninitidaktamatsdl.'</td>
          <td>'.$blninitidaktamatsdp.'</td>
          <td>'.$penempatanblninitidaktamatsdl.'</td>
          <td>'.$penempatanblninitidaktamatsdp.'</td>
          <td>'.$dihapusblninitidaktamatsdl.'</td>
          <td>'.$dihapusblninitidaktamatsdp.'</td>          
          <td >=SUM(D13+F13-H13-J13)</td>
          <td >=SUM(E13+G13-I13-K13)</td>

                  
     

        </tr> 
       <tr>

          <td> 1102 </td>
          <td colspan="2">TAMAT SD</td>
             
          <td>'.$blnlalutamatsdl.'</td>
          <td>'.$blnlalutamatsdp.'</td>
          <td>'.$blninitamatsdl.'</td>
          <td>'.$blninitamatsdp.'</td>
          <td>'.$penempatanblninitamatsdl.'</td>
          <td>'.$penempatanblninitamatsdp.'</td>
          <td>'.$dihapusblninitamatsdl.'</td>
          <td>'.$dihapusblninitamatsdp.'</td>
           <td >=SUM(D14+F14-H14-J14)</td>
          <td >=SUM(E14+G14-I14-K14)</td>
                  
     

        </tr> 
        
    <tr>

         <td> 1103 </td>
          <td colspan="2">SETINGKAT SD</td>
             
          <td>'.$blnlalusetingkatsdl.'</td>
          <td>'.$blnlalusetingkatsdp.'</td>
         <td>'.$blninisetingkatsdl.'</td>
          <td>'.$blninisetingkatsdp.'</td>
          <td>'.$penempatanblninisetingkatsdl.'</td>
          <td>'.$penempatanblninisetingkatsdp.'</td>
          <td>'.$dihapusblninisetingkatsdl.'</td>
          <td>'.$dihapusblninisetingkatsdp.'</td>
          <td >=SUM(D15+F15-H15-J15)</td>
          <td >=SUM(E15+G15-I15-K15)</td>
                  
     

        </tr> 

        <tr id="mytable" class = "sub" bordercolor="red">
          <td  >Sub Total</td>

         <td  style=border:none;>  </td>
         <td  style= border:none;>  </td>
             
              <td  >=SUM(D13:D15)</td>
              <td  >=SUM(E13:E15)</td>
              <td  >=SUM(f13:f15)</td>
              <td  >=SUM(g13:g15)</td>
              <td  >=SUM(h13:h15)</td>
              <td  >=SUM(i13:i15)</td>
              <td  >=SUM(j13:j15)</td>
              <td  >=SUM(k13:k15)</td>
              <td  >=SUM(l13:l15)</td>
             <td  >=SUM(M13:M15)</td>

                  
     

        </tr> 
        


        

  
      <tr>
             <td> 2000 </td>
             <td colspan="2">PENDIDIKAN MENENGAH PERTAMA</td>
                
              <td >=SUM(D21+D24+D28)</td>
              <td >=SUM(E21+E24+E28)</td>
              <td >=SUM(f21+f24+f28)</td>
              <td >=SUM(g21+g24+g28)</td>
              <td >=SUM(h21+h24+h28)</td>
              <td >=SUM(i21+i24+i28)</td>
              <td >=SUM(j21+j24+j28)</td>
              <td >=SUM(k21+k24+k28)</td>
              <td >=SUM(l21+l24+l28)</td>
              <td >=SUM(m21+m24+m28)</td>
              
</tr>
 <tr>
             <td> 2001 </td>
             <td colspan="2">SLTP UMUM</td>
  </tr>
 <tr id="nowrap">

         <td> 2101 </td>
          <td colspan="2">SEKOLAH MENENGAH PERTAMA</td>
             
          <td>'.$blnlalusmpl.'</td>
          <td>'.$blnlalusmpp.'</td>
          <td>'.$blninismpl.'</td>
          <td>'.$blninismpp.'</td>
          <td>'.$penempatanblninismpl.'</td>
          <td>'.$penempatanblninismpp.'</td>
          <td>'.$dihapusblninismpl.'</td>
          <td>'.$dihapusblninismpp.'</td>
          <td >=SUM(D19+F19-H19-J19)</td>
          <td >=SUM(E19+G19-I19-K19)</td>

                  
     

        </tr> 
       <tr>

          <td> 2102 </td>
          <td colspan="2">MADRASAH DINIYAH SANAWIYAH</td>
             
          <td>'.$blnlalumdsl.'</td>
          <td>'.$blnlalumdsp.'</td>
          <td>'.$blninimdsl.'</td>
          <td>'.$blninimdsp.'</td>
          <td>'.$penempatanblninimdsl.'</td>
          <td>'.$penempatanblninimdsp.'</td>
          <td>'.$dihapusblninimdsl.'</td>
          <td>'.$dihapusblninimdsp.'</td>
          <td >=SUM(D20+F20-H20-J20)</td>
          <td >=SUM(E20+G20-I20-K20)</td>
                  
     

        </tr> 
        
 
   <tr id="mytable" class = "sub" bordercolor="red">
          <td  >Sub Total</td>

         <td  style=border:none;>  </td>
         <td  style= border:none;>  </td>

              <td class = "sub">=SUM(D19:D20)</td>
              <td class = "sub">=SUM(e19:e20)</td>
              <td class = "sub">=SUM(f19:f20)</td>
              <td class = "sub">=SUM(g19:g20)</td>
              <td class = "sub">=SUM(h19:h20)</td>
              <td class = "sub">=SUM(i19:i20)</td>
              <td class = "sub">=SUM(j19:j20)</td>
              <td class = "sub">=SUM(k19:k20)</td>
              <td class = "sub">=SUM(l19:l20)</td>
              <td class = "sub">=SUM(m19:m20)</td>
  </tr>






  
 <tr>
             <td> 2002 </td>
             <td colspan="2">SLTP KEJURUAN</td>
  </tr>
 <tr>

         <td> 2104 </td>
          <td colspan="2">SLTP KEJURUAN</td>
             
          <td>'.$blnlalusltpkejuruanl.'</td>
          <td>'.$blnlalusltpkejuruanp.'</td>
          <td>'.$blninisltpkejuruanl.'</td>
          <td>'.$blninisltpkejuruanp.'</td>
          <td>'.$penempatanblninisltpkejuruanl.'</td>
          <td>'.$penempatanblninisltpkejuruanp.'</td>
          <td>'.$dihapusblninisltpkejuruanl.'</td>
          <td>'.$dihapusblninisltpkejuruanp.'</td>
          <td >=SUM(D23+F23-H23-J23)</td>
          <td >=SUM(E23+G23-I23-K23)</td>

                  
     

        </tr> 
     
        
 
  <tr id="mytable" class = "sub" bordercolor="red">
            <td  >Sub Total</td>

             <td  style=border:none;>  </td>
            <td  style= border:none;>  </td>
                 
              <td class = "sub" >=D23</td>
              <td class = "sub" >=e23</td>
              <td class = "sub" >=f23</td>
              <td class = "sub" >=g23</td>
              <td class = "sub" >=h23</td>
              <td class = "sub" >=i23</td>
              <td class = "sub" >=j23</td>
              <td class = "sub" >=k23</td>
              <td class = "sub" >=l23</td>
              <td class = "sub" >=m23</td>
  </tr>




 <tr>
             <td> 2003 </td>
             <td colspan="2">SETINGKAT SLTP </td>
  </tr>

<tr>

         <td> 2103 </td>
          <td colspan="2">SLTP LAINNYA</td>
             
          <td>'.$blnlalusltplainnyal.'</td>
          <td>'.$blnlalusltplainnyap.'</td>
          <td>'.$blninisltplainnyal.'</td>
          <td>'.$blninisltplainnyap.'</td>
          <td>'.$penempatanblninisltplainnyal.'</td>
          <td>'.$penempatanblninisltplainnyap.'</td>
          <td>'.$dihapusblninisltplainnyal.'</td>
          <td>'.$dihapusblninisltplainnyap.'</td>
          <td >=SUM(D26+F26-H26-J26)</td>
          <td >=SUM(E26+G26-I26-K26)</td>

                  
     

        </tr> 
       <tr>

          <td> 2199 </td>
          <td colspan="2">SLTP TAK TERDEFENISI</td>
             
          <td>'.$blnlalusltptakterdefenisil.'</td>
          <td>'.$blnlalusltptakterdefenisip.'</td>
          <td>'.$blninisltptakterdefenisil.'</td>
          <td>'.$blninisltptakterdefenisip.'</td>
          <td>'.$penempatanblninisltptakterdefenisil.'</td>
          <td>'.$penempatanblninisltptakterdefenisip.'</td>
          <td>'.$dihapusblninisltptakterdefenisil.'</td>
          <td>'.$dihapusblninisltptakterdefenisip.'</td>
          <td >=SUM(D27+F27-H27-J27)</td>
          <td >=SUM(E27+G27-I27-K27)</td>
                  
     

        </tr> 
        
 
   <tr id="mytable" class = "sub" bordercolor="red">
          <td  >Sub Total</td>

         <td  style=border:none;>  </td>
         <td  style= border:none;>  </td>
                 
              <td class = "sub" >=SUM(D26:D27)</td>
              <td class = "sub" >=SUM(e26:e27)</td>
              <td class = "sub" >=SUM(f26:f27)</td>
              <td class = "sub" >=SUM(g26:g27)</td>
              <td class = "sub" >=SUM(h26:h27)</td>
              <td class = "sub" >=SUM(i26:i27)</td>
              <td class = "sub" >=SUM(j26:j27)</td>
              <td class = "sub" >=SUM(k26:k27)</td>
              <td class = "sub" >=SUM(l26:l27)</td>
              <td class = "sub" >=SUM(m26:m27)</td>
  </tr>




 <tr>
             <td> 3000 </td>
             <td colspan="2">PENDIDIKAN MENENGAH ATAS  </td>
                
              <td >=D33</td>
              <td >=E33</td>
              <td >=F33</td>
              <td >=G33</td>
              <td >=H33</td>
              <td >=I33</td>
              <td >=J33</td>
              <td >=K33</td>
              <td >=L33</td>
              <td >=M33</td>
  </tr>
<tr>
             <td> 3001 </td>
             <td colspan="2">SMU </td>
  </tr>
<tr>

         <td> 3801 </td>
          <td colspan="2">SMU</td>
             
          <td>'.$blnlalusmul.'</td>
          <td>'.$blnlalusmup.'</td>
          <td>'.$blninismul.'</td>
          <td>'.$blninismup.'</td>
          <td>'.$penempatanblninismul.'</td>
          <td>'.$penempatanblninismup.'</td>
          <td>'.$dihapusblninismul.'</td>
          <td>'.$dihapusblninismup.'</td>
          <td>=SUM(D31+F31-H31-J31)</td>
          <td>=SUM(E31+G31-I31-K31)</td>

                  
     

        </tr> 
       <tr>

          <td> 3802 </td>
          <td colspan="2">MADRASAH DINIYAH ALIYAH</td>
             
          <td>'.$blnlalumdal.'</td>
          <td>'.$blnlalumdap.'</td>
          <td>'.$blninimdal.'</td>
          <td>'.$blninimdap.'</td>
          <td>'.$penempatanblninimdal.'</td>
          <td>'.$penempatanblninimdap.'</td>
          <td>'.$dihapusblninimdal.'</td>
          <td>'.$dihapusblninimdap.'</td>
          <td>=SUM(D32+F32-H32-J32)</td>
          <td>=SUM(E32+G32-I32-K32)</td>
                  
     

        </tr> 
        
 
   <tr id="mytable" class = "sub" bordercolor="red">
          <td  >Sub Total</td>

         <td  style=border:none;>  </td>
         <td  style= border:none;>  </td>
                 
              <td class = "sub" >=SUM(D31:D32)</td>
              <td class = "sub" >=SUM(E31:E32)</td>
              <td class = "sub" >=SUM(F31:F32)</td>
              <td class = "sub" >=SUM(G31:G32)</td>
              <td class = "sub" >=SUM(H31:H32)</td>
              <td class = "sub" >=SUM(I31:I32)</td>
              <td class = "sub" >=SUM(J31:J32)</td>
              <td class = "sub" >=SUM(K31:K32)</td>
              <td class = "sub" >=SUM(L31:L32)</td>
              <td class = "sub" >=SUM(M31:M32)</td>
  </tr>




<tr>
             <td> 3002 </td>
             <td colspan="2">SMK</td>
                
              <td >=SUM(D54+D59+D69+D78+D87+D92+D96)</td>
              <td >=SUM(E54+E59+E69+E78+E87+E92+E96)</td>
              <td >=SUM(F54+F59+F69+F78+F87+F92+F96)</td>
              <td >=SUM(G54+G59+G69+G78+G87+G92+G96)</td>
              <td >=SUM(H54+H59+H69+H78+H87+H92+H96)</td>
              <td >=SUM(I54+I59+I69+I78+I87+I92+I96)</td>
              <td >=SUM(J54+J59+J69+J78+J87+J92+J96)</td>
              <td >=SUM(K54+K59+K69+K78+K87+K92+K96)</td>
              <td >=SUM(L54+L59+L69+L78+L87+L92+L96)</td>
              <td >=SUM(M54+M59+M69+M78+M87+M92+M96)</td>
  </tr>
<tr>
             <td> 3100 </td>
             <td colspan="2">SMK - TEKNOLOGI DAN REKAYASA </td>
  </tr>
<tr>

         <td> 3101 </td>
          <td colspan="2">TEKNIK BANGUNAN</td>
             
          <td>'.$blnlaluteknikbangunanl.'</td>
          <td>'.$blnlaluteknikbangunanp.'</td>
          <td>'.$blniniteknikbangunanl.'</td>
          <td>'.$blniniteknikbangunanp.'</td>
          <td>'.$penempatanblniniteknikbangunanl.'</td>
          <td>'.$penempatanblniniteknikbangunanp.'</td>
          <td>'.$dihapusblniniteknikbangunanl.'</td>
          <td>'.$dihapusblniniteknikbangunanp.'</td>
          <td>=SUM(D36+F36-H36-J36)</td>
          <td>=SUM(E36+G36-I36-K36)</td>

                  
     

        </tr> 
       <tr>

          <td> 3102 </td>
          <td colspan="2">TEKNIK PLUMBING DAN SANITASI</td>
             
          <td>'.$blnlaluteknikplumbingdansanitasil.'</td>
          <td>'.$blnlaluteknikplumbingdansanitasip.'</td>
          <td>'.$blniniteknikplumbingdansanitasil.'</td>
          <td>'.$blniniteknikplumbingdansanitasip.'</td>
          <td>'.$penempatanblniniteknikplumbingdansanitasil.'</td>
          <td>'.$penempatanblniniteknikplumbingdansanitasip.'</td>
          <td>'.$dihapusblniniteknikplumbingdansanitasil.'</td>
          <td>'.$dihapusblniniteknikplumbingdansanitasip.'</td>
          <td>=SUM(D37+F37-H37-J37)</td>
          <td>=SUM(E37+G37-I37-K37)</td>
                  
      </tr> 
       

       <tr>

          <td> 3103 </td>
          <td colspan="2">TEKNIK SURVEI DAN PEMETAAN</td>
             
          <td>'.$blnlalutekniksurveidanpemetaanl.'</td>
          <td>'.$blnlalutekniksurveidanpemetaanp.'</td>
          <td>'.$blninitekniksurveidanpemetaanl.'</td>
          <td>'.$blninitekniksurveidanpemetaanp.'</td>
          <td>'.$penempatanblninitekniksurveidanpemetaanl.'</td>
          <td>'.$penempatanblninitekniksurveidanpemetaanp.'</td>
          <td>'.$dihapusblninitekniksurveidanpemetaanl.'</td>
          <td>'.$dihapusblninitekniksurveidanpemetaanp.'</td>
          <td>=SUM(D38+F38-H38-J38)</td>
          <td>=SUM(E38+G38-I38-K38)</td>
                  
      </tr>  

      <tr>

          <td> 3104 </td>
          <td colspan="2">TEKNIK KETENAGA LISTRIKAN</td>
             
          <td>'.$blnlaluteknikketenagalistrikanl.'</td>
          <td>'.$blnlaluteknikketenagalistrikanp.'</td>
          <td>'.$blniniteknikketenagalistrikanl.'</td>
          <td>'.$blniniteknikketenagalistrikanp.'</td>
          <td>'.$penempatanblniniteknikketenagalistrikanl.'</td>
          <td>'.$penempatanblniniteknikketenagalistrikanp.'</td>
          <td>'.$dihapusblniniteknikketenagalistrikanl.'</td>
          <td>'.$dihapusblniniteknikketenagalistrikanp.'</td>
          <td>=SUM(D39+F39-H39-J39)</td>
          <td>=SUM(E39+G39-I39-K39)</td>
                  
      </tr>

  

       <tr>
          <td> 3105 </td>
          <td colspan="2">TEKNIK PENDINGINAN DAN TATA UDARA</td>
             
          <td>'.$blnlaluteknikpendinginandantataudaral.'</td>
          <td>'.$blnlaluteknikpendinginandantataudarap.'</td>
          <td>'.$blniniteknikpendinginandantataudaral.'</td>
          <td>'.$blniniteknikpendinginandantataudarap.'</td>
          <td>'.$penempatanblniniteknikpendinginandantataudaral.'</td>
          <td>'.$penempatanblniniteknikpendinginandantataudarap.'</td>
          <td>'.$dihapusblniniteknikpendinginandantataudaral.'</td>
          <td>'.$dihapusblniniteknikpendinginandantataudarap.'</td>
          <td>=SUM(D40+F40-H40-J40)</td>
          <td>=SUM(E40+G40-I40-K40)</td>                 
      </tr>


       <tr>
          <td> 3106 </td>
          <td colspan="2">TEKNIK MESIN</td>
             
          <td>'.$blnlaluteknikmesinl.'</td>
          <td>'.$blnlaluteknikmesinp.'</td>
          <td>'.$blniniteknikmesinl.'</td>
          <td>'.$blniniteknikmesinp.'</td>
          <td>'.$penempatanblniniteknikmesinl.'</td>
          <td>'.$penempatanblniniteknikmesinp.'</td>
          <td>'.$dihapusblniniteknikmesinl.'</td>
          <td>'.$dihapusblniniteknikmesinp.'</td>
          <td>=SUM(D41+F41-H41-J41)</td>
          <td>=SUM(E41+G41-I41-K41)</td>                  
      </tr>
      
       <tr>
          <td> 3107 </td>
          <td colspan="2">TEKNIK OTOMOTIF</td>
             
          <td>'.$blnlaluteknikotomotifl.'</td>
          <td>'.$blnlaluteknikotomotifp.'</td>
          <td>'.$blniniteknikotomotifl.'</td>
          <td>'.$blniniteknikotomotifp.'</td>
          <td>'.$penempatanblniniteknikotomotifl.'</td>
          <td>'.$penempatanblniniteknikotomotifp.'</td>
          <td>'.$dihapusblniniteknikotomotifl.'</td>
          <td>'.$dihapusblniniteknikotomotifp.'</td>
          <td>=SUM(D42+F42-H42-J42)</td>
          <td>=SUM(E42+G42-I42-K42)</td>                  
      </tr>
      <tr>
          <td> 3108 </td>
          <td colspan="2">TEKNIK TEKNOLOGI PESAWAT UDARA</td>
             
          <td>'.$blnlaluteknologipesawatudaral.'</td>
          <td>'.$blnlaluteknologipesawatudarap.'</td>
          <td>'.$blniniteknologipesawatudaral.'</td>
          <td>'.$blniniteknologipesawatudarap.'</td>
          <td>'.$penempatanblniniteknologipesawatudaral.'</td>
          <td>'.$penempatanblniniteknologipesawatudarap.'</td>
          <td>'.$dihapusblniniteknologipesawatudaral.'</td>
          <td>'.$dihapusblniniteknologipesawatudarap.'</td>
          <td>=SUM(D43+F43-H43-J43)</td>
          <td>=SUM(E43+G43-I43-K43)</td>                  
      </tr>
      <tr>
          <td> 3109 </td>
          <td colspan="2">TEKNIK PERKAPALAN</td>
             
          <td>'.$blnlaluteknikperkapalanl.'</td>
          <td>'.$blnlaluteknikperkapalanp.'</td>
          <td>'.$blniniteknikperkapalanl.'</td>
          <td>'.$blniniteknikperkapalanp.'</td>
          <td>'.$penempatanblniniteknikperkapalanl.'</td>
          <td>'.$penempatanblniniteknikperkapalanp.'</td>
          <td>'.$dihapusblniniteknikperkapalanl.'</td>
          <td>'.$dihapusblniniteknikperkapalanp.'</td>
          <td>=SUM(D44+F44-H44-J44)</td>
          <td>=SUM(E44+G44-I44-K44)</td>                  
      </tr>

       <tr>
          <td> 3110 </td>
          <td colspan="2">TEKNOLOGI TEKSTIL</td>
             
          <td>'.$blnlaluteknologitekstill.'</td>
          <td>'.$blnlaluteknologitekstilp.'</td>
          <td>'.$blniniteknologitekstill.'</td>
          <td>'.$blniniteknologitekstilp.'</td>
          <td>'.$penempatanblniniteknologitekstill.'</td>
          <td>'.$penempatanblniniteknologitekstilp.'</td>
          <td>'.$dihapusblniniteknologitekstill.'</td>
          <td>'.$dihapusblniniteknologitekstilp.'</td>
          <td>=SUM(D45+F45-H45-J45)</td>
          <td>=SUM(E45+G45-I45-K45)</td>                  
      </tr>

       <tr>
          <td> 3111 </td>
          <td colspan="2">TEKNIK GRAFIKA</td>
             
          <td>'.$blnlaluteknikgrafikal.'</td>
          <td>'.$blnlaluteknikgrafikap.'</td>
          <td>'.$blniniteknikgrafikal.'</td>
          <td>'.$blniniteknikgrafikap.'</td>
          <td>'.$penempatanblniniteknikgrafikal.'</td>
          <td>'.$penempatanblniniteknikgrafikap.'</td>
          <td>'.$dihapusblniniteknikgrafikal.'</td>
          <td>'.$dihapusblniniteknikgrafikap.'</td>
          <td>=SUM(D46+F46-H46-J46)</td>
          <td>=SUM(E46+G46-I46-K46)</td>                  
      </tr>


      <tr>
          <td> 3112 </td>
          <td colspan="2">GEOLOGI PERTAMBANGAN</td>
             
          <td>'.$blnlalugeologipertambanganl.'</td>
          <td>'.$blnlalugeologipertambanganp.'</td>
          <td>'.$blninigeologipertambanganl.'</td>
          <td>'.$blninigeologipertambanganp.'</td>
          <td>'.$penempatanblninigeologipertambanganl.'</td>
          <td>'.$penempatanblninigeologipertambanganp.'</td>
          <td>'.$dihapusblninigeologipertambanganl.'</td>
          <td>'.$dihapusblninigeologipertambanganp.'</td>
          <td>=SUM(D47+F47-H47-J47)</td>
          <td>=SUM(E47+G47-I47-K47)</td>                  
      </tr>

        <tr>
          <td> 3113 </td>
          <td colspan="2">INSTRUMENTASI INDUSTRI</td>
             
          <td>'.$blnlaluinstrumentasiindustril.'</td>
          <td>'.$blnlaluinstrumentasiindustrip.'</td>
          <td>'.$blniniinstrumentasiindustril.'</td>
          <td>'.$blniniinstrumentasiindustrip.'</td>
          <td>'.$penempatanblniniinstrumentasiindustril.'</td>
          <td>'.$penempatanblniniinstrumentasiindustrip.'</td>
          <td>'.$dihapusblniniinstrumentasiindustril.'</td>
          <td>'.$dihapusblniniinstrumentasiindustrip.'</td>
          <td>=SUM(D48+F48-H48-J48)</td>
          <td>=SUM(E48+G48-I48-K48)</td>                  
      </tr>

       <tr>
          <td> 3114 </td>
          <td colspan="2">TEKNIK KIMIA</td>
             
          <td>'.$blnlaluteknikkimial.'</td>
          <td>'.$blnlaluteknikkimiap.'</td>
          <td>'.$blniniteknikkimial.'</td>
          <td>'.$blniniteknikkimiap.'</td>
          <td>'.$penempatanblniniteknikkimial.'</td>
          <td>'.$penempatanblniniteknikkimiap.'</td>
          <td>'.$dihapusblniniteknikkimial.'</td>
          <td>'.$dihapusblniniteknikkimiap.'</td>
          <td>=SUM(D49+F49-H49-J49)</td>
          <td>=SUM(E49+G49-I49-K49)</td>                  
      </tr>

      <tr>
          <td> 3115 </td>
          <td colspan="2">PELAYARAN</td>
             
          <td>'.$blnlalupelayaranl.'</td>
          <td>'.$blnlalupelayaranp.'</td>
          <td>'.$blninipelayaranl.'</td>
          <td>'.$blninipelayaranp.'</td>
          <td>'.$penempatanblninipelayaranl.'</td>
          <td>'.$penempatanblninipelayaranp.'</td>
          <td>'.$dihapusblninipelayaranl.'</td>
          <td>'.$dihapusblninipelayaranp.'</td>
          <td>=SUM(D50+F50-H50-J50)</td>
          <td>=SUM(E50+G50-I50-K50)</td>                  
      </tr>
      <tr>
          <td> 3116 </td>
          <td colspan="2">TEKNIK INDUSTRI</td>
             
          <td>'.$blnlaluteknikindustril.'</td>
          <td>'.$blnlaluteknikindustrip.'</td>
          <td>'.$blniniteknikindustril.'</td>
          <td>'.$blniniteknikindustrip.'</td>
          <td>'.$penempatanblniniteknikindustril.'</td>
          <td>'.$penempatanblniniteknikindustrip.'</td>
          <td>'.$dihapusblniniteknikindustril.'</td>
          <td>'.$dihapusblniniteknikindustrip.'</td>
          <td>=SUM(D51+F51-H51-J51)</td>
          <td>=SUM(E51+G51-I51-K51)</td>                  
      </tr>
       <tr>
          <td> 3117 </td>
          <td colspan="2">TEKNIK PERMINYAKAN</td>
             
          <td>'.$blnlaluteknikperminyakanl.'</td>
          <td>'.$blnlaluteknikperminyakanp.'</td>
          <td>'.$blniniteknikperminyakanl.'</td>
          <td>'.$blniniteknikperminyakanp.'</td>
          <td>'.$penempatanblniniteknikperminyakanl.'</td>
          <td>'.$penempatanblniniteknikperminyakanp.'</td>
          <td>'.$dihapusblniniteknikperminyakanl.'</td>
          <td>'.$dihapusblniniteknikperminyakanp.'</td>
          <td>=SUM(D52+F52-H52-J52)</td>
          <td>=SUM(E52+G52-I52-K52)</td>                  
      </tr>

         <tr>
          <td> 3118 </td>
          <td colspan="2">TEKNIK ELEKTRONIKA</td>
             
          <td>'.$blnlaluteknikelektronikal.'</td>
          <td>'.$blnlaluteknikelektronikap.'</td>
          <td>'.$blniniteknikelektronikal.'</td>
          <td>'.$blniniteknikelektronikap.'</td>
          <td>'.$penempatanblniniteknikelektronikal.'</td>
          <td>'.$penempatanblniniteknikelektronikap.'</td>
          <td>'.$dihapusblniniteknikelektronikal.'</td>
          <td>'.$dihapusblniniteknikelektronikap.'</td>
          <td>=SUM(D53+F53-H53-J53)</td>
          <td>=SUM(E53+G53-I53-K53)</td>                  
      </tr>


   <tr id="mytable" class = "sub" bordercolor="red">
          <td  >Sub Total</td>

         <td  style=border:none;>  </td>
         <td  style= border:none;>  </td>
                 
              <td class = "sub" >=SUM(D36:D53)</td>
              <td class = "sub" >=SUM(E36:E53)</td>
              <td class = "sub" >=SUM(F36:F53)</td>
              <td class = "sub" >=SUM(G36:G53)</td>
              <td class = "sub" >=SUM(H36:H53)</td>
              <td class = "sub" >=SUM(I36:I53)</td>
              <td class = "sub" >=SUM(J36:J53)</td>
              <td class = "sub" >=SUM(K36:K53)</td>
              <td class = "sub" >=SUM(L36:L53)</td>
              <td class = "sub" >=SUM(M36:M53)</td>
  </tr>


<tr>
             <td> 3200 </td>
             <td colspan="2">SMK - TEKNOLOGI INFORMASI DAN KOMUNIKASI</td>
                
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
  </tr>


     <tr>
          <td> 3201 </td>
          <td colspan="2">TEKNIK TELEKOMUNIKASI</td>
             
          <td>'.$blnlalutekniktelekomunikasil.'</td>
          <td>'.$blnlalutekniktelekomunikasip.'</td>
          <td>'.$blninitekniktelekomunikasil.'</td>
          <td>'.$blninitekniktelekomunikasip.'</td>
          <td>'.$penempatanblninitekniktelekomunikasil.'</td>
          <td>'.$penempatanblninitekniktelekomunikasip.'</td>
          <td>'.$dihapusblninitekniktelekomunikasil.'</td>
          <td>'.$dihapusblninitekniktelekomunikasip.'</td>
          <td>=SUM(D56+F56-H56-J56)</td>
          <td>=SUM(E56+G56-I56-K56)</td>                  
      </tr>
       <tr>
          <td> 3202 </td>
          <td colspan="2">TEKNIK KOMPUTER DAN INFORMATIKA</td>
             
          <td>'.$blnlaluteknikkomputerdaninformatikal.'</td>
          <td>'.$blnlaluteknikkomputerdaninformatikap.'</td>
          <td>'.$blniniteknikkomputerdaninformatikal.'</td>
          <td>'.$blniniteknikkomputerdaninformatikap.'</td>
          <td>'.$penempatanblniniteknikkomputerdaninformatikal.'</td>
          <td>'.$penempatanblniniteknikkomputerdaninformatikap.'</td>
          <td>'.$dihapusblniniteknikkomputerdaninformatikal.'</td>
          <td>'.$dihapusblniniteknikkomputerdaninformatikap.'</td>
          <td>=SUM(D57+F57-H57-J57)</td>
          <td>=SUM(E57+G57-I57-K57)</td>                  
      </tr>
         <tr>
          <td> 3203 </td>
          <td colspan="2">TEKNIK BROADCASTING</td>
             
          <td>'.$blnlaluteknibroadcastingl.'</td>
          <td>'.$blnlaluteknibroadcastingp.'</td>
          <td>'.$blniniteknibroadcastingl.'</td>
          <td>'.$blniniteknibroadcastingp.'</td>
          <td>'.$penempatanblniniteknibroadcastingl.'</td>
          <td>'.$penempatanblniniteknibroadcastingp.'</td>
          <td>'.$dihapusblniniteknibroadcastingl.'</td>
          <td>'.$dihapusblniniteknibroadcastingp.'</td>
          <td>=SUM(D58+F58-H58-J58)</td>
          <td>=SUM(E58+G58-I58-K58)</td>                  
      </tr>

         <tr id="mytable" class = "sub" bordercolor="red">
          <td  >Sub Total</td>

         <td  style=border:none;>  </td>
         <td  style= border:none;>  </td>
                 
              <td class = "sub" >=SUM(D56:D58)</td>
              <td class = "sub" >=SUM(E56:E58)</td>
              <td class = "sub" >=SUM(F56:F58)</td>
              <td class = "sub" >=SUM(G56:G58)</td>
              <td class = "sub" >=SUM(H56:H58)</td>
              <td class = "sub" >=SUM(I56:I58)</td>
              <td class = "sub" >=SUM(J56:J58)</td>
              <td class = "sub" >=SUM(K56:K58)</td>
              <td class = "sub" >=SUM(L56:L58)</td>
              <td class = "sub" >=SUM(M56:M58)</td>
  </tr>




  <table >
    <thead>
    <tr><th></th></tr>
    <tr><th></th></tr>
    
      </thead>
     </table>

      <table border="1" width="200px">



      <tr style="background: #aaa">
        <td  width="150" colspan="3"  rowspan ="3" ><div style="text-align: center;vertical-align: middle; white-space: nowrap;width=30px column-width: 90px;">JENIS PENDIDIKAN</div></td>
        <td width="150" colspan="2" rowspan="2" ><div style="text-align: center;vertical-align: middle;">SISA BULAN YANG LALU</div></td>
        <td width="150" colspan="2" rowspan="2" ><div style="text-align: center;vertical-align: middle;">YANG TERDAFTAR BULAIN INI</div></td>
        <td width="150" colspan="2" rowspan="2"><div style="text-align: center;vertical-align: middle;">PENEMPATAN BULAN INI</div></td>        
        <td width="150" colspan="2" rowspan="2" ><div style="text-align: center;vertical-align: middle;">DIHAPUSKAN BULAN INI</div></td>
        <td width="150" colspan="2" rowspan="2" ><div style="text-align: center;vertical-align: middle;">SISA AKHIR BULAN INI</div></td>
 
   </tr>
   <tr>
   </tr>
    <tr style="background: #aaa">
            <td><div style="text-align: center;vertical-align: middle;"> L</div> </td>
            <td><div style="text-align: center;vertical-align: middle;"> P</div> </td>       
             <td><div style="text-align: center;vertical-align: middle;"> L</div> </td>
            <td><div style="text-align: center;vertical-align: middle;"> P</div> </td>
            <td><div style="text-align: center;vertical-align: middle;"> L</div> </td>
            <td><div style="text-align: center;vertical-align: middle;"> P</div> </td>
            <td><div style="text-align: center;vertical-align: middle;"> L</div> </td>
            <td><div style="text-align: center;vertical-align: middle;"> P</div> </td>
            <td><div style="text-align: center;vertical-align: middle;"> L</div> </td>
            <td><div style="text-align: center;vertical-align: middle;"> P</div> </td>   
            
     </tr>

      <tr style="background: #aaa">
            <td width="150" colspan="3" ><div style="text-align: center;vertical-align: middle;"> &#39;&#40;1&#41;</div></td>
            <td> <div style="text-align: center;vertical-align: middle;">&#39;&#40;2&#41;</div></td>
            <td> <div style="text-align: center;vertical-align: middle;">&#39;&#40;3&#41;</div></td>
            <td> <div style="text-align: center;vertical-align: middle;">&#39;&#40;4&#41;</div></td>
            <td><div style="text-align: center;vertical-align: middle;"> &#39;&#40;5&#41;</div></td>
            <td><div style="text-align: center;vertical-align: middle;"> &#39;&#40;6&#41;</div></td>
            <td> <div style="text-align: center;vertical-align: middle;">&#39;&#40;7&#41;</div></td>
            <td> <div style="text-align: center;vertical-align: middle;">&#39;&#40;8&#41;</div></td>
            <td><div style="text-align: center;vertical-align: middle;"> &#39;&#40;9&#41;</div></td>
            <td><div style="text-align: center;vertical-align: middle;"> &#39;&#40;11&#41;</div></td>
            <td> <div style="text-align: center;vertical-align: middle;">&#39;&#40;12&#41;</div></td>
                         
     </tr>
   


    
    
     

    <tbody>';    


$no = 1;
        

    $html .= '

<tr>
             <td> 3300 </td>
             <td colspan="2">SMK - KESEHATAN</td>
                
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
  </tr>


     <tr>
          <td> 3301 </td>
          <td colspan="2">KESEHATAN</td>
             
          <td>'.$blnlalukesehatanl.'</td>
          <td>'.$blnlalukesehatanp.'</td>
          <td>'.$blninikesehatanl.'</td>
          <td>'.$blninikesehatanp.'</td>
          <td>'.$penempatanblninikesehatanl.'</td>
          <td>'.$penempatanblninikesehatanp.'</td>
          <td>'.$dihapusblninikesehatanl.'</td>
          <td>'.$dihapusblninikesehatanp.'</td>
          <td>=SUM(D67+F67-H67-J67)</td>
          <td>=SUM(E67+G67-I67-K67)</td>                  
      </tr>

        <tr>
          <td> 3302 </td>
          <td colspan="2">PERAWATAN SOSIAL</td>
             
          <td>'.$blnlaluperawatansosiall.'</td>
          <td>'.$blnlaluperawatansosialp.'</td>
          <td>'.$blniniperawatansosiall.'</td>
          <td>'.$blniniperawatansosialp.'</td>
          <td>'.$penempatanblniniperawatansosiall.'</td>
          <td>'.$penempatanblniniperawatansosialp.'</td>
          <td>'.$dihapusblniniperawatansosiall.'</td>
          <td>'.$dihapusblniniperawatansosialp.'</td>
          <td>=SUM(D68+F68-H68-J68)</td>
          <td>=SUM(E68+G68-I68-K68)</td>                  
      </tr>


  <tr id="mytable" class = "sub" bordercolor="red">
          <td  >Sub Total</td>

         <td  style=border:none;>  </td>
         <td  style= border:none;>  </td>
                 
              <td class = "sub" >=SUM(D67:D68)</td>
              <td class = "sub" >=SUM(E67:E68)</td>
              <td class = "sub" >=SUM(F67:F68)</td>
              <td class = "sub" >=SUM(G67:G68)</td>
              <td class = "sub" >=SUM(H67:H68)</td>
              <td class = "sub" >=SUM(I67:I68)</td>
              <td class = "sub" >=SUM(J67:J68)</td>
              <td class = "sub" >=SUM(K67:K68)</td>
              <td class = "sub" >=SUM(L67:L68)</td>
              <td class = "sub" >=SUM(M67:M68)</td>
  </tr>


  <tr>
             <td> 3400 </td>
             <td colspan="2">SMK - SENI, KERAJINAN DAN PARIWISATA</td>
                
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
  </tr>

     <tr>
          <td> 3401 </td>
          <td colspan="2">SENI RUPA</td>             
          <td>'.$blnlalusenirupal.'</td>
          <td>'.$blnlalusenirupap.'</td>
          <td>'.$blninisenirupal.'</td>
          <td>'.$blninisenirupap.'</td>
          <td>'.$penempatanblninisenirupal.'</td>
          <td>'.$penempatanblninisenirupap.'</td>
          <td>'.$dihapusblninisenirupal.'</td>
          <td>'.$dihapusblninisenirupap.'</td>
          <td>=SUM(D71+F71-H71-J71)</td>
          <td>=SUM(E71+G71-I71-K71)</td>                  
      </tr>

       <tr>
          <td> 3402 </td>
          <td colspan="2">DESAIN DAN PRODUKSI KRIA</td>             
          <td>'.$blnlaludesaindanproduksikrial.'</td>
          <td>'.$blnlaludesaindanproduksikriap.'</td>
          <td>'.$blninidesaindanproduksikrial.'</td>
          <td>'.$blninidesaindanproduksikriap.'</td>
          <td>'.$penempatanblninidesaindanproduksikrial.'</td>
          <td>'.$penempatanblninidesaindanproduksikriap.'</td>
          <td>'.$dihapusblninidesaindanproduksikrial.'</td>
          <td>'.$dihapusblninidesaindanproduksikriap.'</td>
          <td>=SUM(D72+F72-H72-J72)</td>
          <td>=SUM(E72+G72-I72-K72)</td>                  
      </tr>
       <tr>
          <td> 3403 </td>
          <td colspan="2">SENI PERTUNJUKAN</td>             
          <td>'.$blnlalusenipertunjukanl.'</td>
          <td>'.$blnlalusenipertunjukanp.'</td>
          <td>'.$blninisenipertunjukanl.'</td>
          <td>'.$blninisenipertunjukanp.'</td>
          <td>'.$penempatanblninisenipertunjukanl.'</td>
          <td>'.$penempatanblninisenipertunjukanp.'</td>
          <td>'.$dihapusblninisenipertunjukanl.'</td>
          <td>'.$dihapusblninisenipertunjukanp.'</td>
          <td>=SUM(D73+F73-H73-J73)</td>
          <td>=SUM(E73+G73-I73-K73)</td>                  
      </tr>

        <tr>
          <td> 3404 </td>
          <td colspan="2">PARIWISATA</td>             
          <td>'.$blnlalupariwisatal.'</td>
          <td>'.$blnlalupariwisatap.'</td>
          <td>'.$blninipariwisatal.'</td>
          <td>'.$blninipariwisatap.'</td>
          <td>'.$penempatanblninipariwisatal.'</td>
          <td>'.$penempatanblninipariwisatap.'</td>
          <td>'.$dihapusblninipariwisatal.'</td>
          <td>'.$dihapusblninipariwisatap.'</td>
          <td>=SUM(D74+F74-H74-J74)</td>
          <td>=SUM(E74+G74-I74-K74)</td>                  
      </tr>

       <tr>
          <td> 3405 </td>
          <td colspan="2">TATA BOGA</td>             
          <td>'.$blnlalutatabogal.'</td>
          <td>'.$blnlalutatabogap.'</td>
          <td>'.$blninitatabogal.'</td>
          <td>'.$blninitatabogap.'</td>
          <td>'.$penempatanblninitatabogal.'</td>
          <td>'.$penempatanblninitatabogap.'</td>
          <td>'.$dihapusblninitatabogal.'</td>
          <td>'.$dihapusblninitatabogap.'</td>
          <td>=SUM(D75+F75-H75-J75)</td>
          <td>=SUM(E75+G75-I75-K75)</td>                  
      </tr>

         <tr>
          <td> 3406 </td>
          <td colspan="2">TATA KECANTIKAN</td>             
          <td>'.$blnlalutatakecantikanl.'</td>
          <td>'.$blnlalutatakecantikanp.'</td>
          <td>'.$blninitatakecantikanl.'</td>
          <td>'.$blninitatakecantikanp.'</td>
          <td>'.$penempatanblninitatakecantikanl.'</td>
          <td>'.$penempatanblninitatakecantikanp.'</td>
          <td>'.$dihapusblninitatakecantikanl.'</td>
          <td>'.$dihapusblninitatakecantikanp.'</td>
          <td>=SUM(D76+F76-H76-J76)</td>
          <td>=SUM(E76+G76-I76-K76)</td>                  
      </tr>

        <tr>
          <td> 3407 </td>
          <td colspan="2">TATA BUSANA</td>             
          <td>'.$blnlalutatabusanal.'</td>
          <td>'.$blnlalutatabusanap.'</td>
          <td>'.$blninitatabusanal.'</td>
          <td>'.$blninitatabusanap.'</td>
          <td>'.$penempatanblninitatabusanal.'</td>
          <td>'.$penempatanblninitatabusanap.'</td>
          <td>'.$dihapusblninitatabusanal.'</td>
          <td>'.$dihapusblninitatabusanap.'</td>
          <td>=SUM(D77+F77-H77-J77)</td>
          <td>=SUM(E77+G77-I77-K77)</td>                  
      </tr>


       <tr id="mytable" class = "sub" bordercolor="red">
          <td  >Sub Total</td>

         <td  style=border:none;>  </td>
         <td  style= border:none;>  </td>
                 
              <td class = "sub" >=SUM(D71:D77)</td>
              <td class = "sub" >=SUM(E71:E77)</td>
              <td class = "sub" >=SUM(F71:F77)</td>
              <td class = "sub" >=SUM(G71:G77)</td>
              <td class = "sub" >=SUM(H71:H77)</td>
              <td class = "sub" >=SUM(I71:I77)</td>
              <td class = "sub" >=SUM(J71:J77)</td>
              <td class = "sub" >=SUM(K71:K77)</td>
              <td class = "sub" >=SUM(L71:L77)</td>
              <td class = "sub" >=SUM(M71:M77)</td>
  </tr>


  <tr>
             <td> 3500 </td>
             <td colspan="2">SMK - AGRIBISNIS DAN AGROTEKNOLOGI</td>
                
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
  </tr>

      <tr>
          <td> 3501 </td>
          <td colspan="2">AGRIBISNIS PRODUKSI TANAMAN</td>             
          <td>'.$blnlaluagribisnisproduksitanamanl.'</td>
          <td>'.$blnlaluagribisnisproduksitanamanp.'</td>
          <td>'.$blniniagribisnisproduksitanamanl.'</td>
          <td>'.$blniniagribisnisproduksitanamanp.'</td>
          <td>'.$penempatanblniniagribisnisproduksitanamanl.'</td>
          <td>'.$penempatanblniniagribisnisproduksitanamanp.'</td>
          <td>'.$dihapusblniniagribisnisproduksitanamanl.'</td>
          <td>'.$dihapusblniniagribisnisproduksitanamanp.'</td>
          <td>=SUM(D80+F80-H80-J80)</td>
          <td>=SUM(E80+G80-I80-K80)</td>                  
       </tr>

         <tr>
          <td> 3502 </td>
          <td colspan="2">AGRIBISNIS PRODUKSI TERNAK</td>             
          <td>'.$blnlaluagribisnisproduksiternakl.'</td>
          <td>'.$blnlaluagribisnisproduksiternakp.'</td>
          <td>'.$blniniagribisnisproduksiternakl.'</td>
          <td>'.$blniniagribisnisproduksiternakp.'</td>
          <td>'.$penempatanblniniagribisnisproduksiternakl.'</td>
          <td>'.$penempatanblniniagribisnisproduksiternakp.'</td>
          <td>'.$dihapusblniniagribisnisproduksiternakl.'</td>
          <td>'.$dihapusblniniagribisnisproduksiternakp.'</td>
          <td>=SUM(D81+F81-H81-J81)</td>
          <td>=SUM(E81+G81-I81-K81)</td>                  
       </tr>

          <tr>
          <td> 3503 </td>
          <td colspan="2">AGRIBISNIS PRODUKSI SUMBERDAYA PERAIRAN</td>             
          <td>'.$blnlaluagribisnisproduksisumberdayaperairanl.'</td>
          <td>'.$blnlaluagribisnisproduksisumberdayaperairanp.'</td>
          <td>'.$blniniagribisnisproduksisumberdayaperairanl.'</td>
          <td>'.$blniniagribisnisproduksisumberdayaperairanp.'</td>
          <td>'.$penempatanblniniagribisnisproduksisumberdayaperairanl.'</td>
          <td>'.$penempatanblniniagribisnisproduksisumberdayaperairanp.'</td>
          <td>'.$dihapusblniniagribisnisproduksisumberdayaperairanl.'</td>
          <td>'.$dihapusblniniagribisnisproduksisumberdayaperairanp.'</td>
          <td>=SUM(D82+F82-H82-J82)</td>
          <td>=SUM(E82+G82-I82-K82)</td>                  
       </tr>


          <tr>
          <td> 3504 </td>
          <td colspan="2">MEKANISASI PERTANIAN</td>             
          <td>'.$blnlalumekanisasipertanianl.'</td>
          <td>'.$blnlalumekanisasipertanianp.'</td>
          <td>'.$blninimekanisasipertanianl.'</td>
          <td>'.$blninimekanisasipertanianp.'</td>
          <td>'.$penempatanblninimekanisasipertanianl.'</td>
          <td>'.$penempatanblninimekanisasipertanianp.'</td>
          <td>'.$dihapusblninimekanisasipertanianl.'</td>
          <td>'.$dihapusblninimekanisasipertanianp.'</td>
          <td>=SUM(D83+F83-H83-J83)</td>
          <td>=SUM(E83+G83-I83-K83)</td>                  
       </tr>

        <tr>
          <td> 3505 </td>
          <td colspan="2">AGRIBISNIS HASIL PERTANIAN </td>             
          <td>'.$blnlaluagribisnishasilpertanianl.'</td>
          <td>'.$blnlaluagribisnishasilpertanianp.'</td>
          <td>'.$blniniagribisnishasilpertanianl.'</td>
          <td>'.$blniniagribisnishasilpertanianp.'</td>
          <td>'.$penempatanblniniagribisnishasilpertanianl.'</td>
          <td>'.$penempatanblniniagribisnishasilpertanianp.'</td>
          <td>'.$dihapusblniniagribisnishasilpertanianl.'</td>
          <td>'.$dihapusblniniagribisnishasilpertanianp.'</td>
          <td>=SUM(D84+F84-H84-J84)</td>
          <td>=SUM(E84+G84-I84-K84)</td>                  
       </tr>

         <tr>
          <td> 3506 </td>
          <td colspan="2">PENYULUHAN PERTANIAN </td>             
          <td>'.$blnlalupenyuluhanpertanianl.'</td>
          <td>'.$blnlalupenyuluhanpertanianp.'</td>
          <td>'.$blninipenyuluhanpertanianl.'</td>
          <td>'.$blninipenyuluhanpertanianp.'</td>
          <td>'.$penempatanblninipenyuluhanpertanianl.'</td>
          <td>'.$penempatanblninipenyuluhanpertanianp.'</td>
          <td>'.$dihapusblninipenyuluhanpertanianl.'</td>
          <td>'.$dihapusblninipenyuluhanpertanianp.'</td>
          <td>=SUM(D85+F85-H85-J85)</td>
          <td>=SUM(E85+G85-I85-K85)</td>                  
       </tr>

         <tr>
          <td> 3507 </td>
          <td colspan="2">KEHUTANAN </td>             
          <td>'.$blnlalukehutananl.'</td>
          <td>'.$blnlalukehutananp.'</td>
          <td>'.$blninikehutananl.'</td>
          <td>'.$blninikehutananp.'</td>
          <td>'.$penempatanblninikehutananl.'</td>
          <td>'.$penempatanblninikehutananp.'</td>
          <td>'.$dihapusblninikehutananl.'</td>
          <td>'.$dihapusblninikehutananp.'</td>
          <td>=SUM(D86+F86-H86-J86)</td>
          <td>=SUM(E86+G86-I86-K86)</td>                  
       </tr>

         <tr id="mytable" class = "sub" bordercolor="red">
          <td  >Sub Total</td>

         <td  style=border:none;>  </td>
         <td  style= border:none;>  </td>
                 
              <td class = "sub" >=SUM(D80:D86)</td>
              <td class = "sub" >=SUM(E80:E86)</td>
              <td class = "sub" >=SUM(F80:F86)</td>
              <td class = "sub" >=SUM(G80:G86)</td>
              <td class = "sub" >=SUM(H80:H86)</td>
              <td class = "sub" >=SUM(I80:I86)</td>
              <td class = "sub" >=SUM(J80:J86)</td>
              <td class = "sub" >=SUM(K80:K86)</td>
              <td class = "sub" >=SUM(L80:L86)</td>
              <td class = "sub" >=SUM(M80:M86)</td>
  </tr>


  <tr>
             <td> 3600 </td>
             <td colspan="2">SMK - BISNIS DAN MANAJEMEN</td>
                
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
  </tr>

      <tr>
          <td> 3601 </td>
          <td colspan="2">ADMINISTRASI</td>             
          <td>'.$blnlaluadministrasil.'</td>
          <td>'.$blnlaluadministrasip.'</td>
          <td>'.$blniniadministrasil.'</td>
          <td>'.$blniniadministrasip.'</td>
          <td>'.$penempatanblniniadministrasil.'</td>
          <td>'.$penempatanblniniadministrasip.'</td>
          <td>'.$dihapusblniniadministrasil.'</td>
          <td>'.$dihapusblniniadministrasip.'</td>
          <td>=SUM(D89+F89-H89-J89)</td>
          <td>=SUM(E89+G89-I89-K89)</td>                  
       </tr>

         <tr>
          <td> 3602 </td>
          <td colspan="2">KEUANGAN</td>             
          <td>'.$blnlalukeuanganl.'</td>
          <td>'.$blnlalukeuanganp.'</td>
          <td>'.$blninikeuanganl.'</td>
          <td>'.$blninikeuanganp.'</td>
          <td>'.$penempatanblninikeuanganl.'</td>
          <td>'.$penempatanblninikeuanganp.'</td>
          <td>'.$dihapusblninikeuanganl.'</td>
          <td>'.$dihapusblninikeuanganp.'</td>
          <td>=SUM(D90+F90-H90-J90)</td>
          <td>=SUM(E90+G90-I90-K90)</td>                  
       </tr>

         <tr>
          <td> 3603 </td>
          <td colspan="2">TATA NIAGA</td>             
          <td>'.$blnlalutataniagal.'</td>
          <td>'.$blnlalutataniagap.'</td>
          <td>'.$blninitataniagal.'</td>
          <td>'.$blninitataniagap.'</td>
          <td>'.$penempatanblninitataniagal.'</td>
          <td>'.$penempatanblninitataniagap.'</td>
          <td>'.$dihapusblninitataniagal.'</td>
          <td>'.$dihapusblninitataniagap.'</td>
          <td>=SUM(D91+F91-H91-J91)</td>
          <td>=SUM(E91+G91-I91-K91)</td>                  

       </tr>


        <tr id="mytable" class = "sub" bordercolor="red">
          <td  >Sub Total</td>

         <td  style=border:none;>  </td>
         <td  style= border:none;>  </td>
                 
              <td class = "sub" >=SUM(D89:D91)</td>
              <td class = "sub" >=SUM(E89:E91)</td>
              <td class = "sub" >=SUM(F89:F91)</td>
              <td class = "sub" >=SUM(G89:G91)</td>
              <td class = "sub" >=SUM(H89:H91)</td>
              <td class = "sub" >=SUM(I89:I91)</td>
              <td class = "sub" >=SUM(J89:J91)</td>
              <td class = "sub" >=SUM(K89:K91)</td>
              <td class = "sub" >=SUM(L89:L91)</td>
              <td class = "sub" >=SUM(M89:M91)</td>
            </tr>

            <tr>
             <td> 3700 </td>
             <td colspan="2">SETINGKAT SMU LAINNYA</td>
                
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
  </tr>

      <tr>
          <td> 3701 </td>
          <td colspan="2">SLTA LAINNYA</td>             
          <td>'.$blnlalusltalainnyal.'</td>
          <td>'.$blnlalusltalainnyap.'</td>
          <td>'.$blninisltalainnyal.'</td>
          <td>'.$blninisltalainnyap.'</td>
          <td>'.$penempatanblninisltalainnyal.'</td>
          <td>'.$penempatanblninisltalainnyap.'</td>
          <td>'.$dihapusblninisltalainnyal.'</td>
          <td>'.$dihapusblninisltalainnyap.'</td>
          <td>=SUM(D94+F94-H94-J94)</td>
          <td>=SUM(E94+G94-I94-K94)</td>                  
       </tr>

        <tr>
          <td> 3701 </td>
          <td colspan="2">SLTA - TAK TERDEFENISI</td>             
          <td>'.$blnlalusltatakterdefinisil.'</td>
          <td>'.$blnlalusltatakterdefinisip.'</td>
          <td>'.$blninisltatakterdefinisil.'</td>
          <td>'.$blninisltatakterdefinisip.'</td>
          <td>'.$penempatanblninisltatakterdefinisil.'</td>
          <td>'.$penempatanblninisltatakterdefinisip.'</td>
          <td>'.$dihapusblninisltatakterdefinisil.'</td>
          <td>'.$dihapusblninisltatakterdefinisip.'</td>
          <td>=SUM(D95+F95-H95-J95)</td>
          <td>=SUM(E95+G95-I95-K95)</td>                  
       </tr>

        <tr id="mytable" class = "sub" bordercolor="red">
          <td  >Sub Total</td>

         <td  style=border:none;>  </td>
         <td  style= border:none;>  </td>
                 
              <td class = "sub" >=SUM(D94:D95)</td>
              <td class = "sub" >=SUM(E94:E95)</td>
              <td class = "sub" >=SUM(F94:F95)</td>
              <td class = "sub" >=SUM(G94:G95)</td>
              <td class = "sub" >=SUM(H94:H95)</td>
              <td class = "sub" >=SUM(I94:I95)</td>
              <td class = "sub" >=SUM(J94:J95)</td>
              <td class = "sub" >=SUM(K94:K95)</td>
              <td class = "sub" >=SUM(L94:L95)</td>
              <td class = "sub" >=SUM(M94:M95)</td>
            </tr>

                   <tr>
             <td> 4000 </td>
             <td colspan="2">DIPLOMA I / AKTA I / DIPLOMA II / AKTA II</td>
                
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
                 </tr>

                        <tr>
             <td> 4100 </td>
             <td colspan="2">DIPLOMA I / AKTA I </td>
                
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
                 </tr>

      <tr>
          <td> 4101 </td>
          <td colspan="2">PENDIDIKAN</td>             
          <td>'.$blnlalupendidikanl.'</td>
          <td>'.$blnlalupendidikanp.'</td>
          <td>'.$blninipendidikanl.'</td>
          <td>'.$blninipendidikanp.'</td>
          <td>'.$penempatanblninipendidikanl.'</td>
          <td>'.$penempatanblninipendidikanp.'</td>
          <td>'.$dihapusblninipendidikanl.'</td>
          <td>'.$dihapusblninipendidikanp.'</td>
          <td>=SUM(D99+F99-H99-J99)</td>
          <td>=SUM(E99+G99-I99-K99)</td>                  
       </tr>


      <tr>
          <td> 4102 </td>
          <td colspan="2">PENDIDIKAN LUAR SEKOLAH</td>             
          <td>'.$blnlalupendidikanluarsekolahl.'</td>
          <td>'.$blnlalupendidikanluarsekolahp.'</td>
          <td>'.$blninipendidikanluarsekolahl.'</td>
          <td>'.$blninipendidikanluarsekolahp.'</td>
          <td>'.$penempatanblninipendidikanluarsekolahl.'</td>
          <td>'.$penempatanblninipendidikanluarsekolahp.'</td>
          <td>'.$dihapusblninipendidikanluarsekolahl.'</td>
          <td>'.$dihapusblninipendidikanluarsekolahp.'</td>
          <td>=SUM(D100+F100-H100-J100)</td>
          <td>=SUM(E100+G100-I100-K100)</td>                  
       </tr>

      <tr>
          <td> 4104 </td>
          <td colspan="2"> PSIKOLOGI </td>             
          <td>'.$blnlalupsikologil.'</td>
          <td>'.$blnlalupsikologip.'</td>
          <td>'.$blninipsikologil.'</td>
          <td>'.$blninipsikologip.'</td>
          <td>'.$penempatanblninipsikologil.'</td>
          <td>'.$penempatanblninipsikologip.'</td>
          <td>'.$dihapusblninipsikologil.'</td>
          <td>'.$dihapusblninipsikologip.'</td>
          <td>=SUM(D101+F101-H101-J101)</td>
          <td>=SUM(E101+G101-I101-K101)</td>                  
       </tr>

           <tr>
          <td> 4105 </td>
          <td colspan="2"> ILMU PENGETAHUAN SOSIAL </td>             
          <td>'.$blnlaluilmupengetahuansosiall.'</td>
          <td>'.$blnlaluilmupengetahuansosialp.'</td>
          <td>'.$blniniilmupengetahuansosiall.'</td>
          <td>'.$blniniilmupengetahuansosialp.'</td>
          <td>'.$penempatanblniniilmupengetahuansosiall.'</td>
          <td>'.$penempatanblniniilmupengetahuansosialp.'</td>
          <td>'.$dihapusblniniilmupengetahuansosiall.'</td>
          <td>'.$dihapusblniniilmupengetahuansosialp.'</td>
          <td>=SUM(D102+F102-H102-J102)</td>
          <td>=SUM(E102+G102-I102-K102)</td>                  
       </tr>

          <tr>
          <td> 4106 </td>
          <td colspan="2"> PENDIDIKAN MORAL PANCASILA </td>             
          <td>'.$blnlalupendidikanmoralpancasilal.'</td>
          <td>'.$blnlalupendidikanmoralpancasilap.'</td>
          <td>'.$blninipendidikanmoralpancasilal.'</td>
          <td>'.$blninipendidikanmoralpancasilap.'</td>
          <td>'.$penempatanblninipendidikanmoralpancasilal.'</td>
          <td>'.$penempatanblninipendidikanmoralpancasilap.'</td>
          <td>'.$dihapusblninipendidikanmoralpancasilal.'</td>
          <td>'.$dihapusblninipendidikanmoralpancasilap.'</td>
          <td>=SUM(D103+F103-H103-J103)</td>
          <td>=SUM(E103+G103-I103-K103)</td>                  
       </tr>

        <tr>
          <td> 4107 </td>
          <td colspan="2"> ADMINISTRASI KEUANGAN </td>             
          <td>'.$blnlaluadministrasikeuanganl.'</td>
          <td>'.$blnlaluadministrasikeuanganp.'</td>
          <td>'.$blniniadministrasikeuanganl.'</td>
          <td>'.$blniniadministrasikeuanganp.'</td>
          <td>'.$penempatanblniniadministrasikeuanganl.'</td>
          <td>'.$penempatanblniniadministrasikeuanganp.'</td>
          <td>'.$dihapusblniniadministrasikeuanganl.'</td>
          <td>'.$dihapusblniniadministrasikeuanganp.'</td>
          <td>=SUM(D104+F104-H104-J104)</td>
          <td>=SUM(E104+G104-I104-K104)</td>                  
       </tr>

        <tr>
          <td> 4109 </td>
          <td colspan="2"> SEJARAH </td>             
          <td>'.$blnlalusejarahl.'</td>
          <td>'.$blnlalusejarahp.'</td>
          <td>'.$blninisejarahl.'</td>
          <td>'.$blninisejarahp.'</td>
          <td>'.$penempatanblninisejarahl.'</td>
          <td>'.$penempatanblninisejarahp.'</td>
          <td>'.$dihapusblninisejarahl.'</td>
          <td>'.$dihapusblninisejarahp.'</td>
          <td>=SUM(D105+F105-H105-J105)</td>
          <td>=SUM(E105+G105-I105-K105)</td>                  
       </tr>


        <tr>
          <td> 4110 </td>
          <td colspan="2"> HUKUM </td>             
          <td>'.$blnlaluhukuml.'</td>
          <td>'.$blnlaluhukump.'</td>
          <td>'.$blninihukuml.'</td>
          <td>'.$blninihukump.'</td>
          <td>'.$penempatanblninihukuml.'</td>
          <td>'.$penempatanblninihukump.'</td>
          <td>'.$dihapusblninihukuml.'</td>
          <td>'.$dihapusblninihukump.'</td>
          <td>=SUM(D106+F106-H106-J106)</td>
          <td>=SUM(E106+G106-I106-K106)</td>                  
       </tr>

       <tr>
          <td> 4111 </td>
          <td colspan="2"> KESEKRETARIATAN </td>             
          <td>'.$blnlalukesekretariatanl.'</td>
          <td>'.$blnlalukesekretariatanp.'</td>
          <td>'.$blninikesekretariatanl.'</td>
          <td>'.$blninikesekretariatanp.'</td>
          <td>'.$penempatanblninikesekretariatanl.'</td>
          <td>'.$penempatanblninikesekretariatanp.'</td>
          <td>'.$dihapusblninikesekretariatanl.'</td>
          <td>'.$dihapusblninikesekretariatanp.'</td>
          <td>=SUM(D107+F107-H107-J107)</td>
          <td>=SUM(E107+G107-I107-K107)</td>                  
       </tr>

        <tr>
          <td> 4112 </td>
          <td colspan="2"> OLAH RAGA KESEHATAN </td>             
          <td>'.$blnlaluolahragakesehatanl.'</td>
          <td>'.$blnlaluolahragakesehatanp.'</td>
          <td>'.$blniniolahragakesehatanl.'</td>
          <td>'.$blniniolahragakesehatanp.'</td>
          <td>'.$penempatanblniniolahragakesehatanl.'</td>
          <td>'.$penempatanblniniolahragakesehatanp.'</td>
          <td>'.$dihapusblniniolahragakesehatanl.'</td>
          <td>'.$dihapusblniniolahragakesehatanp.'</td>
          <td>=SUM(D108+F108-H108-J108)</td>
          <td>=SUM(E108+G108-I108-K108)</td>                  
       </tr>


        <tr>
          <td> 4113 </td>
          <td colspan="2"> KESENIAN </td>             
          <td>'.$blnlalukesenianl.'</td>
          <td>'.$blnlalukesenianp.'</td>
          <td>'.$blninikesenianl.'</td>
          <td>'.$blninikesenianp.'</td>
          <td>'.$penempatanblninikesenianl.'</td>
          <td>'.$penempatanblninikesenianp.'</td>
          <td>'.$dihapusblninikesenianl.'</td>
          <td>'.$dihapusblninikesenianp.'</td>
          <td>=SUM(D109+F109-H109-J109)</td>
          <td>=SUM(E109+G109-I109-K109)</td>                  
       </tr>

         <tr>
          <td> 4114 </td>
          <td colspan="2"> BAHASA INDONESIA </td>             
          <td>'.$blnlalubahasaindonesial.'</td>
          <td>'.$blnlalubahasaindonesiap.'</td>
          <td>'.$blninibahasaindonesial.'</td>
          <td>'.$blninibahasaindonesiap.'</td>
          <td>'.$penempatanblninibahasaindonesial.'</td>
          <td>'.$penempatanblninibahasaindonesiap.'</td>
          <td>'.$dihapusblninibahasaindonesial.'</td>
          <td>'.$dihapusblninibahasaindonesiap.'</td>
          <td>=SUM(D110+F110-H110-J110)</td>
          <td>=SUM(E110+G110-I110-K110)</td>                  
       </tr>

         <tr>
          <td> 4115 </td>
          <td colspan="2"> BAHASA INGGRIS </td>             
          <td>'.$blnlalubahasainggrisl.'</td>
          <td>'.$blnlalubahasainggrisp.'</td>
          <td>'.$blninibahasainggrisl.'</td>
          <td>'.$blninibahasainggrisp.'</td>
          <td>'.$penempatanblninibahasainggrisl.'</td>
          <td>'.$penempatanblninibahasainggrisp.'</td>
          <td>'.$dihapusblninibahasainggrisl.'</td>
          <td>'.$dihapusblninibahasainggrisp.'</td>
          <td>=SUM(D111+F111-H111-J111)</td>
          <td>=SUM(E111+G111-I111-K111)</td>                  
       </tr>

         <tr>
          <td> 4116 </td>
          <td colspan="2"> BAHASA ARAB </td>             
          <td>'.$blnlalubahasaarabl.'</td>
          <td>'.$blnlalubahasaarabp.'</td>
          <td>'.$blninibahasaarabl.'</td>
          <td>'.$blninibahasaarabp.'</td>
          <td>'.$penempatanblninibahasaarabl.'</td>
          <td>'.$penempatanblninibahasaarabp.'</td>
          <td>'.$dihapusblninibahasaarabl.'</td>
          <td>'.$dihapusblninibahasaarabp.'</td>
          <td>=SUM(D112+F112-H112-J112)</td>
          <td>=SUM(E112+G112-I112-K112)</td>                  
       </tr>

        <tr>
          <td> 4118 </td>
          <td colspan="2"> EKONOMI </td>             
          <td>'.$blnlaluekonomil.'</td>
          <td>'.$blnlaluekonomip.'</td>
          <td>'.$blniniekonomil.'</td>
          <td>'.$blniniekonomip.'</td>
          <td>'.$penempatanblniniekonomil.'</td>
          <td>'.$penempatanblniniekonomip.'</td>
          <td>'.$dihapusblniniekonomil.'</td>
          <td>'.$dihapusblniniekonomip.'</td>
          <td>=SUM(D113+F113-H113-J113)</td>
          <td>=SUM(E113+G113-I113-K113)</td>                  
       </tr>

       <tr>
          <td> 4119 </td>
          <td colspan="2"> ILMU PENGETAHUAN ALAM/FISIKA </td>             
          <td>'.$blnlaluilmupengetahuanalamfisikal.'</td>
          <td>'.$blnlaluilmupengetahuanalamfisikap.'</td>
          <td>'.$blniniilmupengetahuanalamfisikal.'</td>
          <td>'.$blniniilmupengetahuanalamfisikap.'</td>
          <td>'.$penempatanblniniilmupengetahuanalamfisikal.'</td>
          <td>'.$penempatanblniniilmupengetahuanalamfisikap.'</td>
          <td>'.$dihapusblniniilmupengetahuanalamfisikal.'</td>
          <td>'.$dihapusblniniilmupengetahuanalamfisikap.'</td>
          <td>=SUM(D114+F114-H114-J114)</td>
          <td>=SUM(E114+G114-I114-K114)</td>                  
       </tr>

         <tr>
          <td> 4120 </td>
          <td colspan="2"> MATEMATIKA </td>             
          <td>'.$blnlalumatematikal.'</td>
          <td>'.$blnlalumatematikap.'</td>
          <td>'.$blninimatematikal.'</td>
          <td>'.$blninimatematikap.'</td>
          <td>'.$penempatanblninimatematikal.'</td>
          <td>'.$penempatanblninimatematikap.'</td>
          <td>'.$dihapusblninimatematikal.'</td>
          <td>'.$dihapusblninimatematikap.'</td>
          <td>=SUM(D115+F115-H115-J115)</td>
          <td>=SUM(E115+G115-I115-K115)</td>                  
       </tr>

         <tr>
          <td> 4121 </td>
          <td colspan="2"> PROGRAM KOMPUTER </td>             
          <td>'.$blnlaluprogramkomputerl.'</td>
          <td>'.$blnlaluprogramkomputerp.'</td>
          <td>'.$blniniprogramkomputerl.'</td>
          <td>'.$blniniprogramkomputerp.'</td>
          <td>'.$penempatanblniniprogramkomputerl.'</td>
          <td>'.$penempatanblniniprogramkomputerp.'</td>
          <td>'.$dihapusblniniprogramkomputerl.'</td>
          <td>'.$dihapusblniniprogramkomputerp.'</td>
          <td>=SUM(D116+F116-H116-J116)</td>
          <td>=SUM(E116+G116-I116-K116)</td>                  
       </tr>

          <tr>
          <td> 4122 </td>
          <td colspan="2"> BIOLOGI </td>             
          <td>'.$blnlalubiologil.'</td>
          <td>'.$blnlalubiologip.'</td>
          <td>'.$blninibiologil.'</td>
          <td>'.$blninibiologip.'</td>
          <td>'.$penempatanblninibiologil.'</td>
          <td>'.$penempatanblninibiologip.'</td>
          <td>'.$dihapusblninibiologil.'</td>
          <td>'.$dihapusblninibiologip.'</td>
          <td>=SUM(D117+F117-H117-J117)</td>
          <td>=SUM(E117+G117-I117-K117)</td>                  
       </tr>

          <tr>
          <td> 4123 </td>
          <td colspan="2"> ILMU KIMIA </td>             
          <td>'.$blnlaluilmukimial.'</td>
          <td>'.$blnlaluilmukimiap.'</td>
          <td>'.$blniniilmukimial.'</td>
          <td>'.$blniniilmukimiap.'</td>
          <td>'.$penempatanblniniilmukimial.'</td>
          <td>'.$penempatanblniniilmukimiap.'</td>
          <td>'.$dihapusblniniilmukimial.'</td>
          <td>'.$dihapusblniniilmukimiap.'</td>
          <td>=SUM(D118+F118-H118-J118)</td>
          <td>=SUM(E118+G118-I118-K118)</td>                  
       </tr>

         <tr>
          <td> 4125 </td>
          <td colspan="2"> TEKNIK MESIN </td>             
          <td>'.$blnlaluteknikmesinl.'</td>
          <td>'.$blnlaluteknikmesinp.'</td>
          <td>'.$blniniteknikmesinl.'</td>
          <td>'.$blniniteknikmesinp.'</td>
          <td>'.$penempatanblniniteknikmesinl.'</td>
          <td>'.$penempatanblniniteknikmesinp.'</td>
          <td>'.$dihapusblniniteknikmesinl.'</td>
          <td>'.$dihapusblniniteknikmesinp.'</td>
          <td>=SUM(D119+F119-H119-J119)</td>
          <td>=SUM(E119+G119-I119-K119)</td>                  
       </tr>

          <tr>
          <td> 4126 </td>
          <td colspan="2"> TEKNIK SIPIL </td>             
          <td>'.$blnlalutekniksipill.'</td>
          <td>'.$blnlalutekniksipilp.'</td>
          <td>'.$blninitekniksipill.'</td>
          <td>'.$blninitekniksipilp.'</td>
          <td>'.$penempatanblninitekniksipill.'</td>
          <td>'.$penempatanblninitekniksipilp.'</td>
          <td>'.$dihapusblninitekniksipill.'</td>
          <td>'.$dihapusblninitekniksipilp.'</td>
          <td>=SUM(D120+F120-H120-J120)</td>
          <td>=SUM(E120+G120-I120-K120)</td>                  
       </tr>

            <tr>
          <td> 4127 </td>
          <td colspan="2"> TEKNIK LISTRIK </td>             
          <td>'.$blnlalutekniklistrikl.'</td>
          <td>'.$blnlalutekniklistrikp.'</td>
          <td>'.$blninitekniklistrikl.'</td>
          <td>'.$blninitekniklistrikp.'</td>
          <td>'.$penempatanblninitekniklistrikl.'</td>
          <td>'.$penempatanblninitekniklistrikp.'</td>
          <td>'.$dihapusblninitekniklistrikl.'</td>
          <td>'.$dihapusblninitekniklistrikp.'</td>
          <td>=SUM(D121+F121-H121-J121)</td>
          <td>=SUM(E121+G121-I121-K121)</td>                  
       </tr>


  <table >
    <thead>
    <tr><th></th></tr>
    <tr><th></th></tr>
    
      </thead>
     </table>

      <table border="1" width="200px">



      <tr style="background: #aaa">
        <td  width="150" colspan="3"  rowspan ="3" ><div style="text-align: center;vertical-align: middle; white-space: nowrap;width=30px column-width: 90px;">JENIS PENDIDIKAN</div></td>
        <td width="150" colspan="2" rowspan="2" ><div style="text-align: center;vertical-align: middle;">SISA BULAN YANG LALU</div></td>
        <td width="150" colspan="2" rowspan="2" ><div style="text-align: center;vertical-align: middle;">YANG TERDAFTAR BULAIN INI</div></td>
        <td width="150" colspan="2" rowspan="2"><div style="text-align: center;vertical-align: middle;">PENEMPATAN BULAN INI</div></td>        
        <td width="150" colspan="2" rowspan="2" ><div style="text-align: center;vertical-align: middle;">DIHAPUSKAN BULAN INI</div></td>
        <td width="150" colspan="2" rowspan="2" ><div style="text-align: center;vertical-align: middle;">SISA AKHIR BULAN INI</div></td>
 
   </tr>
   <tr>
   </tr>
    <tr style="background: #aaa">
            <td><div style="text-align: center;vertical-align: middle;"> L</div> </td>
            <td><div style="text-align: center;vertical-align: middle;"> P</div> </td>       
             <td><div style="text-align: center;vertical-align: middle;"> L</div> </td>
            <td><div style="text-align: center;vertical-align: middle;"> P</div> </td>
            <td><div style="text-align: center;vertical-align: middle;"> L</div> </td>
            <td><div style="text-align: center;vertical-align: middle;"> P</div> </td>
            <td><div style="text-align: center;vertical-align: middle;"> L</div> </td>
            <td><div style="text-align: center;vertical-align: middle;"> P</div> </td>
            <td><div style="text-align: center;vertical-align: middle;"> L</div> </td>
            <td><div style="text-align: center;vertical-align: middle;"> P</div> </td>   
            
     </tr>

      <tr style="background: #aaa">
            <td width="150" colspan="3" ><div style="text-align: center;vertical-align: middle;"> &#39;&#40;1&#41;</div></td>
            <td> <div style="text-align: center;vertical-align: middle;">&#39;&#40;2&#41;</div></td>
            <td> <div style="text-align: center;vertical-align: middle;">&#39;&#40;3&#41;</div></td>
            <td> <div style="text-align: center;vertical-align: middle;">&#39;&#40;4&#41;</div></td>
            <td><div style="text-align: center;vertical-align: middle;"> &#39;&#40;5&#41;</div></td>
            <td><div style="text-align: center;vertical-align: middle;"> &#39;&#40;6&#41;</div></td>
            <td> <div style="text-align: center;vertical-align: middle;">&#39;&#40;7&#41;</div></td>
            <td> <div style="text-align: center;vertical-align: middle;">&#39;&#40;8&#41;</div></td>
            <td><div style="text-align: center;vertical-align: middle;"> &#39;&#40;9&#41;</div></td>
            <td><div style="text-align: center;vertical-align: middle;"> &#39;&#40;11&#41;</div></td>
            <td> <div style="text-align: center;vertical-align: middle;">&#39;&#40;12&#41;</div></td>
                         
     </tr>
   


    
    
     

    <tbody>';    


$no = 1;
        

    $html .= '

       <tr>
          <td> 4129 </td>
          <td colspan="2"> DIPLOMA I/AKTA I LAINNYA </td>             
          <td>'.$blnlaludiplomaiaktailainnyal.'</td>
          <td>'.$blnlaludiplomaiaktailainnyap.'</td>
          <td>'.$blninidiplomaiaktailainnyal.'</td>
          <td>'.$blninidiplomaiaktailainnyap.'</td>
          <td>'.$penempatanblninidiplomaiaktailainnyal.'</td>
          <td>'.$penempatanblninidiplomaiaktailainnyap.'</td>
          <td>'.$dihapusblninidiplomaiaktailainnyal.'</td>
          <td>'.$dihapusblninidiplomaiaktailainnyap.'</td>
          <td>=SUM(D122+F122-H122-J122)</td>
          <td>=SUM(E122+G122-I122-K122)</td>                  
       </tr>

       <tr>
          <td> 4199 </td>
          <td colspan="2"> DIPLOMA I/TAK TERDEFENISI </td>             
          <td>'.$blnlaludiplomaitakterdefenisil.'</td>
          <td>'.$blnlaludiplomaitakterdefenisip.'</td>
          <td>'.$blninidiplomaitakterdefenisil.'</td>
          <td>'.$blninidiplomaitakterdefenisip.'</td>
          <td>'.$penempatanblninidiplomaitakterdefenisil.'</td>
          <td>'.$penempatanblninidiplomaitakterdefenisip.'</td>
          <td>'.$dihapusblninidiplomaitakterdefenisil.'</td>
          <td>'.$dihapusblninidiplomaitakterdefenisip.'</td>
          <td>=SUM(D123+F123-H123-J123)</td>
          <td>=SUM(E123+G123-I123-K123)</td>                  
       </tr>
   <tr id="mytable" class = "sub" bordercolor="red">
          <td  >Sub Total</td>

         <td  style=border:none;>  </td>
         <td  style= border:none;>  </td>
              <td class = "sub" >=SUM(D99:D121)+SUM(D128+D129)</td>                 
              <td class = "sub" >=SUM(E99:E121)+SUM(E128+E129)</td>
              <td class = "sub" >=SUM(F99:F121)+SUM(F128+F129)</td>
              <td class = "sub" >=SUM(G99:G121)+SUM(G128+G129)</td>
              <td class = "sub" >=SUM(H99:H121)+SUM(H128+H129)</td>
              <td class = "sub" >=SUM(I99:I121)+SUM(I128+I129)</td>
              <td class = "sub" >=SUM(J99:J121)+SUM(J128+J129)</td>
              <td class = "sub" >=SUM(K99:K121)+SUM(K128+K129)</td>
              <td class = "sub" >=SUM(L99:L121)+SUM(L128+L129)</td>
              <td class = "sub" >=SUM(M99:M121)+SUM(M128+M129)</td>
            </tr>


                        <tr>
             <td> 4200 </td>
             <td colspan="2">DIPLOMA II / AKTA II </td>
                
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
                 </tr>

        <tr>
          <td> 4201 </td>
          <td colspan="2"> PENDIDIKAN </td>             
          <td>'.$blnlalupendidikan2l.'</td>
          <td>'.$blnlalupendidikan2p.'</td>
          <td>'.$blninipendidikan2l.'</td>
          <td>'.$blninipendidikan2p.'</td>
          <td>'.$penempatanblninipendidikan2l.'</td>
          <td>'.$penempatanblninipendidikan2p.'</td>
          <td>'.$dihapusblninipendidikan2l.'</td>
          <td>'.$dihapusblninipendidikan2p.'</td>
          <td>=SUM(D132+F132-H132-J132)</td>
          <td>=SUM(E132+G132-I132-K132)</td>                  
       </tr>

        <tr>
          <td> 4202 </td>
          <td colspan="2"> PENDIDIKAN SOSIAL</td>             
          <td>'.$blnlalupendidikansosial2l.'</td>
          <td>'.$blnlalupendidikansosial2p.'</td>
          <td>'.$blninipendidikansosial2l.'</td>
          <td>'.$blninipendidikansosial2p.'</td>
          <td>'.$penempatanblninipendidikansosial2l.'</td>
          <td>'.$penempatanblninipendidikansosial2p.'</td>
          <td>'.$dihapusblninipendidikansosial2l.'</td>
          <td>'.$dihapusblninipendidikansosial2p.'</td>
          <td>=SUM(D133+F133-H133-J133)</td>
          <td>=SUM(E133+G133-I133-K133)</td>                  
       </tr>

       <tr>
          <td> 4203 </td>
          <td colspan="2"> PENDIDIKAN LUAR SEKOLAH</td>             
          <td>'.$blnlalupendidikanluarsekolah2l.'</td>
          <td>'.$blnlalupendidikanluarsekolah2p.'</td>
          <td>'.$blninipendidikanluarsekolah2l.'</td>
          <td>'.$blninipendidikanluarsekolah2p.'</td>
          <td>'.$penempatanblninipendidikanluarsekolah2l.'</td>
          <td>'.$penempatanblninipendidikanluarsekolah2p.'</td>
          <td>'.$dihapusblninipendidikanluarsekolah2l.'</td>
          <td>'.$dihapusblninipendidikanluarsekolah2p.'</td>
          <td>=SUM(D134+F134-H134-J134)</td>
          <td>=SUM(E134+G134-I134-K134)</td>                  
       </tr>

          <tr>
          <td> 4204 </td>
          <td colspan="2"> PSIKOLOGI</td>             
          <td>'.$blnlalupsikologi2l.'</td>
          <td>'.$blnlalupsikologi2p.'</td>
          <td>'.$blninipsikologi2l.'</td>
          <td>'.$blninipsikologi2p.'</td>
          <td>'.$penempatanblninipsikologi2l.'</td>
          <td>'.$penempatanblninipsikologi2p.'</td>
          <td>'.$dihapusblninipsikologi2l.'</td>
          <td>'.$dihapusblninipsikologi2p.'</td>
          <td>=SUM(D135+F135-H135-J135)</td>
          <td>=SUM(E135+G135-I135-K135)</td>                  
       </tr>



          <tr>
          <td> 4205 </td>
          <td colspan="2"> PENDIDIKAN MORAL PANCASILA</td>             
          <td>'.$blnlalupendidikanmoralpancasila2l.'</td>
          <td>'.$blnlalupendidikanmoralpancasila2p.'</td>
          <td>'.$blninipendidikanmoralpancasila2l.'</td>
          <td>'.$blninipendidikanmoralpancasila2p.'</td>
          <td>'.$penempatanblninipendidikanmoralpancasila2l.'</td>
          <td>'.$penempatanblninipendidikanmoralpancasila2p.'</td>
          <td>'.$dihapusblninipendidikanmoralpancasila2l.'</td>
          <td>'.$dihapusblninipendidikanmoralpancasila2p.'</td>
          <td>=SUM(D136+F136-H136-J136)</td>
          <td>=SUM(E136+G136-I136-K136)</td>                  
       </tr>


        <tr>
          <td> 4206 </td>
          <td colspan="2"> ANTROPOLOGI</td>             
          <td>'.$blnlaluantropologi2l.'</td>
          <td>'.$blnlaluantropologi2p.'</td>
          <td>'.$blniniantropologi2l.'</td>
          <td>'.$blniniantropologi2p.'</td>
          <td>'.$penempatanblniniantropologi2l.'</td>
          <td>'.$penempatanblniniantropologi2p.'</td>
          <td>'.$dihapusblniniantropologi2l.'</td>
          <td>'.$dihapusblniniantropologi2p.'</td>
          <td>=SUM(D137+F137-H137-J137)</td>
          <td>=SUM(E137+G137-I137-K137)</td>                  
       </tr>


        <tr>
          <td> 4208 </td>
          <td colspan="2"> HUKUM</td>             
          <td>'.$blnlaluhukum2l.'</td>
          <td>'.$blnlaluhukum2p.'</td>
          <td>'.$blninihukum2l.'</td>
          <td>'.$blninihukum2p.'</td>
          <td>'.$penempatanblninihukum2l.'</td>
          <td>'.$penempatanblninihukum2p.'</td>
          <td>'.$dihapusblninihukum2l.'</td>
          <td>'.$dihapusblninihukum2p.'</td>
          <td>=SUM(D138+F138-H138-J138)</td>
          <td>=SUM(E138+G138-I138-K138)</td>                  
       </tr>

        <tr>
          <td> 4209 </td>
          <td colspan="2"> PENDIDIKAN KESEJAHTERAAN KELUARGA</td>             
          <td>'.$blnlalupendidikankesejahteraankeluarga2l.'</td>
          <td>'.$blnlalupendidikankesejahteraankeluarga2p.'</td>
          <td>'.$blninipendidikankesejahteraankeluarga2l.'</td>
          <td>'.$blninipendidikankesejahteraankeluarga2p.'</td>
          <td>'.$penempatanblninipendidikankesejahteraankeluarga2l.'</td>
          <td>'.$penempatanblninipendidikankesejahteraankeluarga2p.'</td>
          <td>'.$dihapusblninipendidikankesejahteraankeluarga2l.'</td>
          <td>'.$dihapusblninipendidikankesejahteraankeluarga2p.'</td>
          <td>=SUM(D139+F139-H139-J139)</td>
          <td>=SUM(E139+G139-I139-K139)</td>                  
       </tr>


 <tr>
          <td> 4210 </td>
          <td colspan="2"> EKONOMI </td>             
          <td>'.$blnlaluekonomi2l.'</td>
          <td>'.$blnlaluekonomi2p.'</td>
          <td>'.$blniniekonomi2l.'</td>
          <td>'.$blniniekonomi2p.'</td>
          <td>'.$penempatanblniniekonomi2l.'</td>
          <td>'.$penempatanblniniekonomi2p.'</td>
          <td>'.$dihapusblniniekonomi2l.'</td>
          <td>'.$dihapusblniniekonomi2p.'</td>
          <td>=SUM(D140+F140-H140-J140)</td>
          <td>=SUM(E140+G140-I140-K140)</td>                  
       </tr>


 <tr>
          <td> 4211 </td>
          <td colspan="2"> KESENIAN </td>             
          <td>'.$blnlalukesenian2l.'</td>
          <td>'.$blnlalukesenian2p.'</td>
          <td>'.$blninikesenian2l.'</td>
          <td>'.$blninikesenian2p.'</td>
          <td>'.$penempatanblninikesenian2l.'</td>
          <td>'.$penempatanblninikesenian2p.'</td>
          <td>'.$dihapusblninikesenian2l.'</td>
          <td>'.$dihapusblninikesenian2p.'</td>
          <td>=SUM(D141+F141-H141-J141)</td>
          <td>=SUM(E141+G141-I141-K141)</td>                  
       </tr>

        <tr>
          <td> 4212 </td>
          <td colspan="2"> KESEKRETARIATAN </td>             
          <td>'.$blnlalukesekretariatan2l.'</td>
          <td>'.$blnlalukesekretariatan2p.'</td>
          <td>'.$blninikesekretariatan2l.'</td>
          <td>'.$blninikesekretariatan2p.'</td>
          <td>'.$penempatanblninikesekretariatan2l.'</td>
          <td>'.$penempatanblninikesekretariatan2p.'</td>
          <td>'.$dihapusblninikesekretariatan2l.'</td>
          <td>'.$dihapusblninikesekretariatan2p.'</td>
          <td>=SUM(D142+F142-H142-J142)</td>
          <td>=SUM(E142+G142-I142-K142)</td>                  
       </tr>

          <tr>
          <td> 4213 </td>
          <td colspan="2"> ADMINISTRASI </td>             
          <td>'.$blnlaluadministrasi2l.'</td>
          <td>'.$blnlaluadministrasi2p.'</td>
          <td>'.$blniniadministrasi2l.'</td>
          <td>'.$blniniadministrasi2p.'</td>
          <td>'.$penempatanblniniadministrasi2l.'</td>
          <td>'.$penempatanblniniadministrasi2p.'</td>
          <td>'.$dihapusblniniadministrasi2l.'</td>
          <td>'.$dihapusblniniadministrasi2p.'</td>
          <td>=SUM(D143+F143-H143-J143)</td>
          <td>=SUM(E143+G143-I143-K143)</td>                  
       </tr>

            <tr>
          <td> 4214 </td>
          <td colspan="2"> MARKETING </td>             
          <td>'.$blnlalumarketing2l.'</td>
          <td>'.$blnlalumarketing2p.'</td>
          <td>'.$blninimarketing2l.'</td>
          <td>'.$blninimarketing2p.'</td>
          <td>'.$penempatanblninimarketing2l.'</td>
          <td>'.$penempatanblninimarketing2p.'</td>
          <td>'.$dihapusblninimarketing2l.'</td>
          <td>'.$dihapusblninimarketing2p.'</td>
          <td>=SUM(D144+F144-H144-J144)</td>
          <td>=SUM(E144+G144-I144-K144)</td>                  
       </tr>

          <tr>
          <td> 4215 </td>
          <td colspan="2"> AKUTANSI </td>             
          <td>'.$blnlaluakutansi2l.'</td>
          <td>'.$blnlaluakutansi2p.'</td>
          <td>'.$blniniakutansi2l.'</td>
          <td>'.$blniniakutansi2p.'</td>
          <td>'.$penempatanblniniakutansi2l.'</td>
          <td>'.$penempatanblniniakutansi2p.'</td>
          <td>'.$dihapusblniniakutansi2l.'</td>
          <td>'.$dihapusblniniakutansi2p.'</td>
          <td>=SUM(D145+F145-H145-J145)</td>
          <td>=SUM(E145+G145-I145-K145)</td>                  
       </tr>

          <tr>
          <td> 4216 </td>
          <td colspan="2"> OLAH RAGA </td>             
          <td>'.$blnlaluolahraga2l.'</td>
          <td>'.$blnlaluolahraga2p.'</td>
          <td>'.$blniniolahraga2l.'</td>
          <td>'.$blniniolahraga2p.'</td>
          <td>'.$penempatanblniniolahraga2l.'</td>
          <td>'.$penempatanblniniolahraga2p.'</td>
          <td>'.$dihapusblniniolahraga2l.'</td>
          <td>'.$dihapusblniniolahraga2p.'</td>
          <td>=SUM(D146+F146-H146-J146)</td>
          <td>=SUM(E146+G146-I146-K146)</td>                  
       </tr>

          <tr>
          <td> 4217 </td>
          <td colspan="2"> BAHASA INDONESIA </td>             
          <td>'.$blnlalubahasaindonesia2l.'</td>
          <td>'.$blnlalubahasaindonesia2p.'</td>
          <td>'.$blninibahasaindonesia2l.'</td>
          <td>'.$blninibahasaindonesia2p.'</td>
          <td>'.$penempatanblninibahasaindonesia2l.'</td>
          <td>'.$penempatanblninibahasaindonesia2p.'</td>
          <td>'.$dihapusblninibahasaindonesia2l.'</td>
          <td>'.$dihapusblninibahasaindonesia2p.'</td>
          <td>=SUM(D147+F147-H147-J147)</td>
          <td>=SUM(E147+G147-I147-K147)</td>                  
       </tr>

          <tr>
          <td> 4218 </td>
          <td colspan="2"> BAHASA INGGRIS </td>             
          <td>'.$blnlalubahasainggris2l.'</td>
          <td>'.$blnlalubahasainggris2p.'</td>
          <td>'.$blninibahasainggris2l.'</td>
          <td>'.$blninibahasainggris2p.'</td>
          <td>'.$penempatanblninibahasainggris2l.'</td>
          <td>'.$penempatanblninibahasainggris2p.'</td>
          <td>'.$dihapusblninibahasainggris2l.'</td>
          <td>'.$dihapusblninibahasainggris2p.'</td>
          <td>=SUM(D148+F148-H148-J148)</td>
          <td>=SUM(E148+G148-I148-K148)</td>                  
       </tr>

            <tr>
          <td> 4219 </td>
          <td colspan="2"> BAHASA ARAB </td>             
          <td>'.$blnlalubahasaarab2l.'</td>
          <td>'.$blnlalubahasaarab2p.'</td>
          <td>'.$blninibahasaarab2l.'</td>
          <td>'.$blninibahasaarab2p.'</td>
          <td>'.$penempatanblninibahasaarab2l.'</td>
          <td>'.$penempatanblninibahasaarab2p.'</td>
          <td>'.$dihapusblninibahasaarab2l.'</td>
          <td>'.$dihapusblninibahasaarab2p.'</td>
          <td>=SUM(D149+F149-H149-J149)</td>
          <td>=SUM(E149+G149-I149-K149)</td>                  
       </tr>

            <tr>
          <td> 4220 </td>
          <td colspan="2"> ILMU PENGETAHUAN ALAM </td>             
          <td>'.$blnlaluilmupengetahuanalam2l.'</td>
          <td>'.$blnlaluilmupengetahuanalam2p.'</td>
          <td>'.$blniniilmupengetahuanalam2l.'</td>
          <td>'.$blniniilmupengetahuanalam2p.'</td>
          <td>'.$penempatanblniniilmupengetahuanalam2l.'</td>
          <td>'.$penempatanblniniilmupengetahuanalam2p.'</td>
          <td>'.$dihapusblniniilmupengetahuanalam2l.'</td>
          <td>'.$dihapusblniniilmupengetahuanalam2p.'</td>
          <td>=SUM(D150+F150-H150-J150)</td>
          <td>=SUM(E150+G150-I150-K150)</td>                  
       </tr>

               <tr>
          <td> 4221 </td>
          <td colspan="2"> GEOGRAFI </td>             
          <td>'.$blnlalugeografi2l.'</td>
          <td>'.$blnlalugeografi2p.'</td>
          <td>'.$blninigeografi2l.'</td>
          <td>'.$blninigeografi2p.'</td>
          <td>'.$penempatanblninigeografi2l.'</td>
          <td>'.$penempatanblninigeografi2p.'</td>
          <td>'.$dihapusblninigeografi2l.'</td>
          <td>'.$dihapusblninigeografi2p.'</td>
          <td>=SUM(D151+F151-H151-J151)</td>
          <td>=SUM(E151+G151-I151-K151)</td>                  
       </tr>

                 <tr>
          <td> 4222 </td>
          <td colspan="2"> MATEMATIKA </td>             
          <td>'.$blnlalumatematika2l.'</td>
          <td>'.$blnlalumatematika2p.'</td>
          <td>'.$blninimatematika2l.'</td>
          <td>'.$blninimatematika2p.'</td>
          <td>'.$penempatanblninimatematika2l.'</td>
          <td>'.$penempatanblninimatematika2p.'</td>
          <td>'.$dihapusblninimatematika2l.'</td>
          <td>'.$dihapusblninimatematika2p.'</td>
          <td>=SUM(D152+F152-H152-J152)</td>
          <td>=SUM(E152+G152-I152-K152)</td>                  
       </tr>

              <tr>
          <td> 4223 </td>
          <td colspan="2"> BIOLOGI </td>             
          <td>'.$blnlalubiologi2l.'</td>
          <td>'.$blnlalubiologi2p.'</td>
          <td>'.$blninibiologi2l.'</td>
          <td>'.$blninibiologi2p.'</td>
          <td>'.$penempatanblninibiologi2l.'</td>
          <td>'.$penempatanblninibiologi2p.'</td>
          <td>'.$dihapusblninibiologi2l.'</td>
          <td>'.$dihapusblninibiologi2p.'</td>
          <td>=SUM(D153+F153-H153-J153)</td>
          <td>=SUM(E153+G153-I153-K153)</td>                  
       </tr>

            <tr>
          <td> 4224 </td>
          <td colspan="2"> KETERAMPILAN </td>             
          <td>'.$blnlaluketerampilan2l.'</td>
          <td>'.$blnlaluketerampilan2p.'</td>
          <td>'.$blniniketerampilan2l.'</td>
          <td>'.$blniniketerampilan2p.'</td>
          <td>'.$penempatanblniniketerampilan2l.'</td>
          <td>'.$penempatanblniniketerampilan2p.'</td>
          <td>'.$dihapusblniniketerampilan2l.'</td>
          <td>'.$dihapusblniniketerampilan2p.'</td>
          <td>=SUM(D154+F154-H154-J154)</td>
          <td>=SUM(E154+G154-I154-K154)</td>                  
       </tr>

             <tr>
          <td> 4226 </td>
          <td colspan="2"> TEKNIK SIPIL </td>             
          <td>'.$blnlalutekniksipil2l.'</td>
          <td>'.$blnlalutekniksipil2p.'</td>
          <td>'.$blninitekniksipil2l.'</td>
          <td>'.$blninitekniksipil2p.'</td>
          <td>'.$penempatanblninitekniksipil2l.'</td>
          <td>'.$penempatanblninitekniksipil2p.'</td>
          <td>'.$dihapusblninitekniksipil2l.'</td>
          <td>'.$dihapusblninitekniksipil2p.'</td>
          <td>=SUM(D155+F155-H155-J155)</td>
          <td>=SUM(E155+G155-I155-K155)</td>                  
       </tr>

             <tr>
          <td> 4227 </td>
          <td colspan="2"> TEKNIK MESIN </td>             
          <td>'.$blnlaluteknikmesin2l.'</td>
          <td>'.$blnlaluteknikmesin2p.'</td>
          <td>'.$blniniteknikmesin2l.'</td>
          <td>'.$blniniteknikmesin2p.'</td>
          <td>'.$penempatanblniniteknikmesin2l.'</td>
          <td>'.$penempatanblniniteknikmesin2p.'</td>
          <td>'.$dihapusblniniteknikmesin2l.'</td>
          <td>'.$dihapusblniniteknikmesin2p.'</td>
          <td>=SUM(D156+F156-H156-J156)</td>
          <td>=SUM(E156+G156-I156-K156)</td>                  
       </tr>


             <tr>
          <td> 4228 </td>
          <td colspan="2"> TEKNIK LISTRIK </td>             
          <td>'.$blnlalutekniklistrik2l.'</td>
          <td>'.$blnlalutekniklistrik2p.'</td>
          <td>'.$blninitekniklistrik2l.'</td>
          <td>'.$blninitekniklistrik2p.'</td>
          <td>'.$penempatanblninitekniklistrik2l.'</td>
          <td>'.$penempatanblninitekniklistrik2p.'</td>
          <td>'.$dihapusblninitekniklistrik2l.'</td>
          <td>'.$dihapusblninitekniklistrik2p.'</td>
          <td>=SUM(D157+F157-H157-J157)</td>
          <td>=SUM(E157+G157-I157-K157)</td>                  
       </tr>

             <tr>
          <td> 4229 </td>
          <td colspan="2"> KIMIA </td>             
          <td>'.$blnlalukimia2l.'</td>
          <td>'.$blnlalukimia2p.'</td>
          <td>'.$blninikimia2l.'</td>
          <td>'.$blninikimia2p.'</td>
          <td>'.$penempatanblninikimia2l.'</td>
          <td>'.$penempatanblninikimia2p.'</td>
          <td>'.$dihapusblninikimia2l.'</td>
          <td>'.$dihapusblninikimia2p.'</td>
          <td>=SUM(D158+F158-H158-J158)</td>
          <td>=SUM(E158+G158-I158-K158)</td>                  
       </tr>

            <tr>
          <td> 4230 </td>
          <td colspan="2"> DIPLOMA II/AKTA II LAINNYA </td>             
          <td>'.$blnlaludiplomaiiaktaiilainnya2l.'</td>
          <td>'.$blnlaludiplomaiiaktaiilainnya2p.'</td>
          <td>'.$blninidiplomaiiaktaiilainnya2l.'</td>
          <td>'.$blninidiplomaiiaktaiilainnya2p.'</td>
          <td>'.$penempatanblninidiplomaiiaktaiilainnya2l.'</td>
          <td>'.$penempatanblninidiplomaiiaktaiilainnya2p.'</td>
          <td>'.$dihapusblninidiplomaiiaktaiilainnya2l.'</td>
          <td>'.$dihapusblninidiplomaiiaktaiilainnya2p.'</td>
          <td>=SUM(D159+F159-H159-J159)</td>
          <td>=SUM(E159+G159-I159-K159)</td>                  
       </tr>

              <tr>
          <td> 4299 </td>
          <td colspan="2"> DIPLOMA II - TAK TERDEFENISI </td>             
          <td>'.$blnlaludiplomaiitakterdefinisi2l.'</td>
          <td>'.$blnlaludiplomaiitakterdefinisi2p.'</td>
          <td>'.$blninidiplomaiitakterdefinisi2l.'</td>
          <td>'.$blninidiplomaiitakterdefinisi2p.'</td>
          <td>'.$penempatanblninidiplomaiitakterdefinisi2l.'</td>
          <td>'.$penempatanblninidiplomaiitakterdefinisi2p.'</td>
          <td>'.$dihapusblninidiplomaiitakterdefinisi2l.'</td>
          <td>'.$dihapusblninidiplomaiitakterdefinisi2p.'</td>
          <td>=SUM(D160+F160-H160-J160)</td>
          <td>=SUM(E160+G160-I160-K160)</td>                  
       </tr>

         <tr id="mytable" class = "sub" bordercolor="red">
          <td  >Sub Total</td>

         <td  style=border:none;>  </td>
         <td  style= border:none;>  </td>
              <td class = "sub" >=SUM(D132:D160)</td>                 
              <td class = "sub" >=SUM(E132:E160)</td>
              <td class = "sub" >=SUM(F132:F160)</td>
              <td class = "sub" >=SUM(G132:G160)</td>
              <td class = "sub" >=SUM(H132:H160)</td>
              <td class = "sub" >=SUM(I132:I160)</td>
              <td class = "sub" >=SUM(J132:J160)</td>
              <td class = "sub" >=SUM(K132:K160)</td>
              <td class = "sub" >=SUM(L132:L160)</td>
              <td class = "sub" >=SUM(M132:M160)</td>
            </tr>




                        <tr>
             <td> 5000 </td>
             <td colspan="2">DIPLOMA III / AKTA III/AKADEMIS/S.MUDA </td>
              <td >=SUM(D175+D197+D210+D222+D259+D301)</td>
              <td >=SUM(E175+E197+E210+E222+E259+E301)</td>
              <td >=SUM(F175+F197+F210+F222+F259+F301)</td>
              <td >=SUM(G175+G197+G210+G222+G259+G301)</td>
              <td >=SUM(H175+H197+H210+H222+H259+H301)</td>
              <td >=SUM(I175+I197+I210+I222+I259+I301)</td>
              <td >=SUM(J175+J197+J210+J222+J259+J301)</td>
              <td >=SUM(K175+K197+K210+K222+K259+K301)</td>
              <td >=SUM(L175+L197+L210+L222+L259+L301)</td>
              <td >=SUM(M175+M197+M210+M222+M259+M301)</td>
                 </tr>

                           <tr>
             <td> 5100 </td>
             <td colspan="2">DIII - ILMU PASTI ALAM </td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
                 </tr>

        <tr>
          <td> 5101 </td>
          <td colspan="2"> FISIKA </td>             
          <td>'.$blnlalufisika3l.'</td>
          <td>'.$blnlalufisika3p.'</td>
          <td>'.$blninifisika3l.'</td>
          <td>'.$blninifisika3p.'</td>
          <td>'.$penempatanblninifisika3l.'</td>
          <td>'.$penempatanblninifisika3p.'</td>
          <td>'.$dihapusblninifisika3l.'</td>
          <td>'.$dihapusblninifisika3p.'</td>
          <td>=SUM(D164+F164-H164-J164)</td>
          <td>=SUM(E164+G164-I164-K164)</td>                  
       </tr>

          <tr>
          <td> 5102 </td>
          <td colspan="2"> ASTRONOMI </td>             
          <td>'.$blnlaluastronomi3l.'</td>
          <td>'.$blnlaluastronomi3p.'</td>
          <td>'.$blniniastronomi3l.'</td>
          <td>'.$blniniastronomi3p.'</td>
          <td>'.$penempatanblniniastronomi3l.'</td>
          <td>'.$penempatanblniniastronomi3p.'</td>
          <td>'.$dihapusblniniastronomi3l.'</td>
          <td>'.$dihapusblniniastronomi3p.'</td>
          <td>=SUM(D165+F165-H165-J165)</td>
          <td>=SUM(E165+G165-I165-K165)</td>                  
       </tr>

         <tr>
          <td> 5103 </td>
          <td colspan="2"> BIOLOGI </td>             
          <td>'.$blnlalubiologi3l.'</td>
          <td>'.$blnlalubiologi3p.'</td>
          <td>'.$blninibiologi3l.'</td>
          <td>'.$blninibiologi3p.'</td>
          <td>'.$penempatanblninibiologi3l.'</td>
          <td>'.$penempatanblninibiologi3p.'</td>
          <td>'.$dihapusblninibiologi3l.'</td>
          <td>'.$dihapusblninibiologi3p.'</td>
          <td>=SUM(D166+F166-H166-J166)</td>
          <td>=SUM(E166+G166-I166-K166)</td>                  
       </tr>


          <tr>
          <td> 5104 </td>
          <td colspan="2"> GEOLOGI DAN PERTAMBANGAN</td>             
          <td>'.$blnlalugeologidanpertambangan3l.'</td>
          <td>'.$blnlalugeologidanpertambangan3p.'</td>
          <td>'.$blninigeologidanpertambangan3l.'</td>
          <td>'.$blninigeologidanpertambangan3p.'</td>
          <td>'.$penempatanblninigeologidanpertambangan3l.'</td>
          <td>'.$penempatanblninigeologidanpertambangan3p.'</td>
          <td>'.$dihapusblninigeologidanpertambangan3l.'</td>
          <td>'.$dihapusblninigeologidanpertambangan3p.'</td>
          <td>=SUM(D167+F167-H167-J167)</td>
          <td>=SUM(E167+G167-I167-K167)</td>                  
       </tr>

          <tr>
          <td> 5106 </td>
          <td colspan="2"> GEORAFI </td>             
          <td>'.$blnlalugeorafi3l.'</td>
          <td>'.$blnlalugeorafi3p.'</td>
          <td>'.$blninigeorafi3l.'</td>
          <td>'.$blninigeorafi3p.'</td>
          <td>'.$penempatanblninigeorafi3l.'</td>
          <td>'.$penempatanblninigeorafi3p.'</td>
          <td>'.$dihapusblninigeorafi3l.'</td>
          <td>'.$dihapusblninigeorafi3p.'</td>
          <td>=SUM(D168+F168-H168-J168)</td>
          <td>=SUM(E168+G168-I168-K168)</td>                  
       </tr>

         <tr>
          <td> 5107 </td>
          <td colspan="2"> MATEMATIKA </td>             
          <td>'.$blnlalumatematika3l.'</td>
          <td>'.$blnlalumatematika3p.'</td>
          <td>'.$blninimatematika3l.'</td>
          <td>'.$blninimatematika3p.'</td>
          <td>'.$penempatanblninimatematika3l.'</td>
          <td>'.$penempatanblninimatematika3p.'</td>
          <td>'.$dihapusblninimatematika3l.'</td>
          <td>'.$dihapusblninimatematika3p.'</td>
          <td>=SUM(D169+F169-H169-J169)</td>
          <td>=SUM(E169+G169-I169-K169)</td>                  
       </tr>

         <tr>
          <td> 5108 </td>
          <td colspan="2"> ILMU STATISTIK </td>             
          <td>'.$blnlaluilmustatistik3l.'</td>
          <td>'.$blnlaluilmustatistik3p.'</td>
          <td>'.$blniniilmustatistik3l.'</td>
          <td>'.$blniniilmustatistik3p.'</td>
          <td>'.$penempatanblniniilmustatistik3l.'</td>
          <td>'.$penempatanblniniilmustatistik3p.'</td>
          <td>'.$dihapusblniniilmustatistik3l.'</td>
          <td>'.$dihapusblniniilmustatistik3p.'</td>
          <td>=SUM(D170+F170-H170-J170)</td>
          <td>=SUM(E170+G170-I170-K170)</td>                  
       </tr>

         <tr>
          <td> 5109 </td>
          <td colspan="2"> ILMU KOMPUTER </td>             
          <td>'.$blnlaluilmukomputer3l.'</td>
          <td>'.$blnlaluilmukomputer3p.'</td>
          <td>'.$blniniilmukomputer3l.'</td>
          <td>'.$blniniilmukomputer3p.'</td>
          <td>'.$penempatanblniniilmukomputer3l.'</td>
          <td>'.$penempatanblniniilmukomputer3p.'</td>
          <td>'.$dihapusblniniilmukomputer3l.'</td>
          <td>'.$dihapusblniniilmukomputer3p.'</td>
          <td>=SUM(D171+F171-H171-J171)</td>
          <td>=SUM(E171+G171-I171-K171)</td>                  
       </tr>

        <tr>
          <td> 5110 </td>
          <td colspan="2"> KIMIA </td>             
          <td>'.$blnlalukimia3l.'</td>
          <td>'.$blnlalukimia3p.'</td>
          <td>'.$blninikimia3l.'</td>
          <td>'.$blninikimia3p.'</td>
          <td>'.$penempatanblninikimia3l.'</td>
          <td>'.$penempatanblninikimia3p.'</td>
          <td>'.$dihapusblninikimia3l.'</td>
          <td>'.$dihapusblninikimia3p.'</td>
          <td>=SUM(D172+F172-H172-J172)</td>
          <td>=SUM(E172+G172-I172-K172)</td>                  
       </tr>

        <tr>
          <td> 5111 </td>
          <td colspan="2"> ILMU PASTI / ALAM LAINNYA </td>             
          <td>'.$blnlaluilmupastialamlainnya3l.'</td>
          <td>'.$blnlaluilmupastialamlainnya3p.'</td>
          <td>'.$blniniilmupastialamlainnya3l.'</td>
          <td>'.$blniniilmupastialamlainnya3p.'</td>
          <td>'.$penempatanblniniilmupastialamlainnya3l.'</td>
          <td>'.$penempatanblniniilmupastialamlainnya3p.'</td>
          <td>'.$dihapusblniniilmupastialamlainnya3l.'</td>
          <td>'.$dihapusblniniilmupastialamlainnya3p.'</td>
          <td>=SUM(D173+F173-H173-J173)</td>
          <td>=SUM(E173+G173-I173-K173)</td>                  
       </tr>

          <tr>
          <td> 5199 </td>
          <td colspan="2"> ILMU PASTI - TAK TERDEFINISI </td>             
          <td>'.$blnlaluilmupastialamlainnya3l.'</td>
          <td>'.$blnlaluilmupastialamlainnya3p.'</td>
          <td>'.$blniniilmupastialamlainnya3l.'</td>
          <td>'.$blniniilmupastialamlainnya3p.'</td>
          <td>'.$penempatanblniniilmupastialamlainnya3l.'</td>
          <td>'.$penempatanblniniilmupastialamlainnya3p.'</td>
          <td>'.$dihapusblniniilmupastialamlainnya3l.'</td>
          <td>'.$dihapusblniniilmupastialamlainnya3p.'</td>
          <td>=SUM(D174+F174-H174-J174)</td>
          <td>=SUM(E174+G174-I174-K174)</td>                  
       </tr>


           <tr id="mytable" class = "sub" bordercolor="red">
          <td  >Sub Total</td>

         <td  style=border:none;>  </td>
         <td  style= border:none;>  </td>
              <td class = "sub" >=SUM(D164:D174) </td>                 
              <td class = "sub" >=SUM(E164:E174) </td>
              <td class = "sub" >=SUM(F164:F174) </td>
              <td class = "sub" >=SUM(G164:G174) </td>
              <td class = "sub" >=SUM(H164:H174)</td>
              <td class = "sub" >=SUM(I164:I174) </td>
              <td class = "sub" >=SUM(J164:J174) </td>
              <td class = "sub" >=SUM(K164:K174) </td>
              <td class = "sub" >=SUM(L164:L174) </td>
              <td class = "sub" >=SUM(M164:M174) </td>
            </tr>

                             <tr>
             <td> 5200 </td>
             <td colspan="2">DIII - TEKNOLOGI </td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
                 </tr>

      <tr>
          <td> 5201 </td>
          <td colspan="2"> TEKNIK GEODESI/GEOLOGI </td>             
          <td>'.$blnlaluteknikgeodesigeologil.'</td>
          <td>'.$blnlaluteknikgeodesigeologip.'</td>
          <td>'.$blniniteknikgeodesigeologil.'</td>
          <td>'.$blniniteknikgeodesigeologip.'</td>
          <td>'.$penempatanblniniteknikgeodesigeologil.'</td>
          <td>'.$penempatanblniniteknikgeodesigeologip.'</td>
          <td>'.$dihapusblniniteknikgeodesigeologil.'</td>
          <td>'.$dihapusblniniteknikgeodesigeologip.'</td>
          <td>=SUM(D177+F177-H177-J177)</td>
          <td>=SUM(E177+G177-I177-K177)</td>                  
       </tr>

          <tr>
          <td> 5202 </td>
          <td colspan="2"> TEKNIK KIMIA </td>             
          <td>'.$blnlaluteknikgeodesigeologil.'</td>
          <td>'.$blnlaluteknikgeodesigeologip.'</td>
          <td>'.$blniniteknikgeodesigeologil.'</td>
          <td>'.$blniniteknikgeodesigeologip.'</td>
          <td>'.$penempatanblniniteknikgeodesigeologil.'</td>
          <td>'.$penempatanblniniteknikgeodesigeologip.'</td>
          <td>'.$dihapusblniniteknikgeodesigeologil.'</td>
          <td>'.$dihapusblniniteknikgeodesigeologip.'</td>
          <td>=SUM(D178+F178-H178-J178)</td>
          <td>=SUM(E178+G178-I178-K178)</td>                  
       </tr>


          <tr>
          <td> 5203 </td>
          <td colspan="2"> TEKNIK SIPIL </td>             
          <td>'.$blnlalutekniksipill.'</td>
          <td>'.$blnlalutekniksipilp.'</td>
          <td>'.$blninitekniksipill.'</td>
          <td>'.$blninitekniksipilp.'</td>
          <td>'.$penempatanblninitekniksipill.'</td>
          <td>'.$penempatanblninitekniksipilp.'</td>
          <td>'.$dihapusblninitekniksipill.'</td>
          <td>'.$dihapusblninitekniksipilp.'</td>
          <td>=SUM(D179+F179-H179-J179)</td>
          <td>=SUM(E179+G179-I179-K179)</td>                  
       </tr>


          <tr>
          <td> 5204 </td>
          <td colspan="2"> ARSITEKTUR </td>             
          <td>'.$blnlaluarsitekturl.'</td>
          <td>'.$blnlaluarsitekturp.'</td>
          <td>'.$blniniarsitekturl.'</td>
          <td>'.$blniniarsitekturp.'</td>
          <td>'.$penempatanblniniarsitekturl.'</td>
          <td>'.$penempatanblniniarsitekturp.'</td>
          <td>'.$dihapusblniniarsitekturl.'</td>
          <td>'.$dihapusblniniarsitekturp.'</td>
          <td>=SUM(D180+F180-H180-J180)</td>
          <td>=SUM(E180+G180-I180-K180)</td>                  
       </tr>


          <tr>
          <td> 5205 </td>
          <td colspan="2"> TEKNIK LISTRIK </td>             
          <td>'.$blnlalutekniklistrikl.'</td>
          <td>'.$blnlalutekniklistrikp.'</td>
          <td>'.$blninitekniklistrikl.'</td>
          <td>'.$blninitekniklistrikp.'</td>
          <td>'.$penempatanblninitekniklistrikl.'</td>
          <td>'.$penempatanblninitekniklistrikp.'</td>
          <td>'.$dihapusblninitekniklistrikl.'</td>
          <td>'.$dihapusblninitekniklistrikp.'</td>
          <td>=SUM(D181+F181-H181-J181)</td>
          <td>=SUM(E181+G181-I181-K181)</td>                  
       </tr>


          <tr>
          <td> 5206 </td>
          <td colspan="2"> TEKNIK MESIN </td>             
          <td>'.$blnlaluteknikmesinl.'</td>
          <td>'.$blnlaluteknikmesinp.'</td>
          <td>'.$blniniteknikmesinl.'</td>
          <td>'.$blniniteknikmesinp.'</td>
          <td>'.$penempatanblniniteknikmesinl.'</td>
          <td>'.$penempatanblniniteknikmesinp.'</td>
          <td>'.$dihapusblniniteknikmesinl.'</td>
          <td>'.$dihapusblniniteknikmesinp.'</td>
          <td>=SUM(D182+F182-H182-J182)</td>
          <td>=SUM(E182+G182-I182-K182)</td>                  
       </tr>

           <tr>
          <td> 5207 </td>
          <td colspan="2"> TEKNIK INDUSTRI </td>             
          <td>'.$blnlaluteknikindustril.'</td>
          <td>'.$blnlaluteknikindustrip.'</td>
          <td>'.$blniniteknikindustril.'</td>
          <td>'.$blniniteknikindustrip.'</td>
          <td>'.$penempatanblniniteknikindustril.'</td>
          <td>'.$penempatanblniniteknikindustrip.'</td>
          <td>'.$dihapusblniniteknikindustril.'</td>
          <td>'.$dihapusblniniteknikindustrip.'</td>
          <td>=SUM(D183+F183-H183-J183)</td>
          <td>=SUM(E183+G183-I183-K183)</td>                  
       </tr>

          <tr>
          <td> 5208 </td>
          <td colspan="2"> TEKNIK LOGAM </td>             
          <td>'.$blnlalutekniklogaml.'</td>
          <td>'.$blnlalutekniklogamp.'</td>
          <td>'.$blninitekniklogaml.'</td>
          <td>'.$blninitekniklogamp.'</td>
          <td>'.$penempatanblninitekniklogaml.'</td>
          <td>'.$penempatanblninitekniklogamp.'</td>
          <td>'.$dihapusblninitekniklogaml.'</td>
          <td>'.$dihapusblninitekniklogamp.'</td>
          <td>=SUM(D184+F184-H184-J184)</td>
          <td>=SUM(E184+G184-I184-K184)</td>                  
       </tr>

 

      <table border="1" width="200px">



      <tr style="background: #aaa">
        <td  width="150" colspan="3"  rowspan ="3" ><div style="text-align: center;vertical-align: middle; white-space: nowrap;width=30px column-width: 90px;">JENIS PENDIDIKAN</div></td>
        <td width="150" colspan="2" rowspan="2" ><div style="text-align: center;vertical-align: middle;">SISA BULAN YANG LALU</div></td>
        <td width="150" colspan="2" rowspan="2" ><div style="text-align: center;vertical-align: middle;">YANG TERDAFTAR BULAIN INI</div></td>
        <td width="150" colspan="2" rowspan="2"><div style="text-align: center;vertical-align: middle;">PENEMPATAN BULAN INI</div></td>        
        <td width="150" colspan="2" rowspan="2" ><div style="text-align: center;vertical-align: middle;">DIHAPUSKAN BULAN INI</div></td>
        <td width="150" colspan="2" rowspan="2" ><div style="text-align: center;vertical-align: middle;">SISA AKHIR BULAN INI</div></td>
 
   </tr>
   <tr>
   </tr>
    <tr style="background: #aaa">
            <td><div style="text-align: center;vertical-align: middle;"> L</div> </td>
            <td><div style="text-align: center;vertical-align: middle;"> P</div> </td>       
             <td><div style="text-align: center;vertical-align: middle;"> L</div> </td>
            <td><div style="text-align: center;vertical-align: middle;"> P</div> </td>
            <td><div style="text-align: center;vertical-align: middle;"> L</div> </td>
            <td><div style="text-align: center;vertical-align: middle;"> P</div> </td>
            <td><div style="text-align: center;vertical-align: middle;"> L</div> </td>
            <td><div style="text-align: center;vertical-align: middle;"> P</div> </td>
            <td><div style="text-align: center;vertical-align: middle;"> L</div> </td>
            <td><div style="text-align: center;vertical-align: middle;"> P</div> </td>   
            
     </tr>

      <tr style="background: #aaa">
            <td width="150" colspan="3" ><div style="text-align: center;vertical-align: middle;"> &#39;&#40;1&#41;</div></td>
            <td> <div style="text-align: center;vertical-align: middle;">&#39;&#40;2&#41;</div></td>
            <td> <div style="text-align: center;vertical-align: middle;">&#39;&#40;3&#41;</div></td>
            <td> <div style="text-align: center;vertical-align: middle;">&#39;&#40;4&#41;</div></td>
            <td><div style="text-align: center;vertical-align: middle;"> &#39;&#40;5&#41;</div></td>
            <td><div style="text-align: center;vertical-align: middle;"> &#39;&#40;6&#41;</div></td>
            <td> <div style="text-align: center;vertical-align: middle;">&#39;&#40;7&#41;</div></td>
            <td> <div style="text-align: center;vertical-align: middle;">&#39;&#40;8&#41;</div></td>
            <td><div style="text-align: center;vertical-align: middle;"> &#39;&#40;9&#41;</div></td>
            <td><div style="text-align: center;vertical-align: middle;"> &#39;&#40;11&#41;</div></td>
            <td> <div style="text-align: center;vertical-align: middle;">&#39;&#40;12&#41;</div></td>
                         
     </tr>
   


    
    
     

    <tbody>';    


$no = 1;
        

    $html .= '
         <tr>
          <td> 5209 </td>
          <td colspan="2"> TEKNIK PERTAMBANGAN DAN MINYAK </td>             
          <td>'.$blnlaluteknikpertambangandanminyak3l.'</td>
          <td>'.$blnlaluteknikpertambangandanminyak3p.'</td>
          <td>'.$blniniteknikpertambangandanminyak3l.'</td>
          <td>'.$blniniteknikpertambangandanminyak3p.'</td>
          <td>'.$penempatanblniniteknikpertambangandanminyak3l.'</td>
          <td>'.$penempatanblniniteknikpertambangandanminyak3p.'</td>
          <td>'.$dihapusblniniteknikpertambangandanminyak3l.'</td>
          <td>'.$dihapusblniniteknikpertambangandanminyak3p.'</td>
          <td>=SUM(D185+F185-H185-J185)</td>
          <td>=SUM(E185+G185-I185-K185)</td>                  
       </tr>

             <tr>
          <td> 5210 </td>
          <td colspan="2"> FISIKA TEKNIK </td>             
          <td>'.$blnlalufisikateknik3l.'</td>
          <td>'.$blnlalufisikateknik3p.'</td>
          <td>'.$blninifisikateknik3l.'</td>
          <td>'.$blninifisikateknik3p.'</td>
          <td>'.$penempatanblninifisikateknik3l.'</td>
          <td>'.$penempatanblninifisikateknik3p.'</td>
          <td>'.$dihapusblninifisikateknik3l.'</td>
          <td>'.$dihapusblninifisikateknik3p.'</td>
          <td>=SUM(D186+F186-H186-J186)</td>
          <td>=SUM(E186+G186-I186-K186)</td>                  
       </tr>


             <tr>
          <td> 5211 </td>
          <td colspan="2"> TEKNIK NUKLIR</td>             
          <td>'.$blnlalutekniknuklir3l.'</td>
          <td>'.$blnlalutekniknuklir3p.'</td>
          <td>'.$blninitekniknuklir3l.'</td>
          <td>'.$blninitekniknuklir3p.'</td>
          <td>'.$penempatanblninitekniknuklir3l.'</td>
          <td>'.$penempatanblninitekniknuklir3p.'</td>
          <td>'.$dihapusblninitekniknuklir3l.'</td>
          <td>'.$dihapusblninitekniknuklir3p.'</td>
          <td>=SUM(D187+F187-H187-J187)</td>
          <td>=SUM(E187+G187-I187-K187)</td>                  
       </tr>

           <tr>
          <td> 5214 </td>
          <td colspan="2"> TEKNOLOGI TEKSTIL</td>             
          <td>'.$blnlaluteknologitekstil3l.'</td>
          <td>'.$blnlaluteknologitekstil3p.'</td>
          <td>'.$blniniteknologitekstil3l.'</td>
          <td>'.$blniniteknologitekstil3p.'</td>
          <td>'.$penempatanblniniteknologitekstil3l.'</td>
          <td>'.$penempatanblniniteknologitekstil3p.'</td>
          <td>'.$dihapusblniniteknologitekstil3l.'</td>
          <td>'.$dihapusblniniteknologitekstil3p.'</td>
          <td>=SUM(D188+F188-H188-J188)</td>
          <td>=SUM(E188+G188-I188-K188)</td>                  
       </tr>

           <tr>
          <td> 5215 </td>
          <td colspan="2"> TEKNOLOGI GRAFIKA</td>             
          <td>'.$blnlaluteknologigrafika3l.'</td>
          <td>'.$blnlaluteknologigrafika3p.'</td>
          <td>'.$blniniteknologigrafika3l.'</td>
          <td>'.$blniniteknologigrafika3p.'</td>
          <td>'.$penempatanblniniteknologigrafika3l.'</td>
          <td>'.$penempatanblniniteknologigrafika3p.'</td>
          <td>'.$dihapusblniniteknologigrafika3l.'</td>
          <td>'.$dihapusblniniteknologigrafika3p.'</td>
          <td>=SUM(D189+F189-H189-J189)</td>
          <td>=SUM(E189+G189-I189-K189)</td>                  
       </tr>


           <tr>
          <td> 5216 </td>
          <td colspan="2"> TEKNOLOGI GAS DAN MINYAK BUMI</td>             
          <td>'.$blnlaluteknologigasdanminyakbumi3l.'</td>
          <td>'.$blnlaluteknologigasdanminyakbumi3p.'</td>
          <td>'.$blniniteknologigasdanminyakbumi3l.'</td>
          <td>'.$blniniteknologigasdanminyakbumi3p.'</td>
          <td>'.$penempatanblniniteknologigasdanminyakbumi3l.'</td>
          <td>'.$penempatanblniniteknologigasdanminyakbumi3p.'</td>
          <td>'.$dihapusblniniteknologigasdanminyakbumi3l.'</td>
          <td>'.$dihapusblniniteknologigasdanminyakbumi3p.'</td>
          <td>=SUM(D190+F190-H190-J190)</td>
          <td>=SUM(E190+G190-I190-K190)</td>                  
       </tr>

           <tr>
          <td> 5217 </td>
          <td colspan="2"> TEKNOLOGI LAINNYA</td>             
          <td>'.$blnlaluteknologilainnya3l.'</td>
          <td>'.$blnlaluteknologilainnya3p.'</td>
          <td>'.$blniniteknologilainnya3l.'</td>
          <td>'.$blniniteknologilainnya3p.'</td>
          <td>'.$penempatanblniniteknologilainnya3l.'</td>
          <td>'.$penempatanblniniteknologilainnya3p.'</td>
          <td>'.$dihapusblniniteknologilainnya3l.'</td>
          <td>'.$dihapusblniniteknologilainnya3p.'</td>
          <td>=SUM(D191+F191-H191-J191)</td>
          <td>=SUM(E191+G191-I191-K191)</td>                  
       </tr>

          <tr>
          <td> 5299 </td>
          <td colspan="2"> TEKNOLOGI - TAK TERDEFINISI</td>             
          <td>'.$blnlaluteknologitakterdefinisi3l.'</td>
          <td>'.$blnlaluteknologitakterdefinisi3p.'</td>
          <td>'.$blniniteknologitakterdefinisi3l.'</td>
          <td>'.$blniniteknologitakterdefinisi3p.'</td>
          <td>'.$penempatanblniniteknologitakterdefinisi3l.'</td>
          <td>'.$penempatanblniniteknologitakterdefinisi3p.'</td>
          <td>'.$dihapusblniniteknologitakterdefinisi3l.'</td>
          <td>'.$dihapusblniniteknologitakterdefinisi3p.'</td>
          <td>=SUM(D192+F192-H192-J192)</td>
          <td>=SUM(E192+G192-I192-K192)</td>                  
       </tr>


           <tr id="mytable" class = "sub" bordercolor="red">
          <td  >Sub Total</td>

         <td  style=border:none;>  </td>
         <td  style= border:none;>  </td>
              <td class = "sub" >=SUM(D177:D184)+SUM(D189:D196) </td>                 
              <td class = "sub" >=SUM(E177:E184)+SUM(E189:E196)</td>
              <td class = "sub" >=SUM(F177:F184)+SUM(F189:F196) </td>
              <td class = "sub" >=SUM(G177:G184)+SUM(G189:G196) </td>
              <td class = "sub" >=SUM(H177:H184)+SUM(H189:H196)</td>
              <td class = "sub" >=SUM(I177:I184)+SUM(I189:I196) </td>
              <td class = "sub" >=SUM(J177:J184)+SUM(J189:J196) </td>
              <td class = "sub" >=SUM(K177:K184)+SUM(K189:K196) </td>
              <td class = "sub" >=SUM(L177:L184)+SUM(L189:L196) </td>
              <td class = "sub" >=SUM(M177:M184)+SUM(M189:M196) </td>
            </tr>

          <tr>
          <td> 5300 </td>
          <td colspan="2"> DIII - PERTANIAN </td>             
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>                  
          </tr>

                   <tr>
          <td> 5301 </td>
          <td colspan="2"> PERTANIAN UMUM </td>             
          <td>'.$blnlalupertanianumum3l.'</td>
          <td>'.$blnlalupertanianumum3p.'</td>
          <td>'.$blninipertanianumum3l.'</td>
          <td>'.$blninipertanianumum3p.'</td>
          <td>'.$penempatanblninipertanianumum3l.'</td>
          <td>'.$penempatanblninipertanianumum3p.'</td>
          <td>'.$dihapusblninipertanianumum3l.'</td>
          <td>'.$dihapusblninipertanianumum3p.'</td>
          <td>=SUM(D199+F199-H199-J199)</td>
          <td>=SUM(E199+G199-I199-K199)</td>                  
       </tr>

                <tr>
          <td> 5302 </td>
          <td colspan="2"> HORTIKULTURA </td>             
          <td>'.$blnlalupertanianumum3l.'</td>
          <td>'.$blnlalupertanianumum3p.'</td>
          <td>'.$blninipertanianumum3l.'</td>
          <td>'.$blninipertanianumum3p.'</td>
          <td>'.$penempatanblninipertanianumum3l.'</td>
          <td>'.$penempatanblninipertanianumum3p.'</td>
          <td>'.$dihapusblninipertanianumum3l.'</td>
          <td>'.$dihapusblninipertanianumum3p.'</td>
          <td>=SUM(D200+F200-H200-J200)</td>
          <td>=SUM(E200+G200-I200-K200)</td>                  
       </tr>


                  <tr>
          <td> 5303 </td>
          <td colspan="2"> HASIL PERTANIAN </td>             
          <td>'.$blnlaluhasilpertanian3l.'</td>
          <td>'.$blnlaluhasilpertanian3p.'</td>
          <td>'.$blninihasilpertanian3l.'</td>
          <td>'.$blninihasilpertanian3p.'</td>
          <td>'.$penempatanblninihasilpertanian3l.'</td>
          <td>'.$penempatanblninihasilpertanian3p.'</td>
          <td>'.$dihapusblninihasilpertanian3l.'</td>
          <td>'.$dihapusblninihasilpertanian3p.'</td>
          <td>=SUM(D201+F201-H201-J201)</td>
          <td>=SUM(E201+G201-I201-K201)</td>                  
       </tr>

             <tr>
          <td> 5304 </td>
          <td colspan="2"> EKONOMI PERTANIAN </td>             
          <td>'.$blnlaluekonomipertanian3l.'</td>
          <td>'.$blnlaluekonomipertanian3p.'</td>
          <td>'.$blniniekonomipertanian3l.'</td>
          <td>'.$blniniekonomipertanian3p.'</td>
          <td>'.$penempatanblniniekonomipertanian3l.'</td>
          <td>'.$penempatanblniniekonomipertanian3p.'</td>
          <td>'.$dihapusblniniekonomipertanian3l.'</td>
          <td>'.$dihapusblniniekonomipertanian3p.'</td>
          <td>=SUM(D202+F202-H202-J202)</td>
          <td>=SUM(E202+G202-I202-K202)</td>                  
       </tr>



             <tr>
          <td> 5305 </td>
          <td colspan="2"> TEKNOLOGI DAN ILMU MAKANAN </td>             
          <td>'.$blnlaluteknologidanilmumakanan3l.'</td>
          <td>'.$blnlaluteknologidanilmumakanan3p.'</td>
          <td>'.$blniniteknologidanilmumakanan3l.'</td>
          <td>'.$blniniteknologidanilmumakanan3p.'</td>
          <td>'.$penempatanblniniteknologidanilmumakanan3l.'</td>
          <td>'.$penempatanblniniteknologidanilmumakanan3p.'</td>
          <td>'.$dihapusblniniteknologidanilmumakanan3l.'</td>
          <td>'.$dihapusblniniteknologidanilmumakanan3p.'</td>
          <td>=SUM(D203+F203-H203-J203)</td>
          <td>=SUM(E203+G203-I203-K203)</td>                  
       </tr>

       <tr>
          <td> 5307 </td>
          <td colspan="2"> KEDOKTERAN HEWAN </td>             
          <td>'.$blnlalukedokteranhewan3l.'</td>
          <td>'.$blnlalukedokteranhewan3p.'</td>
          <td>'.$blninikedokteranhewan3l.'</td>
          <td>'.$blninikedokteranhewan3p.'</td>
          <td>'.$penempatanblninikedokteranhewan3l.'</td>
          <td>'.$penempatanblninikedokteranhewan3p.'</td>
          <td>'.$dihapusblninikedokteranhewan3l.'</td>
          <td>'.$dihapusblninikedokteranhewan3p.'</td>
          <td>=SUM(D204+F204-H204-J204)</td>
          <td>=SUM(E204+G204-I204-K204)</td>                  
       </tr>


             <tr>
          <td> 5308 </td>
          <td colspan="2"> PETERNAKAN </td>             
          <td>'.$blnlalupeternakan3l.'</td>
          <td>'.$blnlalupeternakan3p.'</td>
          <td>'.$blninipeternakan3l.'</td>
          <td>'.$blninipeternakan3p.'</td>
          <td>'.$penempatanblninipeternakan3l.'</td>
          <td>'.$penempatanblninipeternakan3p.'</td>
          <td>'.$dihapusblninipeternakan3l.'</td>
          <td>'.$dihapusblninipeternakan3p.'</td>
          <td>=SUM(D205+F205-H205-J205)</td>
          <td>=SUM(E205+G205-I205-K205)</td>                  
       </tr>

          <tr>
          <td> 5309 </td>
          <td colspan="2"> PERIKANAN </td>             
          <td>'.$blnlaluperikanan3l.'</td>
          <td>'.$blnlaluperikanan3p.'</td>
          <td>'.$blniniperikanan3l.'</td>
          <td>'.$blniniperikanan3p.'</td>
          <td>'.$penempatanblniniperikanan3l.'</td>
          <td>'.$penempatanblniniperikanan3p.'</td>
          <td>'.$dihapusblniniperikanan3l.'</td>
          <td>'.$dihapusblniniperikanan3p.'</td>
          <td>=SUM(D206+F206-H206-J206)</td>
          <td>=SUM(E206+G206-I206-K206)</td>                  
       </tr>


         <tr>
          <td> 5310 </td>
          <td colspan="2"> KEHUTANAN </td>             
          <td>'.$blnlalukehutanan3l.'</td>
          <td>'.$blnlalukehutanan3p.'</td>
          <td>'.$blninikehutanan3l.'</td>
          <td>'.$blninikehutanan3p.'</td>
          <td>'.$penempatanblninikehutanan3l.'</td>
          <td>'.$penempatanblninikehutanan3p.'</td>
          <td>'.$dihapusblninikehutanan3l.'</td>
          <td>'.$dihapusblninikehutanan3p.'</td>
          <td>=SUM(D207+F207-H207-J207)</td>
          <td>=SUM(E207+G207-I207-K207)</td>                  
       </tr>

          <tr>
          <td> 5311 </td>
          <td colspan="2"> PERTANIAN LAINNYA </td>             
          <td>'.$blnlalupertanianlainnya3l.'</td>
          <td>'.$blnlalupertanianlainnya3p.'</td>
          <td>'.$blninipertanianlainnya3l.'</td>
          <td>'.$blninipertanianlainnya3p.'</td>
          <td>'.$penempatanblninipertanianlainnya3l.'</td>
          <td>'.$penempatanblninipertanianlainnya3p.'</td>
          <td>'.$dihapusblninipertanianlainnya3l.'</td>
          <td>'.$dihapusblninipertanianlainnya3p.'</td>
          <td>=SUM(D208+F208-H208-J208)</td>
          <td>=SUM(E208+G208-I208-K208)</td>                  
       </tr>

           <tr>
          <td> 5399 </td>
          <td colspan="2"> PERTANIAN - TAK TERDEFINISI </td>             
          <td>'.$blnlalupertaniantakterdefinisi3l.'</td>
          <td>'.$blnlalupertaniantakterdefinisi3p.'</td>
          <td>'.$blninipertaniantakterdefinisi3l.'</td>
          <td>'.$blninipertaniantakterdefinisi3p.'</td>
          <td>'.$penempatanblninipertaniantakterdefinisi3l.'</td>
          <td>'.$penempatanblninipertaniantakterdefinisi3p.'</td>
          <td>'.$dihapusblninipertaniantakterdefinisi3l.'</td>
          <td>'.$dihapusblninipertaniantakterdefinisi3p.'</td>
          <td>=SUM(D209+F209-H209-J209)</td>
          <td>=SUM(E209+G209-I209-K209)</td>                  
       </tr>


          <tr id="mytable" class = "sub" bordercolor="red">
          <td  >Sub Total</td>

         <td  style=border:none;>  </td>
         <td  style= border:none;>  </td>
              <td class = "sub" > =SUM(D199:D209) </td>                 
              <td class = "sub" > =SUM(E199:E209)</td>
              <td class = "sub" > =SUM(F199:F209) </td>
              <td class = "sub" > =SUM(G199:G209) </td>
              <td class = "sub" > =SUM(H199:H209)</td>
              <td class = "sub" > =SUM(I199:I209) </td>
              <td class = "sub" > =SUM(J199:J209) </td>
              <td class = "sub" > =SUM(K199:K209) </td>
              <td class = "sub" > =SUM(L199:L209) </td>
              <td class = "sub" > =SUM(M199:M209) </td>
            </tr>


                              <tr>
             <td> 5400 </td>
             <td colspan="2">DIII - KESEHATAN </td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
                 </tr>

                     <tr>
          <td> 5401 </td>
          <td colspan="2"> KEDOKTERAN UMUM </td>             
          <td>'.$blnlalukedokteranumum3l.'</td>
          <td>'.$blnlalukedokteranumum3p.'</td>
          <td>'.$blninikedokteranumum3l.'</td>
          <td>'.$blninikedokteranumum3p.'</td>
          <td>'.$penempatanblninikedokteranumum3l.'</td>
          <td>'.$penempatanblninikedokteranumum3p.'</td>
          <td>'.$dihapusblninikedokteranumum3l.'</td>
          <td>'.$dihapusblninikedokteranumum3p.'</td>
          <td>=SUM(D212+F212-H212-J212)</td>
          <td>=SUM(E212+G212-I212-K212)</td>                  
       </tr>

        <tr>
          <td> 5402 </td>
          <td colspan="2"> KEDOKTERAN GIGI </td>             
          <td>'.$blnlalukedokterangigi3l.'</td>
          <td>'.$blnlalukedokterangigi3p.'</td>
          <td>'.$blninikedokterangigi3l.'</td>
          <td>'.$blninikedokterangigi3p.'</td>
          <td>'.$penempatanblninikedokterangigi3l.'</td>
          <td>'.$penempatanblninikedokterangigi3p.'</td>
          <td>'.$dihapusblninikedokterangigi3l.'</td>
          <td>'.$dihapusblninikedokterangigi3p.'</td>
          <td>=SUM(D213+F213-H213-J213)</td>
          <td>=SUM(E213+G213-I213-K213)</td>                  
       </tr>

         <tr>
          <td> 5403 </td>
          <td colspan="2"> FARMASI </td>             
          <td>'.$blnlalufarmasi3l.'</td>
          <td>'.$blnlalufarmasi3p.'</td>
          <td>'.$blninifarmasi3l.'</td>
          <td>'.$blninifarmasi3p.'</td>
          <td>'.$penempatanblninifarmasi3l.'</td>
          <td>'.$penempatanblninifarmasi3p.'</td>
          <td>'.$dihapusblninifarmasi3l.'</td>
          <td>'.$dihapusblninifarmasi3p.'</td>
          <td>=SUM(D214+F214-H214-J214)</td>
          <td>=SUM(E214+G214-I214-K214)</td>                  
       </tr>
            


         <tr>
          <td> 5404 </td>
          <td colspan="2"> PENILIK KESEHATAN/HYGINE/GIZI </td>             
          <td>'.$blnlalupenilikkesehatanhyginegizi3l.'</td>
          <td>'.$blnlalupenilikkesehatanhyginegizi3p.'</td>
          <td>'.$blninipenilikkesehatanhyginegizi3l.'</td>
          <td>'.$blninipenilikkesehatanhyginegizi3p.'</td>
          <td>'.$penempatanblninipenilikkesehatanhyginegizi3l.'</td>
          <td>'.$penempatanblninipenilikkesehatanhyginegizi3p.'</td>
          <td>'.$dihapusblninipenilikkesehatanhyginegizi3l.'</td>
          <td>'.$dihapusblninipenilikkesehatanhyginegizi3p.'</td>
          <td>=SUM(D215+F215-H215-J215)</td>
          <td>=SUM(E215+G215-I215-K215)</td>                  
       </tr>

          <tr>
          <td> 5405 </td>
          <td colspan="2"> ANASTESI </td>             
          <td>'.$blnlaluanastesi3l.'</td>
          <td>'.$blnlaluanastesi3p.'</td>
          <td>'.$blninianastesi3l.'</td>
          <td>'.$blninianastesi3p.'</td>
          <td>'.$penempatanblninianastesi3l.'</td>
          <td>'.$penempatanblninianastesi3p.'</td>
          <td>'.$dihapusblninianastesi3l.'</td>
          <td>'.$dihapusblninianastesi3p.'</td>
          <td>=SUM(D216+F216-H216-J216)</td>
          <td>=SUM(E216+G216-I216-K216)</td>                  
       </tr>

            <tr>
          <td> 5406 </td>
          <td colspan="2"> FISIOTERAPI </td>             
          <td>'.$blnlalufisioterapi3l.'</td>
          <td>'.$blnlalufisioterapi3p.'</td>
          <td>'.$blninifisioterapi3l.'</td>
          <td>'.$blninifisioterapi3p.'</td>
          <td>'.$penempatanblninifisioterapi3l.'</td>
          <td>'.$penempatanblninifisioterapi3p.'</td>
          <td>'.$dihapusblninifisioterapi3l.'</td>
          <td>'.$dihapusblninifisioterapi3p.'</td>
          <td>=SUM(D217+F217-H217-J217)</td>
          <td>=SUM(E217+G217-I217-K217)</td>                  
       </tr>

          <tr>
          <td> 5407 </td>
          <td colspan="2"> PERAWAT </td>             
          <td>'.$blnlaluperawat3l.'</td>
          <td>'.$blnlaluperawat3p.'</td>
          <td>'.$blniniperawat3l.'</td>
          <td>'.$blniniperawat3p.'</td>
          <td>'.$penempatanblniniperawat3l.'</td>
          <td>'.$penempatanblniniperawat3p.'</td>
          <td>'.$dihapusblniniperawat3l.'</td>
          <td>'.$dihapusblniniperawat3p.'</td>
          <td>=SUM(D218+F218-H218-J218)</td>
          <td>=SUM(E218+G218-I218-K218)</td>                  
       </tr>

           <tr>
          <td> 5408 </td>
          <td colspan="2"> PENATA RONTGEN </td>             
          <td>'.$blnlalupenatarontgen3l.'</td>
          <td>'.$blnlalupenatarontgen3p.'</td>
          <td>'.$blninipenatarontgen3l.'</td>
          <td>'.$blninipenatarontgen3p.'</td>
          <td>'.$penempatanblninipenatarontgen3l.'</td>
          <td>'.$penempatanblninipenatarontgen3p.'</td>
          <td>'.$dihapusblninipenatarontgen3l.'</td>
          <td>'.$dihapusblninipenatarontgen3p.'</td>
          <td>=SUM(D219+F219-H219-J219)</td>
          <td>=SUM(E219+G219-I219-K219)</td>                  
       </tr>

          <tr>
          <td> 5409 </td>
          <td colspan="2"> KESEHATAN LAINNYA </td>             
          <td>'.$blnlalukesehatanlainnya3l.'</td>
          <td>'.$blnlalukesehatanlainnya3p.'</td>
          <td>'.$blninikesehatanlainnya3l.'</td>
          <td>'.$blninikesehatanlainnya3p.'</td>
          <td>'.$penempatanblninikesehatanlainnya3l.'</td>
          <td>'.$penempatanblninikesehatanlainnya3p.'</td>
          <td>'.$dihapusblninikesehatanlainnya3l.'</td>
          <td>'.$dihapusblninikesehatanlainnya3p.'</td>
          <td>=SUM(D220+F220-H220-J220)</td>
          <td>=SUM(E220+G220-I220-K220)</td>                  
       </tr>


         <tr>
          <td> 5499 </td>
          <td colspan="2"> KESEHATAN - TAK TERDEFINISI </td>             
          <td>'.$blnlalukesehatantakterdefinisi3l.'</td>
          <td>'.$blnlalukesehatantakterdefinisi3p.'</td>
          <td>'.$blninikesehatantakterdefinisi3l.'</td>
          <td>'.$blninikesehatantakterdefinisi3p.'</td>
          <td>'.$penempatanblninikesehatantakterdefinisi3l.'</td>
          <td>'.$penempatanblninikesehatantakterdefinisi3p.'</td>
          <td>'.$dihapusblninikesehatantakterdefinisi3l.'</td>
          <td>'.$dihapusblninikesehatantakterdefinisi3p.'</td>
          <td>=SUM(D221+F221-H221-J221)</td>
          <td>=SUM(E221+G221-I221-K221)</td>                  
       </tr>


         <tr id="mytable" class = "sub" bordercolor="red">
          <td  >Sub Total</td>

         <td  style=border:none;>  </td>
         <td  style= border:none;>  </td>
              <td class = "sub" >=SUM(D212:D221)</td>                 
              <td class = "sub" >=SUM(E212:E221)<td>
              <td class = "sub" >=SUM(F212:F221)</td>
              <td class = "sub" >=SUM(G212:G221)</td>
              <td class = "sub" >=SUM(H212:H221)<td>
              <td class = "sub" >=SUM(I212:I221)</td>
              <td class = "sub" >=SUM(J212:J221)</td>
              <td class = "sub" >=SUM(K212:K221)</td>
              <td class = "sub" >=SUM(L212:L221)</td>
              <td class = "sub" >=SUM(M212:M221)</td>
            </tr>


                          <tr>
             <td> 5500 </td>
             <td colspan="2">DIII - ILMU PENGETAHUAN SOSIAL/BUDAYA </td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
                 </tr>

      <tr>
          <td> 5501 </td>
          <td colspan="2"> EKONOMI </td>             
          <td>'.$blnlaluekonomi3l.'</td>
          <td>'.$blnlaluekonomi3p.'</td>
          <td>'.$blniniekonomi3l.'</td>
          <td>'.$blniniekonomi3p.'</td>
          <td>'.$penempatanblniniekonomi3l.'</td>
          <td>'.$penempatanblniniekonomi3p.'</td>
          <td>'.$dihapusblniniekonomi3l.'</td>
          <td>'.$dihapusblniniekonomi3p.'</td>
          <td>=SUM(D224+F224-H224-J224)</td>
          <td>=SUM(E224+G224-I224-K224)</td>                  
       </tr>

       <tr>
          <td> 5502 </td>
          <td colspan="2"> AKUNTANSI </td>             
          <td>'.$blnlaluakuntansi3l.'</td>
          <td>'.$blnlaluakuntansi3p.'</td>
          <td>'.$blniniakuntansi3l.'</td>
          <td>'.$blniniakuntansi3p.'</td>
          <td>'.$penempatanblniniakuntansi3l.'</td>
          <td>'.$penempatanblniniakuntansi3p.'</td>
          <td>'.$dihapusblniniakuntansi3l.'</td>
          <td>'.$dihapusblniniakuntansi3p.'</td>
          <td>=SUM(D225+F225-H225-J225)</td>
          <td>=SUM(E225+G225-I225-K225)</td>                  
       </tr>

        <tr>
          <td> 5503 </td>
          <td colspan="2"> KEUANGAN DAN PAJAK </td>             
          <td>'.$blnlalukeuangandanpajak3l.'</td>
          <td>'.$blnlalukeuangandanpajak3p.'</td>
          <td>'.$blninikeuangandanpajak3l.'</td>
          <td>'.$blninikeuangandanpajak3p.'</td>
          <td>'.$penempatanblninikeuangandanpajak3l.'</td>
          <td>'.$penempatanblninikeuangandanpajak3p.'</td>
          <td>'.$dihapusblninikeuangandanpajak3l.'</td>
          <td>'.$dihapusblninikeuangandanpajak3p.'</td>
          <td>=SUM(D226+F226-H226-J226)</td>
          <td>=SUM(E226+G226-I226-K226)</td>                  
       </tr>


         <tr>
          <td> 5504 </td>
          <td colspan="2"> HUKUM </td>             
          <td>'.$blnlaluhukum3l.'</td>
          <td>'.$blnlaluhukum3p.'</td>
          <td>'.$blninihukum3l.'</td>
          <td>'.$blninihukum3p.'</td>
          <td>'.$penempatanblninihukum3l.'</td>
          <td>'.$penempatanblninihukum3p.'</td>
          <td>'.$dihapusblninihukum3l.'</td>
          <td>'.$dihapusblninihukum3p.'</td>
          <td>=SUM(D227+F227-H227-J227)</td>
          <td>=SUM(E227+G227-I227-K227)</td>                  
       </tr>


         <tr>
          <td> 5505 </td>
          <td colspan="2"> ILMU POLITIK </td>             
          <td>'.$blnlaluilmupolitik3l.'</td>
          <td>'.$blnlaluilmupolitik3p.'</td>
          <td>'.$blniniilmupolitik3l.'</td>
          <td>'.$blniniilmupolitik3p.'</td>
          <td>'.$penempatanblniniilmupolitik3l.'</td>
          <td>'.$penempatanblniniilmupolitik3p.'</td>
          <td>'.$dihapusblniniilmupolitik3l.'</td>
          <td>'.$dihapusblniniilmupolitik3p.'</td>
          <td>=SUM(D228+F228-H228-J228)</td>
          <td>=SUM(E228+G228-I228-K228)</td>                  
       </tr>

          <tr>
          <td> 5506 </td>
          <td colspan="2"> SOSIOLOGI </td>             
          <td>'.$blnlalusosiologi3l.'</td>
          <td>'.$blnlalusosiologi3p.'</td>
          <td>'.$blninisosiologi3l.'</td>
          <td>'.$blninisosiologi3p.'</td>
          <td>'.$penempatanblninisosiologi3l.'</td>
          <td>'.$penempatanblninisosiologi3p.'</td>
          <td>'.$dihapusblninisosiologi3l.'</td>
          <td>'.$dihapusblninisosiologi3p.'</td>
          <td>=SUM(D229+F229-H229-J229)</td>
          <td>=SUM(E229+G229-I229-K229)</td>                  
       </tr>


         <tr>
          <td> 5507 </td>
          <td colspan="2"> ANTROPOLOGI </td>             
          <td>'.$blnlaluantropologi3l.'</td>
          <td>'.$blnlaluantropologi3p.'</td>
          <td>'.$blniniantropologi3l.'</td>
          <td>'.$blniniantropologi3p.'</td>
          <td>'.$penempatanblniniantropologi3l.'</td>
          <td>'.$penempatanblniniantropologi3p.'</td>
          <td>'.$dihapusblniniantropologi3l.'</td>
          <td>'.$dihapusblniniantropologi3p.'</td>
          <td>=SUM(D230+F230-H230-J230)</td>
          <td>=SUM(E230+G230-I230-K230)</td>                  
       </tr>

          <tr>
          <td> 5508 </td>
          <td colspan="2"> GEOGRAFI </td>             
          <td>'.$blnlalugeografi3l.'</td>
          <td>'.$blnlalugeografi3p.'</td>
          <td>'.$blninigeografi3l.'</td>
          <td>'.$blninigeografi3p.'</td>
          <td>'.$penempatanblninigeografi3l.'</td>
          <td>'.$penempatanblninigeografi3p.'</td>
          <td>'.$dihapusblninigeografi3l.'</td>
          <td>'.$dihapusblninigeografi3p.'</td>
          <td>=SUM(D231+F231-H231-J231)</td>
          <td>=SUM(E231+G231-I231-K231)</td>                  
       </tr>

             <tr>
          <td> 5509 </td>
          <td colspan="2"> ADMINISTRASI </td>             
          <td>'.$blnlaluadministrasi3l.'</td>
          <td>'.$blnlaluadministrasi3p.'</td>
          <td>'.$blniniadministrasi3l.'</td>
          <td>'.$blniniadministrasi3p.'</td>
          <td>'.$penempatanblniniadministrasi3l.'</td>
          <td>'.$penempatanblniniadministrasi3p.'</td>
          <td>'.$dihapusblniniadministrasi3l.'</td>
          <td>'.$dihapusblniniadministrasi3p.'</td>
          <td>=SUM(D232+F232-H232-J232)</td>
          <td>=SUM(E232+G232-I232-K232)</td>                  
       </tr>


             <tr>
          <td> 5510 </td>
          <td colspan="2"> SEKRETARIS </td>             
          <td>'.$blnlalusekretaris3l.'</td>
          <td>'.$blnlalusekretaris3p.'</td>
          <td>'.$blninisekretaris3l.'</td>
          <td>'.$blninisekretaris3p.'</td>
          <td>'.$penempatanblninisekretaris3l.'</td>
          <td>'.$penempatanblninisekretaris3p.'</td>
          <td>'.$dihapusblninisekretaris3l.'</td>
          <td>'.$dihapusblninisekretaris3p.'</td>
          <td>=SUM(D233+F233-H233-J233)</td>
          <td>=SUM(E233+G233-I233-K233)</td>                  
       </tr>

              <tr>
          <td> 5511 </td>
          <td colspan="2"> MANAJEMENT </td>             
          <td>'.$blnlalumanajement3l.'</td>
          <td>'.$blnlalumanajement3p.'</td>
          <td>'.$blninimanajement3l.'</td>
          <td>'.$blninimanajement3p.'</td>
          <td>'.$penempatanblninimanajement3l.'</td>
          <td>'.$penempatanblninimanajement3p.'</td>
          <td>'.$dihapusblninimanajement3l.'</td>
          <td>'.$dihapusblninimanajement3p.'</td>
          <td>=SUM(D234+F234-H234-J234)</td>
          <td>=SUM(E234+G234-I234-K234)</td>                  
       </tr>


                <tr>
          <td> 5512 </td>
          <td colspan="2"> PSIKOLOGI </td>             
          <td>'.$blnlalupsikologi3l.'</td>
          <td>'.$blnlalupsikologi3p.'</td>
          <td>'.$blninipsikologi3l.'</td>
          <td>'.$blninipsikologi3p.'</td>
          <td>'.$penempatanblninipsikologi3l.'</td>
          <td>'.$penempatanblninipsikologi3p.'</td>
          <td>'.$dihapusblninipsikologi3l.'</td>
          <td>'.$dihapusblninipsikologi3p.'</td>
          <td>=SUM(D235+F235-H235-J235)</td>
          <td>=SUM(E235+G235-I235-K235)</td>                  
       </tr>



                <tr>
          <td> 5513 </td>
          <td colspan="2"> SEJARAH </td>             
          <td>'.$blnlalusejarah3l.'</td>
          <td>'.$blnlalusejarah3p.'</td>
          <td>'.$blninisejarah3l.'</td>
          <td>'.$blninisejarah3p.'</td>
          <td>'.$penempatanblninisejarah3l.'</td>
          <td>'.$penempatanblninisejarah3p.'</td>
          <td>'.$dihapusblninisejarah3l.'</td>
          <td>'.$dihapusblninisejarah3p.'</td>
          <td>=SUM(D236+F236-H236-J236)</td>
          <td>=SUM(E236+G236-I236-K236)</td>                  
       </tr>

       <tr>
          <td> 5516 </td>
          <td colspan="2"> BAHASA INDONESIA </td>             
          <td>'.$blnlalubahasaindonesia3l.'</td>
          <td>'.$blnlalubahasaindonesia3p.'</td>
          <td>'.$blninibahasaindonesia3l.'</td>
          <td>'.$blninibahasaindonesia3p.'</td>
          <td>'.$penempatanblninibahasaindonesia3l.'</td>
          <td>'.$penempatanblninibahasaindonesia3p.'</td>
          <td>'.$dihapusblninibahasaindonesia3l.'</td>
          <td>'.$dihapusblninibahasaindonesia3p.'</td>
          <td>=SUM(D237+F237-H237-J237)</td>
          <td>=SUM(E237+G237-I237-K237)</td>                  
       </tr>

             <tr>
          <td> 5517 </td>
          <td colspan="2"> BAHASA DAERAH </td>             
          <td>'.$blnlalubahasadaerah3l.'</td>
          <td>'.$blnlalubahasadaerah3p.'</td>
          <td>'.$blninibahasadaerah3l.'</td>
          <td>'.$blninibahasadaerah3p.'</td>
          <td>'.$penempatanblninibahasadaerah3l.'</td>
          <td>'.$penempatanblninibahasadaerah3p.'</td>
          <td>'.$dihapusblninibahasadaerah3l.'</td>
          <td>'.$dihapusblninibahasadaerah3p.'</td>
          <td>=SUM(D238+F238-H238-J238)</td>
          <td>=SUM(E238+G238-I238-K238)</td>                  
       </tr>

               <tr>
          <td> 5518 </td>
          <td colspan="2"> BAHASA INGGRIS </td>             
          <td>'.$blnlalubahasainggris3l.'</td>
          <td>'.$blnlalubahasainggris3p.'</td>
          <td>'.$blninibahasainggris3l.'</td>
          <td>'.$blninibahasainggris3p.'</td>
          <td>'.$penempatanblninibahasainggris3l.'</td>
          <td>'.$penempatanblninibahasainggris3p.'</td>
          <td>'.$dihapusblninibahasainggris3l.'</td>
          <td>'.$dihapusblninibahasainggris3p.'</td>
          <td>=SUM(D239+F239-H239-J239)</td>
          <td>=SUM(E239+G239-I239-K239)</td>                  
       </tr>


       <tr>
          <td> 5522 </td>
          <td colspan="2"> BAHASA ARAB </td>             
          <td>'.$blnlalubahasaarab3l.'</td>
          <td>'.$blnlalubahasaarab3p.'</td>
          <td>'.$blninibahasaarab3l.'</td>
          <td>'.$blninibahasaarab3p.'</td>
          <td>'.$penempatanblninibahasaarab3l.'</td>
          <td>'.$penempatanblninibahasaarab3p.'</td>
          <td>'.$dihapusblninibahasaarab3l.'</td>
          <td>'.$dihapusblninibahasaarab3p.'</td>
          <td>=SUM(D240+F240-H240-J240)</td>
          <td>=SUM(E240+G240-I240-K240)</td>                  
       </tr>

           <tr>
          <td> 5524 </td>
          <td colspan="2"> BAHASA CINA </td>             
          <td>'.$blnlalubahasacina3l.'</td>
          <td>'.$blnlalubahasacina3p.'</td>
          <td>'.$blninibahasacina3l.'</td>
          <td>'.$blninibahasacina3p.'</td>
          <td>'.$penempatanblninibahasacina3l.'</td>
          <td>'.$penempatanblninibahasacina3p.'</td>
          <td>'.$dihapusblninibahasacina3l.'</td>
          <td>'.$dihapusblninibahasacina3p.'</td>
          <td>=SUM(D241+F241-H241-J241)</td>
          <td>=SUM(E241+G241-I241-K241)</td>                  
       </tr>

   <tr>
          <td> 5525 </td>
          <td colspan="2"> BAHASA JEPANG </td>             
          <td>'.$blnlalubahasajepang3l.'</td>
          <td>'.$blnlalubahasajepang3p.'</td>
          <td>'.$blninibahasajepang3l.'</td>
          <td>'.$blninibahasajepang3p.'</td>
          <td>'.$penempatanblninibahasajepang3l.'</td>
          <td>'.$penempatanblninibahasajepang3p.'</td>
          <td>'.$dihapusblninibahasajepang3l.'</td>
          <td>'.$dihapusblninibahasajepang3p.'</td>
          <td>=SUM(D242+F242-H242-J242)</td>
          <td>=SUM(E242+G242-I242-K242)</td>                  
       </tr>

          <tr>
          <td> 5526 </td>
          <td colspan="2"> KEAGAMAAN DAN ILMU KETUHANAN (IAIN) </td>             
          <td>'.$blnlalukeagamaandanilmuketuhananiain3l.'</td>
          <td>'.$blnlalukeagamaandanilmuketuhananiain3p.'</td>
          <td>'.$blninikeagamaandanilmuketuhananiain3l.'</td>
          <td>'.$blninikeagamaandanilmuketuhananiain3p.'</td>
          <td>'.$penempatanblninikeagamaandanilmuketuhananiain3l.'</td>
          <td>'.$penempatanblninikeagamaandanilmuketuhananiain3p.'</td>
          <td>'.$dihapusblninikeagamaandanilmuketuhananiain3l.'</td>
          <td>'.$dihapusblninikeagamaandanilmuketuhananiain3p.'</td>
          <td>=SUM(D243+F243-H243-J243)</td>
          <td>=SUM(E243+G243-I243-K243)</td>                  
       </tr>



          <tr>
          <td> 5527 </td>
          <td colspan="2"> KESEJAHTERAAN KELUARGA </td>             
          <td>'.$blnlalukesejahteraankeluarga3l.'</td>
          <td>'.$blnlalukesejahteraankeluarga3p.'</td>
          <td>'.$blninikesejahteraankeluarga3l.'</td>
          <td>'.$blninikesejahteraankeluarga3p.'</td>
          <td>'.$penempatanblninikesejahteraankeluarga3l.'</td>
          <td>'.$penempatanblninikesejahteraankeluarga3p.'</td>
          <td>'.$dihapusblninikesejahteraankeluarga3l.'</td>
          <td>'.$dihapusblninikesejahteraankeluarga3p.'</td>
          <td>=SUM(D244+F244-H244-J244)</td>
          <td>=SUM(E244+G244-I244-K244)</td>                  
       </tr>

            <tr>
          <td> 5528 </td>
          <td colspan="2"> SENI </td>             
          <td>'.$blnlaluseni3l.'</td>
          <td>'.$blnlaluseni3p.'</td>
          <td>'.$blniniseni3l.'</td>
          <td>'.$blniniseni3p.'</td>
          <td>'.$penempatanblniniseni3l.'</td>
          <td>'.$penempatanblniniseni3p.'</td>
          <td>'.$dihapusblniniseni3l.'</td>
          <td>'.$dihapusblniniseni3p.'</td>
          <td>=SUM(D245+F245-H245-J245)</td>
          <td>=SUM(E245+G245-I245-K245)</td>                  
       </tr>



  <table >
    <thead>
    <tr><th></th></tr>
    
      </thead>
     </table>

      <table border="1" width="200px">



      <tr style="background: #aaa">
        <td  width="150" colspan="3"  rowspan ="3" ><div style="text-align: center;vertical-align: middle; white-space: nowrap;width=30px column-width: 90px;">JENIS PENDIDIKAN</div></td>
        <td width="150" colspan="2" rowspan="2" ><div style="text-align: center;vertical-align: middle;">SISA BULAN YANG LALU</div></td>
        <td width="150" colspan="2" rowspan="2" ><div style="text-align: center;vertical-align: middle;">YANG TERDAFTAR BULAIN INI</div></td>
        <td width="150" colspan="2" rowspan="2"><div style="text-align: center;vertical-align: middle;">PENEMPATAN BULAN INI</div></td>        
        <td width="150" colspan="2" rowspan="2" ><div style="text-align: center;vertical-align: middle;">DIHAPUSKAN BULAN INI</div></td>
        <td width="150" colspan="2" rowspan="2" ><div style="text-align: center;vertical-align: middle;">SISA AKHIR BULAN INI</div></td>
 
   </tr>
   <tr>
   </tr>
    <tr style="background: #aaa">
            <td><div style="text-align: center;vertical-align: middle;"> L</div> </td>
            <td><div style="text-align: center;vertical-align: middle;"> P</div> </td>       
             <td><div style="text-align: center;vertical-align: middle;"> L</div> </td>
            <td><div style="text-align: center;vertical-align: middle;"> P</div> </td>
            <td><div style="text-align: center;vertical-align: middle;"> L</div> </td>
            <td><div style="text-align: center;vertical-align: middle;"> P</div> </td>
            <td><div style="text-align: center;vertical-align: middle;"> L</div> </td>
            <td><div style="text-align: center;vertical-align: middle;"> P</div> </td>
            <td><div style="text-align: center;vertical-align: middle;"> L</div> </td>
            <td><div style="text-align: center;vertical-align: middle;"> P</div> </td>   
            
     </tr>

      <tr style="background: #aaa">
            <td width="150" colspan="3" ><div style="text-align: center;vertical-align: middle;"> &#39;&#40;1&#41;</div></td>
            <td> <div style="text-align: center;vertical-align: middle;">&#39;&#40;2&#41;</div></td>
            <td> <div style="text-align: center;vertical-align: middle;">&#39;&#40;3&#41;</div></td>
            <td> <div style="text-align: center;vertical-align: middle;">&#39;&#40;4&#41;</div></td>
            <td><div style="text-align: center;vertical-align: middle;"> &#39;&#40;5&#41;</div></td>
            <td><div style="text-align: center;vertical-align: middle;"> &#39;&#40;6&#41;</div></td>
            <td> <div style="text-align: center;vertical-align: middle;">&#39;&#40;7&#41;</div></td>
            <td> <div style="text-align: center;vertical-align: middle;">&#39;&#40;8&#41;</div></td>
            <td><div style="text-align: center;vertical-align: middle;"> &#39;&#40;9&#41;</div></td>
            <td><div style="text-align: center;vertical-align: middle;"> &#39;&#40;11&#41;</div></td>
            <td> <div style="text-align: center;vertical-align: middle;">&#39;&#40;12&#41;</div></td>
                         
     </tr>
   


    
    
     

    <tbody>';    


$no = 1;
        

    $html .= '

               <tr>
          <td> 5529 </td>
          <td colspan="2"> PUBLISTIK/PENERANGAN </td>             
          <td>'.$blnlalupublistikpenerangan3l.'</td>
          <td>'.$blnlalupublistikpenerangan3p.'</td>
          <td>'.$blninipublistikpenerangan3l.'</td>
          <td>'.$blninipublistikpenerangan3p.'</td>
          <td>'.$penempatanblninipublistikpenerangan3l.'</td>
          <td>'.$penempatanblninipublistikpenerangan3p.'</td>
          <td>'.$dihapusblninipublistikpenerangan3l.'</td>
          <td>'.$dihapusblninipublistikpenerangan3p.'</td>
          <td>=SUM(D246+F246-H246-J246)</td>
          <td>=SUM(E246+G246-I246-K246)</td>                  
       </tr>

            <tr>
          <td> 5530 </td>
          <td colspan="2"> ILMU KOMUNIKASI MASSA </td>             
          <td>'.$blnlaluilmukomunikasimassa3l.'</td>
          <td>'.$blnlaluilmukomunikasimassa3p.'</td>
          <td>'.$blniniilmukomunikasimassa3l.'</td>
          <td>'.$blniniilmukomunikasimassa3p.'</td>
          <td>'.$penempatanblniniilmukomunikasimassa3l.'</td>
          <td>'.$penempatanblniniilmukomunikasimassa3p.'</td>
          <td>'.$dihapusblniniilmukomunikasimassa3l.'</td>
          <td>'.$dihapusblniniilmukomunikasimassa3p.'</td>
          <td>=SUM(D247+F247-H247-J247)</td>
          <td>=SUM(E247+G247-I247-K247)</td>                  
       </tr>

                <tr>
          <td> 5531 </td>
          <td colspan="2"> PERPUSTAKAAN </td>             
          <td>'.$blnlaluperpustakaan3l.'</td>
          <td>'.$blnlaluperpustakaan3p.'</td>
          <td>'.$blniniperpustakaan3l.'</td>
          <td>'.$blniniperpustakaan3p.'</td>
          <td>'.$penempatanblniniperpustakaan3l.'</td>
          <td>'.$penempatanblniniperpustakaan3p.'</td>
          <td>'.$dihapusblniniperpustakaan3l.'</td>
          <td>'.$dihapusblniniperpustakaan3p.'</td>
          <td>=SUM(D248+F248-H248-J248)</td>
          <td>=SUM(E248+G248-I248-K248)</td>                  
       </tr>

                   <tr>
          <td> 5532 </td>
          <td colspan="2"> ANAK BUAH KAPAL DAN TEKNISI PELAYARAN </td>             
          <td>'.$blnlaluanakbuahkapaldanteknisipelayaran3l.'</td>
          <td>'.$blnlaluanakbuahkapaldanteknisipelayaran3p.'</td>
          <td>'.$blninianakbuahkapaldanteknisipelayaran3l.'</td>
          <td>'.$blninianakbuahkapaldanteknisipelayaran3p.'</td>
          <td>'.$penempatanblninianakbuahkapaldanteknisipelayaran3l.'</td>
          <td>'.$penempatanblninianakbuahkapaldanteknisipelayaran3p.'</td>
          <td>'.$dihapusblninianakbuahkapaldanteknisipelayaran3l.'</td>
          <td>'.$dihapusblninianakbuahkapaldanteknisipelayaran3p.'</td>
          <td>=SUM(D249+F249-H249-J249)</td>
          <td>=SUM(E249+G249-I249-K249)</td>                  
       </tr>

        <tr>
          <td> 5533 </td>
          <td colspan="2"> POS DAN TELEKOMUNIKASI</td>             
          <td>'.$blnlaluposdantelekomunikasi3l.'</td>
          <td>'.$blnlaluposdantelekomunikasi3p.'</td>
          <td>'.$blniniposdantelekomunikasi3l.'</td>
          <td>'.$blniniposdantelekomunikasi3p.'</td>
          <td>'.$penempatanblniniposdantelekomunikasi3l.'</td>
          <td>'.$penempatanblniniposdantelekomunikasi3p.'</td>
          <td>'.$dihapusblniniposdantelekomunikasi3l.'</td>
          <td>'.$dihapusblniniposdantelekomunikasi3p.'</td>
          <td>=SUM(D250+F250-H250-J250)</td>
          <td>=SUM(E250+G250-I250-K250)</td>                  
       </tr>

  <tr>
          <td> 5534 </td>
          <td colspan="2">  HOTEL, RESTORAN DAN PARAWISATA</td>             
          <td>'.$blnlaluhotelrestorandanparawisata3l.'</td>
          <td>'.$blnlaluhotelrestorandanparawisata3p.'</td>
          <td>'.$blninihotelrestorandanparawisata3l.'</td>
          <td>'.$blninihotelrestorandanparawisata3p.'</td>
          <td>'.$penempatanblninihotelrestorandanparawisata3l.'</td>
          <td>'.$penempatanblninihotelrestorandanparawisata3p.'</td>
          <td>'.$dihapusblninihotelrestorandanparawisata3l.'</td>
          <td>'.$dihapusblninihotelrestorandanparawisata3p.'</td>
          <td>=SUM(D251+F251-H251-J251)</td>
          <td>=SUM(E251+G251-I251-K251)</td>                  
       </tr>


  <tr>
          <td> 5535 </td>
          <td colspan="2"> ILMU PENGETAHUAN SOSIAL/BUDAYA LAINNYA</td>             
          <td>'.$blnlaluilmupengetahuansosialbudayalainnya3l.'</td>
          <td>'.$blnlaluilmupengetahuansosialbudayalainnya3p.'</td>
          <td>'.$blniniilmupengetahuansosialbudayalainnya3l.'</td>
          <td>'.$blniniilmupengetahuansosialbudayalainnya3p.'</td>
          <td>'.$penempatanblniniilmupengetahuansosialbudayalainnya3l.'</td>
          <td>'.$penempatanblniniilmupengetahuansosialbudayalainnya3p.'</td>
          <td>'.$dihapusblniniilmupengetahuansosialbudayalainnya3l.'</td>
          <td>'.$dihapusblniniilmupengetahuansosialbudayalainnya3p.'</td>
          <td>=SUM(D252+F252-H252-J252)</td>
          <td>=SUM(E252+G252-I252-K252)</td>                  
       </tr>

         <tr>
          <td> 5599 </td>
          <td colspan="2"> ILMU PENG. SOSIAL/BUDAYA - TAK TERDEFINISI</td>             
          <td>'.$blnlaluilmupengsosialbudayatakterdefinisi3l.'</td>
          <td>'.$blnlaluilmupengsosialbudayatakterdefinisi3p.'</td>
          <td>'.$blniniilmupengsosialbudayatakterdefinisi3l.'</td>
          <td>'.$blniniilmupengsosialbudayatakterdefinisi3p.'</td>
          <td>'.$penempatanblniniilmupengsosialbudayatakterdefinisi3l.'</td>
          <td>'.$penempatanblniniilmupengsosialbudayatakterdefinisi3p.'</td>
          <td>'.$dihapusblniniilmupengsosialbudayatakterdefinisi3l.'</td>
          <td>'.$dihapusblniniilmupengsosialbudayatakterdefinisi3p.'</td>
          <td>=SUM(D253+F253-H253-J253)</td>
          <td>=SUM(E253+G253-I253-K253)</td>                  
       </tr>

         <tr id="mytable" class = "sub" bordercolor="red">
          <td  >Sub Total</td>

             <td  style=border:none;>  </td>
             <td  style= border:none;>  </td>
              <td class = "sub" >=SUM(D224:D245)+SUM(D251:D258)</td>                 
              <td class = "sub" >=SUM(E224:E245)+SUM(E251:E258)<td>
              <td class = "sub" >=SUM(F224:F245)+SUM(F251:F258)</td>
              <td class = "sub" >=SUM(G224:G245)+SUM(G251:G258)</td>
              <td class = "sub" >=SUM(H224:H245)+SUM(H251:H258)<td>
              <td class = "sub" >=SUM(I224:I245)+SUM(I251:I258)</td>
              <td class = "sub" >=SUM(J224:J245)+SUM(J251:J258)</td>
              <td class = "sub" >=SUM(K224:K245)+SUM(K251:K258)</td>
              <td class = "sub" >=SUM(L224:L245)+SUM(L251:L258)</td>
              <td class = "sub" >=SUM(M224:M245)+SUM(M251:M258)</td>
            </tr>

             <tr>
          <td> 5600 </td>
          <td colspan="2"> DIII - ILMU PENDIDIKAN DAN KEGUNAAN</td>             
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>                  
       </tr>

         <tr>
          <td> 5601 </td>
          <td colspan="2"> PENDIDIKAN </td>             
          <td>'.$blnlalupendidikan3l.'</td>
          <td>'.$blnlalupendidikan3p.'</td>
          <td>'.$blninipendidikan3l.'</td>
          <td>'.$blninipendidikan3p.'</td>
          <td>'.$penempatanblninipendidikan3l.'</td>
          <td>'.$penempatanblninipendidikan3p.'</td>
          <td>'.$dihapusblninipendidikan3l.'</td>
          <td>'.$dihapusblninipendidikan3p.'</td>
          <td>=SUM(D261+F261-H261-J261)</td>
          <td>=SUM(E261+G261-I261-K261)</td>                  
         </tr>

          <tr>
          <td> 5602 </td>
          <td colspan="2"> BIMBINGAN DAN PENYULUHAN </td>             
          <td>'.$blnlalubimbingandanpenyuluhan3l.'</td>
          <td>'.$blnlalubimbingandanpenyuluhan3p.'</td>
          <td>'.$blninibimbingandanpenyuluhan3l.'</td>
          <td>'.$blninibimbingandanpenyuluhan3p.'</td>
          <td>'.$penempatanblninibimbingandanpenyuluhan3l.'</td>
          <td>'.$penempatanblninibimbingandanpenyuluhan3p.'</td>
          <td>'.$dihapusblninibimbingandanpenyuluhan3l.'</td>
          <td>'.$dihapusblninibimbingandanpenyuluhan3p.'</td>
          <td>=SUM(D262+F262-H262-J262)</td>
          <td>=SUM(E262+G262-I262-K262)</td>                  
         </tr>

         <tr>
          <td> 5604 </td>
          <td colspan="2"> PENDIDIKAN LUAR SEKOLAH </td>             
          <td>'.$blnlalupendidikanluarsekolah3l.'</td>
          <td>'.$blnlalupendidikanluarsekolah3p.'</td>
          <td>'.$blninipendidikanluarsekolah3l.'</td>
          <td>'.$blninipendidikanluarsekolah3p.'</td>
          <td>'.$penempatanblninipendidikanluarsekolah3l.'</td>
          <td>'.$penempatanblninipendidikanluarsekolah3p.'</td>
          <td>'.$dihapusblninipendidikanluarsekolah3l.'</td>
          <td>'.$dihapusblninipendidikanluarsekolah3p.'</td>
          <td>=SUM(D263+F263-H263-J263)</td>
          <td>=SUM(E263+G263-I263-K263)</td>                  
         </tr>

         <tr>
          <td> 5605 </td>
          <td colspan="2"> PSIKOLOGI </td>             
          <td>'.$blnlalupendidikanluarsekolah3l.'</td>
          <td>'.$blnlalupendidikanluarsekolah3p.'</td>
          <td>'.$blninipendidikanluarsekolah3l.'</td>
          <td>'.$blninipendidikanluarsekolah3p.'</td>
          <td>'.$penempatanblninipendidikanluarsekolah3l.'</td>
          <td>'.$penempatanblninipendidikanluarsekolah3p.'</td>
          <td>'.$dihapusblninipendidikanluarsekolah3l.'</td>
          <td>'.$dihapusblninipendidikanluarsekolah3p.'</td>
          <td>=SUM(D264+F264-H264-J264)</td>
          <td>=SUM(E264+G264-I264-K264)</td>                  
         </tr>

         <tr>
          <td> 5606 </td>
          <td colspan="2"> PENDIDIKAN SOSIAL </td>             
          <td>'.$blnlalupendidikansosial3l.'</td>
          <td>'.$blnlalupendidikansosial3p.'</td>
          <td>'.$blninipendidikansosial3l.'</td>
          <td>'.$blninipendidikansosial3p.'</td>
          <td>'.$penempatanblninipendidikansosial3l.'</td>
          <td>'.$penempatanblninipendidikansosial3p.'</td>
          <td>'.$dihapusblninipendidikansosial3l.'</td>
          <td>'.$dihapusblninipendidikansosial3p.'</td>
          <td>=SUM(D265+F265-H265-J265)</td>
          <td>=SUM(E265+G265-I265-K265)</td>                  
         </tr>

         <tr>
          <td> 5607 </td>
          <td colspan="2"> PENDIDIKAN SEJAHTERAH SOSIAL </td>             
          <td>'.$blnlalupendidikansejahterahsosial3l.'</td>
          <td>'.$blnlalupendidikansejahterahsosial3p.'</td>
          <td>'.$blninipendidikansejahterahsosial3l.'</td>
          <td>'.$blninipendidikansejahterahsosial3p.'</td>
          <td>'.$penempatanblninipendidikansejahterahsosial3l.'</td>
          <td>'.$penempatanblninipendidikansejahterahsosial3p.'</td>
          <td>'.$dihapusblninipendidikansejahterahsosial3l.'</td>
          <td>'.$dihapusblninipendidikansejahterahsosial3p.'</td>
          <td>=SUM(D266+F266-H266-J266)</td>
          <td>=SUM(E266+G266-I266-K266)</td>                  
         </tr>
  '

        ;




$html .= '
    </tbody>
  </table> ';


echo $html;

exit();
?>



