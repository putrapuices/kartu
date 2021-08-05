<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "capil".
 *
 * @property int $capil_id
 * @property string|null $capil_dusun
 * @property string|null $capil_nama_lgkp
 * @property string|null $capil_stat_hbkel
 * @property string|null $capil_agama
 * @property string|null $capil_jenis_pkrjn
 * @property string|null $capil_pddk_akh
 * @property string|null $capil_tmpt_lhr
 * @property string|null $capil_status_kawin
 * @property string|null $capil_gol_darah
 * @property string|null $capil_nik_ibu
 * @property string|null $capil_tgl_kwn
 * @property string|null $capil_no_akta_kwn
 * @property string|null $capil_jenis_klmin
 * @property string|null $capil_tgl_crai
 * @property string|null $capil_no_kk
 * @property string|null $capil_nik
 * @property string|null $capil_kab_name
 * @property string|null $capil_nama_lgkp_ayah
 * @property string|null $capil_no_rw
 * @property string|null $capil_kec_name
 * @property string|null $capil_no_akta_lhr
 * @property string|null $capil_no_rt
 * @property string|null $capil_no_kel
 * @property string|null $capil_alamat
 * @property string|null $capil_no_kec
 * @property string|null $capil_nik_ayah
 * @property string|null $capil_no_prop
 * @property string|null $capil_nama_lgkp_ibu
 * @property string|null $capil_no_akta_crai
 * @property string|null $capil_prop_name
 * @property string|null $capil_no_kab
 * @property string|null $capil_tgl_lhr
 * @property string|null $capil_kel_name
 * @property string|null $capil_dateinput
 * @property string|null $capil_ip
 */
class Capil extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'capil';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['capil_tgl_kwn', 'capil_tgl_crai', 'capil_tgl_lhr', 'capil_dateinput'], 'safe'],
            [['capil_dusun', 'capil_nama_lgkp', 'capil_stat_hbkel', 'capil_jenis_pkrjn', 'capil_tmpt_lhr', 'capil_nama_lgkp_ayah', 'capil_kec_name', 'capil_no_akta_lhr', 'capil_nama_lgkp_ibu', 'capil_kel_name'], 'string', 'max' => 50],
            [['capil_agama', 'capil_jenis_klmin', 'capil_kab_name', 'capil_no_kel', 'capil_no_prop', 'capil_no_akta_crai', 'capil_prop_name', 'capil_ip'], 'string', 'max' => 20],
            [['capil_pddk_akh'], 'string', 'max' => 80],
            [['capil_status_kawin'], 'string', 'max' => 15],
            [['capil_gol_darah'], 'string', 'max' => 12],
            [['capil_nik_ibu', 'capil_no_kk', 'capil_nik', 'capil_nik_ayah'], 'string', 'max' => 16],
            [['capil_no_akta_kwn'], 'string', 'max' => 90],
            [['capil_no_rw', 'capil_no_rt'], 'string', 'max' => 10],
            [['capil_alamat'], 'string', 'max' => 60],
            [['capil_no_kec', 'capil_no_kab'], 'string', 'max' => 5],
            [['capil_nik'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'capil_id' => 'Capil ID',
            'capil_dusun' => 'Capil Dusun',
            'capil_nama_lgkp' => 'Capil Nama Lgkp',
            'capil_stat_hbkel' => 'Capil Stat Hbkel',
            'capil_agama' => 'Capil Agama',
            'capil_jenis_pkrjn' => 'Capil Jenis Pkrjn',
            'capil_pddk_akh' => 'Capil Pddk Akh',
            'capil_tmpt_lhr' => 'Capil Tmpt Lhr',
            'capil_status_kawin' => 'Capil Status Kawin',
            'capil_gol_darah' => 'Capil Gol Darah',
            'capil_nik_ibu' => 'Capil Nik Ibu',
            'capil_tgl_kwn' => 'Capil Tgl Kwn',
            'capil_no_akta_kwn' => 'Capil No Akta Kwn',
            'capil_jenis_klmin' => 'Capil Jenis Klmin',
            'capil_tgl_crai' => 'Capil Tgl Crai',
            'capil_no_kk' => 'Capil No Kk',
            'capil_nik' => 'Capil Nik',
            'capil_kab_name' => 'Capil Kab Name',
            'capil_nama_lgkp_ayah' => 'Capil Nama Lgkp Ayah',
            'capil_no_rw' => 'Capil No Rw',
            'capil_kec_name' => 'Capil Kec Name',
            'capil_no_akta_lhr' => 'Capil No Akta Lhr',
            'capil_no_rt' => 'Capil No Rt',
            'capil_no_kel' => 'Capil No Kel',
            'capil_alamat' => 'Capil Alamat',
            'capil_no_kec' => 'Capil No Kec',
            'capil_nik_ayah' => 'Capil Nik Ayah',
            'capil_no_prop' => 'Capil No Prop',
            'capil_nama_lgkp_ibu' => 'Capil Nama Lgkp Ibu',
            'capil_no_akta_crai' => 'Capil No Akta Crai',
            'capil_prop_name' => 'Capil Prop Name',
            'capil_no_kab' => 'Capil No Kab',
            'capil_tgl_lhr' => 'Capil Tgl Lhr',
            'capil_kel_name' => 'Capil Kel Name',
            'capil_dateinput' => 'Capil Dateinput',
            'capil_ip' => 'Capil Ip',
        ];
    }
}
