<?php

namespace backend\controllers;

use Yii;
use backend\models\Pengalaman;
use backend\models\PengalamanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\ModelStok;
use backend\models\Lokasi;
use yii\helpers\ArrayHelper;
use yii\base\Model;


/**
 * PengalamanController implements the CRUD actions for Pengalaman model.
 */
class PengalamanController extends Controller
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
     * Lists all Pengalaman models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PengalamanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pengalaman model.
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
     * Creates a new Pengalaman model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
//     public function actionCreate()
//     {
//         $model = new Pengalaman();
//         $idname = Yii::$app->user->identity->username;


//           //Find out how many products have been submitted by the form
//         //$count = count(Yii::$app->request->post('Product', []));
// //         $count=4;

// //         //Send at least one model to the form
// //         $prts = [new Pengalaman()];
// // var_dump( $prts);die();
// //         //Create an array of the products submitted
// //         for($i = 1; $i < $count; $i++) {
// //             $prts[] = new Pengalaman();
// //         }

//         if ($model->load(Yii::$app->request->post()) ) {
//             $model->id_daftar = $idname;
//             $model->save();
//             // return $this->redirect(['view', 'id' => $model->pengalaman_id]);
//             return $this->redirect(['/lokasi/create']);
//         }

//         return $this->render('create', [
//             'model' => $model,
//         ]);
// }






    public function actionCreatetabular()
    {

        $model = new Pengalaman();       

        $today = date('Y-m-d H:i:s');     
        $idname = Yii::$app->user->identity->username; 
        $modelpengalamancari = Pengalaman::find()->where(['id_daftar' => $idname])->one(); 

        $idd=NULL;
        $modelsAddress = new Pengalaman;
        
            if ($model->load(Yii::$app->request->post())) {
                $model->save(false) === false;
                $modelsAddress = ModelStok::createMultiple(Pengalaman::classname());
                ModelStok::loadMultiple($modelsAddress, Yii::$app->request->post());            
            $valid = ModelStok::validateMultiple($modelsAddress);// && $valid;
            if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();
                try {
                    if ($flag = $model->save(false)) {
                        foreach ($modelsAddress as $modelAddress) {
                            $modelAddress->id_daftar = $idname;                        


                            if (($flag = $modelAddress->save(false)) === false) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                    }
                    if ($flag) {
                        $transaction->commit();
                        $this->findModel($model->pengalaman_id)->delete();

                        Yii::$app->session->setFlash('success', '<strong> Data Berhasil Ditambahkan </strong>');

                        return $this->redirect(['/lokasi/create']);

                    }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }
            Yii::$app->session->setFlash('success', '<strong> Data Berhasil Ditambahkan </strong>');
            return $this->redirect(['biosiswa/view', 'id' => $nisn->biosiswa_id]);
        }else {    
            return $this->render('create', [
             'model' => $model,
             'modelPrestasi' => (empty($modelsAddress)) ? [new Prestasisiswa] : $modelsAddress
         ]);
        }
    }


    public function actionCreatetabularpencaker($id)
    {

        $model = new Pengalaman();    
        
        $today = date('Y-m-d H:i:s');      

        $idname = Yii::$app->user->identity->username;
        $carinik = Lokasi::find()
        -> where(['id_daftar'=> $id])->one();

        $idd=NULL;
        $modelsAddress = new Pengalaman;
        

        if ($model->load(Yii::$app->request->post())) {
            $model->save(false) === false;
            $modelsAddress = ModelStok::createMultiple(Pengalaman::classname());
            ModelStok::loadMultiple($modelsAddress, Yii::$app->request->post());            
            $valid = ModelStok::validateMultiple($modelsAddress);// && $valid;


            if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();
                try {
                    if ($flag = $model->save(false)) {
                        foreach ($modelsAddress as $modelAddress) {
                            $modelAddress->id_daftar = $id;                        


                            if (($flag = $modelAddress->save(false)) === false) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                    }
                    if ($flag) {
                        $transaction->commit();
                        $this->findModel($model->pengalaman_id)->delete();

                        Yii::$app->session->setFlash('success', '<strong> Data Berhasil Ditambahkan </strong>');
                        if ($carinik){
                            return $this->redirect(['//keterangan/updatepencaker','id' => $id]);
                        }elseif(!$carinik){
                         return $this->redirect(['/lokasi/createpencaker','id' => $id]); 
                     }


                 }
             } catch (Exception $e) {
                $transaction->rollBack();
            }
        }

            // Yii::$app->session->setFlash('success', '<strong> Data Berhasil Ditambahkan </strong>');


            //     return $this->redirect(['biosiswa/view', 'id' => $nisn->biosiswa_id]);

    } else {



        return $this->render('create', [
         'model' => $model,
         'modelPrestasi' => (empty($modelsAddress)) ? [new Prestasisiswa] : $modelsAddress

     ]);

    }
 // }



}

// public function actionCreate()
//     {

//         //Find out how many products have been submitted by the form
//         $count = count(Yii::$app->request->post('Product', []));
//         // $count=4;

//         //Send at least one model to the form
//         $prts = [new Pengalaman()];

//         //Create an array of the products submitted
//         for($i = 1; $i < $count; $i++) {
//             $prts[] = new Pengalaman();
//         }


//         //Load and validate the multiple models
//         if (Model::loadMultiple($prts, Yii::$app->request->post()) && Model::validateMultiple($prts)) {

//             foreach ($prts as $product) {

//                 //Try to save the models. Validation is not needed as it's already been done.
//                 $product->save(false);

//             }
//             return $this->redirect('view');
//         }

//         return $this->render('create', ['model' => $prts]);

//     }


// public function actionCreate()
// {
//     $count = count(Yii::$app->request->post('Pengalaman', []));
//     // var_dump($count);die();
//     $settings = [new Pengalaman()];
//     for($i = 1; $i < $count; $i++) {
//         $settings[] = new Pengalaman();
//     }

//     //Load and validate the multiple models
//         if (Model::loadMultiple($settings, Yii::$app->request->post()) && Model::validateMultiple($settings)) {

//             foreach ($settings as $product) {

//                 //Try to save the models. Validation is not needed as it's already been done.
//                 $product->save(false);

//             }
//             return $this->redirect('view');
//         }

//             return $this->render('create', [
//             'model' => $settings,
//         ]);
// }
//     public function actionCreate()
//     {
//         $model = new Pengalaman();
//         $idname = Yii::$app->user->identity->username;

//         if ($model->load(Yii::$app->request->post()) ) {
//             $model->id_daftar = $idname;
//             $model->save();
//             // return $this->redirect(['view', 'id' => $model->pengalaman_id]);
//             return $this->redirect(['/lokasi/create']);
//         }

//         return $this->render('create', [
//             'model' => $model,
//         ]);
// }


// public function actionCreate()
//     {
//         $model = new Pengalaman(); //สร้างใบ Order
//         $idname = Yii::$app->user->identity->username;

//         if($model->load(Yii::$app->request->post()))
//         {

//             $transaction = Yii::$app->db->beginTransaction();

//             try {
//                 $model->save(); //บันทึกใบ Order

//                 $items = Yii::$app->request->post();
//                 var_dump($items);die();

//                 foreach($items['Pengalaman'] as $key => $val){ //นำรายการสินค้าที่เลือกมา loop บันทึก

//             $model->id_daftar = $idname;
//                 // var_dump($val['pengalaman_id']);die();

//                     if(empty($val['id'])){
//                         $order_detail = new Pengalaman();
//                     }else{
//                         $order_detail = Pengalaman::findOne($val['id']);
//                     }
//                     $order_detail->pengalaman_jabatan = $model->pengalaman_id;
//                     // $order_detail->amount = $val['amount'];
//                     // //หาราคาสินค้า
//                     // $product = Product::findOne($val['product_id']);

//                     // $order_detail->product_id = $product->id;
//                     // $order_detail->price = $product->price; //ราคาจากสินค้า
//                     // $model->save();
//                     $order_detail->save();

//                 }

//                 $transaction->commit();
//                 Yii::$app->session->setFlash('success', 'บันทึกข้อมูลเรียบร้อย');
//                 return $this->redirect(['index']);
//             } catch (Exception $e) {
//                 $transaction->rollBack();
//                 Yii::$app->session->setFlash('error', 'มีข้อผิดพลาดในการบันทึก');
//                 return $this->redirect(['index']);
//             }
//         }
//         return $this->render('create', [
//             'model' => $model,
//         ]);
//     }
// public function actionCreate()
//     {
//         $aNilai=[];
//         foreach (Siswa::find()->where(['kelas_id' => 2])->all() as $siswa) {
//             $nilai = new Nilai([
//                 'siswa_id'=>$siswa->id,
//             ]);
//             $aNilai[$siswa->id] = $nilai;
//         }

//         if(Nilai::loadMultiple($aNilai,  Yii::$app->request->post()) && Nilai::validateMultiple($aNilai)){
//             foreach ($aNilai as $nilai) {
//                  $nilai->save(false);
//             } 
//                  return $this->redirect(['site/index']);
//         }
//         return $this->render('create',[
//             'aNilai'=>$aNilai,
//                    ]);

//     }

    /**
     * Updates an existing Pengalaman model.
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
     * Deletes an existing Pengalaman model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        $model = Pengalaman::findOne($id);
        var_dump($model);die();
        return $this->redirect(['//keterangan/updatepencaker','id'=>$model->id_daftar]);
    }

    /**
     * Finds the Pengalaman model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Pengalaman the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Pengalaman::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
