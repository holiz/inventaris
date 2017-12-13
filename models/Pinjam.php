<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pinjam".
 *
 * @property integer $id_pinjam
 * @property integer $id_pegawai
 * @property integer $id_barang
 * @property string $tgl_pinjam
 * @property string $tgl_kembali
 * @property string $nama_peminjam
 * @property string $status
 *
 * @property Barang $idBarang
 * @property Pegawai $idPegawai
 */
class Pinjam extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pinjam';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pegawai', 'id_barang', 'tgl_pinjam', 'tgl_kembali', 'nama_peminjam', 'status'], 'required'],
            [['id_pegawai', 'id_barang'], 'integer'],
            [['tgl_pinjam', 'tgl_kembali'], 'safe'],
            [['nama_peminjam', 'status'], 'string'],
            [['id_barang'], 'exist', 'skipOnError' => true, 'targetClass' => Barang::className(), 'targetAttribute' => ['id_barang' => 'id_barang']],
            [['id_pegawai'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::className(), 'targetAttribute' => ['id_pegawai' => 'id_pegawai']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_pinjam' => 'Id Pinjam',
            'id_pegawai' => 'Nama Pegawai',
            'id_barang' => 'Nama Barang',
            'tgl_pinjam' => 'Tgl Pinjam',
            'tgl_kembali' => 'Tgl Kembali',
            'nama_peminjam' => 'Nama Peminjam',
            'status' => 'Status Peminjam',
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
    public function getPegawai()
    {
        return $this->hasOne(Pegawai::className(), ['id_pegawai' => 'id_pegawai']);
    }
}
