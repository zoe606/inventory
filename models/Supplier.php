<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "supplier".
 *
 * @property integer $id_spl
 * @property string $nama_spl
 * @property string $email_spl
 * @property integer $notel_spl
 * @property string $alamat_spl
 *
 * @property BarangMasuk[] $barangMasuks
 */
class Supplier extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'supplier';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_spl'], 'required'],
            [['notel_spl'], 'integer'],
            [['nama_spl', 'email_spl', 'alamat_spl'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_spl' => 'Id Spl',
            'nama_spl' => 'Nama Spl',
            'email_spl' => 'Email Spl',
            'notel_spl' => 'Notel Spl',
            'alamat_spl' => 'Alamat Spl',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBarangMasuks()
    {
        return $this->hasMany(BarangMasuk::className(), ['supplier_id_' => 'id_spl']);
    }
}
