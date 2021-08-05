<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Capil;
use frontend\models\CapilSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use frontend\models\SignupForm;


/**
 * CapilController implements the CRUD actions for Capil model.
 */
class CapilController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Capil models.
     * @return mixed
     */

    public function actionDaftar()
    {

        $modelSignupForm = new SignupForm();
        $model = new Capil();
        if ($model->load(Yii::$app->request->post())) {

            $params = [
              "nik"=>$model->capil_nik,
              "user_id"=>"1010201912196devi",
              "password"=>"acxkom1377",
              "ip_user"=>Yii::$app->getRequest()->getUserIP(),
            ];
            $curl = new \linslin\yii2\curl\Curl();
            $apiUrl = 'http://180.250.53.159:8080/dukcapil/get_json/13-77/1377_diskominfo/adm_desa';
            $getAPI = $curl->setRequestBody(json_encode($params))
                ->setHeaders([
                    'Content-Type' => 'application/json; charset=UTF-8',
                 ])
                ->post($apiUrl);
            $rest = json_decode($getAPI,true);

            $dataPenduduk = $rest['content'][0];
$carinik = Capil::findOne(['capil_nik'=>$dataPenduduk['NIK']]);
// var_dump($carinik);die();

     if (count($dataPenduduk) == 33 and $dataPenduduk['NO_KAB'] == 77 and !$carinik) {
 // var_dump(
        // if(!$carinik){
            $model->capil_nik = $dataPenduduk['NIK'];
            $model->capil_nama_lgkp = $dataPenduduk['NAMA_LGKP'];
            $model->capil_jenis_klmin = $dataPenduduk['JENIS_KLMIN'];
            $model->capil_tmpt_lhr = $dataPenduduk['TMPT_LHR'];
            $model->capil_tgl_lhr = $dataPenduduk['TGL_LHR'];
            $model->capil_no_akta_lhr = $dataPenduduk['NO_AKTA_LHR'];
            $model->capil_gol_darah = $dataPenduduk['GOL_DARAH'];
            $model->capil_agama = $dataPenduduk['AGAMA'];
            $model->capil_status_kawin = $dataPenduduk['STATUS_KAWIN'];
            $model->capil_tgl_kwn = $dataPenduduk['TGL_KWN'];
            $model->capil_no_akta_kwn = $dataPenduduk['NO_AKTA_KWN'];
            $model->capil_tgl_crai = $dataPenduduk['TGL_CRAI'];
            $model->capil_no_akta_crai = $dataPenduduk['NO_AKTA_CRAI'];
            $model->capil_pddk_akh = $dataPenduduk['PDDK_AKH'];
            $model->capil_jenis_pkrjn = $dataPenduduk['JENIS_PKRJN'];
            $model->capil_stat_hbkel = $dataPenduduk['STAT_HBKEL'];
            $model->capil_no_kk = $dataPenduduk['NO_KK'];
            $model->capil_alamat = $dataPenduduk['ALAMAT'];
            $model->capil_dusun = $dataPenduduk['DUSUN'];
            $model->capil_no_rt = $dataPenduduk['NO_RT'];
            $model->capil_no_rw = $dataPenduduk['NO_RW'];
            $model->capil_no_kel = $dataPenduduk['NO_KEL'];
            $model->capil_no_kec = $dataPenduduk['NO_KEC'];
            $model->capil_no_kab = $dataPenduduk['NO_KAB'];
            $model->capil_no_prop = $dataPenduduk['NO_PROP'];
            $model->capil_kel_name = $dataPenduduk['KEL_NAME'];
            $model->capil_kec_name = $dataPenduduk['KEC_NAME'];
            $model->capil_kab_name = $dataPenduduk['KAB_NAME'];
            $model->capil_prop_name = $dataPenduduk['PROP_NAME'];
            $model->capil_nik_ayah = $dataPenduduk['NIK_AYAH'];
            $model->capil_nama_lgkp_ayah = $dataPenduduk['NAMA_LGKP_AYAH'];
            $model->capil_nik_ibu = $dataPenduduk['NIK_IBU'];
            $model->capil_nama_lgkp_ibu = $dataPenduduk['NAMA_LGKP_IBU'];
            $model->capil_dateinput = date('Y-m-d H:i:s');
            $model->capil_ip = Yii::$app->getRequest()->getUserIP();
           // );die;
            $model->save(false);
            // - - - - - - - - - - -


     // }

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
            return $this->render('capil', [
            'model' => $carinik,
        ]);
     }elseif (count($dataPenduduk) == 2) {
                         Yii::$app->session->setFlash('msg', '
     <div class="alert alert-warning alert-dismissable">
     <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
     <strong>Kuota Pencarian Habis! </strong>...Waktu Selesai...</div>'
  );
           
            }
            

        }
            
        

        return $this->render('daftarakun', [
            'model' => $model,
            'modelSignup' => $modelSignupForm,
        ]);
    }


    public function actionCek()
    {
        $model = new Capil();
        if ($model->load(Yii::$app->request->post())) {

            $params = [
              "nik"=>$model->capil_nik,
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
// var_dump($dataPenduduk);die();
if(count($dataPenduduk) == 33){
$carinik = Capil::findOne(['capil_nik'=>$dataPenduduk['NIK']]);

     if (count($dataPenduduk) == 33 and $dataPenduduk['NO_KAB'] == 77 and !$carinik) {
 // var_dump(
        // if(!$carinik){
            $model->capil_nik = $dataPenduduk['NIK'];
            $model->capil_nama_lgkp = $dataPenduduk['NAMA_LGKP'];
            $model->capil_jenis_klmin = $dataPenduduk['JENIS_KLMIN'];
            $model->capil_tmpt_lhr = $dataPenduduk['TMPT_LHR'];
            $model->capil_tgl_lhr = $dataPenduduk['TGL_LHR'];
            $model->capil_no_akta_lhr = $dataPenduduk['NO_AKTA_LHR'];
            $model->capil_gol_darah = $dataPenduduk['GOL_DARAH'];
            $model->capil_agama = $dataPenduduk['AGAMA'];
            $model->capil_status_kawin = $dataPenduduk['STATUS_KAWIN'];
            $model->capil_tgl_kwn = $dataPenduduk['TGL_KWN'];
            $model->capil_no_akta_kwn = $dataPenduduk['NO_AKTA_KWN'];
            $model->capil_tgl_crai = $dataPenduduk['TGL_CRAI'];
            $model->capil_no_akta_crai = $dataPenduduk['NO_AKTA_CRAI'];
            $model->capil_pddk_akh = $dataPenduduk['PDDK_AKH'];
            $model->capil_jenis_pkrjn = $dataPenduduk['JENIS_PKRJN'];
            $model->capil_stat_hbkel = $dataPenduduk['STAT_HBKEL'];
            $model->capil_no_kk = $dataPenduduk['NO_KK'];
            $model->capil_alamat = $dataPenduduk['ALAMAT'];
            $model->capil_dusun = $dataPenduduk['DUSUN'];
            $model->capil_no_rt = $dataPenduduk['NO_RT'];
            $model->capil_no_rw = $dataPenduduk['NO_RW'];
            $model->capil_no_kel = $dataPenduduk['NO_KEL'];
            $model->capil_no_kec = $dataPenduduk['NO_KEC'];
            $model->capil_no_kab = $dataPenduduk['NO_KAB'];
            $model->capil_no_prop = $dataPenduduk['NO_PROP'];
            $model->capil_kel_name = $dataPenduduk['KEL_NAME'];
            $model->capil_kec_name = $dataPenduduk['KEC_NAME'];
            $model->capil_kab_name = $dataPenduduk['KAB_NAME'];
            $model->capil_prop_name = $dataPenduduk['PROP_NAME'];
            $model->capil_nik_ayah = $dataPenduduk['NIK_AYAH'];
            $model->capil_nama_lgkp_ayah = $dataPenduduk['NAMA_LGKP_AYAH'];
            $model->capil_nik_ibu = $dataPenduduk['NIK_IBU'];
            $model->capil_nama_lgkp_ibu = $dataPenduduk['NAMA_LGKP_IBU'];
            $model->capil_dateinput = date('Y-m-d H:i:s');
            $model->capil_ip = Yii::$app->getRequest()->getUserIP();
           // );die;
            $model->save(false);
            // - - - - - - - - - - -


     //}

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
            return $this->render('capil', [
            'model' => $carinik,
        ]);
     }
            }

            elseif (count($dataPenduduk) == 2) {
                         Yii::$app->session->setFlash('msg', '
     <div class="alert alert-warning alert-dismissable">
     <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
     <strong>Kuota Pencarian Habis! </strong>...Waktu Selesai...</div>'
  );
           
            }

       

  
            

        }
            
        

        return $this->render('capil', [
            'model' => $model,
        ]);
    }


    public function actionIndex()
    {
        $searchModel = new CapilSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Capil model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Capil model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Capil();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->capil_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Capil model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->capil_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Capil model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Capil model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Capil the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Capil::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
