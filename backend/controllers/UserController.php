<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use backend\models\UserForm;
use backend\models\UserSearch;
use backend\models\User;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class UserController extends Controller
{

    // public function beforeAction()
    // {
    //        if (Yii::$app->user->isGuest)
    //             $this->redirect(Yii::$app->urlManager->createUrl('site/login'));

    //        //something code right here if user valided
    // }

    // public function beforeAction()
    // {
    //        if (Yii::$app->user->isGuest)
    //             $this->redirect(Yii::$app->urlManager->createUrl('site/login'));

    //        //something code right here if user valided
    // }
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
            'access'=>[
                'class'=>AccessControl::className(),
                'rules'=>[
                    [
                        'actions'=>[
                            'index',
                            'create',
                            'update',
                            'delete',
                            'view',
                            'password',
                        ],
                        'allow'=>true,
                        'matchCallback'=>function(){
                            return (
                                Yii::$app->user->identity->level== 1|| Yii::$app->user->identity->level== 40
                            );
                        }
                    ],
                    [
                        'actions'=>[
                            'password',
                        ],
                        'allow'=>true,
                        'matchCallback'=>function(){
                            return (
                                Yii::$app->user->identity->level== 2 || Yii::$app->user->identity->level== 3 || Yii::$app->user->identity->level== 4 || Yii::$app->user->identity->level== 5
                            );
                        }
                    ],
                ],
            ],
        ];
    }

    public function actionIndex($id=NULL)
    {
        $userForm = new UserForm();
        if($id){
            $userForm->find($id);
            $userForm->setScenario('update');
        }
        $search = new UserSearch();
        $dataProvider = $search->search(Yii::$app->request->queryParams);
        
        if($userForm->load(Yii::$app->request->post()) && $userForm->validate()){
            $userForm->saveUser();

            Yii::$app->session->setFlash('success', 'Data '.$userForm->username.' Berhasil Ditambahkan');
             return $this->redirect(['index']);
        }else{
            return $this->render('index',[
                'model' => $userForm,
                'id_user' => $userForm->getId(),
                'dataProvider' => $dataProvider,
                'search' => $search
            ]);
        }
        
    }
    
    public function actionDelete($id)
    {
        $user = User::findOne($id);
        $username = $user->username;
        $del = $user->delete();
        if($del){
            Yii::$app->session->setFlash('success', 'Data '.$username.' Berhasil Dihapus');
            return $this->redirect('index');
        }
        Yii::$app->session->setFlash('danger', 'Data '.$username.' Gagal Dihapus');
        return ;
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionPassword()
    {
        $user = Yii::$app->user->identity;
        $user->scenario='ganti-pass';
        // var_dump($user);die;
        $loadedPost = $user->load(Yii::$app->request->post());

        if ($loadedPost && $user->validate()) {

            $user->password = $user->newPassword;
            $user->save(false);
            Yii::$app->session->setFlash('success','Password Berhasil Diperbarui');
            return $this->refresh();
        }

        return $this->render("ganti-pass", [
            'user' => $user,
        ]);

    }
}
