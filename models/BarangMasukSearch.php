<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Barangmasuk;

/**
 * BarangmasukSearch represents the model behind the search form about `app\models\Barangmasuk`.
 */
class BarangmasukSearch extends Barangmasuk
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_barang', 'jumlah_barang', 'harga_beli', 'total_harga', 'user_id', 'supplier_id_'], 'integer'],
            [['nama_barang', 'tanggal_masuk', 'type_barang'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Barangmasuk::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'id_barang' => $this->id_barang,
            'tanggal_masuk' => $this->tanggal_masuk,
            'jumlah_barang' => $this->jumlah_barang,
            'harga_beli' => $this->harga_beli,
            'total_harga' => $this->total_harga,
            'user_id' => $this->user_id,
            'supplier_id_' => $this->supplier_id_,
        ]);

        $query->andFilterWhere(['like', 'nama_barang', $this->nama_barang])
            ->andFilterWhere(['like', 'type_barang', $this->type_barang]);

        return $dataProvider;
    }
}
