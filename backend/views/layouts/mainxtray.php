<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\XrayAsset;
use yii\helpers\Html;
// use yii\bootstrap\Nav;
// use yii\bootstrap\NavBar;
// use yii\widgets\Breadcrumbs;
// use common\widgets\Alert;

XrayAsset::register($this);
?>
<?php $this->beginPage() ?>
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
<body class="sidebar-main-menu">

    <style>
.footer {
   position: fixed;
   right: : 0;
   bottom: 0;
   width: 100%;
   /*background-color: red;*/
   color: white;
   text-align: center;
}
</style>

<?php
// if (Yii::$app->user->isGuest) {
if (Yii::$app->controller->action->id === 'login') { 
    echo $this->render(
        'xray/main-login'
        ,['content' => $content]
    );
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else { ?>
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
         
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <!-- TOP Nav Bar -->
            <?= $this->render('xray/topnavbar.php') ?>
       
         <!-- TOP Nav Bar END -->
                       <!-- div class="container-fluid"> -->
                        <?= $content ?>
                    <!-- /div> -->
           
            <!-- Footer -->
             <div class="footer">
                    <?= $this->render('xray/footer.php') ?>
                </div>
   
      <!-- Footer END -->
</div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
<?php } ?>