<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pegawai".
 *
 * @property integer $id_pegawai
 * @property integer $id_depar
 * @property string $nama
 * @property string $username
 * @property string $password
 * @property string $type
 *
 * @property Barang[] $barangs
 * @property Mengajukan[] $mengajukans
 * @property Departemen $idDepar
 * @property Pinjam[] $pinjams
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_depar', 'nama', 'username', 'password', 'type'], 'required'],
            [['id_depar'], 'integer'],
            [['nama', 'username', 'password', 'type'], 'string'],
            [['id_depar'], 'exist', 'skipOnError' => true, 'targetClass' => Departemen::className(), 'targetAttribute' => ['id_depar' => 'id_depar']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_pegawai' => 'Id Pegawai',
            'id_depar' => 'Departemen',
            'nama' => 'Nama',
            'username' => 'Username',
            'password' => 'Password',
            'type' => 'Type',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBarangs()
    {
        return $this->hasMany(Barang::className(), ['id_pegawai' => 'id_pegawai']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMengajukans()
    {
        return $this->hasMany(Mengajukan::className(), ['id_pegawai' => 'id_pegawai']);
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
    public function getPinjams()
    {
        return $this->hasMany(Pinjam::className(), ['id_pegawai' => 'id_pegawai']);
    }
}
