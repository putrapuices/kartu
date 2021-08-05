<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Nilai;

/**
 * NilaiSearch represents the model behind the search form of `backend\models\Nilai`.
 */
class NilaiSearch extends Nilai
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'siswa_id', 'nilai'], 'integer'],
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
        $query = Nilai::find();

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
            'id' => $this->id,
            'siswa_id' => $this->siswa_id,
            'nilai' => $this->nilai,
        ]);

        return $dataProvider;
    }
}
