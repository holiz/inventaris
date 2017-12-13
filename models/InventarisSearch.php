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
            [['id_inventaris', 'nama', 'tgl_perolehan', 'nilai_barang', 'foto'], 'integer'],
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
            'nama' => $this->nama,
            'tgl_perolehan' => $this->tgl_perolehan,
            'nilai_barang' => $this->nilai_barang,
            'foto' => $this->foto,
        ]);

        return $dataProvider;
    }
}
