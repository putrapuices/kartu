<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "region_province".
 *
 * @property int $id
 * @property int|null $number
 * @property string|null $name
 *
 * @property Keterangan[] $keterangans
 * @property RegionCity[] $regionCities
 */
class RegionProvince extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'region_province';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['number'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'number' => 'Number',
            'name' => 'Name',
        ];
    }

    /**
     * Gets query for [[Keterangans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKeterangans()
    {
        return $this->hasMany(Keterangan::className(), ['keterangan_prov' => 'id']);
    }

    /**
     * Gets query for [[RegionCities]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegionCities()
    {
        return $this->hasMany(RegionCity::className(), ['province_id' => 'id']);
    }
}
