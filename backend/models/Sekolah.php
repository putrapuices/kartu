<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sekolah".
 *
 * @property int $sekolah_id
 * @property string|null $sekolah_nama
 * @property int|null $sekolah_kode
 * @property int|null $sekolah_status
 *
 * @property Jurusan[] $jurusans
 */
class Sekolah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sekolah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sekolah_kode', 'sekolah_status'], 'integer'],
            [['sekolah_nama'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'sekolah_id' => 'Sekolah ID',
            'sekolah_nama' => 'Sekolah Nama',
            'sekolah_kode' => 'Sekolah Kode',
            'sekolah_status' => 'Sekolah Status',
        ];
    }

    /**
     * Gets query for [[Jurusans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJurusans()
    {
        return $this->hasMany(Jurusan::className(), ['id_sekolah' => 'sekolah_id']);
    }
}
