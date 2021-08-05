<?php

namespace backend\controllers;

use Yii;
use backend\models\Daftar;
use backend\models\DaftarSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\Keterangan;
use backend\models\KeteranganSearch;
use backend\models\Pendidikan;
use backend\models\PendidikanSearch;
use backend\models\Pengalaman;
use backend\models\PengalamanSearch;
use backend\models\Lokasi;
use backend\models\LokasiSearch;
/**
 * DaftarController implements the CRUD actions for Daftar model.
 */
class DaftarController extends Controller
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
     * Lists all Daftar models.
     * @return mixed
     */

    public function actionDaftarkan(){

         $modelD = new Daftar();
         $modelK = new Keterangan();
         $modelPend = new Pendidikan();
         $modelPeng = new Pengalaman();
         $modelL = new Lokasi();

        if ($modelD->load(Yii::$app->request->post()) && $modelK->load(Yii::$app->request->post()) &&   $modelPend->load(Yii::$app->request->post())
         && $modelPeng->load(Yii::$app->request->post())
    && $modelL->load(Yii::$app->request->post()) ){

            // $modelD->save();
            $cekNIK = Daftar::find()->where(['daftar_id'=> $modelD->daftar_nik])->one();
if(!$cekNIK){
// var_dump($modelD->daftar_nik);die();
            $isValid = $modelD->validate();
            $isValid = $modelK->validate() ;
            $isValid = $modelPend->validate() ;
            $isValid = $modelPeng->validate();
            $isValid = $modelL->validate() && $isValid;
            if ($isValid) {
            $modelD->daftar_id = $modelD->daftar_nik;
            $modelD->save(false);
            $modelK->id_daftar = $modelD->daftar_nik;
            $modelK->save(false);
            $modelPend->id_daftar = $modelD->daftar_nik;
            $modelPend->save(false);
            $modelPeng->id_daftar = $modelD->daftar_nik;
            $modelPeng->save(false);
            $modelK->id_daftar = $modelD->daftar_nik;
            $modelK->save(false);
            $modelL->id_daftar = $modelD->daftar_nik;
            $modelL->save(false);

        }}else{
             Yii::$app->session->setFlash('warning', '<b>Data Dengan NIK' . $modelD->daftar_nik. ' </b> <br> Sudah Terdaftar</b>');
 return $this->redirect('daftarkan');

        }
 return $this->redirect(['view', 'id' => $modelD->daftar_id]);
    }
        

        
       

        return $this->render('daftarkan', [
            'modelD' => $modelD,
            'modelK'=>$modelK,
            'modelPend'=>$modelPend,
            'modelPeng'=>$modelPeng,
            'modelL'=>$modelL,
        ]);
    }
    public function actionIndex()
    {
        $searchModel = new DaftarSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Daftar model.
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
     * Creates a new Daftar model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Daftar();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->daftar_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Daftar model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->daftar_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Daftar model.
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
     * Finds the Daftar model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Daftar the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Daftar::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
