<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Keterangan;

/**
 * KeteranganSearch represents the model behind the search form of `backend\models\Keterangan`.
 */
class KeteranganSearch extends Keterangan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['keterangan_id', 'keterangan_jkl', 'keterangan_prov', 'keterangan_kota','keterangan_kec', 'keterangan_status', 'id_daftar', 'keterangan_pendidikanstatus','keterangan_pendidikanstatus'], 'integer'],
            [['keterangan_nama', 'keterangan_tempat', 'keterangan_tgl', 'keterangan_alamat', 'keterangan_hp', 'keterangan_tb', 'keterangan_bb', 'keterangan_email'], 'safe'],
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
        $query = Keterangan::find();

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
            'keterangan_id' => $this->keterangan_id,
            'keterangan_tgl' => $this->keterangan_tgl,
            'keterangan_jkl' => $this->keterangan_jkl,
            'keterangan_prov' => $this->keterangan_prov,
            'keterangan_kota' => $this->keterangan_kota,
            'keterangan_kec' => $this->keterangan_kec,
            'keterangan_status' => $this->keterangan_status,
            'id_daftar' => $this->id_daftar,
            'keterangan_pendidikanstatus' => $this->keterangan_pendidikanstatus,
        ]);

        $query->andFilterWhere(['like', 'keterangan_nama', $this->keterangan_nama])
            ->andFilterWhere(['like', 'keterangan_tempat', $this->keterangan_tempat])
            ->andFilterWhere(['like', 'keterangan_alamat', $this->keterangan_alamat])
            ->andFilterWhere(['like', 'keterangan_hp', $this->keterangan_hp])
            ->andFilterWhere(['like', 'keterangan_tb', $this->keterangan_tb])
            ->andFilterWhere(['like', 'keterangan_bb', $this->keterangan_bb])
            ->andFilterWhere(['like', 'keterangan_email', $this->keterangan_email]);

        return $dataProvider;
    }
}
