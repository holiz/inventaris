<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jenis_barang".
 *
 * @property integer $id_jenis
 * @property string $jenis_barang
 * @property boolean $is_active
 *
 * @property Barang[] $barangs
 */
class JenisBarang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jenis_barang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jenis_barang'], 'required'],
            [['jenis_barang'], 'string'],
            [['is_active'], 'boolean'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_jenis' => 'Id Jenis',
            'jenis_barang' => 'Jenis Barang',
            'is_active' => 'Is Active',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBarangs()
    {
        return $this->hasMany(Barang::className(), ['id_jenis' => 'id_jenis']);
    }
}
