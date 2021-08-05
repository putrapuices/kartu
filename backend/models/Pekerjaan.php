<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pekerjaan".
 *
 * @property int $pekerjaan_id
 * @property string|null $pekerjaan_nama
 * @property int|null $id_jabatan
 *
 * @property Jabatan $jabatan
 */
class Pekerjaan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pekerjaan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pekerjaan_id'], 'required'],
            [['pekerjaan_id', 'id_jabatan'], 'integer'],
            [['pekerjaan_nama'], 'string', 'max' => 75],
            [['pekerjaan_id'], 'unique'],
            [['id_jabatan'], 'exist', 'skipOnError' => true, 'targetClass' => Jabatan::className(), 'targetAttribute' => ['id_jabatan' => 'jabatan_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pekerjaan_id' => 'Pekerjaan ID',
            'pekerjaan_nama' => 'Pekerjaan Nama',
            'id_jabatan' => 'Id Jabatan',
        ];
    }

    /**
     * Gets query for [[Jabatan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJabatan()
    {
        return $this->hasOne(Jabatan::className(), ['jabatan_id' => 'id_jabatan']);
    }
}
