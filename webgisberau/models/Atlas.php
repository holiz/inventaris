<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "atlas".
 *
 * @property integer $id
 * @property string $judul
 * @property string $legenda
 * @property integer $atlas_kategori_id
 * @property string $url_tms
 *
 * @property AtlasKategori $atlasKategori
 */
class Atlas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'atlas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['judul', 'atlas_kategori_id', 'url_tms'], 'required'],
            [['judul', 'legenda', 'url_tms'], 'string'],
            [['atlas_kategori_id'], 'integer'],
            [['atlas_kategori_id'], 'exist', 'skipOnError' => true, 'targetClass' => AtlasKategori::className(), 'targetAttribute' => ['atlas_kategori_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'judul' => 'Judul',
            'legenda' => 'Legenda',
            'atlas_kategori_id' => 'Atlas Kategori ID',
            'url_tms' => 'Url Tms',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAtlasKategori()
    {
        return $this->hasOne(AtlasKategori::className(), ['id' => 'atlas_kategori_id']);
    }
}
