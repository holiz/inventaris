<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Atlas;

/**
 * AtlasSearch represents the model behind the search form about `app\models\Atlas`.
 */
class AtlasSearch extends Atlas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'atlas_kategori_id'], 'integer'],
            [['judul', 'legenda', 'url_tms'], 'safe'],
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
        $query = Atlas::find();

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
            'atlas_kategori_id' => $this->atlas_kategori_id,
        ]);

        $query->andFilterWhere(['like', 'judul', $this->judul])
            ->andFilterWhere(['like', 'legenda', $this->legenda])
            ->andFilterWhere(['like', 'url_tms', $this->url_tms]);

        return $dataProvider;
    }
}
