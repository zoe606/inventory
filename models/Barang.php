<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "barang".
 *
 * @property integer $id
 * @property string $nama
 * @property string $tanggal_masuk
 * @property integer $stok
 * @property integer $harga_beli
 * @property integer $harga_jual
 * @property string $type_barang
 */
class Barang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
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
            [['tanggal_masuk'], 'safe'],
            [['stok', 'harga_beli', 'harga_jual'], 'integer'],
            [['type_barang'], 'required'],
            [['nama'], 'string', 'max' => 45],
            [['type_barang'], 'string', 'max' => 5],
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
            'tanggal_masuk' => 'Tanggal Masuk',
            'stok' => 'Stok',
            'harga_beli' => 'Harga Beli',
            'harga_jual' => 'Harga Jual',
            'type_barang' => 'Type Barang',
        ];
    }
}
