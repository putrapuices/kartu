<?php 


use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

$this->title = 'Ganti Password';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-mahasiswa-index">
    <div class="box box-solid box-primary">
        <div class="box-header">
        <h3 class="box-title">Ganti Password</h3>
        </div>
        <div class="box-body">
        	<div class="col-lg-4 admin-menu-left-line">
			<?php $form = ActiveForm::begin(); ?>

			<?= $form->field($user, 'currentPassword')->passwordInput(['placeholder' => 'Masukkan Password Lama']) ?>
			<?= $form->field($user, 'newPassword')->passwordInput(['placeholder' => 'Masukkan Password Baru']) ?>
			<?= $form->field($user, 'newPasswordConfirm')->passwordInput(['placeholder' => 'Ketik Ulang Password Baru']) ?>


            <div class="form-group">
                <?= Html::submitButton($user->isNewRecord ? 'Tambah' : 'Ganti Password', ['class' => $user->isNewRecord ? 'btn btn-success' : 'btn btn-success']) ?>
                <a href="<?php echo Url::toRoute('/site');?>" class="btn btn-primary"> Cancel</a>
            </div>

            <?php ActiveForm::end(); ?>

               
            </div>   
        </div>
    </div>
</div>