<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pengalaman".
 *
 * @property int $pengalaman_id
 * @property string|null $pengalaman_jabatan
 * @property string|null $pengalaman_tugas
 * @property string|null $pengalaman_lama
 * @property string|null $pengalaman_pemberi
 * @property int|null $id_daftar
 *
 * @property Daftar $daftar
 */
class Pengalaman extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $schedule;
    public $pengalaman;
    public $items;
    public static function tableName()
    {
        return 'pengalaman';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_daftar'], 'integer'],
            [['pengalaman_jabatan', 'pengalaman_tugas', 'pengalaman_pemberi'], 'string', 'max' => 100],
            [['pengalaman_lama'], 'string', 'max' => 20],
            [['id_daftar'], 'exist', 'skipOnError' => true, 'targetClass' => Daftar::className(), 'targetAttribute' => ['id_daftar' => 'daftar_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pengalaman_id' => 'Pengalaman ID',
            'pengalaman_jabatan' => 'Pengalaman Jabatan',
            'pengalaman_tugas' => 'Pengalaman Tugas',
            'pengalaman_lama' => 'Pengalaman Lama',
            'pengalaman_pemberi' => 'Pengalaman Pemberi',
            'id_daftar' => 'Id Daftar',
        ];
    }

    /**
     * Gets query for [[Daftar]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDaftar()
    {
        return $this->hasOne(Daftar::className(), ['daftar_id' => 'id_daftar']);
    }
}
