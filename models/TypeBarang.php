<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "type_barang".
 *
 * @property string $type_barang
 * @property string $nama_barang
 *
 * @property BarangMasuk[] $barangMasuks
 */
class TypeBarang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'type_barang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type_barang'], 'required'],
            [['type_barang'], 'string', 'max' => 5],
            [['nama_barang'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'type_barang' => 'Type Barang',
            'nama_barang' => 'Nama Barang',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBarangMasuks()
    {
        return $this->hasMany(BarangMasuk::className(), ['type_barang' => 'type_barang']);
    }
}
