<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\DetailView;
use backend\models\Capil;
use yii\helpers\Url;
?>
   $this->title = Yii::t('app', 'Example Form Wizard');

<?php $form = ActiveForm::begin(); ?>

<?php $wizard_config = [
    'steps' => [
        '1' => [
            'title' => 'Step 1',
            'icon' => 'glyphicon glyphicon-cloud-download',
            'content' => $this->render('_form', ['model' => $model, ]),
            'buttons' => [
                'next' => [
                    'title' => 'Next: Step 2',
                    'options' => ['class'=> 'btn btn-success']
                ]
            ],
        ],
        '2' => [
            'title' => 'Step 2',
            'icon' => 'glyphicon glyphicon-cloud-upload',
            'content' => $this->render('/pendidikan/create', [   'modelpendidikan' => $modelpendidikan]),
            'buttons' => [
            'buttons' => [
                'next' => [
                    'title' => 'Next: Final Step 3',
                    'options' => ['class'=> 'btn btn-success']
                ]
            ],
        ],
                 '3' => [
            'title' => 'Step 3 - Final',
            'icon' => 'glyphicon glyphicon-ok',
            

            'content' => $this->render('/lokasi/create', [   'modellokasi' => $modellokasi]),

            'buttons' => [
                'save' => [
                    'html' => Html::submitButton(
                        Yii::t('app', 'Load data'),
                        [
                            'class' => 'btn btn-success',
                            'id' => 'wizard_step3_final',
                            'name' => 'step',
                            'value' => 'save-final'
                        ]
                    ),
                ],
            ],
        ],
   ],],

      'start_step' => $step,

];
?>
<?= \drsdre\wizardwidget\WizardWidget::widget($wizard_config); ?>

   <?php ActiveForm::end(); ?>