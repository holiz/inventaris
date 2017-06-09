<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sumber_dana".
 *
 * @property integer $id_sumberdana
 * @property string $sumber_dana
 * @property boolean $is_active
 *
 * @property Barang[] $barangs
 */
class SumberDana extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sumber_dana';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sumber_dana'], 'required'],
            [['sumber_dana'], 'string'],
            [['is_active'], 'boolean'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_sumberdana' => 'Id Sumberdana',
            'sumber_dana' => 'Sumber Dana',
            'is_active' => 'Is Active',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBarangs()
    {
        return $this->hasMany(Barang::className(), ['id_sumberdana' => 'id_sumberdana']);
    }
}
