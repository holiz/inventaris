<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SpatialRefSys;

/**
 * SpatialRefSysSearch represents the model behind the search form about `app\models\SpatialRefSys`.
 */
class SpatialRefSysSearch extends SpatialRefSys
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['srid', 'auth_srid'], 'integer'],
            [['auth_name', 'srtext', 'proj4text'], 'safe'],
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
        $query = SpatialRefSys::find();

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
            'srid' => $this->srid,
            'auth_srid' => $this->auth_srid,
        ]);

        $query->andFilterWhere(['like', 'auth_name', $this->auth_name])
            ->andFilterWhere(['like', 'srtext', $this->srtext])
            ->andFilterWhere(['like', 'proj4text', $this->proj4text]);

        return $dataProvider;
    }
}
