<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\DrhidnKelurahan;

/**
 * DrhidnKelurahanSearch represents the model behind the search form of `backend\models\DrhidnKelurahan`.
 */
class DrhidnKelurahanSearch extends DrhidnKelurahan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'kecamatan_id', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['nomor', 'nama'], 'safe'],
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
        $query = DrhidnKelurahan::find();

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
            'kecamatan_id' => $this->kecamatan_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'nomor', $this->nomor])
            ->andFilterWhere(['like', 'nama', $this->nama]);

        return $dataProvider;
    }
}
