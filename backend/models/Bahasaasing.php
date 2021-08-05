<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "bahasaasing".
 *
 * @property int $bahasaasing_id
 * @property int|null $bahasaasing_nama
 * @property int|null $id_daftar
 */
class Bahasaasing extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bahasaasing';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bahasaasing_nama', 'id_daftar'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'bahasaasing_id' => 'Bahasaasing ID',
            'bahasaasing_nama' => 'Bahasaasing Nama',
            'id_daftar' => 'Id Daftar',
        ];
    }
}
