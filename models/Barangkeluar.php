<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "barang_keluar".
 *
 * @property integer $id
 * @property string $nama_barang
 * @property string $tanggal_keluar
 * @property integer $jumlah
 * @property integer $harga_barang
 * @property integer $total_harga
 * @property integer $id_barang
 */
class Barangkeluar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'barang_keluar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tanggal_keluar'], 'safe'],
            [['jumlah', 'harga_barang', 'total_harga', 'id_barang'], 'integer'],
            [['id_barang'], 'required'],
            #[['nama_barang'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
           # 'nama_barang' => 'Nama Barang',
            'tanggal_keluar' => 'Tanggal Keluar',
            'jumlah' => 'Jumlah',
            'harga_barang' => 'Harga Barang',
            'total_harga' => 'Total Harga',
            'id_barang' => 'Id Barang',
        ];
    }
	
	public function getIdBarang()
    {
        return $this->hasOne(Barang::className(), ['id' => 'id_barang']);
    }
}
