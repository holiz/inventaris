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
            [['id_barang',], 'integer'],
            [['nama', 'tgl_pembelian', 'tgl_expired', 'foto','id_jenis','id_sumberdana', 'id_depar', 'id_pegawai', 'id_cp', 'id_tm_barang'], 'safe'],
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

        //$query->joinWith(['jenis','sumberdana','pegawai']);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

           

        if (!($this->load($params) && $this->validate())) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->joinWith('jenis');
        $query->joinWith('pegawai');
        $query->joinWith('depar');
        $query->joinWith('sumberdana');
        $query->joinWith('cp');
        $query->joinWith('tmBarang');


        // grid filtering conditions
        $query->andFilterWhere([
            'id_barang' => $this->id_barang,
            'harga' => $this->harga,
            'tgl_pembelian' => $this->tgl_pembelian,
            'tgl_expired' => $this->tgl_expired,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'foto', $this->foto])
            ->andFilterWhere(['like', 'jenis_barang.jenis_barang', $this->id_jenis])
            ->andFilterWhere(['like', 'pegawai.nama', $this->id_pegawai])
            ->andFilterWhere(['like', 'departemen.departemen', $this->id_depar])
            ->andFilterWhere(['like', 'sumber_dana.sumber_dana', $this->id_sumberdana])
            ->andFilterWhere(['like', 'cara_perolehan.cara_perolehan', $this->id_cp])
            ->andFilterWhere(['like', 'tm_barang.nomor_barang', $this->id_tm_barang])


            ;


        return $dataProvider;
    }
}
