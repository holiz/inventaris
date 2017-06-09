<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ruang".
 *
 * @property integer $id_ruang
 * @property integer $id_depar
 * @property string $nama
 * @property string $penangungjawab
 * @property string $noruang
 *
 * @property Departemen $idDepar
 */
class Ruang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ruang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_depar', 'nama', 'penangungjawab', 'noruang'], 'required'],
            [['id_depar'], 'integer'],
            [['nama', 'penangungjawab'], 'string'],
            [['noruang'], 'number'],
            [['id_depar'], 'exist', 'skipOnError' => true, 'targetClass' => Departemen::className(), 'targetAttribute' => ['id_depar' => 'id_depar']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_ruang' => 'Id Ruang',
            'id_depar' => 'Id Depar',
            'nama' => 'Nama',
            'penangungjawab' => 'Penangung Jawab',
            'noruang' => 'No Ruang',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepar()
    {
        return $this->hasOne(Departemen::className(), ['id_depar' => 'id_depar']);
    }
}
