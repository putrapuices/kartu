<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "dusun".
 *
 * @property int $dusun_id
 * @property string|null $nama_dusun
 * @property int|null $id_desa
 */
class Dusun extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dusun';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_desa'], 'integer'],
            [['nama_dusun'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'dusun_id' => 'Dusun ID',
            'nama_dusun' => 'Nama Dusun',
            'id_desa' => 'Id Desa',
        ];
    }
}
