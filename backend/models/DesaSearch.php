<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Desa;

/**
 * DesaSearch represents the model behind the search form of `backend\models\Desa`.
 */
class DesaSearch extends Desa
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['desa_id', 'kd_desa', 'id_kecamatan'], 'integer'],
            [['nama_desa'], 'safe'],
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
        $query = Desa::find();

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
            'desa_id' => $this->desa_id,
            'kd_desa' => $this->kd_desa,
            'id_kecamatan' => $this->id_kecamatan,
        ]);

        $query->andFilterWhere(['like', 'nama_desa', $this->nama_desa]);

        return $dataProvider;
    }
}
