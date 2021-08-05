
<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\XrayAsset;
// use backend\assets\LoginXtrayAsset;
use yii\helpers\Html;
// use yii\bootstrap\Nav;
// use yii\bootstrap\NavBar;
// use yii\widgets\Breadcrumbs;
// use common\widgets\Alert;

?>

   <style>
.footer {
   position: fixed;
   right:  50;
   /*left:  50;*/
   bottom: 0;
   width: 80%;
   background-color: white;
   color: white;
   text-align: center;
}
</style>
<?php if (Yii::$app->controller->action->id === 'login') {
// LoginXtrayAsset::register($this);
 
    echo $this->render(
        'xray/main-login'
        ,['content' => $content]
    );
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else { ?>

<?php 
$this->beginPage(); 

XrayAsset::register($this);

?>
         <!-- 'themes2/js/jquery.min.js', -->
   <script src="/kartu/themes2/js/jquery.min.js"></script>

<style type="text/css"></style>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <!-- xray -->
     <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- end -->
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>


<body>
   <?php $this->beginBody() ?>
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
            <?= $this->render('xray/sidebar.php') ?>
        
         <!-- Responsive Breadcrumb End-->
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <!-- TOP Nav Bar -->
            <?= $this->render('xray/topnavbar.php') ?>
            
            <!-- TOP Nav Bar END -->
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-12">
                     Here Add Your HTML Content.....
                  </div>
               </div>
            </div>
                        <?= $content ?>

             <div class="footer">
            <!-- Footer -->
            <?= $this->render('xray/footer.php') ?>          
            <!-- Footer END -->
         </div>
         </div>
      </div>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
   </body>
   <?php } ?>