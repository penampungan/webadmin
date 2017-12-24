<?php

namespace frontend\backend\basic\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\backend\basic\models\MerchantBank;

/**
 * MerchantBankSearch represents the model behind the search form of `frontend\backend\basic\models\MerchantBank`.
 */
class MerchantBankSearch extends MerchantBank
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['BANK_ID', 'STATUS'], 'integer'],
            [['BANK_NM', 'DCRP_DETIL', 'CREATE_BY', 'CREATE_AT', 'UPDATE_BY', 'UPDATE_AT'], 'safe'],
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
        $query = MerchantBank::find();

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
            'BANK_ID' => $this->BANK_ID,
            'STATUS' => $this->STATUS,
            'CREATE_AT' => $this->CREATE_AT,
            'UPDATE_AT' => $this->UPDATE_AT,
        ]);

        $query->andFilterWhere(['like', 'BANK_NM', $this->BANK_NM])
            ->andFilterWhere(['like', 'DCRP_DETIL', $this->DCRP_DETIL])
            ->andFilterWhere(['like', 'CREATE_BY', $this->CREATE_BY])
            ->andFilterWhere(['like', 'UPDATE_BY', $this->UPDATE_BY]);

        return $dataProvider;
    }
}
