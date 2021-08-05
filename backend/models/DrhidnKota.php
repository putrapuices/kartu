<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "drhidn_kota".
 *
 * @property int $id
 * @property string|null $nomor
 * @property string $nama
 * @property string|null $singkatan
 * @property int|null $provinsi_id
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 */
class DrhidnKota extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'drhidn_kota';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['provinsi_id', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['nomor'], 'string', 'max' => 32],
            [['nama'], 'string', 'max' => 255],
            [['singkatan'], 'string', 'max' => 64],
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
            'singkatan' => 'Singkatan',
            'provinsi_id' => 'Provinsi ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }
}
