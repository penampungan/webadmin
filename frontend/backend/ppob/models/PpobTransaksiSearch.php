<?php

namespace frontend\backend\ppob\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use yii\data\ArrayDataProvider;
use frontend\backend\ppob\models\PpobTransaksi;

/**
 * PpobTransaksiSearch represents the model behind the search form of `frontend\backend\ppob\models\PpobTransaksi`.
 */
class PpobTransaksiSearch extends PpobTransaksi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'PERMIT', 'STATUS'], 'integer'],
            [['TRANS_ID', 'TRANS_DATE', 'TGL', 'JAM', 'ACCESS_GROUP', 'STORE_ID', 'ID_PRODUK', 'TYPE_NM', 'KELOMPOK', 'KTG_ID', 'KTG_NM', 'ID_CODE', 'CODE', 'NAME', 'FUNGSI', 'MSISDN', 'ID_PELANGGAN', 'RESPON_REFF_ID', 'RESPON_NAMA_PELANGGAN', 'RESPON_MESSAGE', 'RESPON_STRUK', 'RESPON_TOKEN', 'CREATE_BY', 'CREATE_AT', 'UPDATE_BY', 'UPDATE_AT'], 'safe'],
            [['DENOM', 'HARGA_DASAR', 'MARGIN_FEE_KG', 'MARGIN_FEE_MEMBER', 'HARGA_JUAL', 'PEMBAYARAN', 'RESPON_ADMIN_BANK', 'RESPON_TAGIHAN', 'RESPON_TOTAL_BAYAR'], 'number'],
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
    public function searchAll($params)
    {
        $query = PpobTransaksi::find();

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
            'JAM' => $this->JAM,
            'DENOM' => $this->DENOM,
            'HARGA_DASAR' => $this->HARGA_DASAR,
            'MARGIN_FEE_KG' => $this->MARGIN_FEE_KG,
            'MARGIN_FEE_MEMBER' => $this->MARGIN_FEE_MEMBER,
            'HARGA_JUAL' => $this->HARGA_JUAL,
            'PERMIT' => $this->PERMIT,
            'PEMBAYARAN' => $this->PEMBAYARAN,
            'RESPON_ADMIN_BANK' => $this->RESPON_ADMIN_BANK,
            'RESPON_TAGIHAN' => $this->RESPON_TAGIHAN,
            'RESPON_TOTAL_BAYAR' => $this->RESPON_TOTAL_BAYAR,
            'STATUS' => $this->STATUS,
            'CREATE_AT' => $this->CREATE_AT,
            'UPDATE_AT' => $this->UPDATE_AT,
        ]);

        $query->andFilterWhere(['like', 'TRANS_ID', $this->TRANS_ID])
            ->andFilterWhere(['like', 'ACCESS_GROUP', $this->ACCESS_GROUP])
            ->andFilterWhere(['like', 'STORE_ID', $this->STORE_ID])
            ->andFilterWhere(['like', 'ID_PRODUK', $this->ID_PRODUK])
            ->andFilterWhere(['like', 'TYPE_NM', $this->TYPE_NM])
            ->andFilterWhere(['like', 'KELOMPOK', $this->KELOMPOK])
            ->andFilterWhere(['like', 'KTG_ID', $this->KTG_ID])
            ->andFilterWhere(['like', 'KTG_NM', $this->KTG_NM])
            ->andFilterWhere(['like', 'ID_CODE', $this->ID_CODE])
            ->andFilterWhere(['like', 'CODE', $this->CODE])
            ->andFilterWhere(['like', 'NAME', $this->NAME])
            ->andFilterWhere(['like', 'FUNGSI', $this->FUNGSI])
            ->andFilterWhere(['like', 'MSISDN', $this->MSISDN])
            ->andFilterWhere(['like', 'ID_PELANGGAN', $this->ID_PELANGGAN])
            ->andFilterWhere(['like', 'RESPON_REFF_ID', $this->RESPON_REFF_ID])
            ->andFilterWhere(['like', 'RESPON_NAMA_PELANGGAN', $this->RESPON_NAMA_PELANGGAN])
            ->andFilterWhere(['like', 'RESPON_MESSAGE', $this->RESPON_MESSAGE])
            ->andFilterWhere(['like', 'RESPON_STRUK', $this->RESPON_STRUK])
            ->andFilterWhere(['like', 'RESPON_TOKEN', $this->RESPON_TOKEN])
            ->andFilterWhere(['like', 'CREATE_BY', $this->CREATE_BY])
            ->andFilterWhere(['like', 'UPDATE_BY', $this->UPDATE_BY]);

        return $dataProvider;
    }
    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function searchFirst($params)
    {
        $query = PpobTransaksi::find();

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
            'JAM' => $this->JAM,
            'DENOM' => $this->DENOM,
            'HARGA_DASAR' => $this->HARGA_DASAR,
            'MARGIN_FEE_KG' => $this->MARGIN_FEE_KG,
            'MARGIN_FEE_MEMBER' => $this->MARGIN_FEE_MEMBER,
            'HARGA_JUAL' => $this->HARGA_JUAL,
            'PERMIT' => $this->PERMIT,
            'PEMBAYARAN' => $this->PEMBAYARAN,
            'RESPON_ADMIN_BANK' => $this->RESPON_ADMIN_BANK,
            'RESPON_TAGIHAN' => $this->RESPON_TAGIHAN,
            'RESPON_TOTAL_BAYAR' => $this->RESPON_TOTAL_BAYAR,
            'STATUS' => 0,
            'CREATE_AT' => $this->CREATE_AT,
            'UPDATE_AT' => $this->UPDATE_AT,
        ]);

        $query->andFilterWhere(['like', 'TRANS_ID', $this->TRANS_ID])
            ->andFilterWhere(['like', 'ACCESS_GROUP', $this->ACCESS_GROUP])
            ->andFilterWhere(['like', 'STORE_ID', $this->STORE_ID])
            ->andFilterWhere(['like', 'ID_PRODUK', $this->ID_PRODUK])
            ->andFilterWhere(['like', 'TYPE_NM', $this->TYPE_NM])
            ->andFilterWhere(['like', 'KELOMPOK', $this->KELOMPOK])
            ->andFilterWhere(['like', 'KTG_ID', $this->KTG_ID])
            ->andFilterWhere(['like', 'KTG_NM', $this->KTG_NM])
            ->andFilterWhere(['like', 'ID_CODE', $this->ID_CODE])
            ->andFilterWhere(['like', 'CODE', $this->CODE])
            ->andFilterWhere(['like', 'NAME', $this->NAME])
            ->andFilterWhere(['like', 'FUNGSI', $this->FUNGSI])
            ->andFilterWhere(['like', 'MSISDN', $this->MSISDN])
            ->andFilterWhere(['like', 'ID_PELANGGAN', $this->ID_PELANGGAN])
            ->andFilterWhere(['like', 'RESPON_REFF_ID', $this->RESPON_REFF_ID])
            ->andFilterWhere(['like', 'RESPON_NAMA_PELANGGAN', $this->RESPON_NAMA_PELANGGAN])
            ->andFilterWhere(['like', 'RESPON_MESSAGE', $this->RESPON_MESSAGE])
            ->andFilterWhere(['like', 'RESPON_STRUK', $this->RESPON_STRUK])
            ->andFilterWhere(['like', 'RESPON_TOKEN', $this->RESPON_TOKEN])
            ->andFilterWhere(['like', 'CREATE_BY', $this->CREATE_BY])
            ->andFilterWhere(['like', 'UPDATE_BY', $this->UPDATE_BY]);

        return $dataProvider;
    }
    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function searchPending($params)
    {
        $query = PpobTransaksi::find();

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
            'JAM' => $this->JAM,
            'DENOM' => $this->DENOM,
            'HARGA_DASAR' => $this->HARGA_DASAR,
            'MARGIN_FEE_KG' => $this->MARGIN_FEE_KG,
            'MARGIN_FEE_MEMBER' => $this->MARGIN_FEE_MEMBER,
            'HARGA_JUAL' => $this->HARGA_JUAL,
            'PERMIT' => $this->PERMIT,
            'PEMBAYARAN' => $this->PEMBAYARAN,
            'RESPON_ADMIN_BANK' => $this->RESPON_ADMIN_BANK,
            'RESPON_TAGIHAN' => $this->RESPON_TAGIHAN,
            'RESPON_TOTAL_BAYAR' => $this->RESPON_TOTAL_BAYAR,
            'STATUS' => 2,
            'CREATE_AT' => $this->CREATE_AT,
            'UPDATE_AT' => $this->UPDATE_AT,
        ]);

        $query->andFilterWhere(['like', 'TRANS_ID', $this->TRANS_ID])
            ->andFilterWhere(['like', 'ACCESS_GROUP', $this->ACCESS_GROUP])
            ->andFilterWhere(['like', 'STORE_ID', $this->STORE_ID])
            ->andFilterWhere(['like', 'ID_PRODUK', $this->ID_PRODUK])
            ->andFilterWhere(['like', 'TYPE_NM', $this->TYPE_NM])
            ->andFilterWhere(['like', 'KELOMPOK', $this->KELOMPOK])
            ->andFilterWhere(['like', 'KTG_ID', $this->KTG_ID])
            ->andFilterWhere(['like', 'KTG_NM', $this->KTG_NM])
            ->andFilterWhere(['like', 'ID_CODE', $this->ID_CODE])
            ->andFilterWhere(['like', 'CODE', $this->CODE])
            ->andFilterWhere(['like', 'NAME', $this->NAME])
            ->andFilterWhere(['like', 'FUNGSI', $this->FUNGSI])
            ->andFilterWhere(['like', 'MSISDN', $this->MSISDN])
            ->andFilterWhere(['like', 'ID_PELANGGAN', $this->ID_PELANGGAN])
            ->andFilterWhere(['like', 'RESPON_REFF_ID', $this->RESPON_REFF_ID])
            ->andFilterWhere(['like', 'RESPON_NAMA_PELANGGAN', $this->RESPON_NAMA_PELANGGAN])
            ->andFilterWhere(['like', 'RESPON_MESSAGE', $this->RESPON_MESSAGE])
            ->andFilterWhere(['like', 'RESPON_STRUK', $this->RESPON_STRUK])
            ->andFilterWhere(['like', 'RESPON_TOKEN', $this->RESPON_TOKEN])
            ->andFilterWhere(['like', 'CREATE_BY', $this->CREATE_BY])
            ->andFilterWhere(['like', 'UPDATE_BY', $this->UPDATE_BY]);

        return $dataProvider;
    }
    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function searchSuccess($params)
    {
        $query = PpobTransaksi::find();

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
            'JAM' => $this->JAM,
            'DENOM' => $this->DENOM,
            'HARGA_DASAR' => $this->HARGA_DASAR,
            'MARGIN_FEE_KG' => $this->MARGIN_FEE_KG,
            'MARGIN_FEE_MEMBER' => $this->MARGIN_FEE_MEMBER,
            'HARGA_JUAL' => $this->HARGA_JUAL,
            'PERMIT' => $this->PERMIT,
            'PEMBAYARAN' => $this->PEMBAYARAN,
            'RESPON_ADMIN_BANK' => $this->RESPON_ADMIN_BANK,
            'RESPON_TAGIHAN' => $this->RESPON_TAGIHAN,
            'RESPON_TOTAL_BAYAR' => $this->RESPON_TOTAL_BAYAR,
            'STATUS' => 1,
            'CREATE_AT' => $this->CREATE_AT,
            'UPDATE_AT' => $this->UPDATE_AT,
        ]);

        $query->andFilterWhere(['like', 'TRANS_ID', $this->TRANS_ID])
            ->andFilterWhere(['like', 'ACCESS_GROUP', $this->ACCESS_GROUP])
            ->andFilterWhere(['like', 'STORE_ID', $this->STORE_ID])
            ->andFilterWhere(['like', 'ID_PRODUK', $this->ID_PRODUK])
            ->andFilterWhere(['like', 'TYPE_NM', $this->TYPE_NM])
            ->andFilterWhere(['like', 'KELOMPOK', $this->KELOMPOK])
            ->andFilterWhere(['like', 'KTG_ID', $this->KTG_ID])
            ->andFilterWhere(['like', 'KTG_NM', $this->KTG_NM])
            ->andFilterWhere(['like', 'ID_CODE', $this->ID_CODE])
            ->andFilterWhere(['like', 'CODE', $this->CODE])
            ->andFilterWhere(['like', 'NAME', $this->NAME])
            ->andFilterWhere(['like', 'FUNGSI', $this->FUNGSI])
            ->andFilterWhere(['like', 'MSISDN', $this->MSISDN])
            ->andFilterWhere(['like', 'ID_PELANGGAN', $this->ID_PELANGGAN])
            ->andFilterWhere(['like', 'RESPON_REFF_ID', $this->RESPON_REFF_ID])
            ->andFilterWhere(['like', 'RESPON_NAMA_PELANGGAN', $this->RESPON_NAMA_PELANGGAN])
            ->andFilterWhere(['like', 'RESPON_MESSAGE', $this->RESPON_MESSAGE])
            ->andFilterWhere(['like', 'RESPON_STRUK', $this->RESPON_STRUK])
            ->andFilterWhere(['like', 'RESPON_TOKEN', $this->RESPON_TOKEN])
            ->andFilterWhere(['like', 'CREATE_BY', $this->CREATE_BY])
            ->andFilterWhere(['like', 'UPDATE_BY', $this->UPDATE_BY]);

        return $dataProvider;
    }
    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function searchGagal($params)
    {
        $query = PpobTransaksi::find();

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
            'JAM' => $this->JAM,
            'DENOM' => $this->DENOM,
            'HARGA_DASAR' => $this->HARGA_DASAR,
            'MARGIN_FEE_KG' => $this->MARGIN_FEE_KG,
            'MARGIN_FEE_MEMBER' => $this->MARGIN_FEE_MEMBER,
            'HARGA_JUAL' => $this->HARGA_JUAL,
            'PERMIT' => $this->PERMIT,
            'PEMBAYARAN' => $this->PEMBAYARAN,
            'RESPON_ADMIN_BANK' => $this->RESPON_ADMIN_BANK,
            'RESPON_TAGIHAN' => $this->RESPON_TAGIHAN,
            'RESPON_TOTAL_BAYAR' => $this->RESPON_TOTAL_BAYAR,
            'STATUS' => 3,
            'CREATE_AT' => $this->CREATE_AT,
            'UPDATE_AT' => $this->UPDATE_AT,
        ]);

        $query->andFilterWhere(['like', 'TRANS_ID', $this->TRANS_ID])
            ->andFilterWhere(['like', 'ACCESS_GROUP', $this->ACCESS_GROUP])
            ->andFilterWhere(['like', 'STORE_ID', $this->STORE_ID])
            ->andFilterWhere(['like', 'ID_PRODUK', $this->ID_PRODUK])
            ->andFilterWhere(['like', 'TYPE_NM', $this->TYPE_NM])
            ->andFilterWhere(['like', 'KELOMPOK', $this->KELOMPOK])
            ->andFilterWhere(['like', 'KTG_ID', $this->KTG_ID])
            ->andFilterWhere(['like', 'KTG_NM', $this->KTG_NM])
            ->andFilterWhere(['like', 'ID_CODE', $this->ID_CODE])
            ->andFilterWhere(['like', 'CODE', $this->CODE])
            ->andFilterWhere(['like', 'NAME', $this->NAME])
            ->andFilterWhere(['like', 'FUNGSI', $this->FUNGSI])
            ->andFilterWhere(['like', 'MSISDN', $this->MSISDN])
            ->andFilterWhere(['like', 'ID_PELANGGAN', $this->ID_PELANGGAN])
            ->andFilterWhere(['like', 'RESPON_REFF_ID', $this->RESPON_REFF_ID])
            ->andFilterWhere(['like', 'RESPON_NAMA_PELANGGAN', $this->RESPON_NAMA_PELANGGAN])
            ->andFilterWhere(['like', 'RESPON_MESSAGE', $this->RESPON_MESSAGE])
            ->andFilterWhere(['like', 'RESPON_STRUK', $this->RESPON_STRUK])
            ->andFilterWhere(['like', 'RESPON_TOKEN', $this->RESPON_TOKEN])
            ->andFilterWhere(['like', 'CREATE_BY', $this->CREATE_BY])
            ->andFilterWhere(['like', 'UPDATE_BY', $this->UPDATE_BY]);

        return $dataProvider;
    }
    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function searchExcelExport($params)
    {
        $query = "select TRANS_ID,TRANS_DATE,TGL,JAM,ACCESS_GROUP,STORE_ID,ID_PRODUK FROM ppob_transaksi";
        $qrySql= Yii::$app->db->createCommand($query)->queryAll(); 	
        // add conditions that should always apply here

        $dataProvider = new ArrayDataProvider([
            'allModels' => $qrySql,
        ]);

        // print_r( $dataProvider);die();

        //if (!($this->load($params)&&$this->validate())) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
         //   return $dataProvider;
        //}
        return $dataProvider;
    }
}
