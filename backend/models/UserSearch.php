<?php

namespace backend\models;


use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * Description of UserSearch
 *
 * @author aser
 */
class UserSearch extends User{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['level'], 'integer'],
            [['level', 'username'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = User::find()->orderBy('level ASC');

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'level' => $this->level,
        ]);
        $query->andFilterWhere(['like', 'username', $this->username]);

        return $dataProvider;
    }
}
