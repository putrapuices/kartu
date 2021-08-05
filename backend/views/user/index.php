<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use backend\models\User;
use yii\grid\GridView;
use dmstr\widgets\Alert;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $form ActiveForm */
/* @var $model backend\modules\user\models\UserForm */

$this->title = 'User';
?>
<div class="site-signup">
    <div class="box box-solid box-info">
        <div class="box-header">
        <h3 class="box-title">Data User</h3>
        </div>
        <div class="box-body">
                <div class="col-lg-5 border-right">
                    
                    <?= Alert::widget();?>
                    <br />
                    <?php $form = ActiveForm::begin(['layout'=>'horizontal'])?>
                    
                    <?= $form->field($model, 'username')->textInput(['placeholder'=>'User name']);?>
                    
                    <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Password']);?>
                    
                    <?= $form->field($model, 'level')->dropDownList([
                        User::LEVEL_ADMIN => 'Administrator',
                        User::LEVEL_PIMINAN => 'Pimpinan',
                        User::LEVEL_BENDAHARA => 'Bendahara',
                        User::LEVEL_TEKNIS => 'Staf Teknis',
                        User::LEVEL_PELANGGAN => 'Pelanggan',

                    ],['prompt'=>'Pilih Level User']);?>
                    
                    <div class="form-group">
                        <label class="control-label col-sm-3 sr-only">Button</label>
                        <div class="col-sm-6">
                            <?= Html::submitButton('Submit',['class' => 'btn btn-success']); ?>
                            <?= Html::a('Cancel',['index'],['class' => 'btn btn-primary']); ?>
                        </div>
                    </div>
                    <?php ActiveForm::end();?>                  
                </div>
                <div class="col-lg-7">
                    
                    <?php $formFilter = ActiveForm::begin(['layout'=>'inline','method'=>'get']);?>
                    
                    <?= $formFilter->field($search, 'username')->textInput(['placeholder' => 'Cari: username']);?>

     
                    <?= $formFilter->field($search, 'level')->dropDownList([
                        User::LEVEL_ADMIN => 'Administrator',
                        User::LEVEL_PIMINAN => 'Pimpinan',
                        User::LEVEL_BENDAHARA => 'Bendahara',
                        User::LEVEL_TEKNIS => 'Staf Teknis',
                        User::LEVEL_PELANGGAN => 'Pelanggan',
                    ],['prompt'=>'Pilih Level User']);?>
                    
                    <?= Html::submitButton('Cari',['class'=>'btn btn-primary']);?>
                    <?= Html::a('Cancel',['index'],['class' => 'btn btn-default']); ?>
                    
                    <?php ActiveForm::end(); ?>
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'columns' => [
                            [
                                'class' => 'yii\grid\SerialColumn',
                                'header' => 'No'
                            ],
                            'username',
                            [
                                'attribute' => 'level',
                                'value' => function($model){
                                    $stat = $model->getlevelLabel();
                                    return Html::tag(
                                        'span', $stat['level'], ['class' => $stat['class']]
                                    );
                                },
                                'format' => 'html'
                            ],
                            'created_at:datetime',
                            [
                                'class' => 'yii\grid\ActionColumn',
                                'template' => '{update} {delete}',
                                'header' => 'Action',
                                'buttons' => [
                                    'update' => function($url,$model,$key){
                                        return Html::a('<span class="glyphicon glyphicon-pencil"></span>',[
                                            'index','id'=>$key
                                        ],[
                                            'arial-label' => 'update',
                                            'title' => 'update'
                                        ]);
                                    }
                                ]
                            ],
                        ],
                    ]); ?>            
                </div>
            </div>
        </div>
</div>

