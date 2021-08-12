<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "keterangan".
 *
 * @property int $keterangan_id
 * @property string|null $keterangan_nama
 * @property string|null $keterangan_tempat
 * @property string|null $keterangan_tgl
 * @property int|null $keterangan_jkl
 * @property string|null $keterangan_alamat
 * @property int|null $keterangan_prov
 * @property int|null $keterangan_kota
 * @property int|null $keterangan_kec
 * @property resource|null $keterangan_hp
 * @property int|null $keterangan_status
 * @property string|null $keterangan_tb
 * @property string|null $keterangan_bb
 * @property string|null $keterangan_email
 * @property int $id_daftar
 * @property int|null $keterangan_pendidikanstatus
 * @property string|null $keterangan_pendidikandatehapus
 *
 * @property Daftar $daftar
 */
class Keterangan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'keterangan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['keterangan_tgl'], 'required'],
            [['keterangan_tgl', 'keterangan_pendidikandatehapus'], 'safe'],
            [['keterangan_jkl', 'keterangan_prov', 'keterangan_kota', 'keterangan_kec', 'keterangan_status', 'id_daftar', 'keterangan_pendidikanstatus'], 'integer'],
            [['id_daftar'], 'required'],
            [['keterangan_prov', 'keterangan_kota', 'keterangan_kec'], 'required'],
            [['keterangan_nama', 'keterangan_tempat'], 'string', 'max' => 100],
            [['keterangan_alamat','keterangan_alamat_domisili'], 'string', 'max' => 255],
            [['keterangan_hp'], 'string', 'max' => 12],
            [['keterangan_tb', 'keterangan_bb'], 'string', 'max' => 5],
            [['keterangan_email'], 'string', 'max' => 50],
            [['keterangan_email'], 'required'],
            [['id_daftar'], 'exist', 'skipOnError' => true, 'targetClass' => Daftar::className(), 'targetAttribute' => ['id_daftar' => 'daftar_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'keterangan_id' => 'Keterangan ID',
            'keterangan_nama' => 'Nama',
            'keterangan_tempat' => 'Tempat Lahir',
            'keterangan_tgl' => 'Tanggal Lahir',
            'keterangan_jkl' => 'Jenis Kelamin',
            'keterangan_alamat' => 'Alamat Sesuai KTP',
            'keterangan_alamat_domisili' => 'Alamat Saat Ini',
            'keterangan_prov' => 'Provinsi',
            'keterangan_kota' => 'Kota',
            'keterangan_kec' => 'Kecamatan',
            'keterangan_hp' => 'Nomor HP',
            'keterangan_status' => 'Keterangan Status',
            'keterangan_tb' => 'Tinggi Badan',
            'keterangan_bb' => 'Berat Badan',
            'keterangan_email' => 'Email',
            'id_daftar' => 'Id Daftar',
            'keterangan_pendidikanstatus' => 'Keterangan Pendidikanstatus',
            'keterangan_pendidikandatehapus' => 'Keterangan Pendidikandatehapus',
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

     /**
     * Gets query for [[KeteranganProv]].
     *
     * @return \yii\db\ActiveQuery
     */
     public function getKeteranganProv()
     {
        return $this->hasOne(RegionProvince::className(), ['id' => 'keterangan_prov']);
    }

    /**
     * Gets query for [[KeteranganKota]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKeteranganKota()
    {
        return $this->hasOne(RegionCity::className(), ['id' => 'keterangan_kota']);
    }

    /**
     * Gets query for [[KeteranganKec]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKeteranganKec()
    {
        return $this->hasOne(RegionDistrict::className(), ['id' => 'keterangan_kec']);
    }

    public function getkeadandesa()
    {
        $return = [];
        if ($this->keterangan_kec == '1'){
           $envList = \yii\helpers\ArrayHelper::map(Desa::findBySql("select desa_id,nama_desa from Desa")->one(),'desa_id', 'nama_desa');
           return $envList;  
       } 

       return $return;   
   }

   public function getvoucher()
   {
     if($this->keterangan_kec == 3)
     {
        return "Income Voucher";
    }
    elseif($this->keterangan_kec == 4)
    {
        return "Exepense Voucher";
    }
    else
    {
     return "General Voucher"; 
 }
}


public function getstatusLabel()
{
    $return = [];
    if ($this->keterangan_pendidikanstatus == '1'){
        $return['keterangan_pendidikanstatus'] = 'Pencaker';
        $return['class'] = 'badge bg-green';
        $return['class_custom'] = '1';
    } else if ($this->keterangan_pendidikanstatus == '2') {
        $return['keterangan_pendidikanstatus'] = 'Penempatan';
        $return['class'] = 'badge bg-aqua';
        $return['class_custom'] = '2';           
    } 
    else if ($this->keterangan_pendidikanstatus == '3') {
        $return['keterangan_pendidikanstatus'] = 'Non-Aktif';
        $return['class'] = 'badge bg-red';
        $return['class_custom'] = '2';           
    }

    return $return;   
}

public static function dropdown() {
    $models = static::find()->all();
    foreach ($models as $model) {
        $dropdown[$model->keterangan_id] = $model->keterangan_nama;
    }
    return $dropdown;
}
}
