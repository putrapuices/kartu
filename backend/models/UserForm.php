<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use backend\models\User;

/**
 * Description of UserForm
 *
 * @author aser
 */
class UserForm extends Model{
    //put your code here
    private $id;
    public $username;
    public $email;
    public $password;
    public $status;
    public $level;
    public $id_opd;
    
    private $_user=null;
    
    public function rules() {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.','on'=>'default'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['password', 'required','on'=>'default'],
            ['password', 'string', 'min' => 1],
            ['status','id_opd', 'integer'],
            
            ['level','required'],

        ];
    }

    public function attributeLabels()
    {
        return [
            'username' => 'User Name',
            'password' => 'Password',
            'level' => 'Level',
            'id_opd' => 'OPD',
        ];
    }
     
    public function scenarios() {
        $scenario = parent::scenarios();
        $scenario['update'] = ['username','password','level','id_opd'];
        return $scenario;
    }

    public function saveUser(){
        $user = $this->_user ? $this->_user : new User();
        $user->username = $this->username;
        $user->level = $this->level;
        $user->id_opd = $this->id_opd;
        $user->created_at = time();
        if($this->password){
            $user->setPassword($this->password);
            $user->generateAuthKey();
        }
        $result = $user->save();
        $this->id = $user->id;
        return $result;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function find($id){
        $user = User::findOne($id);
        $this->_user = $user;
        $this->id = $user->id;
        $this->email = $user->email;
        $this->level = $user->level;
        $this->username = $user->username;
    }
    
    public function query(){
        return User::find();
    }
    
     
}
