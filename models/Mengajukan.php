<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mengajukan".
 *
 * @property integer $id_departemen
 * @property integer $id_depar
 * @property integer $id_barang
 * @property integer $id_pegawai
 * @property string $approval
 * @property string $tgl_approval
 * @property string $jumlah_minta
 *
 * @property Barang $idBarang
 * @property Departemen $idDepar
 * @property Pegawai $idPegawai
 */
class Mengajukan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mengajukan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_depar', 'id_barang', 'id_pegawai', 'approval', 'tgl_approval', 'jumlah_minta'], 'required'],
            [['id_depar', 'id_barang', 'id_pegawai'], 'integer'],
            [['approval', 'jumlah_minta'], 'number'],
            [['tgl_approval'], 'safe'],
            [['id_barang'], 'exist', 'skipOnError' => true, 'targetClass' => Barang::className(), 'targetAttribute' => ['id_barang' => 'id_barang']],
            [['id_depar'], 'exist', 'skipOnError' => true, 'targetClass' => Departemen::className(), 'targetAttribute' => ['id_depar' => 'id_depar']],
            [['id_pegawai'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::className(), 'targetAttribute' => ['id_pegawai' => 'id_pegawai']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_departemen' => 'Id Mengajukan',
            'id_depar' => 'Departemen',
            'id_barang' => 'Nama Barang',
            'id_pegawai' => 'Nama Pegawai',
            'approval' => 'Approval',
            'tgl_approval' => 'Tgl Approval',
            'jumlah_minta' => 'Jumlah Minta',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBarang()
    {
        return $this->hasOne(Barang::className(), ['id_barang' => 'id_barang']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepar()
    {
        return $this->hasOne(Departemen::className(), ['id_depar' => 'id_depar']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPegawai()
    {
        return $this->hasOne(Pegawai::className(), ['id_pegawai' => 'id_pegawai']);
    }
}
