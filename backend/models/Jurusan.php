<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "jurusan".
 *
 * @property int $jurusan_id
 * @property string|null $jurusan_nama
 * @property int|null $id_sekolah
 * @property string|null $jurusan_jurusan1
 * @property string|null $jurusan_jurusan2
 *
 * @property Sekolah $sekolah
 */
class Jurusan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jurusan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jurusan_id'], 'required'],
            [['jurusan_id', 'id_sekolah'], 'integer'],
            [['jurusan_nama'], 'string', 'max' => 48],
            [['jurusan_jurusan1', 'jurusan_jurusan2'], 'string', 'max' => 4],
            [['jurusan_id'], 'unique'],
            [['id_sekolah'], 'exist', 'skipOnError' => true, 'targetClass' => Sekolah::className(), 'targetAttribute' => ['id_sekolah' => 'sekolah_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'jurusan_id' => 'Jurusan ID',
            'jurusan_nama' => 'Jurusan Nama',
            'id_sekolah' => 'Id Sekolah',
            'jurusan_jurusan1' => 'Jurusan Jurusan1',
            'jurusan_jurusan2' => 'Jurusan Jurusan2',
        ];
    }

    /**
     * Gets query for [[Sekolah]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSekolah()
    {
        return $this->hasOne(Sekolah::className(), ['sekolah_id' => 'id_sekolah']);
    }
}
