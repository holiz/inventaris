<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tm_barang".
 *
 * @property integer $id_tm_barang
 * @property string $id_jenis
 * @property string $nomor_barang
 * @property string $barang_id_barang
 *
 * @property Barang[] $barangs
 */
class TmBarang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tm_barang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_jenis', 'nomor_barang', 'barang_id_barang'], 'required'],
            [['id_jenis', 'nomor_barang', 'barang_id_barang'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_tm_barang' => 'Id Tm Barang',
            'id_jenis' => 'No Referensi',
            'nomor_barang' => 'Nama Barang',
            'barang_id_barang' => 'Barang Id Barang',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBarangs()
    {
        return $this->hasMany(Barang::className(), ['id_tm_barang' => 'id_tm_barang']);
    }
}
