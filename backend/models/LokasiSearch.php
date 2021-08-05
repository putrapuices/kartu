<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Lokasi;

/**
 * LokasiSearch represents the model behind the search form of `backend\models\Lokasi`.
 */
class LokasiSearch extends Lokasi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lokasi_id', 'lokasi_tempat', 'lokasi_upah', 'id_daftar'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Lokasi::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'lokasi_id' => $this->lokasi_id,
            'lokasi_tempat' => $this->lokasi_tempat,
            'lokasi_upah' => $this->lokasi_upah,
            'id_daftar' => $this->id_daftar,
        ]);

        return $dataProvider;
    }
}
