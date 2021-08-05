<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pegawai".
 *
 * @property int $pegawai_id
 * @property string|null $pegawai_nama
 * @property string|null $pegawai_jabatan
 * @property string|null $pegawai_nip
 * @property int|null $pegawai_aktif
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pegawai_aktif'], 'integer'],
            [['pegawai_nama', 'pegawai_nip'], 'string', 'max' => 30],
            [['pegawai_jabatan'], 'string', 'max' => 80],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pegawai_id' => 'Pegawai ID',
            'pegawai_nama' => 'Pegawai Nama',
            'pegawai_jabatan' => 'Pegawai Jabatan',
            'pegawai_nip' => 'Pegawai Nip',
            'pegawai_aktif' => 'Pegawai Aktif',
        ];
    }

    public function getstatusLabel()
    {
        $return = [];
        if ($this->pegawai_aktif == '1'){
            $return['pegawai_aktif'] = 'Aktif';
            $return['class'] = 'badge bg-green';
            $return['class_custom'] = '1';
        } else if ($this->pegawai_aktif == '2') {
            $return['pegawai_aktif'] = 'Tidak Aktif';
            $return['class'] = 'badge bg-aqua';
            $return['class_custom'] = '2';           
        } 
        // else if ($this->pegawai_aktif == '3') {
        //     $return['pegawai_aktif'] = 'Tidak Disetujui';
        //     $return['class'] = 'badge bg-red';
        //     $return['class_custom'] = '2';           
        // }

        return $return;   
    }
}
