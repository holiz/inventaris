<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inventaris".
 *
 * @property integer $id_inventaris
 * @property integer $nama
 * @property integer $tgl_perolehan
 * @property integer $nilai_barang
 * @property integer $foto
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
            'tgl_perolehan' => 'Tgl Perolehan',
            'nilai_barang' => 'Nilai Barang',
            'foto' => 'Foto',
        ];
    }
}
