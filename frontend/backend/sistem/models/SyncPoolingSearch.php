<?php

namespace frontend\backend\sistem\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\backend\sistem\models\SyncPooling;

/**
 * SyncPoolingSearch represents the model behind the search form of `frontend\backend\sistem\models\SyncPooling`.
 */
class SyncPoolingSearch extends SyncPooling
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'TYPE_ACTION', 'STATUS'], 'integer'],
            [['NM_TABLE', 'PRIMARIKEY_NM', 'PRIMARIKEY_VAL', 'PRIMARIKEY_ID', 'ACCESS_GROUP', 'STORE_ID', 'ARY_UUID', 'ARY_PLAYERID', 'CREATE_BY', 'CREATE_AT', 'UPDATE_BY', 'UPDATE_AT'], 'safe'],
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
        $query = SyncPooling::find();

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
            'TYPE_ACTION' => $this->TYPE_ACTION,
            'STATUS' => $this->STATUS,
            'CREATE_AT' => $this->CREATE_AT,
            'UPDATE_AT' => $this->UPDATE_AT,
        ]);

        $query->andFilterWhere(['like', 'NM_TABLE', $this->NM_TABLE])
            ->andFilterWhere(['like', 'PRIMARIKEY_NM', $this->PRIMARIKEY_NM])
            ->andFilterWhere(['like', 'PRIMARIKEY_VAL', $this->PRIMARIKEY_VAL])
            ->andFilterWhere(['like', 'PRIMARIKEY_ID', $this->PRIMARIKEY_ID])
            ->andFilterWhere(['like', 'ACCESS_GROUP', $this->ACCESS_GROUP])
            ->andFilterWhere(['like', 'STORE_ID', $this->STORE_ID])
            ->andFilterWhere(['like', 'ARY_UUID', $this->ARY_UUID])
            ->andFilterWhere(['like', 'ARY_PLAYERID', $this->ARY_PLAYERID])
            ->andFilterWhere(['like', 'CREATE_BY', $this->CREATE_BY])
            ->andFilterWhere(['like', 'UPDATE_BY', $this->UPDATE_BY]);

        return $dataProvider;
    }
}
