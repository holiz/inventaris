<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "atlas_kategori".
 *
 * @property integer $id
 * @property string $kategori
 * @property integer $urutan
 *
 * @property Atlas[] $atlas
 */
class AtlasKategori extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'atlas_kategori';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kategori'], 'required'],
            [['kategori'], 'string'],
            [['urutan'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kategori' => 'Kategori',
            'urutan' => 'Urutan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAtlas()
    {
        return $this->hasMany(Atlas::className(), ['atlas_kategori_id' => 'id']);
    }
}
