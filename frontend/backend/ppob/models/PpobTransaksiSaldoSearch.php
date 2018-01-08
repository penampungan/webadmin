<?php

namespace frontend\backend\ppob\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\backend\ppob\models\PpobTransaksiSaldo;

/**
 * PpobTransaksiSaldoSearch represents the model behind the search form of `frontend\backend\ppob\models\PpobTransaksiSaldo`.
 */
class PpobTransaksiSaldoSearch extends PpobTransaksiSaldo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'STATUS'], 'integer'],
            [['TRANS_ID', 'STORE_ID', 'ACCESS_GROUP', 'TRANS_DATE', 'TGL', 'WAKTU', 'DES_STORE', 'METODE_PEMBAYARAN', 'DESTINATION_ACCOUNT_NM', 'DESTINATION_ACCOUNT_NO', 'SOURCE_ACCOUNT_NM', 'SOURCE_ACCOUNT_NO', 'EMAIL', 'KETERANGAN', 'STATUS_NM', 'CREATE_BY', 'CREATE_AT', 'UPDATE_BY', 'UPDATE_AT'], 'safe'],
            [['SALDO_DEPOSIT', 'SALDO_CURRENT', 'SALDO_MUTASI', 'SALDO_BACK'], 'number'],
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
        $query = PpobTransaksiSaldo::find();

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
            'TRANS_DATE' => $this->TRANS_DATE,
            'TGL' => $this->TGL,
            'WAKTU' => $this->WAKTU,
            'SALDO_DEPOSIT' => $this->SALDO_DEPOSIT,
            'SALDO_CURRENT' => $this->SALDO_CURRENT,
            'SALDO_MUTASI' => $this->SALDO_MUTASI,
            'SALDO_BACK' => $this->SALDO_BACK,
            'STATUS' => $this->STATUS,
            'CREATE_AT' => $this->CREATE_AT,
            'UPDATE_AT' => $this->UPDATE_AT,
        ]);

        $query->andFilterWhere(['like', 'TRANS_ID', $this->TRANS_ID])
            ->andFilterWhere(['like', 'STORE_ID', $this->STORE_ID])
            ->andFilterWhere(['like', 'ACCESS_GROUP', $this->ACCESS_GROUP])
            ->andFilterWhere(['like', 'DES_STORE', $this->DES_STORE])
            ->andFilterWhere(['like', 'METODE_PEMBAYARAN', $this->METODE_PEMBAYARAN])
            ->andFilterWhere(['like', 'DESTINATION_ACCOUNT_NM', $this->DESTINATION_ACCOUNT_NM])
            ->andFilterWhere(['like', 'DESTINATION_ACCOUNT_NO', $this->DESTINATION_ACCOUNT_NO])
            ->andFilterWhere(['like', 'SOURCE_ACCOUNT_NM', $this->SOURCE_ACCOUNT_NM])
            ->andFilterWhere(['like', 'SOURCE_ACCOUNT_NO', $this->SOURCE_ACCOUNT_NO])
            ->andFilterWhere(['like', 'EMAIL', $this->EMAIL])
            ->andFilterWhere(['like', 'KETERANGAN', $this->KETERANGAN])
            ->andFilterWhere(['like', 'STATUS_NM', $this->STATUS_NM])
            ->andFilterWhere(['like', 'CREATE_BY', $this->CREATE_BY])
            ->andFilterWhere(['like', 'UPDATE_BY', $this->UPDATE_BY]);

        return $dataProvider;
    }
}
