
<?php
// use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
// use backend\assets\LoginXtrayAsset;

// dmstr\web\AdminLteAsset::register($this);
// LoginXtrayAsset::register($this);

// LoginXtrayAsset::register($this);
$imgPath = Yii::getAlias('@web');

$fieldOptions1 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-envelope form-control-feedback'></span>"
];
?>

<!-- // display success message -->
<?php if (Yii::$app->session->hasFlash('success')): ?>
    <div class="alert alert-success alert-dismissable">
         <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
         <h4><i class="icon fa fa-check"></i>Saved!</h4>
         <?= Yii::$app->session->getFlash('success') ?>
    </div>
<?php endif; ?>

<!-- // display error message -->
<?php if (Yii::$app->session->hasFlash('error')): ?>
    <div class="alert alert-danger alert-dismissable">
         <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
         <h4><i class="icon fa fa-check"></i>Saved!</h4>
         <?= Yii::$app->session->getFlash('error') ?>
    </div>
<?php endif; ?>

<?php $this->beginPage() ?>

<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
 
<!-- <!DOCTYPE html> -->
<!-- <html lang="en"> -->
   <!-- <head> -->
      <!-- Required meta tags -->
      <!-- <meta charset="utf-8"> -->
      <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
      <!-- <title>XRay - Responsive Bootstrap 4 Admin Dashboard Template</title> -->
      <!-- Favicon -->
      <link rel="shortcut icon" href="images/favicon.ico" />
      <!-- Bootstrap CSS -->
      <!-- link rel="stylesheet" href="css/bootstrap.min.css"> -->
       <link href="/kartu/themes2/css/bootstrap.min.css" rel="stylesheet">
      <!-- Typography CSS -->
      <!-- link rel="stylesheet" href="css/typography.css"> -->
       <link href="/kartu/themes2/css/typography.css" rel="stylesheet">

      <!-- Style CSS -->
      <!-- link rel="stylesheet" href="css/style.css"> -->
       <link href="/kartu/themes2/css/style.css" rel="stylesheet">

      <!-- Responsive CSS -->
      <!-- link rel="stylesheet" href="css/responsive.css"> -->
       <link href="/kartu/themes2/css/responsive.css" rel="stylesheet">

   <!-- </head> -->

    <!-- link rel="stylesheet" href="/kartu/themes2/css/bootstrap.min.css"> -->
      <!-- Typography CSS -->
      <!-- link rel="stylesheet" href="/kartu/themes2/css/typography.css"> -->
      <!-- Style CSS -->
      <!-- link rel="stylesheet" href="/kartu/themes2/css/style.css"> -->
      <!-- Responsive CSS -->
      <!-- link rel="stylesheet" href="/kartu/themes2/css/responsive.css"> -->

<style type="text/css">
  #password, #username {
    width: 200px;
    padding: 8px;
    border: 1px solid #ddd;
}
input[type="submit"] {
    padding: 5px;
    width: 80px;
    border: 1px solid #ddd;
}

</style>
   <body>
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
        <!-- Sign in Start -->
          <section class="sign-in-page">
            <div class="container sign-in-page-bg mt-5 p-0">

                  <form class="login100-form validate-form" action=" " method="POST">


            <!-- ?php $form = ActiveForm::begin(['class' => 'login100-form validate-form']); ?> -->
            <?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => false]); ?>
           
                <div class="row no-gutters">
                    <div class="col-md-6 text-center">
                        <div class="sign-in-detail text-white">
                            <a class="sign-in-logo mb-5" href="#">
                              <!-- img src="images/logo-white.png" class="img-fluid" alt="logo"> -->
                              <?=Html::img($imgPath.'/themes2/images/logo-white.png',['class'=>'img-fluid'],['alt'=>'logo']); ?>

                            </a>
                            <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="0">
                                <div class="item">
                                    <!-- img src="images/login/1.png" class="img-fluid mb-4" alt="logo"> -->
                              <?=Html::img($imgPath.'/themes2/images/login/a.jpeg',['class'=>'img-fluid mb-4 '],['alt'=>'logo']); ?>

                                    <!-- <h4 class="mb-1 text-white">Manage your orders</h4> -->
                                    <!-- <p>It is a long established fact that a reader will be distracted by the readable content.</p> -->
                                </div>
                                <div class="item">
                                    <!-- img src="images/login/2.png" class="img-fluid mb-4" alt="logo"> -->
                              <?=Html::img($imgPath.'/themes2/images/login/b.jpeg',['class'=>'img-fluid mb-4 '],['alt'=>'logo']); ?>

                                    <!-- <h4 class="mb-1 text-white">Manage your orders</h4> -->
                                    <!-- <p>It is a long established fact that a reader will be distracted by the readable content.</p> -->
                                </div>
                                <div class="item">
                                    <!-- img src="images/login/3.png" class="img-fluid mb-4" alt="logo"> -->
                              <?=Html::img($imgPath.'/themes2/images/login/c.jpeg',['class'=>'img-fluid mb-4 '],['alt'=>'logo']); ?>

                                    <!-- <h4 class="mb-1 text-white">Manage your orders</h4> -->
                                    <!-- <p>It is a long established fact that a reader will be distracted by the readable content.</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <div class="sign-in-from">
                            <h1 class="mb-0">Silahkan Login</h1>
                            <p>Masukkan User dan password untuk mengakses admin panel.</p>
                            <form class="mt-4">
                                <div class="form-group">
                                    <!-- <label for="exampleInputEmail1">User Name</label> -->
                                    <!-- input type="email" class="form-control mb-0" id="exampleInputEmail1" placeholder="Enter email"> -->
                                     <!-- ?= Html::activeInput('text', $model, 'username', ['class' => 'form-control mb-0',  'placeholder' => 'User Name']) ?> -->

                                   

         <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
             <?= $form->field($model, 'password')->passwordInput(['id'=>'myInput']) ?>
                                </div>
                                <div class="form-group">
                                    <!-- label for="exampleInputPassword1">Password</label> -->
                                    <!-- <a href="#" class="float-right">Forgot password?</a> -->
                                   <!-- input type="text" class="form-control mb-0" id="loginform-password" placeholder="Password"> -->
                                     <!-- ?= Html::activeInput('password', $model, 'password', ['class' => 'form-control mb-0','placeholder' => 'Password']) ?> -->

                                    
                                     <!-- ?php echo $form->textField($model,'password',array( 'id'=>"passwd", 'name'=>'passwd')); ?> -->
<!-- ?= Html::checkbox('reveal-password', false, ['id' => 'my-password-field-id']) ?>  -->

<!-- ?php Html::checkbox('reveal-password', false, ['id' => 'reveal-password', 'label' => 'Show Password']); ?> -->
<!-- ?= Html::label('Show password', 'reveal-password') ?> -->

<!-- ?= Html::checkbox('reveal-password', false, ['id' => 'reveal-password']) ?> ?= Html::label('Show password', 'reveal-password') ?> -->
<!-- An element to toggle between password visibility -->
<input type="checkbox" onclick="myFunction()">Lihatkan Password
                                </div>



<!-- Password field -->
<!-- Password: <input type="password" value="FakePSW" id="myInput"> -->



                      <div class="d-inline-block w-100">
                                    <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <!-- <label class="custom-control-label" for="customCheck1">Remember Me</label> -->
                                    </div>
                                    <button type="submit" class="btn btn-primary float-right">Sign in</button>
                                </div>
                                <div class="sign-info">
                                    <!-- span class="dark-color d-inline-block line-height-2">Don't have an account? <a href="?= Yii::$app->urlManagerFrontend->createUrl(['/signup']) ?>">Sign up</a></span> -->
                                    <span class="dark-color d-inline-block line-height-2">Don't have an account? <a href="signup">Sign up</a></span>
                                    <ul class="iq-social-media">
                                        <li><a href="#"><i class="ri-facebook-box-line"></i></a></li>
                                        <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                                        <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


         <?php ActiveForm::end(); ?>
            <br>
            <?php if (Yii::$app->session->hasFlash('failure')): ?>
            <div class="alert alert-warning" style="font-size: 16px;">
                <center><?= Yii::$app->session->getFlash('failure') ?></center>
            </div>
            <?php endif; ?>
        <!-- Sign in END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->


<script type="text/javascript">
  function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

</script>


   <script src="/kartu/themes2/js/jquery.min.js"></script>
      <script src="/kartu/themes2/js/popper.min.js"></script>
      <script src="/kartu/themes2/js/bootstrap.min.js"></script>
      <!-- Appear JavaScript -->
      <script src="/kartu/themes2/js/jquery.appear.js"></script>
      <!-- Countdown JavaScript -->
      <script src="/kartu/themes2/js/countdown.min.js"></script>
      <!-- Counterup JavaScript -->
      <script src="/kartu/themes2/js/waypoints.min.js"></script>
      <script src="/kartu/themes2/js/jquery.counterup.min.js"></script>
      <!-- Wow JavaScript -->
      <script src="/kartu/themes2/js/wow.min.js"></script>
      <!-- Apexcharts JavaScript -->
      <script src="/kartu/themes2/js/apexcharts.js"></script>
      <!-- Slick JavaScript -->
      <script src="/kartu/themes2/js/slick.min.js"></script>
      <!-- Select2 JavaScript -->
      <script src="/kartu/themes2/js/select2.min.js"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="/kartu/themes2/js/owl.carousel.min.js"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="/kartu/themes2/js/jquery.magnific-popup.min.js"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="/kartu/themes2/js/smooth-scrollbar.js"></script>
      <!-- Chart Custom JavaScript -->
      <script src="/kartu/themes2/js/chart-custom.js"></script>
      <!-- Custom JavaScript -->
      <script src="/kartu/themes2/js/custom.js"></script>
   </body>
</html>

<?php $this->endPage() ?>