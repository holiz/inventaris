<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "spatial_ref_sys".
 *
 * @property integer $srid
 * @property string $auth_name
 * @property integer $auth_srid
 * @property string $srtext
 * @property string $proj4text
 */
class SpatialRefSys extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'spatial_ref_sys';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['srid'], 'required'],
            [['srid', 'auth_srid'], 'integer'],
            [['auth_name'], 'string', 'max' => 256],
            [['srtext', 'proj4text'], 'string', 'max' => 2048],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'srid' => 'Srid',
            'auth_name' => 'Auth Name',
            'auth_srid' => 'Auth Srid',
            'srtext' => 'Srtext',
            'proj4text' => 'Proj4text',
        ];
    }
}
