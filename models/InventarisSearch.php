<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Inventaris;

/**
 * InventarisSearch represents the model behind the search form about `app\models\Inventaris`.
 */
class InventarisSearch extends Inventaris
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_inventaris'], 'integer'],
            [['nama', 'foto', 'tgl_perolehan'], 'safe'],
            [['nilai_barang'], 'number'],
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
        $query = Inventaris::find();

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
            'id_inventaris' => $this->id_inventaris,
            'nilai_barang' => $this->nilai_barang,
            'tgl_perolehan' => $this->tgl_perolehan,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'foto', $this->foto]);

        return $dataProvider;
    }
}
