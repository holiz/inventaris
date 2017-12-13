<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "departemen".
 *
 * @property integer $id_depar
 * @property string $departemen
 * @property string $penangungjawab
 *
 * @property Barang[] $barangs
 * @property Mengajukan[] $mengajukans
 * @property Pegawai[] $pegawais
 * @property Ruang[] $ruangs
 */
class Departemen extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'departemen';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['departemen', 'penangungjawab'], 'required'],
            [['departemen', 'penangungjawab'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_depar' => 'Id Depar',
            'departemen' => 'Departemen',
            'penangungjawab' => 'Penangungjawab',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBarangs()
    {
        return $this->hasMany(Barang::className(), ['id_depar' => 'id_depar']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMengajukans()
    {
        return $this->hasMany(Mengajukan::className(), ['id_depar' => 'id_depar']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPegawais()
    {
        return $this->hasMany(Pegawai::className(), ['id_depar' => 'id_depar']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRuangs()
    {
        return $this->hasMany(Ruang::className(), ['id_depar' => 'id_depar']);
    }
}
