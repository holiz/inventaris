<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "content".
 *
 * @property integer $id
 * @property string $nama
 * @property string $email
 * @property string $subjek
 * @property string $body
 */
class Content extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'content';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'nama', 'email', 'subjek', 'body'], 'required'],
            [['id'], 'integer'],
            [['nama', 'email', 'subjek', 'body'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'email' => 'Email',
            'subjek' => 'Subjek',
            'body' => 'Body',
        ];
    }
}
