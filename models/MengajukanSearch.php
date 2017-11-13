<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Mengajukan;

/**
 * MengajukanSearch represents the model behind the search form about `app\models\Mengajukan`.
 */
class MengajukanSearch extends Mengajukan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_departemen'], 'integer'],
            [['id_depar', 'id_barang', 'id_pegawai','approval', 'jumlah_minta'], 'number'],
            [['tgl_approval'], 'safe'],
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
        $query = Mengajukan::find();

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

        $query->joinWith('depar');
        $query->joinWith('barang');
        $query->joinWith('pegawai');

        // grid filtering conditions
        $query->andFilterWhere([
            'id_departemen' => $this->id_departemen,
            'approval' => $this->approval,
            'tgl_approval' => $this->tgl_approval,
            'jumlah_minta' => $this->jumlah_minta,
        ]);
        $query->andFilterWhere(['like', 'pegawai.nama', $this->id_pegawai])
          ->andFilterWhere(['like', 'departemen.departemen', $this->id_depar])
            ->andFilterWhere(['like', 'barang.nama', $this->id_barang]);

        return $dataProvider;
    }
}
