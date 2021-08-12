<?php

namespace backend\controllers;

use Yii;
use backend\models\Pendidikan;
use backend\models\Daftar;
use backend\models\Keterangan;
use backend\models\PendidikanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PendidikanController implements the CRUD actions for Pendidikan model.
 */
class PendidikanController extends Controller
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
     * Lists all Pendidikan models.
     * @return mixed
     */



    public function actionGet()
    {
        $request = Yii::$app->request;
        $obj = $request->post('obj');
        $value = $request->post('value');
        switch ($obj) {
            case 'id_sekolah':
            $data = Jurusan::find()->where(['id_sekolah' => $value])->all();
                // $tagOptions = ['prompt' => "Pilih Desa / Kelurahan"];
            return Html::renderSelectOptions([], ArrayHelper::map($data, 'jurusan_id', function ($data, $defaultValue)
            {
                return $data->jurusan_nama;
            }
        ), $tagOptions);
            break;
        }
    }
    public function actionKab($id)
    {       

        $countdesa = \backend\models\Jurusan::find()
        ->where(['id_sekolah' => $id])
        ->count(); 
// var_dump($countdesa);die;
        
        $jenis = \backend\models\Jurusan::find()
        ->where(['id_sekolah' => $id])
        ->orderBy('jurusan_id ASC')
        ->all();

        if ($countdesa>0) {
            echo "<option> - Pilih Jenis -</option>";
            foreach($jenis as $regency) {
                echo "<option value='".$regency->jurusan_id."'> " . $regency->jurusan_nama."</option>";
            }
        } else{
            echo "<option>-</option>";
            
        }

    }

    public function actionJabatan($id)
    {       

        $countdesa = \backend\models\Pekerjaan::find()
        ->where(['id_jabatan' => $id])
        ->count(); 
// var_dump($countdesa);die;
        
        $jenis = \backend\models\Pekerjaan::find()
        ->where(['id_jabatan' => $id])
        ->orderBy('pekerjaan_id ASC')
        ->all();

        if ($countdesa>0) {
            echo "<option> - Pilih Pekerjaan -</option>";
            foreach($jenis as $regency) {
                echo "<option value='".$regency->pekerjaan_id."'> " . $regency->pekerjaan_nama."</option>";
            }
        } else{
            echo "<option>-</option>";
            
        }

    }





    public function actionIndex()
    {
        $searchModel = new PendidikanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pendidikan model.
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
     * Creates a new Pendidikan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreatebiasa()
    {
        $model = new Pendidikan();
        $idname = Yii::$app->user->identity->username;
        $carinik = Pendidikan::find()
        -> where(['id_daftar'=> $idname])->one();
        $carijkl = Keterangan::find()
        -> where(['id_daftar'=> $idname])->one();
        $caridaftartanggal = Daftar::findOne(['daftar_id'=>$idname]);
        $tanggaldaftar = $caridaftartanggal->daftar_tgl;
        $sekarang = Yii::$app->formatter->asDate('now', 'php:Y-m-d');
        $tanggalberakhir = date('d-m-Y', strtotime('+2 years', strtotime($tanggaldaftar)));
        $tglterakhir =Yii::$app->formatter->asDatetime(strtotime($tanggalberakhir), "php:Y-m-d");
        if (!$carinik) {
        if ($model->load(Yii::$app->request->post())/* && $model->save()*/)
        {
            $model->id_daftar =   $idname ;
            
            $model->pendidikan_datehapus =   $tglterakhir;
            $model->pendidikan_status = 1;
            $model->pendidikan_date =  $sekarang;
            $model->pendidikan_jkl =  $carijkl->keterangan_jkl;
            $model->id_daftar =   $idname ;
            $model->save();
            // return $this->redirect(['view', 'id' => $model->pendidikan_id]);
            return $this->redirect(['/pengalaman/createtabular']);
        }
        // jika table pendidikan telah terisi maka render ke table pengalaman yg pakai tabularinput
    }elseif($carinik== true){
            return $this->redirect(['/pengalaman/createtabular']);
    }else{
    if ($carinik->load(Yii::$app->request->post())/* && $carinik->save()*/)
    {
        $carinik->id_daftar =   $idname ;
        $carinik->save();
            // return $this->redirect(['view', 'id' => $model->pendidikan_id]);
        return $this->redirect(['/pengalaman/createtabular','id' => $model->pendidikan_id]);
    }
    
}


return $this->render('_formpendidikan', [
    'model' => $model,
]);
}



public function actionCreatepencaker($id)
{
    $model = new Pendidikan();
    $idname = Yii::$app->user->identity->username;
    $carinik = Pendidikan::find()
    -> where(['id_daftar'=> $id])->one();
    $carijkl = Keterangan::find()
    -> where(['id_daftar'=> $id])->one();
    $sekarang = Yii::$app->formatter->asDate('now', 'php:Y-m-d');

    if (!$carinik) {
    if ($model->load(Yii::$app->request->post())/* && $model->save()*/)
    {

       $caridaftartanggal = Daftar::findOne(['daftar_id'=>$id]);
       $tanggaldaftar = $caridaftartanggal->daftar_tgl;
       $tanggalberakhir = date('d-m-Y', strtotime('+2 years', strtotime($tanggaldaftar)));
       
       $tambahenambulan = date('d-m-Y', strtotime('+6 month', strtotime($tanggaldaftar)));
       $tambahtahun = date('d-m-Y', strtotime('next years', strtotime($tanggaldaftar)));
       $tambahtahunkedua = date('d-m-Y', strtotime('+6 month next years', strtotime($tanggaldaftar)));
       $tambahtahunkeduaenambulan = date('d-m-Y', strtotime('+12 month next years', strtotime($tanggaldaftar)));
             // $today = $tanggalberakhir('Y-m-d');
       $tglterakhir =Yii::$app->formatter->asDatetime(strtotime($tanggalberakhir), "php:Y-m-d");

       $model->pendidikan_datehapus =   $tglterakhir;
       $model->pendidikan_status = 1;
       $model->pendidikan_date =  $sekarang;
       $model->pendidikan_jkl =  $carijkl->keterangan_jkl;
       $model->id_daftar =   $id ;
       $model->save();


            // return $this->redirect(['view', 'id' => $model->pendidikan_id]);
       return $this->redirect(['/pengalaman/createtabularpencaker','id' => $id]);
   }
}else{
if ($carinik->load(Yii::$app->request->post())/* && $carinik->save()*/)
{

    $caridaftartanggal = Daftar::findOne(['daftar_id'=>$id]);
    $tanggaldaftar = $caridaftartanggal->daftar_tgl;
    $tanggalberakhir = date('d-m-Y', strtotime('+2 years', strtotime($tanggaldaftar)));
    
    $tambahenambulan = date('d-m-Y', strtotime('+6 month', strtotime($tanggaldaftar)));
    $tambahtahun = date('d-m-Y', strtotime('next years', strtotime($tanggaldaftar)));
    $tambahtahunkedua = date('d-m-Y', strtotime('+6 month next years', strtotime($tanggaldaftar)));
    $tambahtahunkeduaenambulan = date('d-m-Y', strtotime('+12 month next years', strtotime($tanggaldaftar)));
            // $today = $tanggalberakhir('Y-m-d');

    $tglterakhir =Yii::$app->formatter->asDatetime(strtotime($tanggalberakhir), "php:Y-m-d");
    $carinik->pendidikan_datehapus =   $tglterakhir;
    $carinik->pendidikan_status = 1;
    $carinik->id_daftar =   $id ;
    $carinik->pendidikan_date =  $sekarang;
    $carinik->pendidikan_jkl =  $carijkl->keterangan_jkl;
    $carinik->save();
            // return $this->redirect(['view', 'id' => $id]);
    return $this->redirect(['/pengalaman/createtabularpencaker','id' => $id]);
}

}

   // $caridaftartanggal = Daftar::findOne(['daftar_id'=>$id]);
   //       $tanggaldaftar = $caridaftartanggal->daftar_tgl;
   //       $tanggalberakhir = date('d-m-Y', strtotime('+2 years', strtotime($tanggaldaftar)));
   //       $tglterakhir =Yii::$app->formatter->asDatetime(strtotime($tanggalberakhir), "php:Y-m-d")

   //       $tambahenambulan = date('d-m-Y', strtotime('+6 month', strtotime($tanggaldaftar)));
   //       $tambahtahun = date('d-m-Y', strtotime('next years', strtotime($tanggaldaftar)));
   //       $tambahtahunkedua = date('d-m-Y', strtotime('+6 month next years', strtotime($tanggaldaftar)));
   //       $tambahtahunkeduaenambulan = date('d-m-Y', strtotime('+12 month next years', strtotime($tanggaldaftar)));

return $this->render('_formpendidikan', [
    'model' => $model,
]);
}
    /**
     * Updates an existing Pendidikan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = Pendidikan::find()
        -> where(['id_daftar'=> $id])->one();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['keterangan/updatepencaker', 'id' => $id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Pendidikan model.
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
     * Finds the Pendidikan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Pendidikan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Pendidikan::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
