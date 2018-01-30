<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inventaris".
 *
 * @property integer $id_inventaris
 * @property string $nama
 * @property string $nilai_barang
 * @property string $foto
 * @property string $tgl_perolehan
 */
class Inventaris extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'inventaris';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tgl_perolehan','nama','foto'], 'required'],
             [['nama'], 'string'],
            [['foto'],'file'],
            [['tgl_perolehan'],'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_inventaris' => 'Id Inventaris',
            'nama' => 'Nama',
            'nilai_barang' => 'Nilai Barang',
            'foto' => 'Foto',
            'tgl_perolehan' => 'Tgl Perolehan',
        ];
    }
}
