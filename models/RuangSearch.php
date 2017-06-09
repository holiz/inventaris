<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Ruang;

/**
 * RuangSearch represents the model behind the search form about `app\models\Ruang`.
 */
class RuangSearch extends Ruang
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_ruang', 'id_depar'], 'integer'],
            [['nama', 'penangungjawab'], 'safe'],
            [['noruang'], 'number'],
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
        $query = Ruang::find();

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
            'id_ruang' => $this->id_ruang,
            'id_depar' => $this->id_depar,
            'noruang' => $this->noruang,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'penangungjawab', $this->penangungjawab]);

        return $dataProvider;
    }
}
