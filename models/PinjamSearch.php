<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pinjam;

/**
 * PinjamSearch represents the model behind the search form about `app\models\Pinjam`.
 */
class PinjamSearch extends Pinjam
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pinjam'], 'integer'],
            [['id_pegawai', 'id_barang','tgl_pinjam', 'tgl_kembali', 'nama_peminjam', 'status'], 'safe'],
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
        $query = Pinjam::find();

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

        $query->joinWith('pegawai');
        $query->joinWith('barang');

        // grid filtering conditions
        $query->andFilterWhere([
            'id_pinjam' => $this->id_pinjam,
            'tgl_pinjam' => $this->tgl_pinjam,
            'tgl_kembali' => $this->tgl_kembali,
        ]);

        $query->andFilterWhere(['like', 'nama_peminjam', $this->nama_peminjam])
            ->andFilterWhere(['like', 'pegawai.nama', $this->id_pegawai])
             ->andFilterWhere(['like', 'barang.nama', $this->id_barang]);
        return $dataProvider;
    }
}
