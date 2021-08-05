<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "akun".
 *
 * @property int $akun_id
 * @property int|null $id_daftar
 * @property int|null $id_user
 * @property string|null $akun_pass
 * @property string|null $akun_kode
 * @property int|null $akun_status
 */
class Akun extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'akun';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_daftar', 'id_user', 'akun_status'], 'integer'],
            [['akun_pass', 'akun_kode'], 'string', 'max' => 16],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'akun_id' => 'Akun ID',
            'id_daftar' => 'Id Daftar',
            'id_user' => 'Id User',
            'akun_pass' => 'Akun Pass',
            'akun_kode' => 'Akun Kode',
            'akun_status' => 'Akun Status',
        ];
    }
}
