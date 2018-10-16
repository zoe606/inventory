<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TypeBarang;

/**
 * TypeBarangSearch represents the model behind the search form about `app\models\TypeBarang`.
 */
class TypeBarangSearch extends TypeBarang
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type_barang', 'nama_barang'], 'safe'],
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
        $query = TypeBarang::find();

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
        $query->andFilterWhere(['like', 'type_barang', $this->type_barang])
            ->andFilterWhere(['like', 'nama_barang', $this->nama_barang]);

        return $dataProvider;
    }
}
