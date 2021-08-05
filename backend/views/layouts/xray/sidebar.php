  <?php 

use yii\helpers\Url;
use yii\helpers\Html;

// $imgPath = Yii::getAlias('@root').'/images';
$imgPath = Yii::getAlias('@web');
// $imgPath = Yii::getAlias('@root');
    ?>




 <div class="iq-sidebar">
            <div class="iq-sidebar-logo d-flex justify-content-between">
               <a href="index.html">
               <!-- <img src="images/logo.png" class="img-fluid" alt=""> -->
                <?=Html::img($imgPath.'/themes2/images/logo.png',['class'=>'img-fluid'],['alt'=>'']); ?>
               <span>XRay</span>
               </a>
               <div class="iq-menu-bt-sidebar">
                  <div class="iq-menu-bt align-self-center">
                     <div class="wrapper-menu">
                        <div class="main-circle"><i class="ri-more-fill"></i></div>
                           <div class="hover-circle"><i class="ri-more-2-fill"></i></div>
                     </div>
                  </div>
               </div>
            </div>
            <div id="sidebar-scrollbar">
               <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                     <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Dashboard</span></li>
                     <li>

                        <!-- echo    '<a href="../keterangan/create"  class="btn btn-success btn-block">mylinktext</a>'; -->

                        <a href="<?= Url::to(['/keterangan/create']) ?>" class="iq-waves-effect"><i class="ri-hospital-fill"></i><span>KETERANGAN</span></a>

                        <!-- a href="keterangan/create" class="iq-waves-effect"><i class="ri-hospital-fill"></i><span>KETERANGAN</span></a> -->
                     </li>                     
                   
                    
                     
                  
                   
                           <li><a href="#"><i class="ri-record-circle-line"></i>Menu 3</a></li>
                           <li><a href="#"><i class="ri-record-circle-line"></i>Menu 4</a></li>
                        </ul>
                    
               </nav>
               <div class="p-3"></div>
            </div>
         </div>