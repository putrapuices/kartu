<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "jabatan".
 *
 * @property int $jabatan_id
 * @property string|null $jabatan_nama
 *
 * @property Pekerjaan[] $pekerjaans
 */
class Jabatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jabatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jabatan_nama'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'jabatan_id' => 'Jabatan ID',
            'jabatan_nama' => 'Jabatan Nama',
        ];
    }

    /**
     * Gets query for [[Pekerjaans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPekerjaans()
    {
        return $this->hasMany(Pekerjaan::className(), ['id_jabatan' => 'jabatan_id']);
    }
}
