<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "bahasa".
 *
 * @property int $bahasa_id
 * @property string|null $bahasa_nama
 */
class Bahasa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bahasa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bahasa_nama'], 'string', 'max' => 55],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'bahasa_id' => 'Bahasa ID',
            'bahasa_nama' => 'Bahasa Nama',
        ];
    }
}
