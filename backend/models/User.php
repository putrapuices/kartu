<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property integer $level
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Agenda[] $agendas
 * @property Berita[] $beritas
 * @property Gallery[] $galleries
 * @property Pengumuman[] $pengumumen
 */
class User extends \yii\db\ActiveRecord
{
    
    const LEVEL_ADMIN = 1;
    const LEVEL_PIMINAN = 2;
    const LEVEL_BENDAHARA = 3;
    const LEVEL_TEKNIS = 4;
    const LEVEL_PELANGGAN = 5;
    const LEVEL_REGISTER = 40;

    public $currentPassword;
    public $newPassword;
    public $newPasswordConfirm;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'auth_key', 'password_hash'], 'required'],
            [['level','id_opd', 'status', 'created_at', 'updated_at'], 'integer'],
            [['username', 'password_hash', 'password_reset_token', 'email'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['username'], 'unique'],
            [['password_reset_token'], 'unique'],

            [['newPassword', 'currentPassword','newPasswordConfirm'], 'required', 'on' => 'change_password'],
            [['currentPassword'], 'validateCurrentPassword'],

            [['newPassword','newPasswordConfirm'], 'string', 'min' => 1],
            [['newPassword','newPasswordConfirm'], 'filter','filter' => 'trim'],
            [['newPasswordConfirm'], 'compare', 'compareAttribute' => 'newPassword', 'message' => 'Password tidak cocok']
        ];
    }
    
    public function scenarios() {
        $scenario = parent::scenarios();
        $scenario['change_password'] = ['currentPassword','newPassword','newPasswordConfirm'];
        $scenario['create_password'] = ['username','level','id_opd'];

        return $scenario;
    }
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'level' => 'Level',
            'id_opd' => 'OPD',
            'status' => 'Status',
            'created_at' => 'Created / Updated At',
            'updated_at' => 'Updated At',
            'currentPassword' => 'Password Lama',
            'newPassword' => 'Password Baru',
            'newPasswordConfirm' => 'Ketik Ulang Password Baru',
        ];
    }    

    public function getlevelLabel()
    {   
        $return = [];
        if ($this->level == self::LEVEL_ADMIN){
            $return['level'] = 'Super Admin';
            $return['class'] = 'badge bg-aqua';
            $return['class_custom'] = '1';
        } else if ($this->level == self::LEVEL_PIMINAN){
            $return['level'] = 'Pimpinan';
            $return['class'] = 'badge bg-yellow';
            $return['class_custom'] = '2';
        } else if ($this->level == self::LEVEL_BENDAHARA){
            $return['level'] = 'Bendahara';
            $return['class'] = 'badge bg-red';
            $return['class_custom'] = '3';
        } else if ($this->level == self::LEVEL_TEKNIS){
            $return['level'] = 'Staf Teknis';
            $return['class'] = 'badge bg-green';
            $return['class_custom'] = '4';
        } else if ($this->level == self::LEVEL_PELANGGAN){
            $return['level'] = 'Pelanggan';
            $return['class'] = 'badge bg-default';
            $return['class_custom'] = '5';
        } else if ($this->level == self::LEVEL_REGISTER){
            $return['level'] = 'register';
            $return['class'] = 'badge bg-default';
            $return['class_custom'] = '40';
        } 
        return $return;   
    }

    /**
    * @return \yii\db\ActiveQuery
    */
    public function getAuthors()
    {
        return $this->hasMany(Author::className(), ['id_user' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */

    public function getAuthKey() {
        return $this->auth_key;
    }

    public function getId() {
        return $this->getPrimaryKey();
    }

    public function validateAuthKey($authKey) {
        return $this->getAuthKey() === $authKey;
    }

    public static function findIdentity($id) {
        return static::findOne(['id'=>$id]);
    }

    public static function findIdentityByAccessToken($token, $type = null) {
        throw new \yii\base\NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }
    
    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username, 'status' => self::STATUS_ACTIVE]);
    }

    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }


    public function validateCurrentPassword()
    {
        if (!$this->verifyPassword($this->currentPassword)) {
            $this->addError("currentPassword","Password yang dimasukkan Salah");
        }
    }

    public function verifyPassword($password)
    {
        $dbpassword = static::findOne(['username' => Yii::$app->user->identity->username, 'status' => self::STATUS_ACTIVE])->password_hash;

        return Yii::$app->security->validatePassword($password, $dbpassword);
    }
}
