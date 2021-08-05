<?php
    use yii\helpers\Url;
    use yii\helpers\Html;
    use yii\bootstrap\Modal;

/* @var $this yii\web\View */


$this->title = 'Laporan Per Hari';
?>

<?php 

$filename  = 'Siswa_daftar_ulang.xls';
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=".$filename);




$html = '';      
$html .= '
  <table border="1">
    <thead>
      <tr> 
              <th colspan=11>IPK III/2 : PENCARI KERJA YANG TERDAFTAR, DITEMPATKAN DAN DIHAPUSKAN DIRINCI MENURUT JENIS PENDIDIKAN</th></tr>
              <tr><th colspan=11>Dinas Pendidikan Pemuda dan Olahraga Kota Pariaman</th></tr>
              <th colspan=11>SMPN 
          Pariaman
              </th>
               
      </tr>
      <tr style="background: #aaa">
        <th rowspan="2">JENIS PENDIDIKAN</th>
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
            <td> &#39;&#40;1&#41;</td>
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
     <tr>
            <td> 1000 SEKOLAH DASAR</td>
            <td> 1000 SEKOLAH DASAR</td>
            <td> 1000 SEKOLAH DASAR</td>
            <td> 1000 SEKOLAH DASAR</td>
            <td> 1000 SEKOLAH DASAR</td>
            <td> 1000 SEKOLAH DASAR</td>
            <td> 1000 SEKOLAH DASAR</td>
            <td> 1000 SEKOLAH DASAR</td>
            <td> 1000 SEKOLAH DASAR</td>
            <td> 1000 SEKOLAH DASAR</td>
            <td> 10044 SEKOLAH DASAR</td>
                                   
     </tr>

     
     <tr>
            <td> 1101 SEKOLAH DASAR</td>
                                   
     </tr>
     <tr>
            <td> 1102 TAMAT SD</td>
                                   
     </tr>
     <tr>
            <td> 1103 SETINGKAT SD</td>
                                   
     </tr>
     <tr>
            <td> Sub Total</td>
                                   
     </tr>
 
      <tr>
            <td> 2000 PENDIDIKAN MENENGAH PERTAMA</td>                                  
     </tr>
     <tr>
            <td> 2001 SLTP UMUM</td>
                                   
     </tr>
     <tr>
            <td> 2002 SEKOLAH MENENGAH PERTAMA</td>
                                   
     </tr>
     <tr>
            <td> 2003 MADRASAH DINIYAH SANAWIYAH</td>
                                   
     </tr>
     <tr>
            <td> Sub Total</td>
                                   
     </tr>
    

     <tr>
            <td> 2002   SLTP KEJURUAN</td>                                  
     </tr>
     <tr>
            <td> 2104   SLTP KEJURUAN</td>                                  
     </tr>
    
     <tr>
            <td> Sub Total</td>                                   
     </tr>

      <tr>
            <td> 2003 SETINGKAT SLTP</td>                                  
     </tr>
     <tr>
            <td> 2103 SLTP LAINNYA</td>                                  
     </tr>
     <tr>
            <td> 2199 SLTP - TAK TERDEFENISI</td>                                  
     </tr>
     <tr>
            <td> Sub Total</td>                                   
     </tr>

     <tr>
            <td> 3000 PENDIDIKAN MENENGAH ATAS</td>
            </tr>
            <tr>                                   
            <td> 3001 SMU</td>
            </tr>
            <tr>                                   
            <td> 3801 SMU</td>
            </tr>
            <tr>                                   
            <td> 3802 MADRASAH DINIYAH ALIYAH</td> 
            </tr>
            <tr>                                  
            <td> Sub Total</td>                                       
     </tr>

      <tr>
            <td> 3002 SMK </td>
            </tr>
            <tr>                                   
            <td> 3100 SMK - TEKNOLOGI DAN REKAYASA</td>
            </tr>
            <tr>                                   
            <td> 3101 TEKNIK BANGUNAN</td>
            </tr>
            <tr>                                   
            <td> 3102 TEKNIK PLUMBING DAN SANITASI</td> 
            </tr>
             <tr>                                   
            <td> 3103 TEKNIK SURVEI DAN PEMETAAN</td> 
            </tr>
            <tr>                                   
            <td> 3104 TEKNIK KETENAGA LISTRIKAN</td> 
            </tr>
            <tr>                                   
            <td> 3105 TEKNIK PENDINGIN DAN TATA UDARA</td> 
            </tr>
            <tr>                                   
            <td> 3106 TEKNIK MESIN</td> 
            </tr>
            <tr>                                   
            <td> 3107 TEKNIK OTOMOTIF</td> 
            </tr>
            <tr>                                   
            <td> 3108 TEKNOLOGI PESAWAT UDARA</td> 
            </tr>
            <tr>                                   
            <td> 3109 TEKNIK PERKAPALAN</td> 
            </tr>
            <tr>                                   
            <td> 3110 TEKNOLOGI TEKSTIL</td> 
            </tr>
             <tr>                                   
            <td> 3111 TEKNOLOGI GRAFIKA</td> 
            </tr>
             <tr>                                   
            <td> 3112 GEOLOGI PERTAMBANGAN</td> 
            </tr>
             <tr>                                   
            <td> 3113 INSTRUMENTASI INDUSTRI</td> 
            </tr>
             <tr>                                   
            <td> 3114 TEKNIK KIMIA</td> 
            </tr>
            <tr> 
            <td>3115  PELAYARAN</td>
            </tr>
            <tr>   
            <td>3116  TEKNIK INDUSTRI   </td>
            </tr>
            <tr> 
            <td>3117  TEKNIK PERMINYAKAN    </td>
            </tr>
            <tr> 
            <td>
            3118  TEKNIK ELEKTRONIKA
            </td>     
            </tr>
            <tr>                                  
            <td> Sub Total</td>                                       
     </tr>

         <tr> 
         <td>
          3200 SMK - TEKNOLOGI INFORMASI DAN KOMUNIKASI  
          </td>
          </tr>
            <tr>                       
            <td>
          3201  TEKNIK TELEKOMUNIKASI   
          </td>
          </tr>
            <tr>  
            <td>
          3202  TEKNIK KOMPUTER DAN INFORMATIKA  
          </td>
          </tr>
            <tr>  
            <td>
          3203  TEKNIK BROADCASTING  
          </td>
          </tr>
            <tr>  
            <td>
            Sub Total   
             </td>
             </tr>



              <tr>
              <td>
              3300  SMK - KESEHATAN                       
              </td>
              </tr>
              <tr>
              <td>
              3301  KESEHATAN   
              </td>
              </tr>
              <tr>
              <td>
              3302  PERAWATAN SOSIAL    
              </td>
              </tr>
              <tr>
              <td>
               Sub Total   
               </td>
               </tr>


                <tr>
                <td>
                3400 SMK - SENI, KERAJINAN DAN 
                PARIWISATA                        
                <tr>
                <td>
                3401  SENI RUPA   

                <tr>
                <td>
                3402  DESAIN DAN PRODUKSI KRIA    

                <tr>
                <td>
                3403  SENI PERTUNJUKAN    

                <tr>
                <td>
                3404  PARIWISATA    

                <tr>
                <td>
                3405  TATA BOGA 
                </tr></td>  

                <tr>
                <td>
                3406  TATA KECANTIKAN 
                </tr></td>  

                <tr>
                <td>
                3407  TATA BUSANA
                </tr></td>   
                <tr>
                <td>
                  Sub Total
                    </tr></td> 


          <tr><td>
            3500  SMK - AGRIBISNIS DAN 
            AGROTEKNOLOGI                        
            <tr><td>
            
            3501  AGRIBISNIS PRODUKSI TANAMAN   
            <tr><td>
            
            3502  AGRIBISNIS PRODUKSI TERNAK    
            <tr><td>
            
            3503  AGRIBISNIS PRODUKSI SUMBERDAYA PERAIRAN   
            <tr><td>
            
            3504  MEKANISASI PERTANIAN
            </tr></td>     
            <tr><td>
            
            3505  AGRIBISNIS HASIL PERTANIAN
            </tr></td>     
            <tr><td>
            
            3506  PENYULUHAN PERTANIAN
            </tr></td>     
            <tr><td>
            3507  KEHUTANAN 
            </tr></td> 
<tr>
                <td>
                  Sub Total
                    </tr></td> 

            <tr><td>
            3600  SMK - BISNIS DAN MANAJEMEN                        
            </tr></td>
         
            <tr><td>
            3601  ADMINISTRASI    
            </tr></td>
            
            <tr><td>
            3602  KEUANGAN     
            </tr></td>
           
            <tr><td>
            3603  TATA NIAGA    
            </tr></td>
        <tr>
                <td>
                  Sub Total
                    </tr></td> 

             <tr><td>
            3700  SETINGKAT SMU LAINNYA                       
             </tr></td>
             <tr><td>
            3701  SLTA LAINNYA    
             </tr></td>
             <tr><td>
            3702  SLTA - TAK TERDEFINISI   
             </tr></td>
               <tr><td>
              Sub Total   
               </tr></td>
  <tr><td>
  4000  DIPLOMA I / AKTA I / DIPLOMA II / AKTA II
  </tr></td>
  <tr>  <td> 
  4100  DIPLOMA I / AKTA I
  </tr></td>
  <tr>  <td>                      
  4101  PENDIDIKAN
  </tr></td>
  <tr>  <td>  
  4102  PENDIDIKAN LUAR SEKOLAH
  </tr></td>
  <tr>  <td> 
  4104  PSIKOLOGI 
  </tr></td>
  <tr>  <td>
  4105  ILMU PENGETAHUAN SOSIAL
  </tr></td>
  <tr>  <td> 
  4106  PENDIDIKAN MORAL PANCASILA 
  </tr></td>
  <tr>  <td> 
  4107  ADMINISTRASI KEUANGAN 
  </tr></td>
  <tr>  <td>
  4109  SEJARAH
  </tr></td>
  <tr>  <td> 
  4110  HUKUM 
  </tr></td>
  <tr>  <td>
  4111  KESEKRETARIATAN 
  </tr></td>
  <tr>  <td>
  4112  OLAH RAGA KESEHATAN
  </tr></td>
  <tr>  <td>  
  4113  KESENIAN
  </tr></td>
  <tr>  <td>  
  4114  BAHASA INDONESIA
  </tr></td>
  <tr>  <td> 
  4115  BAHASA INGGRIS
  </tr></td>
  <tr>  <td>  
  4116  BAHASA ARAB
  </tr></td>
  <tr>  <td> 
  4118  EKONOMI
  </tr></td>
  <tr>  <td> 
  4119  ILMU PENGETAHUAN ALAM/FISIKA
  </tr></td>
  <tr>  <td>  
  4120  MATEMATIKA 
  </tr></td>
  <tr>  <td> 
  4121  PROGRAM KOMPUTER
  </tr></td>
  <tr>  <td>  
  4122  BIOLOGI
  </tr></td>
  <tr>  <td> 
  4123  ILMU KIMIA  
  </tr></td>
  <tr>  <td>
  4125  TEKNIK MESIN 
  </tr></td>
  <tr>  <td>  
  4126  TEKNIK SIPIL
  </tr></td>
  <tr>  <td>   
  4127  TEKNIK LISTRIK 
  </tr></td>
<tr>  <td> 
  4129  DIPLOMA I/AKTA I LAINNYA 
  </tr>  </td>     
 <tr>  <td> 
  4199  DIPLOMA I - TAK TERDEFINISI 
  </tr>  </td>   
   <tr>  <td> 
    Sub Total
    </tr>  </td> 


     <tr><td>
     4200 DIPLOMA II / AKTA II                        
     </tr></td>
  <tr><td>
  4201  PENDIDIKAN    
  </tr></td>
  <tr><td>
  4202  PENDIDIKAN SOSIAL    
  </tr></td>
  <tr><td>
  4203  PENDIDIKAN LUAR SEKOLAH    
  </tr></td>
  <tr><td>
  4204  PSIKOLOGI   
  </tr></td>
  <tr><td>
  4205  PENDIDIKAN MORAL PANCASILA     
  </tr></td>
  <tr><td>
  4206  ANTROPOLOGI   
  </tr></td>
  <tr><td>
  4208  HUKUM    
  </tr></td>
  <tr><td>
  4209  PENDIDIKAN KESEJAHTERAAN KELUARGA   
  </tr></td>
  <tr><td>
  4210  EKONOMI   
  </tr></td>
  <tr><td>
  4211  KESENIAN    
  </tr></td>
  <tr><td>
  4212  KESEKRETARIATAN   
  </tr></td>
  <tr><td>
  4213  ADMINISTRASI    
  </tr></td>
  <tr><td>
  4214  MARKETING   
  </tr></td>
  <tr><td>
  4215  AKUTANSI    
  </tr></td>
  <tr><td>
  4216  OLAH RAGA   
  </tr></td>
  <tr><td>
  4217  BAHASA INDONESIA    
  </tr></td>
  <tr><td>
  4218  BAHASA INGGRIS    
  </tr></td>
  <tr><td>
  4219  BAHASA ARAB   
  </tr></td>
  <tr><td>
  4220  ILMU PENGETAHUAN ALAM   
  </tr></td>
  <tr><td>
  4221  GEOGRAFI    
  </tr></td>
  <tr><td>
  4222  MATEMATIKA    
  </tr></td>
  <tr><td>
  4223  BIOLOGI   
  </tr></td>
  <tr><td>
  4224  KETERAMPILAN    
  </tr></td>
  <tr><td>
  4226  TEKNIK SIPIL    
  </tr></td>
  <tr><td>
  4227  TEKNIK MESIN    
  </tr></td>
  <tr><td>
  4228  TEKNIK LISTRIK    
  </tr></td>
  <tr><td>
  4229  KIMIA   
  </tr></td>
  <tr><td>
  4230  DIPLOMA II/AKTA II LAINNYA    
  </tr></td>
  <tr><td>
  4299  DIPLOMA II - TAK TERDEFINISI    
  </tr></td>
  <tr><td>
    Sub Total  
     </tr></td>


  <tr><td>
  5000 DIPLOMA III / AKTA III/ AKADEMI/S.MUDA      
  </tr></td>
  <tr><td>
  5100  DIII - ILMU PASTI ALAM                        
  </tr></td>
  <tr><td>
  5101  FISIKA     
  </tr></td>
  <tr><td>
  5102  ASTRONOMI    
  </tr></td>
  <tr><td>
  5103  BIOLOGI    
  </tr></td>
  <tr><td>
  5104  GEOLOGI DAN PERTAMBANGAN     
  </tr></td>
  <tr><td>
  5106  GEORAFI    
  </tr></td>
  <tr><td>
  5107  MATEMATIKA     
  </tr></td>
  <tr><td>
  5108  ILMU STATISTIK     
  </tr></td>
  <tr><td>
  5109  ILMU KOMPUTER  
  </tr></td>
  <tr><td>
  5110  KIMIA    
  </tr></td>
  <tr><td>
  5111  ILMU PASTI/ALAM LAINNYA    
  </tr></td>
  <tr><td>
  5199  ILMU PASTI - TAK TERDEFINISI   
  </tr></td>
  <tr><td>
    Sub Total   
  </tr></td>




  <tr><td>
  5200  DIII - TEKNOLOGI                        
  </tr></td>
  <tr><td>
  5201  TEKNIK GEODESI/GEOLOGI    
  </tr></td>
  <tr><td>
  5202  TEKNIK KIMIA    
  </tr></td>
  <tr><td>
  5203  TEKNIK SIPIL     
  </tr></td>
  <tr><td>
  5204  ARSITEKTUR    
  </tr></td>
  <tr><td>
  5205  TEKNIK LISTRIK    
  </tr></td>
  <tr><td>
  5206  TEKNIK MESIN    
  </tr></td>
  <tr><td>
  5207  TEKNIK INDUSTRI 
  </tr></td>
  <tr><td>
  5208  TEKNIK LOGAM    
  </tr></td>
  <tr><td> 
  5209  TEKNIK PERTAMBANGAN DAN MINYAK    
  </tr></td>
  <tr><td>
  5210  FISIKA TEKNIK   
  </tr></td>
  <tr><td>
  5211  TEKNIK NUKLIR   
  </tr></td>
  <tr><td>
  5214  TEKNOLOGI TEKSTIL   
  </tr></td>
  <tr><td>
  5215  TEKNOLOGI GRAFIKA   
  </tr></td>
  <tr><td>
  5216  TEKNOLOGI GAS DAN MINYAK BUMI   
  </tr></td>
  <tr><td>
  5217  TEKNOLOGI LAINNYA 
  </tr></td>
<tr><td>
  5299  TEKNOLOGI - TAK TERDEFINISI
  </tr></td>

  <tr><td>   
    Sub Total 
  </tr></td>

<tr><td>
  5300  DIII-PERTANIAN 
  </tr></td>
  <tr><td>                       
  5301  PERTANIAN UMUM 
  </tr></td>
  <tr><td>  
  5302  HORTIKULTURA   
  </tr></td>
  <tr><td>
  5303  HASIL PERTANIAN
  </tr></td>
  <tr><td>  
  5304  EKONOMI PERTANIAN 
  </tr></td>
  <tr><td> 
  5305  TEKNOLOGI DAN ILMU MAKANAN
  </tr></td>
  <tr><td>  
  5307  KEDOKTERAN HEWAN 
  </tr></td>
  <tr><td>  
  5308  PETERNAKAN 
  </tr></td>
  <tr><td>  
  5309  PERIKANAN  
  </tr></td>
  <tr><td>
  5310  KEHUTANAN 
  </tr></td>
  <tr><td> 
  5311  PERTANIAN LAINNYA
  </tr></td>
  <tr><td>  
  5399  PERTANIAN - TAK TERDEFINISI
  </tr></td>
    <tr><td>
    Sub Total  
    </tr></td>

<tr><td>
  5400  DIII - KESEHATAN                        
  </tr></td>
  <tr><td>
  5401  KEDOKTERAN UMUM   
  </tr></td>
  <tr><td>
  5402  KEDOKTERAN GIGI   
  </tr></td>
  <tr><td>
  5403  FARMASI   
  </tr></td>
  <tr><td>
  5404  PENILIK KESEHATAN/HYGINE/GIZI   
  </tr></td>
  <tr><td>
  5405  ANASTESI    
  </tr></td>
  <tr><td>
  5406  FISIOTERAPI   
  </tr></td>
  <tr><td>
  5407  PERAWAT    
  </tr></td>
  <tr><td>
  5408  PENATA RONTGEN    
  </tr></td>
  <tr><td>
  5409  KESEHATAN LAINNYA    
  </tr></td>
  <tr><td>
  5499  KESEHATAN - TAK TERDEFINISI   
  </tr></td>
  <tr><td>
  Sub Total   
  </tr></td>



  <tr><td>
  5500  DIII - ILMU PENGETAHUAN SOSIAL/BUDAYA                       
  </tr></td>
  <tr><td>
  5501  EKONOMI   
  </tr></td>
  <tr><td>
  5502  AKUNTANSI   
  </tr></td>
  <tr><td>
  5503  KEUANGAN DAN PAJAK    
  </tr></td>
  <tr><td>
  5504  HUKUM    
  </tr></td>
  <tr><td>
  5505  ILMU POLITIK    
  </tr></td>
  <tr><td>
  5506  SOSIOLOGI   
  </tr></td>
  <tr><td>
  5507  ANTROPOLOGI   
  </tr></td>
  <tr><td>
  5508  GEOGRAFI    
  </tr></td>
  <tr><td>
  5509  ADMINISTRASI    
  </tr></td>
  <tr><td>
  5510  SEKRETARIS    
  </tr></td>
  <tr><td>
  5511  MANAJEMENT     
  </tr></td>
  <tr><td>
  5512  PSIKOLOGI   
  </tr></td>
  <tr><td>
  5513  SEJARAH   
  </tr></td>
  <tr><td>
  5516  BAHASA INDONESIA    
  </tr></td>
  <tr><td>
  5517  BAHASA DAERAH   
  </tr></td>
  <tr><td>
  5518  BAHASA INGGRIS     
  </tr></td>
  <tr><td>
  5522  BAHASA ARAB   
  </tr></td>
  <tr><td>
  5524  BAHASA CINA   
  </tr></td>
  <tr><td>
  5525  BAHASA JEPANG   
  </tr></td>
  <tr><td>
  5526  KEAGAMAAN DAN ILMU KETUHANAN (IAIN)   
  </tr></td>
  <tr><td>
  5527  KESEJAHTERAAN KELUARGA    
  </tr></td>
  <tr><td>
  5528  SENI    
  </tr></td>                       
  
  <tr><td>
  5529  PUBLISTIK/PENERANGAN    
  </tr></td>
  <tr><td>
  5530  ILMU KOMUNIKASI MASSA   
  </tr></td>
  <tr><td>
  5531  PERPUSTAKAAN    
  </tr></td>
  <tr><td>
  5532  ANAK BUAH KAPAL DAN TEKNISI PELAYARAN   
  </tr></td>
  <tr><td>
  5533  POS DAN TELEKOMUNIKASI    
  </tr></td>
  <tr><td>
  5534  HOTEL, RESTORAN DAN PARAWISATA     
  </tr></td>
  <tr><td>
  5535  ILMU PENGETAHUAN SOSIAL/BUDAYA LAINNYA     
  </tr></td>
  <tr><td>
  5599  ILMU PENG. SOSIAL/BUDAYA - TAK TERDEFINISI    
  </tr></td>
  <tr><td>
    Sub Total 
  </tr></td>

  <tr><td>
  5600  DIII - ILMU PENDIDIKAN DAN KEGURUAN                       
  </tr></td>
  <tr><td>
  5601  PENDIDIKAN     
  </tr></td>
  <tr><td>
  5602  BIMBINGAN DAN PENYULUHAN     
  </tr></td>
  <tr><td>
  5604  PENDIDIKAN LUAR SEKOLAH    
  </tr></td>
  <tr><td>
  5605  PSIKOLOGI    
  </tr></td>
  <tr><td>
  5606  PENDIDIKAN SOSIAL    
  </tr></td>
  <tr><td>
  5607  PENDIDIKAN KESEJAHTERAAN SOSIAL    
  </tr></td>
  <tr><td>
  5608  PENDIDIKAN MORAL PANCASILA     
  </tr></td>
  <tr><td>
  5609  PERPUSTAKAAN     
  </tr></td>
  <tr><td>
  5610  ADMINISTRASI PENDIDIKAN    
  </tr></td>
  <tr><td>
  5611  ADMINISTRASI KEUANGAN    
  </tr></td>
  <tr><td>
  5612  KESEKRETARIATAN    
  </tr></td>
  <tr><td>
  5613  KESENIAN     
  </tr></td>
  <tr><td>
  5614  BAHASA DAERAH    
  </tr></td>
  <tr><td>
  5615  BAHSA INDONESIA   
  </tr></td>
  <tr><td>
  5616  BAHASA INGGRIS     
  </tr></td>
  <tr><td>
  5620  BAHSA JEPANG     
  </tr></td>
  <tr><td>
  5621  BAHASA ARAB    
  </tr></td>
  <tr><td>
  5622  ANTROPOLOGI    
  </tr></td>
  <tr><td>
  5623  SEJARAH   
  </tr></td>
  <tr><td>
  5624  EKONOMI    
  </tr></td>
  <tr><td>
  5625  AKUNTANSI    
  </tr></td>
  <tr><td>
  5626  MANAJEMENT    
  </tr></td>
  <tr><td>
  5627  HUKUM    
  </tr></td>
  <tr><td>
  5628  TATA BOGA/TATA BUSANA   
  </tr></td>
  <tr><td>
  5629  OLAH RAGA    
  </tr></td>
  <tr><td>
  5630  FISIKA     
  </tr></td>
  <tr><td>
  5631  ILMU KIMIA   
  </tr></td>
  <tr><td>
  5632  GEOGRAPI     
  </tr></td>
  <tr><td>
  5633  BIOLOGI/ILMU HAYAT     
  </tr></td>
  <tr><td>
  5634  MATEMATIK    
  </tr></td>
  <tr><td>
  5636  KEJURUAN     
  </tr></td>
  <tr><td>
  5637  SISTEM ANALIS KOMPUTER     
  </tr></td>
  <tr><td>
  5638  TEKNIK LABORATORIUM    
  </tr></td>
  <tr><td>
  5640  TEKNIK KIMIA     
  </tr></td>
  <tr><td>
  5641  TEKNIK SIPIL     
  </tr></td>
  <tr><td>
  5642  ARSITEKTUR     
  </tr></td>
  <tr><td>
  5643  TEKNIK LISTRIK     
  </tr></td>
  <tr><td>
  5644  TEKNIK MESIN     
  </tr></td>
  <tr><td>
  5645  ILMU PENDIDIKAN DAN KEGURUAN LAINNYA     
  </tr></td>
  <tr><td>
  5699  ILMU PENDIDIKAN DAN KEGURUAN - TAK TERDEFINISI     
  </tr></td>
    <tr><td>
    Sub Total   
    </tr></td>


  <tr><td>
  6000  SARJANA ( S1 )    
  </tr></td>
  <tr><td>
  6100  S1 - ILMU PASTI / ILMU ALAM                       
  </tr></td>
  <tr><td>
  6101  FISIKA    
  </tr></td>
  <tr><td>
  6102  ILMU GEOLOGI    
  </tr></td>
  <tr><td>
  6103  KIMIA     
  </tr></td>
  <tr><td>
  6104  BIOLOGI   
  </tr></td>
  <tr><td>
  6105  METEROLOGI DAN GEOPISIKA     
  </tr></td>
  <tr><td>
  6106  MATEMATIKA    
  </tr></td>
  <tr><td>
  6107  STATISTIK    
  </tr></td>
  <tr><td>
  6108  KOMPUTER     
  </tr></td>
  <tr><td>
  6109  ILMU PASTI/ILMU ALAM LAINNYA     
  </tr></td>
  <tr><td>
  6199  ILMU PASTI/ILMU ALAM - TAK TERDEFINISI    
  </tr></td>
    <tr><td>
    Sub Total   
    </tr></td>



  <tr><td>
  6200  S1 - TEKNOLOGI                        
  </tr></td>
  <tr><td>
  6201  TEKNIK GEODESI/GEOLOGI     
  </tr></td>
  <tr><td>
  6202  TEKNIK KIMIA    
  </tr></td>
  <tr><td>
  6203  TEKNIK SIPIL    
  </tr></td>
  <tr><td>
  6204  ARSITEKTUR     
  </tr></td>
  <tr><td>
  6205  TEKNIK LISTRIK     
  </tr></td>
  <tr><td>
  6206  TEKNIK MESIN     
  </tr></td>
  <tr><td>
  6207  TEKNIK INDUSTRI   
  </tr></td>
  <tr><td>
  6208  TEKNIK LOGAM     
  </tr></td>
  <tr><td>
  6209  TEKNIK PERTAMBANGAN DAN MINYAK     
  </tr></td>
  <tr><td>
  6210  FISIKA TEKNIK    
  </tr></td>
  <tr><td>
  6211  TEKNIK NUKLIR    
  </tr></td>
  <tr><td>
  6214  TEKNOLOGI TEKSTIL    
  </tr></td>
  <tr><td>
  6215  TEKNOLOGI GAS DAN MINYAK BUMI    
  </tr></td>
  <tr><td>
  6216  TEKNOLOGI GAS DAN MINYAK BUMI    
  </tr></td>
  <tr><td>
  6217  TEKNOLOGI LAINNYA    
  </tr></td>
  <tr><td>
  6299  TEKNOLOGI - TAK TERDEFINISI   
  </tr></td>
    <tr><td>
    Sub Total   
    </tr></td>


<tr><td>
  6300  S1 - PERTANIAN                        
  </tr></td>
  <tr><td>
  6301  PERTANIAN UMUM    
  </tr></td>
  <tr><td>
  6302  HORTIKULTURA    
  </tr></td>
  <tr><td>
  6303  HASIL PERTANIAN    
  </tr></td>
  <tr><td>
  6304  EKONOMI PERTANIAN   
  </tr></td>
  <tr><td>
  6305  TEKNOLOGI DAN ILMU MAKANAN     
  </tr></td>
  <tr><td>
  6306  ILMU TANAH DAN AIR    
  </tr></td>
  <tr><td>
  6307  KEDOKTERAN HEWAN    
  </tr></td>
  <tr><td>
  6308  PERTERNAKAN   
  </tr></td>
  <tr><td>
  6309  PERIKANAN   
  </tr></td>
  <tr><td>
  6310  KEHUTANAN   
  </tr></td>
  <tr><td>
  6311  PERTANIAN LAINNYA   
  </tr></td>
  <tr><td>
  6312  PERTANIAN - TAK TERDIFINISI   
  </tr></td>
    <tr><td>
    Sub Total   
    </tr></td>


<tr><td>
  6400  S1 - KESEHATAN                        
  </tr></td>
  <tr><td>
  6401  KEDOKTERAN UMUM    
  </tr></td>
  <tr><td>
  6402  KEDOKTERAN GIGI   
  </tr></td>
  <tr><td>
  6403  FARMASI   
  </tr></td>
  <tr><td>
  6404  KESEHATAN LAINNYA   
  </tr></td>
  <tr><td>
  6499  KESEHATAN - TAK TERDEFINISI   
  </tr></td>
    <tr><td>
    Sub Total   
    </tr></td>


<tr><td>
  6500 S1 - ILMU PENGETAHUAN SOSIAL/BUDAYA                       
  </tr></td>
  <tr><td>
  6501  EKONOMI    
  </tr></td>
  <tr><td>
  6502  AKUNTANSI     
  </tr></td>
  <tr><td>
  6503  HUKUM   
  </tr></td>
  <tr><td>
  6504  ILMU POLITIK    
  </tr></td>
  <tr><td>
  6505  SOSIOLOGI    
  </tr></td>
  <tr><td>
  6506  ANTROPOLOGI   
  </tr></td>
  <tr><td>
  6507  GEOGRAFI     
  </tr></td>
  <tr><td>
  6508  ADMINISTRASI      
  </tr></td>
  <tr><td>
  6509  MANAJEMENT     
  </tr></td>
  <tr><td>
  6510  PSIKOLOGI    
  </tr></td>
  <tr><td>
  6511  SEJARAH   
  </tr></td>
  <tr><td>
  6512  ARKEOLOGI   
  </tr></td>
  <tr><td>
  6513  FILSAFAT    
  </tr></td>
  <tr><td>
  6514  BAHASA INDONESIA    
  </tr></td>
  <tr><td>
  6515  BAHASA DAERAH   
  </tr></td>
  <tr><td>
  6516  BAHASA INGGRIS     
  </tr></td>
  <tr><td>
  6517  BAHASA JERMAN    
  </tr></td>
  <tr><td>
  6518  BAHASA PERANCIS   
  </tr></td>
  <tr><td>
  6520  BAHSA ARAB    
  </tr></td>
  <tr><td>
  6521  BAHASA RUSIA    
  </tr></td>
  <tr><td>
  6522  BAHASA CINA   
  </tr></td>
  <tr><td>
  6523  BAHASA JEPANG   
  </tr></td>
  <tr><td>
  6524  KEAGAMAAN DAN ILMU KETUHANAN (IAIN)    
  </tr></td>
  <tr><td>
  6525  KESEJAHTERAAN KELUARGA    
  </tr></td>
  <tr><td>
  6526  PUBLISTIK   
  </tr></td>
  <tr><td>
  6527  KOMUNIKASI MASSA    
  </tr></td>
  <tr><td>
  6528  PERPUSTAKAAN    
  </tr></td>
  <tr><td>
  6529  ILMU PENGETAHUAN SOSIAL/BUDAYA LAINNYA     
  </tr></td>
  <tr><td>
  6599  ILMU PENGETAHUAN SOSIAL/BUDAYA - TAK TERDEFINISI    
  </tr></td>
    <tr><td>
    Sub Total   
    </tr></td>



  <tr><td>
  6600  S1 - ILMU PENDIDIKAN DAN KEGURUAN                       
  </tr></td>
  <tr><td>
  6601  PENDIDIKAN UMUM    
  </tr></td>
  <tr><td>
  6602  ADMINISTRASI PENDIDIKAN    
  </tr></td>
  <tr><td>
  6603  PEMBINAAN DAN PENYULUHAN     
  </tr></td>
  <tr><td>
  6604  KURIKULUM    
  </tr></td>
  <tr><td>
  6605  PSIKOLOGI   
  </tr></td>
  <tr><td>
  6606  PINDIDIKAN SOSIAL   
  </tr></td>
  <tr><td>
  6607  PENDIDIKAN MORAL PANCASILA    
  </tr></td>
  <tr><td>
  6608  PERPUSTAKAAN     
  </tr></td>
  <tr><td>
  6609  KESEJAHTERAAN KELUARGA     
  </tr></td>
  <tr><td>
  6610  ADMINISTRASI     
  </tr></td>
  <tr><td>
  6611  ANTROPOLOGI    
  </tr></td>
  <tr><td>
  6612  GEOGRAFI    
  </tr></td>
  <tr><td>
  6613  SEJARAH    
  </tr></td>
  <tr><td>
  6614  BAHASA INDONESIA     
  </tr></td>
  <tr><td>
  6615  BAHASA DAERAH    
  </tr></td>
  <tr><td>
  6616  BAHASA INGGRIS    
  </tr></td>
  <tr><td>
  6617  BAHASA JERMAN    
  </tr></td>
  <tr><td>
  6618  BAHASA PERANCIS    
  </tr></td>
  <tr><td>
  6619  BAHASA BELANDA     
  </tr></td>
  <tr><td>
  6620  BAHASA JEPANG   
  </tr></td>
  <tr><td>
  6621  BAHASA ARAB   
  </tr></td>
  <tr><td>
  6622  OLAH RAGA    
  </tr></td>
  <tr><td>
  6623  TATA BOGA   
  </tr></td>
  <tr><td>
  6624  TATA GRAHA    
  </tr></td>
  <tr><td>
  6625  KESENIAN    
  </tr></td>
  <tr><td>
  6626  EKONOMI   
  </tr></td>
  <tr><td>
  6627  HUKUM   
  </tr></td>
  <tr><td>
  6628  MANAJEMANT     
  </tr></td>
  <tr><td>
  6629  GEOGRAFI     
  </tr></td>
  <tr><td>
  6630  FISIKA     
  </tr></td>
  <tr><td>
  6631  ILMU KIMIA     
  </tr></td>
  <tr><td>
  6632  BIOLOGI  
  </tr></td>
  <tr><td>
  6633  MATEMATIKA     
  </tr></td>  
  <tr><td>
  6634  TEKNIK MESIN     
  </tr></td>
  <tr><td>
  6635  TEKNIK SIPIL    
  </tr></td>
  <tr><td>
  6636  ARSITEKTUR     
  </tr></td>
  <tr><td>
  6637  TEKNIK INDUSTRI  
  </tr></td>
  <tr><td>
  6638  TEKNIK LISTRIK     
  </tr></td>
  <tr><td>
  6639  ILMU PENDIDIKAN DAN KEGURUAN LAINNYA    
  </tr></td>
  <tr><td>
  6699  ILMU PENDIDIKAN DAN KEGURUAN - TAK TERDEFINISI     
  </tr></td>
    <tr><td>
    Sub Total    
    </tr></td>



<tr><td>
  7000  SARJANA ( S2 )     
  </tr></td>
  <tr><td>
  7100  S2 - ILMU PASTI/ILMU ALAM                       
  </tr></td>
  <tr><td>
  7101  FISIKA     
  </tr></td>
  <tr><td>
  7103  KIMIA    
  </tr></td>
  <tr><td>
  7104  BIOLOGI    
  </tr></td>
  <tr><td>
  7105  METEROLOGI DAN GEOFISIKA     
  </tr></td>
  <tr><td>
  7106  MATEMATIKA     
  </tr></td>
  <tr><td>
  7108  KOMPUTER     
  </tr></td>
  <tr><td>
  7109  ILMU PASTI/ILMU ALAM LAINNYA     
  </tr></td>
  <tr><td>
  7199  ILMU PASTI/ILMU ALAM - TAK TERDEFINISI     
  </tr></td>
    <tr><td>
    Sub Total   
    </tr></td>

<tr><td>
  7200  S2 - TEKNOLOGI                        
  </tr></td>
  <tr><td>
  7202  TEKNIK KIMIA    
  </tr></td>
  <tr><td>
  7203  TEKNIK SIPIL    
  </tr></td>
  <tr><td>
  7205  TEKNIK LISTRIK    
  </tr></td>
  <tr><td>
  7206  TEKNIK MESIN    
  </tr></td>
  <tr><td>
  7212  PENGOLAH GULA   
  </tr></td>
  <tr><td>
  7299  TEKNOLOGI LAINNYA   
  </tr></td>
  <tr><td>  
    Sub Total 
  </tr></td>


  <tr><td>
  7300  S2 - PERTANIAN                        
  </tr></td>
  <tr><td>
  7301  PERTANIAN UMUM     
  </tr></td>
  <tr><td>
  7303  HASIL PERTANIAN    
  </tr></td>
  <tr><td>
  7304  EKONOMI PERTANIAN    
  </tr></td>
  <tr><td>
  7305  TEKNOLOGI DAN ILMU MAKANAN     
  </tr></td>
  <tr><td>
  7306  ILMU TANAH DAN AIR     
  </tr></td>
  <tr><td>
  7307  KEDOKTERAN HEWAN     
  </tr></td>
  <tr><td>
  7308  PERTERNAKAN    
  </tr></td>
  <tr><td>
  7309  PERIKANAN    
  </tr></td>
  <tr><td>
  7310  KEHUTANAN    
  </tr></td>
  <tr><td>
  7311  PERTANIAN LAINNYA    
  </tr></td>
    <tr><td>
    Sub Total  
    </tr></td>

<tr><td>
  7400  S2 - KESEHATAN                        
  </tr></td>
  <tr><td>
  7401  KEDOKTERAN UMUM    
  </tr></td>
  <tr><td>
  7403  FARMASI    
  </tr></td>
  <tr><td>
  7404  KESEHATAN LAINNYA    
  </tr></td>
  <tr><td>
  7499  KESEHATAN - TAK TERDEFINISI    
  </tr></td>
    <tr><td>
    Sub Total
    </tr></td>

  <tr><td>
  7500  S2 - ILMU PENGETAHUAN SOSIAL/BUDAYA                       
  </tr></td>
  <tr><td>
  7501  EKONOMI    
  </tr></td>
  <tr><td>
  7502  AKUNTANSI    
  </tr></td>
  <tr><td>
  7503  HUKUM    
  </tr></td>
  <tr><td>
  7504  ILMU POLITIK     
  </tr></td>
  <tr><td>
  7505  SOSIOLOGI    
  </tr></td>
  <tr><td>
  7506  ANTROPOLOGI    
  </tr></td>
  <tr><td>
  7508  ADMINISTRASI     
  </tr></td>
  <tr><td>
  7509  MANAJEMENT     
  </tr></td>
  <tr><td>
  7510  PSIKOLOGI    
  </tr></td>
  <tr><td>
  7511  SEJARAH   
  </tr></td>
  <tr><td>
  7514  BAHASA INDONESIA     
  </tr></td>
  <tr><td>
  7516  BAHASA INGGRIS     
  </tr></td>
  <tr><td>
  7520  BAHASA ARAB    
  </tr></td>
  <tr><td>
  7523  BAHASA JEPANG    
  </tr></td>
  <tr><td>
  7524  KEAGAMAAN DAN ILMU KETUHANAN (IAIN)    
  </tr></td>
  <tr><td>
  7526  PUBLISTIK    
  </tr></td>
  <tr><td>
  7527  KOMUNIKASI MASSA     
  </tr></td>
  <tr><td>
  7528  PERPUSTAKAAN     
  </tr></td>
  <tr><td>
  7529  ILMU PENGETAHUAN SOSIAL/BUDAYA LAINNYA     
  </tr></td>
  <tr><td>
  7599  ILMU PENGETAHUAN SOSIAL/BUDAYA - TAK TERDEFINISI     
  </tr></td>
    <tr><td>
    Sub Total 
    </tr></td>


  <tr><td>
  7600  S2 - ILMU PENDIDIKAN DAN KEGURUAN                       
  </tr></td>
  <tr><td>
  7601  PENDIDIKAN UMUM   
  </tr></td>
  <tr><td>
  7602  ADMINISTRASI PENDIDIKAN   
  </tr></td>
  <tr><td>
  7603  PEMBINAAN DAN PEYULUHAN   
  </tr></td>
  <tr><td>
  7605  PSIKOLOGI   
  </tr></td>
  <tr><td>
  7606  PINDIDIKAN SOSIAL   
  </tr></td>
  <tr><td>
  7610  ADMINISTRASI    
  </tr></td>
  <tr><td>
  7611  ANTROPOLOGI   
  </tr></td>
  <tr><td>
  7613  SEJARAH   
  </tr></td>
  <tr><td>
  7614  BAHASA INDONESIA    
  </tr></td>
  <tr><td>
  7616  BAHASA INGGRIS    
  </tr></td>
  <tr><td>
  7618  BAHASA PERANCIS   
  </tr></td>
  <tr><td>
  7621  BAHASA ARAB   
  </tr></td>
  <tr><td>
  7622  OLAH RAGA   
  </tr></td>
  <tr><td>
  7625  KESENIAN    
  </tr></td>
  <tr><td>
  7626  EKONOMI   
  </tr></td>
  <tr><td>
  7627  HUKUM   
  </tr></td>
  <tr><td>
  7628  MANAJEMEN   
  </tr></td>
  <tr><td>
  7630  FISIKA    
  </tr></td>
  <tr><td>
  7631  ILMU KIMIA    
  </tr></td>
  <tr><td>
  7632  BIOLOGI   
  </tr></td>
  <tr><td>
  7633  MATEMATIKA    
  </tr></td>
  <tr><td>
  7634  TEKNIK MESIN    
  </tr></td>
  <tr><td>
  7636  ARSITEKTUR    
  </tr></td>
  <tr><td>
  7637  TEKNIK INDUSTRI   
  </tr></td>
  <tr><td>
  7639  ILMU PENDIDIKAN DAN KEGURUAN LAINNYA    
  </tr></td>
  <tr><td>
  7699  ILMU PENDIDIKAN DAN KEGURUAN - TAK TERDEFINISI    
  </tr></td>
    <tr><td>
    Sub Total   
    </tr></td>
     <tr><td>
  TOTAL  
    </tr></td>
       
    <tbody>';    


$html .= '
    </tbody>
  </table> ';


echo $html;

exit;


?>



