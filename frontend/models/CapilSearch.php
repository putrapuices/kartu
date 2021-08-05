<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Capil;

/**
 * CapilSearch represents the model behind the search form of `frontend\models\Capil`.
 */
class CapilSearch extends Capil
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['capil_id'], 'integer'],
            [['capil_dusun', 'capil_nama_lgkp', 'capil_stat_hbkel', 'capil_agama', 'capil_jenis_pkrjn', 'capil_pddk_akh', 'capil_tmpt_lhr', 'capil_status_kawin', 'capil_gol_darah', 'capil_nik_ibu', 'capil_tgl_kwn', 'capil_no_akta_kwn', 'capil_jenis_klmin', 'capil_tgl_crai', 'capil_no_kk', 'capil_nik', 'capil_kab_name', 'capil_nama_lgkp_ayah', 'capil_no_rw', 'capil_kec_name', 'capil_no_akta_lhr', 'capil_no_rt', 'capil_no_kel', 'capil_alamat', 'capil_no_kec', 'capil_nik_ayah', 'capil_no_prop', 'capil_nama_lgkp_ibu', 'capil_no_akta_crai', 'capil_prop_name', 'capil_no_kab', 'capil_tgl_lhr', 'capil_kel_name', 'capil_dateinput', 'capil_ip'], 'safe'],
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
        $query = Capil::find();

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
            'capil_id' => $this->capil_id,
            'capil_tgl_kwn' => $this->capil_tgl_kwn,
            'capil_tgl_crai' => $this->capil_tgl_crai,
            'capil_tgl_lhr' => $this->capil_tgl_lhr,
            'capil_dateinput' => $this->capil_dateinput,
        ]);

        $query->andFilterWhere(['like', 'capil_dusun', $this->capil_dusun])
            ->andFilterWhere(['like', 'capil_nama_lgkp', $this->capil_nama_lgkp])
            ->andFilterWhere(['like', 'capil_stat_hbkel', $this->capil_stat_hbkel])
            ->andFilterWhere(['like', 'capil_agama', $this->capil_agama])
            ->andFilterWhere(['like', 'capil_jenis_pkrjn', $this->capil_jenis_pkrjn])
            ->andFilterWhere(['like', 'capil_pddk_akh', $this->capil_pddk_akh])
            ->andFilterWhere(['like', 'capil_tmpt_lhr', $this->capil_tmpt_lhr])
            ->andFilterWhere(['like', 'capil_status_kawin', $this->capil_status_kawin])
            ->andFilterWhere(['like', 'capil_gol_darah', $this->capil_gol_darah])
            ->andFilterWhere(['like', 'capil_nik_ibu', $this->capil_nik_ibu])
            ->andFilterWhere(['like', 'capil_no_akta_kwn', $this->capil_no_akta_kwn])
            ->andFilterWhere(['like', 'capil_jenis_klmin', $this->capil_jenis_klmin])
            ->andFilterWhere(['like', 'capil_no_kk', $this->capil_no_kk])
            ->andFilterWhere(['like', 'capil_nik', $this->capil_nik])
            ->andFilterWhere(['like', 'capil_kab_name', $this->capil_kab_name])
            ->andFilterWhere(['like', 'capil_nama_lgkp_ayah', $this->capil_nama_lgkp_ayah])
            ->andFilterWhere(['like', 'capil_no_rw', $this->capil_no_rw])
            ->andFilterWhere(['like', 'capil_kec_name', $this->capil_kec_name])
            ->andFilterWhere(['like', 'capil_no_akta_lhr', $this->capil_no_akta_lhr])
            ->andFilterWhere(['like', 'capil_no_rt', $this->capil_no_rt])
            ->andFilterWhere(['like', 'capil_no_kel', $this->capil_no_kel])
            ->andFilterWhere(['like', 'capil_alamat', $this->capil_alamat])
            ->andFilterWhere(['like', 'capil_no_kec', $this->capil_no_kec])
            ->andFilterWhere(['like', 'capil_nik_ayah', $this->capil_nik_ayah])
            ->andFilterWhere(['like', 'capil_no_prop', $this->capil_no_prop])
            ->andFilterWhere(['like', 'capil_nama_lgkp_ibu', $this->capil_nama_lgkp_ibu])
            ->andFilterWhere(['like', 'capil_no_akta_crai', $this->capil_no_akta_crai])
            ->andFilterWhere(['like', 'capil_prop_name', $this->capil_prop_name])
            ->andFilterWhere(['like', 'capil_no_kab', $this->capil_no_kab])
            ->andFilterWhere(['like', 'capil_kel_name', $this->capil_kel_name])
            ->andFilterWhere(['like', 'capil_ip', $this->capil_ip]);

        return $dataProvider;
    }
}
