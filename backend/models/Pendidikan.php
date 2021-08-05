<?php

namespace backend\models;

use Yii;
use yii\helpers\ArrayHelper;
/**
 * This is the model class for table "pendidikan".
 *
 * @property int $pendidikan_id
 * @property float|null $pendidikan_nemipk
 * @property int|null $id_sekolah
 * @property int|null $id_jurusan
 * @property string|null $pendidikan_keterampilan
 * @property int|null $id_daftar
 * @property int|null $pendidikan_inggris
 * @property int|null $pendidikan_jerman
 * @property int|null $pendidikan_jepang
 * @property int|null $pendidikan_mandarin
 * @property int|null $pendidikan_belanda
 * @property int|null $pendidikan_perancis
 * @property int|null $pendidikan_arab
 * @property string|null $pendidikan_bahasa
 * @property int|null $pendidikan_jkl
 * @property int|null $id_jabatan
 * @property int|null $id_pekerjaan
 * @property string|null $pendidikan_namasekolah
 * @property string|null $pendidikan_thntamat
 * @property string|null $pendidikan_date
 * @property string|null $pendidikan_datehapus
 * @property string|null $pendidikan_datepenempatan
 * @property int|null $pendidikan_status
 *
 * @property Daftar $daftar
 */
class Pendidikan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pendidikan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pendidikan_nemipk'], 'number'],
            [['id_sekolah', 'id_jurusan', 'id_daftar', 'pendidikan_inggris', 'pendidikan_jerman', 'pendidikan_jepang', 'pendidikan_mandarin', 'pendidikan_belanda', 'pendidikan_perancis', 'pendidikan_arab', 'pendidikan_jkl', 'id_jabatan', 'id_pekerjaan', 'pendidikan_status'], 'integer'],
            [['pendidikan_thntamat', 'pendidikan_date', 'pendidikan_datehapus', 'pendidikan_datepenempatan'], 'safe'],
            [['pendidikan_keterampilan'], 'string', 'max' => 200],
            [['pendidikan_bahasa'], 'string', 'max' => 90],
            [['pendidikan_namasekolah'], 'string', 'max' => 150],
            [['id_daftar'], 'exist', 'skipOnError' => true, 'targetClass' => Daftar::className(), 'targetAttribute' => ['id_daftar' => 'daftar_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pendidikan_id' => 'Pendidikan ID',
            'pendidikan_nemipk' => 'Pendidikan Nemipk',
            'id_sekolah' => 'Id Sekolah',
            'id_jurusan' => 'Id Jurusan',
            'pendidikan_keterampilan' => 'Pendidikan Keterampilan',
            'id_daftar' => 'Id Daftar',
            'pendidikan_inggris' => 'Pendidikan Inggris',
            'pendidikan_jerman' => 'Pendidikan Jerman',
            'pendidikan_jepang' => 'Pendidikan Jepang',
            'pendidikan_mandarin' => 'Pendidikan Mandarin',
            'pendidikan_belanda' => 'Pendidikan Belanda',
            'pendidikan_perancis' => 'Pendidikan Perancis',
            'pendidikan_arab' => 'Pendidikan Arab',
            'pendidikan_bahasa' => 'Pendidikan Bahasa',
            'pendidikan_jkl' => 'Pendidikan Jkl',
            'id_jabatan' => 'Id Jabatan',
            'id_pekerjaan' => 'Id Pekerjaan',
            'pendidikan_namasekolah' => 'Pendidikan Namasekolah',
            'pendidikan_thntamat' => 'Pendidikan Thntamat',
            'pendidikan_date' => 'Pendidikan Date',
            'pendidikan_datehapus' => 'Pendidikan Datehapus',
            'pendidikan_datepenempatan' => 'Pendidikan Datepenempatan',
            'pendidikan_status' => 'Pendidikan Status',
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



   

  

    public function getKeterangan()
    {
        return $this->hasOne(Keterangan::className(), ['id_daftar' => 'id_daftar']);
    }


    public function getSekolah()
    {
        return $this->hasOne(Sekolah::className(), ['sekolah_id' => 'id_sekolah']);
    }

     public function getJurusan()
    {
        return $this->hasOne(Jurusan::className(), ['jurusan_id' => 'id_jurusan']);
    }

     public function getJabatan()
    {
        return $this->hasOne(Jabatan::className(), ['jabatan_id' => 'id_jabatan']);
    }

     public function getPekerjaan()
    {
        return $this->hasOne(Pekerjaan::className(), ['pekerjaan_id' => 'id_pekerjaan']);
    }

    public static  function  get_status(){
    $cat = Keterangan::find()->all();
    $cat = ArrayHelper::map($cat, 'Keterangan_id', 'keterangan_jkl');
    return $cat;
}

public static function dropdown() {
    $models = static::find()->all();
    foreach ($models as $model) {
        $dropdown[$model->keterangan_id] = $model->keterangan_nama;
    }
    return $dropdown;
}

                  public function getstatusLabel()
    {
        $return = [];
        if ($this->pendidikan_status == '1'){
            $return['pendidikan_status'] = 'Pencaker';
            $return['class'] = 'badge bg-green';
            $return['class_custom'] = '1';
        } else if ($this->pendidikan_status == '2') {
            $return['pendidikan_status'] = 'Penempatan';
            $return['class'] = 'badge bg-aqua';
            $return['class_custom'] = '2';           
        } 
        else if ($this->pendidikan_status == '3') {
            $return['pendidikan_status'] = 'Non-Aktif';
            $return['class'] = 'badge bg-red';
            $return['class_custom'] = '2';           
        }

        return $return;   
    }

    // class Setup {
    // const DATE_FORMAT = 'php:Y-m-d';
    // const DATETIME_FORMAT = 'php:Y-m-d H:i:s';
    // const TIME_FORMAT = 'php:H:i:s';

    // public static function convert($dateStr, $type='date', $format = null) {
    //     if ($type === 'datetime') {
    //           $fmt = ($format == null) ? self::DATETIME_FORMAT : $format;
    //     }
    //     elseif ($type === 'time') {
    //           $fmt = ($format == null) ? self::TIME_FORMAT : $format;
    //     }
    //     else {
    //           $fmt = ($format == null) ? self::DATE_FORMAT : $format;
    //     }
    //     return \Yii::$app->formatter->asDate($dateStr, $fmt);
    // }
}
