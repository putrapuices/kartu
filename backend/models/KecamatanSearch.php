<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Kecamatan;

/**
 * KecamatanSearch represents the model behind the search form of `backend\models\Kecamatan`.
 */
class KecamatanSearch extends Kecamatan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kecamatan_id', 'kd_kecamatan', 'id_kota'], 'integer'],
            [['nama_kec', 'alamat', 'index'], 'safe'],
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
        $query = Kecamatan::find();

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
            'kecamatan_id' => $this->kecamatan_id,
            'kd_kecamatan' => $this->kd_kecamatan,
            'id_kota' => $this->id_kota,
        ]);

        $query->andFilterWhere(['like', 'nama_kec', $this->nama_kec])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'index', $this->index]);

        return $dataProvider;
    }
}
