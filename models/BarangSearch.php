<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Barang;

/**
 * BarangSearch represents the model behind the search form about `app\models\Barang`.
 */
class BarangSearch extends Barang
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_barang', 'id_jenis', 'id_sumberdana', 'id_depar', 'id_pegawai', 'id_cp', 'id_tm_barang'], 'integer'],
            [['nama', 'tgl_pembelian', 'tgl_expired', 'foto'], 'safe'],
            [['harga'], 'number'],
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
        $query = Barang::find();

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
            'id_barang' => $this->id_barang,
            'id_jenis' => $this->id_jenis,
            'id_sumberdana' => $this->id_sumberdana,
            'id_depar' => $this->id_depar,
            'id_pegawai' => $this->id_pegawai,
            'id_cp' => $this->id_cp,
            'id_tm_barang' => $this->id_tm_barang,
            'harga' => $this->harga,
            'tgl_pembelian' => $this->tgl_pembelian,
            'tgl_expired' => $this->tgl_expired,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'foto', $this->foto]);

        return $dataProvider;
    }
}
