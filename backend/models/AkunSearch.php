<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Akun;

/**
 * AkunSearch represents the model behind the search form of `backend\models\Akun`.
 */
class AkunSearch extends Akun
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['akun_id', 'id_daftar', 'id_user', 'akun_status'], 'integer'],
            [['akun_pass', 'akun_kode'], 'safe'],
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
        $query = Akun::find();

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
            'akun_id' => $this->akun_id,
            'id_daftar' => $this->id_daftar,
            'id_user' => $this->id_user,
            'akun_status' => $this->akun_status,
        ]);

        $query->andFilterWhere(['like', 'akun_pass', $this->akun_pass])
            ->andFilterWhere(['like', 'akun_kode', $this->akun_kode]);

        return $dataProvider;
    }
}
