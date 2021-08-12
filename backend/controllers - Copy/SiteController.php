<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\models\User;
use backend\models\Daftar;
use backend\models\Keterangan;
use backend\models\Capil;
use backend\models\Pendidikan;
use backend\models\Jurusan;
use backend\models\UserForm;
use backend\models\Akun;
use frontend\models\SignupForm;
// use common\models\User;


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
                // 'only' => ['logout', 'signup'],

                'rules' => [
                    [
                        'actions' => ['login', 'error','confirm','signup'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index','excel'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post','get'],
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
        ];
    }



    public function actionSignup()
    {

        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Akun Anda telah terdaftar silahkan lanjutkan pengisian profil.');

            // cari id berdasarkan nik
            $user = User::find()->where(['username' => $model->username])->one();
            // var_dump($user->id);die();
            $modelAkun = new Akun;
            $modelAkun->id_user =  $user->id ;
            $modelAkun->id_daftar = $model->username;
            $modelAkun->akun_status = 1;
            $modelAkun->akun_kode = $model->password;
            $modelAkun->akun_pass = $model->password;
            $modelAkun->save(false);

            // $modeluser = User::findone($id);
            // var_dump($modeluser);die();
            // $username = $modeluser->username;

            $modeldaftar = new Daftar();
            $today = date('Y-m-d H:i:s');
            $todayy = date('Ymd');
            $kode = strtotime($today);
            $angka =substr($todayy,2,-2);
            $modeldaftar->daftar_id = $model->username;
            $modeldaftar->daftar_nik = $model->username;
            $modeldaftar->daftar_tgl = $today;
            $modeldaftar->daftar_no = $angka.$todayy;
            $modeldaftar->save(false);
            // return $this->goHome();
            // return $this->render('/site/index');
            if ($modelAkun->save()) {
                  Yii::$app->session->setFlash('success', "User anda sukses didaftarakan Silahkan Login."); 
              } else {
                  Yii::$app->session->setFlash('error', "User not saved.");
              }
               return $this->redirect(['login']);
        }

        return $this->render('/layouts/xray/main-signup-xtray', [
            'model' => $model,
        ]);
    }




 // public function actionSignup()
 //    {


 //        $model = new SignupForm();
 //        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
 //            return $this->goBack();
 //        } else {
 //            $model->password = '';

 //        //     $this->render(\Yii::$app->urlManager->createUrl("/layouts/xtray/main-login-xtray")
 //        //             , [
 //        //         'model' => $model]
 //        // );

 //            return $this->render('/layouts/xray/main-signup-xtray', [
 //                'model' => $model,
 //            ]);
 //        }
 //    }


// public function actionSignup()
// {

// // $returnUrl = Yii::$app->user->returnUrl == Yii::$app->homeUrl ? null : rtrim(Yii::$app->homeUrl, '/') . Yii::$app->user->returnUrl;

//     // var_dump($id);die();
// $modelUser = new UserForm;
// $modelcapil = new Capil();
// $modelAkun = new Akun;

// $model = new SignupForm();
// if ($model->load(Yii::$app->request->post())) {



//             $params = [
//               "nik"=>$model->username,
//               "user_id"=>"1010201912196devi",
//               "password"=>"acxkom1377",
//               "ip_user"=>Yii::$app->getRequest()->getUserIP(),
//             ];
//             $curl = new \linslin\yii2\curl\Curl();
//             // $apiUrl = 'http://172.16.160.43:8080/dukcapil/get_json/13-77/1377_diskominfo/adm_desa';
//             $apiUrl = 'http://180.250.53.159:8080/dukcapil/get_json/13-77/1377_diskominfo/adm_desa';

//             $getAPI = $curl->setRequestBody(json_encode($params))
//                 ->setHeaders([
//                     'Content-Type' => 'application/json; charset=UTF-8',
//                  ])
//                 ->post($apiUrl);
//             $rest = json_decode($getAPI,true);

//             $dataPenduduk = $rest['content'][0];
//  // var_dump(count($dataPenduduk) == 2);die();



//  if (count($dataPenduduk) == 33 ) {
// $carinik = Capil::findOne(['capil_nik'=>$dataPenduduk['NIK']]);

// if (count($dataPenduduk) == 33 and $dataPenduduk['NO_KAB'] == 77 and !$carinik) 
//     {
//         // if(!$carinik){
//             $modelcapil->capil_nik = $dataPenduduk['NIK'];
//             $modelcapil->capil_nama_lgkp = $dataPenduduk['NAMA_LGKP'];
//             $modelcapil->capil_jenis_klmin = $dataPenduduk['JENIS_KLMIN'];
//             $modelcapil->capil_tmpt_lhr = $dataPenduduk['TMPT_LHR'];
//             $modelcapil->capil_tgl_lhr = $dataPenduduk['TGL_LHR'];
//             $modelcapil->capil_no_akta_lhr = $dataPenduduk['NO_AKTA_LHR'];
//             $modelcapil->capil_gol_darah = $dataPenduduk['GOL_DARAH'];
//             $modelcapil->capil_agama = $dataPenduduk['AGAMA'];
//             $modelcapil->capil_status_kawin = $dataPenduduk['STATUS_KAWIN'];
//             $modelcapil->capil_tgl_kwn = $dataPenduduk['TGL_KWN'];
//             $modelcapil->capil_no_akta_kwn = $dataPenduduk['NO_AKTA_KWN'];
//             $modelcapil->capil_tgl_crai = $dataPenduduk['TGL_CRAI'];
//             $modelcapil->capil_no_akta_crai = $dataPenduduk['NO_AKTA_CRAI'];
//             $modelcapil->capil_pddk_akh = $dataPenduduk['PDDK_AKH'];
//             $modelcapil->capil_jenis_pkrjn = $dataPenduduk['JENIS_PKRJN'];
//             $modelcapil->capil_stat_hbkel = $dataPenduduk['STAT_HBKEL'];
//             $modelcapil->capil_no_kk = $dataPenduduk['NO_KK'];
//             $modelcapil->capil_alamat = $dataPenduduk['ALAMAT'];
//             $modelcapil->capil_dusun = $dataPenduduk['DUSUN'];
//             $modelcapil->capil_no_rt = $dataPenduduk['NO_RT'];
//             $modelcapil->capil_no_rw = $dataPenduduk['NO_RW'];
//             $modelcapil->capil_no_kel = $dataPenduduk['NO_KEL'];
//             $modelcapil->capil_no_kec = $dataPenduduk['NO_KEC'];
//             $modelcapil->capil_no_kab = $dataPenduduk['NO_KAB'];
//             $modelcapil->capil_no_prop = $dataPenduduk['NO_PROP'];
//             $modelcapil->capil_kel_name = $dataPenduduk['KEL_NAME'];
//             $modelcapil->capil_kec_name = $dataPenduduk['KEC_NAME'];
//             $modelcapil->capil_kab_name = $dataPenduduk['KAB_NAME'];
//             $modelcapil->capil_prop_name = $dataPenduduk['PROP_NAME'];
//             $modelcapil->capil_nik_ayah = $dataPenduduk['NIK_AYAH'];
//             $modelcapil->capil_nama_lgkp_ayah = $dataPenduduk['NAMA_LGKP_AYAH'];
//             $modelcapil->capil_nik_ibu = $dataPenduduk['NIK_IBU'];
//             $modelcapil->capil_nama_lgkp_ibu = $dataPenduduk['NAMA_LGKP_IBU'];
//             $modelcapil->capil_dateinput = date('Y-m-d H:i:s');
//             $modelcapil->capil_ip = Yii::$app->getRequest()->getUserIP();
//            // );die;
//             $modelcapil->save(false);

// // $user = User::find()->orderBy(['id'=> SORT_DESC])->one();


//                     // $modelAkun->id_user =  $user->id ;
//                     $modelAkun->id_daftar = $modelcapil->capil_nik;
//                     $modelAkun->akun_status = 1;
//                     $modelAkun->akun_kode = $model->password;
//                     $modelAkun->akun_pass = $model->password;
//                     $modelAkun->save(false);

//  Yii::$app->session->setFlash('msg', '
//      <div class="alert alert-success alert-dismissable">
//      <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
//      <strong>Anda Sukses! </strong> Data ditemukan dan disimpan.</div>'
//   );

//   // return $this->render('view', [
//   //           'model' => $this->findModel($id),
//   //       ]);
//             // return $this->redirect(['capil', 'id' => $model->capil_id]);
//             // return $this->redirect(['view', 'id' => $model->capil_id]);
//             }
//             }else      if (count($dataPenduduk) == 2){
//                                      Yii::$app->session->setFlash('msg', '
//      <div class="alert alert-warning alert-dismissable">
//      <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
//      <strong>Kuota Pencarian Habis! </strong>...Waktu Selesai...</div>'
//   );

//             }
// elseif($dataPenduduk['NO_KAB'] !== 77){
//                 // var_dump(!$dataPenduduk['NO_KAB'] == 77);die();
//                 Yii::$app->session->setFlash('danger', 'NIK Anda tidak terdaftar di Kota pariaman'); 
//             }
//             elseif($carinik==true){
//                 // var_dump($carinik);die();
//                  Yii::$app->session->setFlash('msg', '
//      <div class="alert alert-success alert-dismissable">
//      <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
//      <strong>NIK ANDA SUDAH TERDAFTAR! </strong> Data ditemukan dan telah disimpan.</div>'
//   );
// // var_dump(->capil_nama_lgkp);die();
//             //return $this->render('signup'/*, [
//            // 'model' => $carinik,
//        // ]*/);
//      }elseif (count($dataPenduduk) == 2) {
//                          Yii::$app->session->setFlash('msg', '
//      <div class="alert alert-warning alert-dismissable">
//      <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
//      <strong>Kuota Pencarian Habis! </strong>...Waktu Selesai...</div>'
//   );

//             }

// // ===================================


// if ($user = $model->signup()) {
// $returnUrl =$user->auth_key;

// $email = \Yii::$app->mailer->compose()->setTo($user->email)
// ->setFrom([\Yii::$app->params['supportEmail'] => \Yii::$app->name . ' robot'])
// ->setSubject('Signup Confirmation')->setTextBody("
// Click this link ".$confirmLink = Yii::$app->urlManager->createAbsoluteUrl(['/be/site/confirm', 'id' => $user->id, 'key' => $returnUrl])
// // Click this link ".\yii\helpers\Html::a('confirm',
//        // Yii::$app->urlManager->createAbsoluteUrl(
//         // ['confirm','id'=>$user->id,'key'=>$user->auth_key]);

//        // ".urlencode('hello world!@#$%^&*()_+')."
//     // ?= Html::a(Html::encode($confirmLink), $confirmLink) 
// // Yii::$app->urlManager->createAbsoluteUrl(['site/confirm','id'=>$user->id]).'&#38'.'key='.$user->auth_key
// // $activationLink = Yii::$app->urlManager->createAbsoluteUrl([‘registration/confirm’,‘id’=>$stud,‘key’=>$authKe->authKey])
// )
// // )


// ->send();
// if($email){
// Yii::$app->getSession()->setFlash('success','Check Your email!');
// }
// else{
// Yii::$app->getSession()->setFlash('warning','Failed, contact Admin!');
// }
// return $this->goHome();
// }
// }

// return $this->render('signup', [
// 'model' => $model,
// ]);
// }

    public function actionExcel()
    {   

        // $searchModel = new Search();
        // // $searchModel->id_sekolah = 1; 
        // // $idku = Yii::$app->user->identity->id$date ;

              // var_dump($tamatsdl);die();



// $query = \backend\models\Admins::find()
//     ->select('pendidikan.*,keterangan.*')  // make sure same column name not there in both table
//     ->leftJoin('pendidikan', 'pendidikan.id_daftar = keterangan.id_daftar')
//     ->where(['keterangan.id_daftar' => 33])
//     ->with('pendidikan')
//     ->asArray()
//     ->all();
        $pendidikan = Pendidikan::findOne(['id_sekolah'=>1000]);
        $date = $pendidikan->pendidikan_date;
        $tahun = Yii::$app->formatter->asDate($date , 'yyyy');
        $bulan = Yii::$app->formatter->asDate($date , 'MM');
        $hari = Yii::$app->formatter->asDate($date , 'dd');
        $today = date('Y-m-d');
        $todayTgl = date('d');
        $todayMonth = date('Y-m');
        $todayMonthh =date('m');
        // $bulankemarin = date('m'("-1 month", strtotime(date($todayMonthh))));
        $sekarang = Yii::$app->formatter->asDate('now', 'php:Y-m-d');
        $bulanlalu = date('m', strtotime('-1 month', strtotime($sekarang)));


        $caripendidikanbulan = (new \yii\db\Query())
        ->select('id_sekolah, pendidikan_date')
        ->from('pendidikan')
        ->where(['id_sekolah' => 1000, 'MONTH(pendidikan_date)' => $bulanlalu])
        ->all();

                    // -----------------------
        $tidaktamatsdl = Pendidikan::find()
        ->where(['id_sekolah' => 1000,'id_jurusan'=>1101, 'MONTH(pendidikan_date)' => $bulanlalu])
        ->count();

        $tidaktamatsdp = Pendidikan::find()
        ->where(['id_sekolah' => 1000,'id_jurusan'=>1101, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>2])
        ->count();

        $tamatsdl = Pendidikan::find()->where(['id_sekolah' => 1000,'id_jurusan'=>1102, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>1])->count();
        $tamatsdp = Pendidikan::find()->where(['id_sekolah' => 1000,'id_jurusan'=>1102, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>2])->count();

        $setingkatsdl = Pendidikan::find()->where(['id_sekolah' => 1000,'id_jurusan'=>1103, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>1])
        ->count();
        $setingkatsdp = Pendidikan::find()->where(['id_sekolah' => 1000,'id_jurusan'=>1103, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>2])
        ->count();


        $smpl = Pendidikan::find()->where(['id_sekolah' => 2000,'id_jurusan'=>2101, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>1])
        ->count();          
        $smpp = Pendidikan::find()->where(['id_sekolah' => 2000,'id_jurusan'=>2101, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>2])
        ->count();

        $mdsl = Pendidikan::find()->where(['id_sekolah' => 2000,'id_jurusan'=>2102, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>1])
        ->count();          
        $mdsp = Pendidikan::find()->where(['id_sekolah' => 2000,'id_jurusan'=>2102, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>2])
        ->count();


        $sltpkejuruanl = Pendidikan::find()->where(['id_sekolah' => 2000,'id_jurusan'=>2104, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>1])
        ->count();          
        $sltpkejuruanp = Pendidikan::find()->where(['id_sekolah' => 2000,'id_jurusan'=>2104, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>2])
        ->count();


        $sltplainnyal = Pendidikan::find()->where(['id_sekolah' => 2000,'id_jurusan'=>2103, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>1])->count();
        $sltplainnyap = Pendidikan::find()->where(['id_sekolah' => 2000,'id_jurusan'=>2103, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>2])->count();
        $sltptakterdefenisil = Pendidikan::find()->where(['id_sekolah' => 2000,'id_jurusan'=>2199, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>1])->count();
        $sltptakterdefenisip = Pendidikan::find()->where(['id_sekolah' => 2000,'id_jurusan'=>2199, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>2])->count();
// ------------------------batas sltp-----------------------------------

        $smul = Pendidikan::find()->where(['id_sekolah' => 3000,'id_jurusan'=>3801, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>1])->count();
        $smup = Pendidikan::find()->where(['id_sekolah' => 3000,'id_jurusan'=>3801, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>2])->count();
        $mdal = Pendidikan::find()->where(['id_sekolah' => 3000,'id_jurusan'=>3802, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>1])->count();
        $mdap = Pendidikan::find()->where(['id_sekolah' => 3000,'id_jurusan'=>3802, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>2])->count();

//-------------batas SMU---------------------------------------------------


        $tbangunanl = Pendidikan::find()->where(['id_sekolah' => 3000,'id_jurusan'=>3101, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>1])->count();
        $tbangunanp = Pendidikan::find()->where(['id_sekolah' => 3000,'id_jurusan'=>3101, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>2])->count();
        $tplumbingl = Pendidikan::find()->where(['id_sekolah' => 3000,'id_jurusan'=>3102, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>1])->count();
        $tplumbingp = Pendidikan::find()->where(['id_sekolah' => 3000,'id_jurusan'=>3102, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>2])->count();
        $tsurveil = Pendidikan::find()->where(['id_sekolah' => 3000,'id_jurusan'=>3103, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>1])->count();
        $tsurveip = Pendidikan::find()->where(['id_sekolah' => 3000,'id_jurusan'=>3103, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>2])->count();
        $tketenagal = Pendidikan::find()->where(['id_sekolah' => 3000,'id_jurusan'=>3104, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>1])->count();

        $tketenagap = Pendidikan::find()->where(['id_sekolah' => 3000,'id_jurusan'=>3104, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>2])->count();
        $tpendinginl = Pendidikan::find()->where(['id_sekolah' => 3000,'id_jurusan'=>3105, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>1])->count();
        $tpendinginp = Pendidikan::find()->where(['id_sekolah' => 3000,'id_jurusan'=>3105, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>2])->count();
        $tmesinl = Pendidikan::find()->where(['id_sekolah' => 3000,'id_jurusan'=>3106, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>1])->count();
        $tmesinp = Pendidikan::find()->where(['id_sekolah' => 3000,'id_jurusan'=>3106, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>2])->count();
        $totomotifl = Pendidikan::find()->where(['id_sekolah' => 3000,'id_jurusan'=>3107, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>1])->count();
        $totomotifp = Pendidikan::find()->where(['id_sekolah' => 3000,'id_jurusan'=>3107, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>2])->count();
        $tpesawatl = Pendidikan::find()->where(['id_sekolah' => 3000,'id_jurusan'=>3108, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>1])->count();
        $tpesawatp = Pendidikan::find()->where(['id_sekolah' => 3000,'id_jurusan'=>3108, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>2])->count();
        $tkapall = Pendidikan::find()->where(['id_sekolah' => 3000,'id_jurusan'=>3109, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>1])->count();
        $tkapalp = Pendidikan::find()->where(['id_sekolah' => 3000,'id_jurusan'=>3109, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>2])->count();
         // ----------------------------------------------------------
        
        
        return $this->renderAjax('excelll', [
            // 'searchModel' => $searchModel,
            // // 'dataProvider' => $dataProvider,
            'tidaktamatsdl' => $tidaktamatsdl,
            'tidaktamatsdp' => $tidaktamatsdp,
            'tamatsdl' => $tamatsdl,
            'tamatsdp' => $tamatsdp,
            'setingkatsdl' => $setingkatsdl,
            'setingkatsdp' => $setingkatsdp,

            'smpl' => $smpl,
            'smpp' => $smpp,
            'mdsl' => $mdsl,
            'mdsp' => $mdsp,
            'sltpkejuruanl' => $sltpkejuruanl,
            'sltpkejuruanp' => $sltpkejuruanp,
            'sltplainnyal' => $sltplainnyal,
            'sltplainnyap' => $sltplainnyap,
            'sltptakterdefenisil' => $sltptakterdefenisil,
            'sltptakterdefenisip' => $sltptakterdefenisip,
// ---------------sltp-----------------batas-----------

            'smul' => $smul,
            'smup' => $smup,
            'mdal' => $mdal,
            'mdap' => $mdap,
// ----------------------smu----mda---------------------

            'tbangunanl' => $tbangunanl,
            'tbangunanp' => $tbangunanp,
            'tplumbingl' => $tplumbingl,
            'tplumbingp' => $tplumbingp,
            'tsurveil' => $tsurveil,
            'tsurveip' => $tsurveip,
            'tketenagal' => $tketenagal,
            'tketenagap' => $tketenagap,
            'tpendinginl' => $tpendinginl,
            'tpendinginp' => $tpendinginp,
            'tmesinl' => $tmesinl,
            'tmesinp' => $tmesinp,
            'totomotifl' => $totomotifl,
            'totomotifp' => $totomotifp,
            'tpesawatl' => $tpesawatl,
            'tpesawatp' => $tpesawatp,
            'tkapall' => $tkapall,
            'tkapalp' => $tkapalp,

        ]);
    }


    public function actionConfirm($id,$key)
// public function actionConfirm($id)
    {
// $timezone = new DateTimeZone('Asia/Jakarta');
// $date = new DateTime();
// $date->setTimeZone($timezone);
// $key = User::findone($id);
    // var_dump($key->auth_key);die();
        $user = \common\models\User::find()->where([
            'id'=>$id,
            'auth_key'=>$key,
            'status'=>0,
        ])->one();




// var_dump($user);die();
        if(!empty($user)){
            $user->status=10;
            $user->save();
            $today = date('Y-m-d H:i:s');
            $todayy = date('Ymd');
            $modeluser = User::findone($id);
            $username = $modeluser->username;
            $modelUsernya = new UserForm;
            $Akun = Akun::find()->where(['id_daftar'=> $username])->one();
            $userakun = User::find()->orderBy(['id'=> SORT_DESC])->one();
// $idname = Yii::$app->user->identity->username;

 // $cariuser = UserForm::find(['username'=>$idname])->;
            $modeluser = Capil::findone(['capil_nik' => $username]);

            $kode = strtotime($today);

            $angka =substr($todayy,2,-2);

// var_dump($angka.$todayy);die();

            $modeldaftar = new Daftar();
            $modeldaftar->daftar_id = $username;
            $modeldaftar->daftar_nik = $username;
            $modeldaftar->daftar_tgl = $today;
            $modeldaftar->daftar_no = $angka.$todayy;
            $modeldaftar->save();




            $modelketerangan = new Keterangan();
            $modelketerangan->id_daftar         = $username;
            $modelketerangan->keterangan_nama   = $modeluser->capil_nama_lgkp;
            $modelketerangan->keterangan_tempat = $modeluser->capil_tmpt_lhr;
            $modelketerangan->keterangan_tgl    = $modeluser->capil_tgl_lhr;
            if ($modeluser->capil_jenis_klmin == 'Laki-Laki'){
              $modelketerangan->keterangan_jkl    = 1;

          }elseif ($modeluser->capil_jenis_klmin == 'Perempuan'){
              $modelketerangan->keterangan_jkl    = 2;

          }
          $modelketerangan->keterangan_alamat = $modeluser->capil_alamat;
          $modelketerangan->keterangan_kel    = $modeluser->capil_no_kel;
          $modelketerangan->keterangan_kec    = $modeluser->capil_no_kec;
          $modelketerangan ->save(false);




          $Akun->id_user =  $userakun->id ;

          $Akun->save(false);


          if (Yii::$app->getUser()->login($user)) {
            return $this->goHome();
        }
        Yii::$app->getSession()->setFlash('success','Success!');
    }
    else{
        Yii::$app->getSession()->setFlash('warning','Failed!');
        Yii::$app->user->logout();

        return $this->goHome();

    }
    return $this->goHome();
}

    /**
     * Displays homepage.
     *
     * @return string
     */

    public function actionIndex()
    {
        return $this->render('index');
    }
    
//     public function actionIndex()
//     {
//             // var_dump(!Yii::$app->user->isGuest);die();
//         // $data = Yii::$app->getSecurity()->validateData($data, $secretKey);
//         // $data = Yii::$app->getSecurity()->hashData($genuineData, $secretKey);
//         // var_dump(Yii::$app->user->identity->password_hash);die();
//         $dataaa = Yii::$app->user->identity->password_hash;
//       $encrypted = \Yii::$app->getSecurity()->encryptByPassword( $dataaa,'PLfFp8-SMA1WfAyytN9-2NGib0y4TDmI');
//         $data=  \Yii::$app->getSecurity()->decryptByPassword($encrypted,'PLfFp8-SMA1WfAyytN9-2NGib0y4TDmI');
// // var_dump($encrypted);die();

// $hash = Yii::$app->getSecurity()->hashData($data,$secretKey);

//          $password_hash = Yii::$app->user->identity->password_hash;
//          echo '<br>';
//          echo '<br>';
//          echo '<br>';
//          echo '<br>';
//              $auth_key  =  Yii::$app->user->identity->auth_key;
//          echo '<br>';
//          echo '<br>';
//          echo '<br>';

//          $data = Yii::$app->getSecurity()->hashData($password_hash,'123456');
//          echo '<br>';


// // var_dump($data);die();
//         return $this->render('index');
//     }

    public $key = 'SECRET KEY';
    public function setPassword($pwd)
    {
        $this->password_hash = Yii::$app->getSecurity()->encryptByPassword($pwd, $this->key);
    }
    public function validatePassword($pwd)
    {
        $decryptPassword = Yii::$app->getSecurity()->decryptByPassword($this->password_hash, $this->key);
        return $decryptPassword === $pwd;
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

        //     $this->render(\Yii::$app->urlManager->createUrl("/layouts/xtray/main-login-xtray")
        //             , [
        //         'model' => $model]
        // );

            return $this->render('/layouts/xray/main-login-xtray', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
