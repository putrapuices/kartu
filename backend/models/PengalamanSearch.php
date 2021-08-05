<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Pengalaman;

/**
 * PengalamanSearch represents the model behind the search form of `backend\models\Pengalaman`.
 */
class PengalamanSearch extends Pengalaman
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pengalaman_id', 'id_daftar'], 'integer'],
            [['pengalaman_jabatan', 'pengalaman_tugas', 'pengalaman_lama', 'pengalaman_pemberi'], 'safe'],
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
        $query = Pengalaman::find();

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
            'pengalaman_id' => $this->pengalaman_id,
            'id_daftar' => $this->id_daftar,
        ]);

        $query->andFilterWhere(['like', 'pengalaman_jabatan', $this->pengalaman_jabatan])
            ->andFilterWhere(['like', 'pengalaman_tugas', $this->pengalaman_tugas])
            ->andFilterWhere(['like', 'pengalaman_lama', $this->pengalaman_lama])
            ->andFilterWhere(['like', 'pengalaman_pemberi', $this->pengalaman_pemberi]);

        return $dataProvider;
    }
}
