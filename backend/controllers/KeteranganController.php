<?php

namespace backend\controllers;

use Yii;
use backend\models\Keterangan;
use backend\models\Pendidikan;
use backend\models\Lokasi;
use backend\models\Pengalaman;
use backend\models\Capil;
use backend\models\Akun;
use backend\models\UserForm;
use backend\models\Daftar;

use backend\models\KeteranganSearch;
use backend\models\PendidikanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;
use yii\web\UploadedFile;



/**
 * KeteranganController implements the CRUD actions for Keterangan model.
 */
class KeteranganController extends Controller
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
     * Lists all Keterangan models.
     * @return mixed
     */


  public function getProvinces()
    {
       return (new \yii\db\Query())
       ->select('*')
       ->from('drhidn_provinsi')
       ->orderBy(['kec_nama' => SORT_DESC])
       ->all(\yii::$app->db);
   } 

 public function actionCreateidentitas()
    {
        $model = new Keterangan();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->keterangan_id]);
        }

        return $this->render('createidentitas', [
            'model' => $model,
        ]);
    }



    public function actionIndex()
    {
        $searchModel = new KeteranganSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
 public function actionKeloladata()
    {
        $tgl =Yii::$app->formatter->asDatetime('now', 'php:Y-m-d');
        $tglcari = '2020-09-03';

        $tanggal = Pendidikan::find()
        // -> where([$tglcari '>='"pendidikan_datehapus"])->all();
        ->where('pendidikan_datehapus >= :userid', [':userid' => $tglcari])->all();
        // var_dump($tanggal);die();

        $searchModel = new PendidikanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->where(':tglsekarang  >= pendidikan_datehapus  AND pendidikan_status = :pendidikan_status ', [':tglsekarang' => $tgl ,':pendidikan_status' => 1])->orderBy('pendidikan_datehapus ASC');
        // $dataProvider->query->where('field1 = :field1 AND field2 = :field2', [':field1' => 1, ':field2' => 'A']);
           // $lima_dataProvider->pagination->pageSize=10;

        return $this->render('keloladatapencaker', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
 public function actionKeloladatapenempatan()
    {
        $tgl =Yii::$app->formatter->asDatetime('now', 'php:Y-m-d');
        $tglcari = '2020-09-03';

        $tanggal = Pendidikan::find()
        // -> where([$tglcari '>='"pendidikan_datehapus"])->all();
        ->where('pendidikan_datehapus >= :userid', [':userid' => $tglcari])->all();
        // var_dump($tanggal);die();

        $searchModel = new PendidikanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->where(':tglsekarang  <= pendidikan_datehapus  AND pendidikan_status = :pendidikan_status ', [':tglsekarang' => $tgl ,':pendidikan_status' => [1,2]])->orderBy('pendidikan_datehapus ASC');
        // $dataProvider->query->where('field1 = :field1 AND field2 = :field2', [':field1' => 1, ':field2' => 'A']);
           // $lima_dataProvider->pagination->pageSize=10;

        return $this->render('keloladatapencakerpenempatan', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

     public function actionMonitorpencaker()
    {
        $tgl =Yii::$app->formatter->asDatetime('now', 'php:Y-m-d');
        $tglcari = '2020-09-03';

        $tanggal = Pendidikan::find()
        // -> where([$tglcari '>='"pendidikan_datehapus"])->all();
        ->where('pendidikan_datehapus >= :userid', [':userid' => $tglcari])->all();
        // var_dump($tanggal);die();

        $searchModel = new PendidikanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        // $dataProvider->query->where(':tglsekarang  <= pendidikan_datehapus  AND pendidikan_status = :pendidikan_status ', [':tglsekarang' => $tgl ,':pendidikan_status' => [1,2]])->orderBy('pendidikan_datehapus ASC');
        // $dataProvider->query->where('field1 = :field1 AND field2 = :field2', [':field1' => 1, ':field2' => 'A']);
           // $lima_dataProvider->pagination->pageSize=10;

        return $this->render('monitorpencaker', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionPenempatan($id){
$penempatan = Pendidikan::find()
        -> where(['id_daftar'=> $id])->one();
$nama = Keterangan::find()
        -> where(['id_daftar'=> $id])->one();
        $penempatan->pendidikan_status = 2;
        $penempatan->save();
        $nama->keterangan_pendidikanstatus =2;
 $nama->save();
        Yii::$app->session->setFlash('info', 'Data Pencaker :'.$nama->keterangan_nama.'  NIK :'.$id.' Telah Ditempatkan'); 
        return $this->redirect('keloladatapencakerpenempatan');

    }

       public function actionNonaktif($id){
$penempatan = Pendidikan::find()
        -> where(['id_daftar'=> $id])->one();
$nama = Keterangan::find()
        -> where(['id_daftar'=> $id])->one();
        $penempatan->pendidikan_status = 3;
        $penempatan->save();
$nama->keterangan_pendidikanstatus =3;
 $nama->save();
        Yii::$app->session->setFlash('danger', 'Data Pencaker :'.$nama->keterangan_nama.'  NIK :'.$id.' Telah Di NOn-AKtifkan'); 
        return $this->redirect('keloladata');

    }

    public function actionUpdatepencaker($id)
    {

        $modelpendidikan = new ActiveDataProvider([

            'query' => Pendidikan::find()->where(['id_daftar'=> $id])

        ]);

        $modelpengalaman = new ActiveDataProvider([

            'query' => Pengalaman::find()->where(['id_daftar'=> $id])

        ]);

        $modellokasi = Lokasi::find()
        -> where(['id_daftar'=> $id])->one();
        return $this->render('updatepencaker',[
            'id'=>$id,
            'modelpendidikan' => $modelpendidikan,
            'modelpengalaman' => $modelpengalaman,
            'modellokasi' => $modellokasi,
        ]);
        
    }

    /**
     * Displays a single Keterangan model.
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

        public function actionCek()
    {
        $modelUser = new UserForm;
        $modelAkun = new Akun;
        $today = date('Y-m-d H:i:s');
        $todayy = date('Ymd');
        $model = new Capil();
        $modeldaftar = new Daftar();

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
if(count($dataPenduduk) == 33){
$carinik = Capil::findOne(['capil_nik'=>$dataPenduduk['NIK']]);
// var_dump($carinik==true);die();

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



                    $modelUser->username = $model->capil_nik;
                    $modelUser->level = 40;
                    $modelUser->status = 10;
                    $kode = strtotime("now");
                    //var_dump( $difference); die();
                    $modelUser->password = $kode;
                    $modelUser->validate();
                    $modelUser->saveUser();

                    $modelAkun->id_user = $modelUser->id;
                    $modelAkun->id_daftar = $model->capil_nik;
                    $modelAkun->akun_status = 1;
                    $modelAkun->akun_kode = $kode;
                    $modelAkun->akun_pass = $kode;
                    $modelAkun->save(false);


                      $kode = strtotime($today);
                      $angka =substr($todayy,2,-2);
                     $modeldaftar->daftar_id = $model->capil_nik;
                     $modeldaftar->daftar_nik = $model->capil_nik;
                     $modeldaftar->daftar_tgl = $today;
                     $modeldaftar->daftar_no = $angka.$todayy;
                     $modeldaftar->save();


                     $modelketerangan = new Keterangan();
  $modelketerangan->id_daftar         = $model->capil_nik;
  $modelketerangan->keterangan_nama   = $model->capil_nama_lgkp;
  $modelketerangan->keterangan_tempat = $model->capil_tmpt_lhr;
  $modelketerangan->keterangan_tgl    = $model->capil_tgl_lhr;
  if ($model->capil_jenis_klmin == 'Laki-Laki'){
  $modelketerangan->keterangan_jkl    = 1;

  }elseif ($model->capil_jenis_klmin == 'Perempuan'){
  $modelketerangan->keterangan_jkl    = 2;

  }
  $modelketerangan->keterangan_alamat = $model->capil_alamat;
  $modelketerangan->keterangan_kel    = $model->capil_no_kel;
  $modelketerangan->keterangan_kec    = $model->capil_no_kec;
  $modelketerangan ->save(false);

     //}

                   

 Yii::$app->session->setFlash('msg', '
     <div class="alert alert-success alert-dismissable">
     <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
     <strong>Pencarian Sukses! </strong> Data ditemukan dan disimpan.</div>'
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
            }elseif (count($dataPenduduk) == 2) {
                         Yii::$app->session->setFlash('msg', '
     <div class="alert alert-warning alert-dismissable">
     <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
     <strong>Kuota Pencarian Habis! </strong>...Waktu Selesai...</div>'
  );
           
            }

       
         

        }           
        
Yii::$app->session->setFlash('msg', '
     <div class="alert alert-info alert-dismissable">
     <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
     <strong>SILAHKAN MASUK NIK KOTA PARIAMAN! </strong></div>');
        return $this->render('capil', [
            'model' => $model,
        ]);
    }

    /**
     * Creates a new Keterangan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */

    public function actionPerbaharuifoto($id){
         
 $model = $this->findModelfoto($id);
            
 $oldFile = $model->lokasi_foto;

         if ($model->load(Yii::$app->request->post())) {

            $model->image = UploadedFile::getInstance($model, 'image');
            // if (! $model->image) {
            //     $model->save();
            // }else{
                if ($model->upload()) {
                    if ($oldFile) {
                        $this->deleteImgfoto($oldFile);
                    }
                    $model->save(false);
                }       
                Yii::$app->session->setFlash('success', '<strong> Photo Anda Berhasil Diperbaharui </strong>');  
if (Yii::$app->user->identity->level == 1) {

            return $this->redirect(['keterangan/createpencaker','id' => $model->id_daftar]);
}elseif (Yii::$app->user->identity->level == 40) {
            return $this->redirect(['keterangan/create']);

}
                 }
            
        return $this->render('perbaharuifoto'
       , [  // ubah ini
          'model' => $model,]
        );
    }

public function actionPerbaharuifotopencaker($id){
         
 $model = $this->findModelfoto($id);
            
 $oldFile = $model->lokasi_foto;

         if ($model->load(Yii::$app->request->post())) {

            $model->image = UploadedFile::getInstance($model, 'image');
            // if (! $model->image) {
            //     $model->save();
            // }else{
                if ($model->upload()) {
                    if ($oldFile) {
                        $this->deleteImgfoto($oldFile);
                    }
                    $model->save(false);
                }       
                Yii::$app->session->setFlash('success', '<strong> Photo Anda Berhasil Diperbaharui </strong>');  
if (Yii::$app->user->identity->level == 1) {

            return $this->redirect(['keterangan/updatepencaker','id' => $model->id_daftar]);
}elseif (Yii::$app->user->identity->level == 40) {
            return $this->redirect(['keterangan/create']);

}
                 }
            
        return $this->render('perbaharuifoto'
       , [  // ubah ini
          'model' => $model,]
        );
    }

private function deleteImgfoto($img){
        $baseUrl = Yii::getAlias('@webroot/files/foto/'.$img);
        @unlink($baseUrl);
    }
  protected function findModelfoto($id)
    {
        if (($model = Lokasi::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

        public function actionCreate()
    {
        $model = new Keterangan();
        $modelpendidikan = new Pendidikan();
        $modellokasi = new Lokasi();
        
        $idname = Yii::$app->user->identity->username;
        $modelketerangan = Keterangan::find()
        -> where(['id_daftar'=> $idname])->one();
        // var_dump( $idname);die();


      if (Yii::$app->user->identity->level == 40){ 
        $modelpendidikan = new ActiveDataProvider([
        'query' => Pendidikan::find()->where(['id_daftar'=> $idname])
        ]);

        $modelpengalaman = new ActiveDataProvider([

            'query' => Pengalaman::find()->where(['id_daftar'=> $idname])

        ]);


  
        $modellokasi = Lokasi::find()
        -> where(['id_daftar'=> $idname])->one();

       

        if ($modelketerangan->load(Yii::$app->request->post()) && $modelketerangan->save()) {


            return $this->redirect(
                // ['view', 'id' => $model->keterangan_id]
                ['/pendidikan/createbiasa']);
        }

         return $this->render('create', [
            'model' => $model,
            'modelpendidikan' => $modelpendidikan,
            'modelpengalaman' => $modelpengalaman,
            'modellokasi' => $modellokasi,
          
        ]);
         }       
    }



        public function actionCreatepencaker($id)
        {
        $model = new Keterangan();
        $modelid = $id;
        $modelketerangan = Keterangan::find()
        -> where(['id_daftar'=> $id])->one();

          $modelpendidikan = new ActiveDataProvider([

            'query' => Pendidikan::find()->where(['id_daftar'=> $id])

        ]);

        $modelpengalaman = new ActiveDataProvider([

            'query' => Pengalaman::find()->where(['id_daftar'=> $id])

        ]);


  
$modellokasi = Lokasi::find()
        -> where(['id_daftar'=> $id])->one();

    if ($modelketerangan->load(Yii::$app->request->post()) && $modelketerangan->save()) {
            return $this->redirect(
                               ['/pendidikan/createpencaker','id' => $id]);
        }

        return $this->render('create', [
            'model' => $model,
            'modelid' => $modelid,
            'modelpendidikan' => $modelpendidikan,
            'modelpengalaman' => $modelpengalaman,
            'modellokasi' => $modellokasi,
        ]);


         } 
        



      public function actionLihat($id)
    {

 $modellokasi = Pendidikan::find()
        -> where(['id_daftar'=> $id])->one();;

  if (Yii::$app->user->identity->level == 40) {

      $idname = Yii::$app->user->identity->username;
    }elseif (Yii::$app->user->identity->level == 1) {
      $idname = $modellokasi->id_daftar;

      // var_dump( $idname);die();
     
    }

      $modelpendidikan = Pendidikan::find()
        -> where(['id_daftar'=> $idname])->one();

        return $this->render('lihat', [
            'modelpendidikan' => $modelpendidikan,

        ]);
    }

    public function actionKartu()
{

   // return $this->render('printt');
   return $this->render('coba');
}

   public function actionKartubelakang()
{

   // return $this->render('printt');
   return $this->render('cobabelakang');
}

    public function actionKartupencaker($id)
{

   // return $this->render('printt');
   return $this->render('coba', [
            'modelid' => $id,

        ]);
}

   public function actionKartubelakangpencaker($id)
{

       
   // return $this->render('printt');
   return $this->render('cobabelakang', [
            'modelid' => $id,
            

        ]);
}

    // public function actionCreate($step = null)
    // {
    //     $model = new Keterangan();
    //     $modelpendidikan = new Pendidikan();
    //     $modellokasi = new Lokasi();

    //     $idname = Yii::$app->user->identity->username;
    //     $modelketerangan = Keterangan::find()
    //     -> where(['id_daftar'=> $idname])->one();

    //     if ($modelketerangan->load(Yii::$app->request->post()) && $modelketerangan->save()) {


    //         return $this->redirect(
    //             // ['view', 'id' => $model->keterangan_id]
    //             // ['/pendidikan/create'])
    //             ['createtabular','step' => 2])

    //         ;
    //     }

    //     return $this->render('create', [
    //         'model' => $model,
    //         'modelpendidikan' => $modelpendidikan,
    //         'modellokasi' => $modellokasi,
    //         'step' => $step,
    //     ]);
    // }

    /**
     * Updates an existing Keterangan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */

     public function actionUpdatedatadiri($id)
    {
        $modelketerangan = Keterangan::findOne(['id_daftar'=>$id]);
        // $model = $this->findModel($id);
   // var_dump($this->findModel($id));die;

        if ($modelketerangan->load(Yii::$app->request->post()) && $modelketerangan->save()) {

    Yii::$app->session->setFlash('success', 'DATA SUKSES DIPERBAHARUI'); 

            return $this->redirect(['updatepencaker', 'id' => $id]);
        }

        return $this->render('update', [
            'model' => $modelketerangan,
        ]);
    }


    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->keterangan_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Keterangan model.
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
     * Finds the Keterangan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Keterangan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Keterangan::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
