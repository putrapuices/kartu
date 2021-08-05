<?php
namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\Capil;
use frontend\models\CapilSearch;

use backend\models\Akun;
use backend\models\UserForm;
use common\models\User;



/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],

            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
             'auth' => [
                'class' => 'yii\authclient\AuthAction',
                'successCallback' => [$this, 'successCallback'],
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }


 public function successCallback($client)
    {
        $attributes = $client->getUserAttributes();
        // user login or signup comes here
    }
    /**
     * Logs in a user.
     *
     * @return mixed
     */
    // public function actionLogin()
    // {
    //     if (!Yii::$app->user->isGuest) {
    //         return $this->goHome();
    //     }

    //     $model = new LoginForm();
    //     if ($model->load(Yii::$app->request->post()) && $model->login()) {
    //         return $this->goBack();
    //     } else {
    //         $model->password = '';

    //         return $this->render('login', [
    //             'model' => $model,
    //         ]);
    //     }
    // }


   public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }
    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    // public function actionSignup()
    // {
    //     $model = new SignupForm();
    //     if ($model->load(Yii::$app->request->post()) && $model->signup()) {
    //         Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
    //         return $this->goHome();
    //     }

    //     return $this->render('signup', [
    //         'model' => $model,
    //     ]);
    // }



public function actionSignup()
{

// $returnUrl = Yii::$app->user->returnUrl == Yii::$app->homeUrl ? null : rtrim(Yii::$app->homeUrl, '/') . Yii::$app->user->returnUrl;

    // var_dump($id);die();
$modelUser = new UserForm;
$modelcapil = new Capil();
$modelAkun = new Akun;

$model = new SignupForm();
if ($model->load(Yii::$app->request->post())) {



            $params = [
              "nik"=>$model->username,
              "user_id"=>"1010201912196devi",
              "password"=>"acxkom1377",
              "ip_user"=>Yii::$app->getRequest()->getUserIP(),
            ];
            $curl = new \linslin\yii2\curl\Curl();
            // $apiUrl = 'http://172.16.160.43:8080/dukcapil/get_json/13-77/1377_diskominfo/adm_desa';
            $apiUrl = 'http://180.250.53.159:8080/dukcapil/get_json/13-77/1377_diskominfo/adm_desa';
            
            $getAPI = $curl->setRequestBody(json_encode($params))
                ->setHeaders([
                    'Content-Type' => 'application/json; charset=UTF-8',
                 ])
                ->post($apiUrl);
            $rest = json_decode($getAPI,true);

            $dataPenduduk = $rest['content'][0];
 // var_dump(count($dataPenduduk) == 2);die();

      

 if (count($dataPenduduk) == 33 ) {
$carinik = Capil::findOne(['capil_nik'=>$dataPenduduk['NIK']]);

if (count($dataPenduduk) == 33 and $dataPenduduk['NO_KAB'] == 77 and !$carinik) 
    {
        // if(!$carinik){
            $modelcapil->capil_nik = $dataPenduduk['NIK'];
            $modelcapil->capil_nama_lgkp = $dataPenduduk['NAMA_LGKP'];
            $modelcapil->capil_jenis_klmin = $dataPenduduk['JENIS_KLMIN'];
            $modelcapil->capil_tmpt_lhr = $dataPenduduk['TMPT_LHR'];
            $modelcapil->capil_tgl_lhr = $dataPenduduk['TGL_LHR'];
            $modelcapil->capil_no_akta_lhr = $dataPenduduk['NO_AKTA_LHR'];
            $modelcapil->capil_gol_darah = $dataPenduduk['GOL_DARAH'];
            $modelcapil->capil_agama = $dataPenduduk['AGAMA'];
            $modelcapil->capil_status_kawin = $dataPenduduk['STATUS_KAWIN'];
            $modelcapil->capil_tgl_kwn = $dataPenduduk['TGL_KWN'];
            $modelcapil->capil_no_akta_kwn = $dataPenduduk['NO_AKTA_KWN'];
            $modelcapil->capil_tgl_crai = $dataPenduduk['TGL_CRAI'];
            $modelcapil->capil_no_akta_crai = $dataPenduduk['NO_AKTA_CRAI'];
            $modelcapil->capil_pddk_akh = $dataPenduduk['PDDK_AKH'];
            $modelcapil->capil_jenis_pkrjn = $dataPenduduk['JENIS_PKRJN'];
            $modelcapil->capil_stat_hbkel = $dataPenduduk['STAT_HBKEL'];
            $modelcapil->capil_no_kk = $dataPenduduk['NO_KK'];
            $modelcapil->capil_alamat = $dataPenduduk['ALAMAT'];
            $modelcapil->capil_dusun = $dataPenduduk['DUSUN'];
            $modelcapil->capil_no_rt = $dataPenduduk['NO_RT'];
            $modelcapil->capil_no_rw = $dataPenduduk['NO_RW'];
            $modelcapil->capil_no_kel = $dataPenduduk['NO_KEL'];
            $modelcapil->capil_no_kec = $dataPenduduk['NO_KEC'];
            $modelcapil->capil_no_kab = $dataPenduduk['NO_KAB'];
            $modelcapil->capil_no_prop = $dataPenduduk['NO_PROP'];
            $modelcapil->capil_kel_name = $dataPenduduk['KEL_NAME'];
            $modelcapil->capil_kec_name = $dataPenduduk['KEC_NAME'];
            $modelcapil->capil_kab_name = $dataPenduduk['KAB_NAME'];
            $modelcapil->capil_prop_name = $dataPenduduk['PROP_NAME'];
            $modelcapil->capil_nik_ayah = $dataPenduduk['NIK_AYAH'];
            $modelcapil->capil_nama_lgkp_ayah = $dataPenduduk['NAMA_LGKP_AYAH'];
            $modelcapil->capil_nik_ibu = $dataPenduduk['NIK_IBU'];
            $modelcapil->capil_nama_lgkp_ibu = $dataPenduduk['NAMA_LGKP_IBU'];
            $modelcapil->capil_dateinput = date('Y-m-d H:i:s');
            $modelcapil->capil_ip = Yii::$app->getRequest()->getUserIP();
           // );die;
            $modelcapil->save(false);

// $user = User::find()->orderBy(['id'=> SORT_DESC])->one();
        

                    // $modelAkun->id_user =  $user->id ;
                    $modelAkun->id_daftar = $modelcapil->capil_nik;
                    $modelAkun->akun_status = 1;
                    $modelAkun->akun_kode = $model->password;
                    $modelAkun->akun_pass = $model->password;
                    $modelAkun->save(false);
 
 Yii::$app->session->setFlash('msg', '
     <div class="alert alert-success alert-dismissable">
     <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
     <strong>Anda Sukses! </strong> Data ditemukan dan disimpan.</div>'
  );

  // return $this->render('view', [
  //           'model' => $this->findModel($id),
  //       ]);
            // return $this->redirect(['capil', 'id' => $model->capil_id]);
            // return $this->redirect(['view', 'id' => $model->capil_id]);
            }
            }else      if (count($dataPenduduk) == 2){
                                     Yii::$app->session->setFlash('msg', '
     <div class="alert alert-warning alert-dismissable">
     <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
     <strong>Kuota Pencarian Habis! </strong>...Waktu Selesai...</div>'
  );
          
            }
elseif($dataPenduduk['NO_KAB'] !== 77){
                // var_dump(!$dataPenduduk['NO_KAB'] == 77);die();
                Yii::$app->session->setFlash('danger', 'NIK Anda tidak terdaftar di Kota pariaman'); 
            }
            elseif($carinik==true){
                // var_dump($carinik);die();
                 Yii::$app->session->setFlash('msg', '
     <div class="alert alert-success alert-dismissable">
     <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
     <strong>NIK ANDA SUDAH TERDAFTAR! </strong> Data ditemukan dan telah disimpan.</div>'
  );
// var_dump(->capil_nama_lgkp);die();
            //return $this->render('signup'/*, [
           // 'model' => $carinik,
       // ]*/);
     }elseif (count($dataPenduduk) == 2) {
                         Yii::$app->session->setFlash('msg', '
     <div class="alert alert-warning alert-dismissable">
     <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
     <strong>Kuota Pencarian Habis! </strong>...Waktu Selesai...</div>'
  );
           
            }

// ===================================


if ($user = $model->signup()) {
$returnUrl =$user->auth_key;

$email = \Yii::$app->mailer->compose()->setTo($user->email)
->setFrom([\Yii::$app->params['supportEmail'] => \Yii::$app->name . ' robot'])
->setSubject('Signup Confirmation')->setTextBody("
Click this link ".$confirmLink = Yii::$app->urlManager->createAbsoluteUrl(['/be/site/confirm', 'id' => $user->id, 'key' => $returnUrl])
// Click this link ".\yii\helpers\Html::a('confirm',
       // Yii::$app->urlManager->createAbsoluteUrl(
        // ['confirm','id'=>$user->id,'key'=>$user->auth_key]);
       
       // ".urlencode('hello world!@#$%^&*()_+')."
    // ?= Html::a(Html::encode($confirmLink), $confirmLink) 
// Yii::$app->urlManager->createAbsoluteUrl(['site/confirm','id'=>$user->id]).'&#38'.'key='.$user->auth_key
// $activationLink = Yii::$app->urlManager->createAbsoluteUrl([‘registration/confirm’,‘id’=>$stud,‘key’=>$authKe->authKey])
)
// )


->send();
if($email){
Yii::$app->getSession()->setFlash('success','Check Your email!');
}
else{
Yii::$app->getSession()->setFlash('warning','Failed, contact Admin!');
}
return $this->goHome();
}
}
 
return $this->render('signup', [
'model' => $model,
]);
}

public function actionConfirm($id,$key)
// public function actionConfirm($id)
{

// $key = User::findone($id);
    // var_dump($key->auth_key);die();
$user = \common\models\User::find()->where([
'id'=>$id,
'auth_key'=>$key,
'status'=>0,
])->one();
if(!empty($user)){
$user->status=10;
$user->save();

 if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
Yii::$app->getSession()->setFlash('success','Success!');
}
else{
Yii::$app->getSession()->setFlash('warning','Failed!');
}
return $this->goHome();
}
    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if ($user = $model->verifyEmail()) {
            if (Yii::$app->user->login($user)) {
                Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
                return $this->goHome();
            }
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }
}
