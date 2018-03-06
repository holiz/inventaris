<?php

namespace app\models;

use Yii;

class Barang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public $file;
     

    public static function tableName()
    {
        return 'barang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_sumberdana', 'id_depar', 'id_pegawai', 'id_cp', 'id_tm_barang', 'nama', 'harga', 'tgl_pembelian', 'tgl_expired'], 'required'],
            [['id_jenis', 'id_sumberdana', 'id_depar', 'id_pegawai', 'id_cp', 'id_tm_barang'], 'integer'],
            [['nama','foto'], 'string'],
            [['foto'],'file'],
            [['harga'], 'number'],
            [['tgl_pembelian', 'tgl_expired'], 'safe'],
            [['id_cp'], 'exist', 'skipOnError' => true, 'targetClass' => CaraPerolehan::className(), 'targetAttribute' => ['id_cp' => 'id_cp']],
            [['id_depar'], 'exist', 'skipOnError' => true, 'targetClass' => Departemen::className(), 'targetAttribute' => ['id_depar' => 'id_depar']],
            [['id_jenis'], 'exist', 'skipOnError' => true, 'targetClass' => JenisBarang::className(), 'targetAttribute' => ['id_jenis' => 'id_jenis']],
            [['id_pegawai'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::className(), 'targetAttribute' => ['id_pegawai' => 'id_pegawai']],
            [['id_sumberdana'], 'exist', 'skipOnError' => true, 'targetClass' => SumberDana::className(), 'targetAttribute' => ['id_sumberdana' => 'id_sumberdana']],
            [['id_tm_barang'], 'exist', 'skipOnError' => true, 'targetClass' => TmBarang::className(), 'targetAttribute' => ['id_tm_barang' => 'id_tm_barang']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_barang' => 'Id',
            'id_jenis' => 'Jenis Barang',
            'id_sumberdana' => 'Sumber Dana',
            'id_depar' => 'Departemen',
            'id_pegawai' => 'Pegawai',
            'id_cp' => 'Perolehan',
            'id_tm_barang' => 'Tm Barang',
            'nama' => 'Nama',
            'harga' => 'Harga',
            'tgl_pembelian' => 'Tgl Pembelian',
            'tgl_expired' => 'Tgl Expired',
            'foto' => 'Foto',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCp()
    {
        return $this->hasOne(CaraPerolehan::className(), ['id_cp' => 'id_cp']);
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
    public function getJenis()
    {
        return $this->hasOne(JenisBarang::className(), ['id_jenis' => 'id_jenis']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPegawai()
    {
        return $this->hasOne(Pegawai::className(), ['id_pegawai' => 'id_pegawai']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSumberdana()
    {
        return $this->hasOne(SumberDana::className(), ['id_sumberdana' => 'id_sumberdana']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTmBarang()
    {
        return $this->hasOne(TmBarang::className(), ['id_tm_barang' => 'id_tm_barang']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMengajukans()
    {
        return $this->hasMany(Mengajukan::className(), ['id_barang' => 'id_barang']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPinjams()
    {
        return $this->hasMany(Pinjam::className(), ['id_barang' => 'id_barang']);
    }
}
