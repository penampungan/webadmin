<?php

namespace frontend\backend\ppob\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\backend\ppob\models\PpobTransaksiSaldoMetode;

/**
 * PpobTransaksiSaldoMetodeSearch represents the model behind the search form of `frontend\backend\ppob\models\PpobTransaksiSaldoMetode`.
 */
class PpobTransaksiSaldoMetodeSearch extends PpobTransaksiSaldoMetode
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'STATUS'], 'integer'],
            [['METODE_PEMBAYARAN', 'DESTINATION_ACCOUNT_NM', 'DESTINATION_ACCOUNT_NO', 'KETERANGAN', 'STATUS_NM', 'CREATE_BY', 'CREATE_AT', 'UPDATE_BY', 'UPDATE_AT'], 'safe'],
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
        $query = PpobTransaksiSaldoMetode::find();

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
            'STATUS' => $this->STATUS,
            'CREATE_AT' => $this->CREATE_AT,
            'UPDATE_AT' => $this->UPDATE_AT,
        ]);

        $query->andFilterWhere(['like', 'METODE_PEMBAYARAN', $this->METODE_PEMBAYARAN])
            ->andFilterWhere(['like', 'DESTINATION_ACCOUNT_NM', $this->DESTINATION_ACCOUNT_NM])
            ->andFilterWhere(['like', 'DESTINATION_ACCOUNT_NO', $this->DESTINATION_ACCOUNT_NO])
            ->andFilterWhere(['like', 'KETERANGAN', $this->KETERANGAN])
            ->andFilterWhere(['like', 'STATUS_NM', $this->STATUS_NM])
            ->andFilterWhere(['like', 'CREATE_BY', $this->CREATE_BY])
            ->andFilterWhere(['like', 'UPDATE_BY', $this->UPDATE_BY]);

        return $dataProvider;
    }
}
