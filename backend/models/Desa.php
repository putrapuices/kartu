<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "desa".
 *
 * @property int $desa_id
 * @property string|null $nama_desa
 * @property int|null $kd_desa
 * @property int|null $id_kecamatan
 *
 * @property Kecamatan $kecamatan
 */
class Desa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'desa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_desa', 'id_kecamatan'], 'integer'],
            [['nama_desa'], 'string', 'max' => 255],
            [['id_kecamatan'], 'exist', 'skipOnError' => true, 'targetClass' => Kecamatan::className(), 'targetAttribute' => ['id_kecamatan' => 'kecamatan_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'desa_id' => 'Desa ID',
            'nama_desa' => 'Nama Desa',
            'kd_desa' => 'Kd Desa',
            'id_kecamatan' => 'Id Kecamatan',
        ];
    }

    /**
     * Gets query for [[Kecamatan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKecamatan()
    {
        return $this->hasOne(Kecamatan::className(), ['kecamatan_id' => 'id_kecamatan']);
    }
}
