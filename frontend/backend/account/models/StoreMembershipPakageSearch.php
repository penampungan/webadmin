<?php

namespace frontend\backend\account\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\backend\account\models\StoreMembershipPakage;

/**
 * StoreMembershipPakageSearch represents the model behind the search form of `frontend\backend\account\models\StoreMembershipPakage`.
 */
class StoreMembershipPakageSearch extends StoreMembershipPakage
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'STATUS', 'PAKAGE_DURATION', 'PAKAGE_BONUS', 'AFILIASI_BONUS'], 'integer'],
            [['CREATE_BY', 'CREATE_AT', 'UPDATE_BY', 'UPDATE_AT', 'PAKAGE', 'PAKAGE_PARENT', 'PAKAGE_NM', 'AFILIASI_KODE'], 'safe'],
            [['PAKAGE_PRICE'], 'number'],
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
        $query = StoreMembershipPakage::find();

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
            'ID' => $this->ID,
            'CREATE_AT' => $this->CREATE_AT,
            'UPDATE_AT' => $this->UPDATE_AT,
            'STATUS' => $this->STATUS,
            'PAKAGE_DURATION' => $this->PAKAGE_DURATION,
            'PAKAGE_BONUS' => $this->PAKAGE_BONUS,
            'AFILIASI_BONUS' => $this->AFILIASI_BONUS,
            'PAKAGE_PRICE' => $this->PAKAGE_PRICE,
        ]);

        $query->andFilterWhere(['like', 'CREATE_BY', $this->CREATE_BY])
            ->andFilterWhere(['like', 'UPDATE_BY', $this->UPDATE_BY])
            ->andFilterWhere(['like', 'PAKAGE', $this->PAKAGE])
            ->andFilterWhere(['like', 'PAKAGE_PARENT', $this->PAKAGE_PARENT])
            ->andFilterWhere(['like', 'PAKAGE_NM', $this->PAKAGE_NM])
            ->andFilterWhere(['like', 'AFILIASI_KODE', $this->AFILIASI_KODE]);

        return $dataProvider;
    }
}
