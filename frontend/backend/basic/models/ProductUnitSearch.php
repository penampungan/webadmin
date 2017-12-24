<?php

namespace frontend\backend\basic\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\backend\basic\models\ProductUnit;

/**
 * ProductUnitSearch represents the model behind the search form of `frontend\backend\basic\models\ProductUnit`.
 */
class ProductUnitSearch extends ProductUnit
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['UNIT_ID', 'UNIT_NM', 'DCRP_DETIL', 'CREATE_BY', 'CREATE_AT', 'UPDATE_BY', 'UPDATE_AT', 'CREATE_UUID', 'UPDATE_UUID'], 'safe'],
            [['UNIT_ID_GRP', 'STATUS'], 'integer'],
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
        $query = ProductUnit::find();

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
            'UNIT_ID_GRP' => $this->UNIT_ID_GRP,
            'STATUS' => $this->STATUS,
            'CREATE_AT' => $this->CREATE_AT,
            'UPDATE_AT' => $this->UPDATE_AT,
        ]);

        $query->andFilterWhere(['like', 'UNIT_ID', $this->UNIT_ID])
            ->andFilterWhere(['like', 'UNIT_NM', $this->UNIT_NM])
            ->andFilterWhere(['like', 'DCRP_DETIL', $this->DCRP_DETIL])
            ->andFilterWhere(['like', 'CREATE_BY', $this->CREATE_BY])
            ->andFilterWhere(['like', 'UPDATE_BY', $this->UPDATE_BY])
            ->andFilterWhere(['like', 'CREATE_UUID', $this->CREATE_UUID])
            ->andFilterWhere(['like', 'UPDATE_UUID', $this->UPDATE_UUID]);

        return $dataProvider;
    }
}
