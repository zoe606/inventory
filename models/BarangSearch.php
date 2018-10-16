<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Barang;

/**
 * BarangSearch represents the model behind the search form about `app\models\Barang`.
 */
class BarangSearch extends Barang
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'stok', 'harga_beli', 'harga_jual'], 'integer'],
            [['nama', 'tanggal_masuk', 'type_barang'], 'safe'],
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
        $query = Barang::find();

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
            'tanggal_masuk' => $this->tanggal_masuk,
            'stok' => $this->stok,
            'harga_beli' => $this->harga_beli,
            'harga_jual' => $this->harga_jual,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'type_barang', $this->type_barang]);

        return $dataProvider;
    }
}
