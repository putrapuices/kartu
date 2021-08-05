<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "daftar".
 *
 * @property int $daftar_id
 * @property int|null $daftar_nik
 * @property int|null $daftar_no
 * @property string|null $daftar_tgl
 *
 * @property Keterangan[] $keterangans
 * @property Lokasi[] $lokasis
 * @property Pendidikan[] $pendidikans
 * @property Pengalaman[] $pengalamen
 */
class Daftar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'daftar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['daftar_id'], 'required'],
            [['daftar_id', 'daftar_nik', 'daftar_no'], 'integer'],
            [['daftar_tgl'], 'safe'],
            [['daftar_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'daftar_id' => 'Daftar ID',
            'daftar_nik' => 'Daftar Nik',
            'daftar_no' => 'Daftar No',
            'daftar_tgl' => 'Daftar Tgl',
        ];
    }

    /**
     * Gets query for [[Keterangans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKeterangans()
    {
        return $this->hasMany(Keterangan::className(), ['id_daftar' => 'daftar_id']);
    }

    /**
     * Gets query for [[Lokasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLokasis()
    {
        return $this->hasMany(Lokasi::className(), ['id_daftar' => 'daftar_id']);
    }

    /**
     * Gets query for [[Pendidikans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPendidikans()
    {
        return $this->hasMany(Pendidikan::className(), ['id_daftar' => 'daftar_id']);
    }

    /**
     * Gets query for [[Pengalamen]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengalamen()
    {
        return $this->hasMany(Pengalaman::className(), ['id_daftar' => 'daftar_id']);
    }
}
