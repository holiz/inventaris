<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cara_perolehan".
 *
 * @property integer $id_cp
 * @property string $cara_perolehan
 *
 * @property Barang[] $barangs
 */
class CaraPerolehan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cara_perolehan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cara_perolehan'], 'required'],
            [['cara_perolehan'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_cp' => 'Id Cp',
            'cara_perolehan' => 'Cara Perolehan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBarangs()
    {
        return $this->hasMany(Barang::className(), ['id_cp' => 'id_cp']);
    }
}
