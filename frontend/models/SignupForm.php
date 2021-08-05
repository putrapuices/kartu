<?php
namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'User/NIK Sudah Terdaftar.'],
            [['username'], 'match' ,'pattern'=>'/^[0-9]+$/u', 'message'=> 'NIK yang harus di isi number/angka.'],
            ['username', 'string', 'min' => 16, 'max' => 16],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Email Sudah Terdaftar.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }


// [['contactno'], 'string', 'max' => 25],
//  [['contactno'], 'match' ,'pattern'=>'/^[0-9]+$/u', 'message'=> 'Contact No can Contain only numeric characters.'], 
    /**
     * Signs user up.
     *
     * @return bool whether the creating new account was successful and email was sent
     */
    // public function signup()
    // {
    //     if (!$this->validate()) {
    //         return null;
    //     }
        
    //     $user = new User();
    //     $user->username = $this->username;
    //     $user->email = $this->email;
    //     $user->setPassword($this->password);
    //     $user->generateAuthKey();
    //     $user->generateEmailVerificationToken();
    //     return $user->save() && $this->sendEmail($user);

    // }

    public function signup()
{
    if ($this->validate()) {
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->status = 10; 
        $user->level = 40; 
        if ($user->save()) {
            return $user;
        }
    }
 
    return null;
}

    /**
     * Sends confirmation email to user
     * @param User $user user model to with email should be send
     * @return bool whether the email was sent
     */
    protected function sendEmail($user)
    {
        return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'emailVerify-html', 'text' => 'emailVerify-text'],
                ['user' => $user]
            )
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
            ->setTo($this->email)
            ->setSubject('Account registration at ' . Yii::$app->name)
            ->send();
    }
}
