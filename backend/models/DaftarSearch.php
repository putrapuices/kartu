<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Daftar;

/**
 * DaftarSearch represents the model behind the search form of `backend\models\Daftar`.
 */
class DaftarSearch extends Daftar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['daftar_id', 'daftar_nik', 'daftar_no'], 'integer'],
            [['daftar_tgl'], 'safe'],
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
        $query = Daftar::find();

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
            'daftar_id' => $this->daftar_id,
            'daftar_nik' => $this->daftar_nik,
            'daftar_no' => $this->daftar_no,
            'daftar_tgl' => $this->daftar_tgl,
        ]);

        return $dataProvider;
    }
}
