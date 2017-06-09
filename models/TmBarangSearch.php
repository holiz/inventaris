<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TmBarang;

/**
 * TmBarangSearch represents the model behind the search form about `app\models\TmBarang`.
 */
class TmBarangSearch extends TmBarang
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_tm_barang'], 'integer'],
            [['id_jenis', 'nomor_barang', 'barang_id_barang'], 'safe'],
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
        $query = TmBarang::find();

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
            'id_tm_barang' => $this->id_tm_barang,
        ]);

        $query->andFilterWhere(['like', 'id_jenis', $this->id_jenis])
            ->andFilterWhere(['like', 'nomor_barang', $this->nomor_barang])
            ->andFilterWhere(['like', 'barang_id_barang', $this->barang_id_barang]);

        return $dataProvider;
    }
}
