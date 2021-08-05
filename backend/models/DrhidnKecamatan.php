<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "drhidn_kecamatan".
 *
 * @property int $id
 * @property string|null $nomor
 * @property string $nama
 * @property int|null $kota_id
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 */
class DrhidnKecamatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'drhidn_kecamatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['kota_id', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['nomor'], 'string', 'max' => 32],
            [['nama'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nomor' => 'Nomor',
            'nama' => 'Nama',
            'kota_id' => 'Kota ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }
}
