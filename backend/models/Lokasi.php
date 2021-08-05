<?php

namespace backend\models;

use Yii;
use yii\imagine\Image;

/**
 * This is the model class for table "lokasi".
 *
 * @property int $lokasi_id
 * @property int|null $lokasi_tempat
 * @property int|null $lokasi_upah
 * @property int|null $id_daftar
 *
 * @property Daftar $daftar
 */
class Lokasi extends \yii\db\ActiveRecord
{
    public $image;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lokasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lokasi_tempat', 'lokasi_upah', 'id_daftar'], 'integer'],
            [['id_daftar'], 'exist', 'skipOnError' => true, 'targetClass' => Daftar::className(), 'targetAttribute' => ['id_daftar' => 'daftar_id']],

            [['lokasi_foto'], 'string', 'max' => 255],

            [['image'], 'image', 'skipOnEmpty' => true, 'extensions' => 'jpg, jpeg,','checkExtensionByMimeType'=>false, 'maxSize' => 2548000, 'tooBig' => 'Ukuran Maksimal 2MB'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'lokasi_id' => 'Lokasi ID',
            'lokasi_tempat' => 'Lokasi Tempat',
            'lokasi_upah' => 'Lokasi Upah',
            'lokasi_foto' => 'Foto',
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


      public function upload()
    {
        if ($this->validate()) {
            $imgFile = $this->image->tempName;
            $imgName = strtotime("now").'-'.$this->id_daftar . '.'.'foto' . '.' . $this->image->extension;
            $upload = $this->image->saveAs( Yii::getAlias('@webroot/files/foto/') . $imgName);
            // Image::frame('@webroot/files/foto/' . $imgName, 0)
                    // ->save(Yii::getAlias('@webroot/files/foto/'.$imgName), ['quality' => 50]);
            $this->lokasi_foto = $imgName;
            return $upload;
        } else {
            return false;
        }
    }
}
