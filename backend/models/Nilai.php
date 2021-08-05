<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "nilai".
 *
 * @property int $id
 * @property int|null $siswa_id
 * @property int|null $nilai
 */
class Nilai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nilai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['siswa_id', 'nilai'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'siswa_id' => 'Siswa ID',
            'nilai' => 'Nilai',
        ];
    }
}
