<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "barang_masuk".
 *
 * @property integer $id
 * @property integer $id_barang
 * @property string $nama_barang
 * @property string $tanggal_masuk
 * @property integer $jumlah_barang
 * @property integer $harga_beli
 * @property integer $total_harga
 * @property string $type_barang
 * @property integer $user_id
 * @property integer $supplier_id_
 *
 * @property Supplier $supplierId
 * @property TypeBarang $typeBarang
 * @property User $user
 */
class Barangmasuk extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'barang_masuk';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_barang', 'type_barang', 'user_id', 'supplier_id_'], 'required'],
            [['id_barang', 'jumlah_barang', 'harga_beli', 'total_harga', 'user_id', 'supplier_id_'], 'integer'],
            [['tanggal_masuk'], 'safe'],
            [['nama_barang'], 'string', 'max' => 45],
            [['type_barang'], 'string', 'max' => 5],
            [['supplier_id_'], 'exist', 'skipOnError' => true, 'targetClass' => Supplier::className(), 'targetAttribute' => ['supplier_id_' => 'id_spl']],
            [['type_barang'], 'exist', 'skipOnError' => true, 'targetClass' => TypeBarang::className(), 'targetAttribute' => ['type_barang' => 'type_barang']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_barang' => 'Id Barang',
            'nama_barang' => 'Nama Barang',
            'tanggal_masuk' => 'Tanggal Masuk',
            'jumlah_barang' => 'Jumlah Barang',
            'harga_beli' => 'Harga Beli',
            'total_harga' => 'Total Harga',
            'type_barang' => 'Type Barang',
            'user_id' => 'User ID',
            'supplier_id_' => 'Supplier ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupplierId()
    {
        return $this->hasOne(Supplier::className(), ['id_spl' => 'supplier_id_']);
    }
	
	 public function getIdBarang()
    {
        return $this->hasOne(Barang::className(), ['id' => 'id_barang']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTypeBarang()
    {
        return $this->hasOne(TypeBarang::className(), ['type_barang' => 'type_barang']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
