<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Barangkeluar;

/**
 * BarangkeluarSearch represents the model behind the search form about `app\models\Barangkeluar`.
 */
class BarangkeluarSearch extends Barangkeluar
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'jumlah', 'harga_barang', 'total_harga', 'id_barang'], 'integer'],
            [[ 'tanggal_keluar'], 'safe'],
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
        $query = Barangkeluar::find();

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
            'tanggal_keluar' => $this->tanggal_keluar,
            'jumlah' => $this->jumlah,
            'harga_barang' => $this->harga_barang,
            'total_harga' => $this->total_harga,
            'id_barang' => $this->id_barang,
        ]);

        #$query->andFilterWhere(['like', 'nama_barang', $this->nama_barang]);

        return $dataProvider;
    }
}
