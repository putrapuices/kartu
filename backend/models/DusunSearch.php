<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Dusun;

/**
 * DusunSearch represents the model behind the search form of `backend\models\Dusun`.
 */
class DusunSearch extends Dusun
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dusun_id', 'id_desa'], 'integer'],
            [['nama_dusun'], 'safe'],
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
        $query = Dusun::find();

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
            'dusun_id' => $this->dusun_id,
            'id_desa' => $this->id_desa,
        ]);

        $query->andFilterWhere(['like', 'nama_dusun', $this->nama_dusun]);

        return $dataProvider;
    }
}
