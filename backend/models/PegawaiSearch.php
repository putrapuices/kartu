<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Pegawai;

/**
 * PegawaiSearch represents the model behind the search form of `backend\models\Pegawai`.
 */
class PegawaiSearch extends Pegawai
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pegawai_id'], 'integer'],
            [['pegawai_nama', 'pegawai_jabatan', 'pegawai_nip'], 'safe'],
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
        $query = Pegawai::find();

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
            'pegawai_id' => $this->pegawai_id,
        ]);

        $query->andFilterWhere(['like', 'pegawai_nama', $this->pegawai_nama])
            ->andFilterWhere(['like', 'pegawai_jabatan', $this->pegawai_jabatan])
            ->andFilterWhere(['like', 'pegawai_nip', $this->pegawai_nip]);

        return $dataProvider;
    }
}
