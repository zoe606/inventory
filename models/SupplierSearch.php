<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Supplier;

/**
 * SupplierSearch represents the model behind the search form about `app\models\Supplier`.
 */
class SupplierSearch extends Supplier
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_spl', 'notel_spl'], 'integer'],
            [['nama_spl', 'email_spl', 'alamat_spl'], 'safe'],
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
        $query = Supplier::find();

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
            'id_spl' => $this->id_spl,
            'notel_spl' => $this->notel_spl,
        ]);

        $query->andFilterWhere(['like', 'nama_spl', $this->nama_spl])
            ->andFilterWhere(['like', 'email_spl', $this->email_spl])
            ->andFilterWhere(['like', 'alamat_spl', $this->alamat_spl]);

        return $dataProvider;
    }
}
