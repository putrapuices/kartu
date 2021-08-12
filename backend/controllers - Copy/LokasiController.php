<?php

namespace backend\controllers;

use Yii;
use backend\models\Lokasi;
use backend\models\LokasiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;


/**
 * LokasiController implements the CRUD actions for Lokasi model.
 */
class LokasiController extends Controller
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
     * Lists all Lokasi models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new LokasiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Lokasi model.
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
     * Creates a new Lokasi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */

    


    public function actionCreate()
    {
        $model = new Lokasi();

       $idname = Yii::$app->user->identity->username;
        $carilokasi = Lokasi::find()
        -> where(['id_daftar'=> $idname])->one();

    // if(!$carilokasi){
    
        if ($model->load(Yii::$app->request->post()) ) {
        $idname = Yii::$app->user->identity->username;
        $model->id_daftar = $idname ;


                    $model->image = UploadedFile::getInstance($model, 'image');

                    if (! $model->image) {

                        $model->save();

                    } else {

                        if ($model->upload()) {

                            $model->save(false);
                        }
                    }

        $model->save(false);

            // return $this->redirect(['view', 'id' => $model->lokasi_id]);
            return $this->redirect(['/keterangan/create']);
        }
    // }

        return $this->render('create', [
            'model' => $model,
        ]);
    }


    public function actionCreatepencaker($id)
    {
        $model = new Lokasi();

       $idname = Yii::$app->user->identity->username;
        $carilokasi = Lokasi::find()
        -> where(['id_daftar'=> $idname])->one();

    if(!$carilokasi){
    
        if ($model->load(Yii::$app->request->post()) ) {
        $idname = Yii::$app->user->identity->username;
        $model->id_daftar = $id ;


                    $model->image = UploadedFile::getInstance($model, 'image');

                    if (! $model->image) {

                        $model->save();

                    } else {

                        if ($model->upload()) {

                            $model->save(false);
                        }
                    }

        $model->save(false);

            // return $this->redirect(['view', 'id' => $model->lokasi_id]);
            return $this->redirect(['/keterangan/createpencaker','id' => $id]);
        }
    }elseif ($carilokasi) {
            return $this->redirect(['/keterangan/createpencaker','id' => $id]);
            
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Lokasi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['//keterangan/updatepencaker', 'id' => $model->id_daftar]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Lokasi model.
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
     * Finds the Lokasi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Lokasi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Lokasi::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
