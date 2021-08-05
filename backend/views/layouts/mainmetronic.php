<?php

/* @var $this \yii\web\View */
/* @var $content string */

// use backend\assets\AppAsset;
use backend\assets\MetronicAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

// AppAsset::register($this);
MetronicAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Latest updates and statistic charts">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--begin::Web font -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>

      <link href=  "/themes/metronic/default/dist/default/assets/demo/default/media/img/logo/favicon.ico"/>

        <!--end::Web font -->
        <!--begin::Base Styles -->  
        <!--begin::Page Vendors -->
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

</head>
<body  class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >


        <!-- begin:: Page -->
        <div class="m-grid m-grid--hor m-grid--root m-page">
            <!-- BEGIN: Header -->
           


                                    <!-- END -->
                            <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                                    <a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                                        <span></span>
                                    </a>
                                    <!-- END -->
                            <!-- BEGIN: Responsive Header Menu Toggler -->
                                 
                                    <!-- END -->
            <!-- BEGIN: Topbar Toggler -->
                                 
                                    <!-- BEGIN: Topbar Toggler -->
                        
                        <!-- END: Brand -->
                    <?= $this->render('/metronic/_topnavbar.php') ?>
                  
                            <!-- END: Topbar -->
              
            <!-- END: Header -->        
        <!-- begin::Body -->
<?php $this->beginBody() ?>
            <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
                <!-- BEGIN: Left Aside -->
                <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
                    <i class="la la-close"></i>
                </button>

                <div id="m_aside_left" class="m-grid__item  m-aside-left  m-aside-left--skin-dark ">
                    <!-- BEGIN: Aside Menu -->
                <?= $this->render('/metronic/_sidebar.php') ?>

                    <!-- END: Aside Menu -->
                </div>
                <!-- END: Left Aside -->

                <div class="m-grid__item m-grid__item--fluid m-wrapper">
                    <!-- BEGIN: Subheader -->
                        <?=$content?>
                   
                    <!-- END: Subheader -->
                   
                </div>
            </div>
            <!-- end:: Body -->


<!-- begin::Footer -->

                    <?= $this->render('/metronic/_footer.php') ?>

           
            <!-- end::Footer -->
        </div>
        <!-- end:: Page -->
                    <!-- begin::Quick Sidebar -->
       
        <!-- end::Quick Sidebar -->         
        <!-- begin::Scroll Top -->
       
        <!-- end::Scroll Top -->            <!-- begin::Quick Nav -->
            <!--
            <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Showcase" data-placement="left">
                <a href="">
                    <i class="la la-eye"></i>
                </a>
            </li>
            <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Pre-sale Chat" data-placement="left">
                <a href="" >
                    <i class="la la-comments-o"></i>
                </a>
            </li>
            -->
        
        <!-- begin::Quick Nav -->   


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
