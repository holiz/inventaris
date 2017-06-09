<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SumberDana;

/**
 * SumberDanaSearch represents the model behind the search form about `app\models\SumberDana`.
 */
class SumberDanaSearch extends SumberDana
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_sumberdana'], 'integer'],
            [['sumber_dana'], 'safe'],
            [['is_active'], 'boolean'],
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
        $query = SumberDana::find();

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
            'id_sumberdana' => $this->id_sumberdana,
            'is_active' => $this->is_active,
        ]);

        $query->andFilterWhere(['like', 'sumber_dana', $this->sumber_dana]);

        return $dataProvider;
    }
}
