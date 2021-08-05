<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Pendidikan;

/**
 * PendidikanSearch represents the model behind the search form of `backend\models\Pendidikan`.
 */
class PendidikanSearch extends Pendidikan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pendidikan_id', 'id_sekolah', 'id_jurusan', 'id_daftar', 'pendidikan_inggris', 'pendidikan_jerman', 'pendidikan_jepang', 'pendidikan_mandarin', 'pendidikan_belanda', 'pendidikan_perancis', 'pendidikan_arab', 'pendidikan_jkl', 'id_jabatan', 'id_pekerjaan', 'pendidikan_status'], 'integer'],
            [['pendidikan_nemipk'], 'number'],
            [['pendidikan_keterampilan', 'pendidikan_bahasa', 'pendidikan_namasekolah', 'pendidikan_thntamat', 'pendidikan_date', 'pendidikan_datehapus', 'pendidikan_datepenempatan'], 'safe'],
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
        $query = Pendidikan::find()->joinWith(['keterangan']);

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
            'pendidikan_id' => $this->pendidikan_id,
            'pendidikan_nemipk' => $this->pendidikan_nemipk,
            'id_sekolah' => $this->id_sekolah,
            'id_jurusan' => $this->id_jurusan,
            'id_daftar' => $this->id_daftar,
            'pendidikan_inggris' => $this->pendidikan_inggris,
            'pendidikan_jerman' => $this->pendidikan_jerman,
            'pendidikan_jepang' => $this->pendidikan_jepang,
            'pendidikan_mandarin' => $this->pendidikan_mandarin,
            'pendidikan_belanda' => $this->pendidikan_belanda,
            'pendidikan_perancis' => $this->pendidikan_perancis,
            'pendidikan_arab' => $this->pendidikan_arab,
            'pendidikan_jkl' => $this->pendidikan_jkl,
            'id_jabatan' => $this->id_jabatan,
            'id_pekerjaan' => $this->id_pekerjaan,
            'pendidikan_thntamat' => $this->pendidikan_thntamat,
            'pendidikan_date' => $this->pendidikan_date,
            'pendidikan_datehapus' => $this->pendidikan_datehapus,
            'pendidikan_datepenempatan' => $this->pendidikan_datepenempatan,
            'pendidikan_status' => $this->pendidikan_status,
        ]);

        $query->andFilterWhere(['like', 'pendidikan_keterampilan', $this->pendidikan_keterampilan])
            ->andFilterWhere(['like', 'pendidikan_bahasa', $this->pendidikan_bahasa])
            ->andFilterWhere(['like', 'pendidikan_namasekolah', $this->pendidikan_namasekolah]);

        return $dataProvider;
    }
}
