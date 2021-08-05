<?php
use backend\models\Pendidikan;
use aryelds\sweetalert\SweetAlert;
use yii\bootstrap\Html;


/* @var $this yii\web\View */

$this->title = 'SELAMAT DATANG DI WEBSITE PENCARI KERJA';



// $idname = Yii::$app->user->identity->username;
// $cekdata  = Pendidikan::find()
// -> where(['id_daftar'=> $idname])->one();
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">





<!-- ?php if (Yii::$app->user->identity->level == 40){ ?> -->
<!-- ?php if (!$cekdata) {?> -->
<?php
echo SweetAlert::widget([
    'options' => [
       'title' => Html::tag('big', 'Selamat Datang, Silahkan isi data', ['style' => 'color: #00008B']),
    // 'title' => Html::tag('big', 'Anda Gagal, dan pindah ke jalur zonasi<br/>Silahkan daftar ulang untuk lanjut jalur zonasi', ['style' => 'color: #00008B']),

        'type' => SweetAlert::TYPE_SUCCESS,
        'showConfirmButton' => false,
        'text' => Html::a('Klik Untuk Pengisian Data', ['keterangan/createidentitas'/*, 'id' => $id_bio*/], ['class' => 'profile-link']),
        'theme' => SweetAlert::THEME_FACEBOOK,
        'html' => true

    ]            // self.location="http://ppdb.pariamankota.go.id";

]);?>
<!-- ?php }?> -->
<!-- ?php }?> -->

            <!-- <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div> -->
        <!--     <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div> -->
           <!--  <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div> -->
        </div>

    </div>
</div>
