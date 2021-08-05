<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kecamatan".
 *
 * @property int $kecamatan_id
 * @property string|null $nama_kec
 * @property int|null $kd_kecamatan
 * @property int|null $id_kota
 * @property string $alamat
 * @property string $index
 *
 * @property Desa[] $desas
 */
class Kecamatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kecamatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_kecamatan', 'id_kota'], 'integer'],
            [['alamat', 'index'], 'required'],
            [['nama_kec', 'alamat'], 'string', 'max' => 255],
            [['index'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kecamatan_id' => 'Kecamatan ID',
            'nama_kec' => 'Nama Kec',
            'kd_kecamatan' => 'Kd Kecamatan',
            'id_kota' => 'Id Kota',
            'alamat' => 'Alamat',
            'index' => 'Index',
        ];
    }

    /**
     * Gets query for [[Desas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDesas()
    {
        return $this->hasMany(Desa::className(), ['id_kecamatan' => 'kecamatan_id']);
    }
}
