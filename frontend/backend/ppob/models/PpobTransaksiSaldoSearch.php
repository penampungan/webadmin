<?php

namespace frontend\backend\ppob\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use yii\data\ArrayDataProvider;
use frontend\backend\ppob\models\PpobTransaksiSaldo;
use frontend\backend\sistem\models\UserKgProfile;

use common\models\Store;
/**
 * PpobTransaksiSaldoSearch represents the model behind the search form of `frontend\backend\ppob\models\PpobTransaksiSaldo`.
 */
class PpobTransaksiSaldoSearch extends PpobTransaksiSaldo
{
    /**
     * @inheritdoc
     */
    public $tgllama;
    public $tglbaru;
    public $storeidpaid;
    public $accessgrouppaid;
    public $storeidmutasi;
    public $accessgroupmutasi;
    public $storeidexpierd;
    public $accessgroupexpierd;
    public $storeidambil;
    public $accessgroupambil;
    public function rules()
    {
        return [
            [['ID', 'STATUS'], 'integer'],
            [['TRANS_ID', 'accessgroupambil','storeidambil','storeidpaid','accessgrouppaid','storeidmutasi','accessgroupmutasi','storeidexpierd','accessgroupexpierd','STORE_ID', 'ACCESS_GROUP', 'TRANS_DATE', 'TGL', 'WAKTU', 'DES_STORE', 'METODE_PEMBAYARAN', 'DESTINATION_ACCOUNT_NM', 'DESTINATION_ACCOUNT_NO', 'SOURCE_ACCOUNT_NM', 'SOURCE_ACCOUNT_NO', 'EMAIL', 'KETERANGAN', 'STATUS_NM', 'CREATE_BY', 'CREATE_AT', 'UPDATE_BY', 'UPDATE_AT','tgllama','tglbaru'], 'safe'],
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
        $query->orderBy(['STORE_ID'=>SORT_ASC]);
        return $dataProvider;
    }
    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function searchTrans($params)
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
            'STATUS' => 0,
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
        $query->orderBy(['STORE_ID'=>SORT_ASC]);
        return $dataProvider;
    }
    public function searchPaid($params)
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
            'STATUS' => 1,
            'CREATE_AT' => $this->CREATE_AT,
            'UPDATE_AT' => $this->UPDATE_AT,
        ]);

        $query->andFilterWhere(['like', 'TRANS_ID', $this->TRANS_ID])
            ->andFilterWhere(['like', 'STORE_ID', $this->storeidpaid])
            ->andFilterWhere(['like', 'ACCESS_GROUP', $this->accessgrouppaid])
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
        $query->orderBy(['STORE_ID'=>SORT_ASC]);
        return $dataProvider;
    }
    public function searchMutasi($params)
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
            'STATUS' => 2,
            'CREATE_AT' => $this->CREATE_AT,
            'UPDATE_AT' => $this->UPDATE_AT,
        ]);

        $query->andFilterWhere(['like', 'TRANS_ID', $this->TRANS_ID])
            ->andFilterWhere(['like', 'STORE_ID', $this->storeidmutasi])
            ->andFilterWhere(['like', 'ACCESS_GROUP', $this->accessgroupmutasi])
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
        $query->orderBy(['STORE_ID'=>SORT_ASC]);
        return $dataProvider;
    }
    public function searchExpired($params)
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
            'STATUS' => 3,
            'CREATE_AT' => $this->CREATE_AT,
            'UPDATE_AT' => $this->UPDATE_AT,
        ]);
        
        $query->andFilterWhere(['like', 'TRANS_ID', $this->TRANS_ID])
            ->andFilterWhere(['like', 'STORE_ID', $this->storeidexpierd])
            ->andFilterWhere(['like', 'ACCESS_GROUP', $this->accessgroupexpierd])
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
        $query->orderBy(['STORE_ID'=>SORT_ASC]);
        return $dataProvider;
    }
    public function searchAmbil($params)
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
            'STATUS' => 4,
            'CREATE_AT' => $this->CREATE_AT,
            'UPDATE_AT' => $this->UPDATE_AT,
        ]);

        $query->andFilterWhere(['like', 'TRANS_ID', $this->TRANS_ID])
            ->andFilterWhere(['like', 'STORE_ID', $this->storeidambil])
            ->andFilterWhere(['like', 'ACCESS_GROUP', $this->accessgroupambil])
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
        $query->orderBy(['STORE_ID'=>SORT_ASC]);
        return $dataProvider;
    }

    public function searchExcelExport($params)
    {
        // print_r($this->ACCESS_GROUP);die();
            $query = "SELECT `TRANS_ID`, `STORE_ID`, `ACCESS_GROUP`, `TRANS_DATE`, `TGL`, `WAKTU`, `SALDO_DEPOSIT`, `DES_STORE`, `SALDO_CURRENT`, `SALDO_MUTASI`, `SALDO_BACK`, `METODE_PEMBAYARAN`, `DESTINATION_ACCOUNT_NM`, `DESTINATION_ACCOUNT_NO`, `SOURCE_ACCOUNT_NM`, `SOURCE_ACCOUNT_NO`, `EMAIL`, `KETERANGAN`, `STATUS_NM` FROM `ppob_transaksi_saldo` 
            WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."'";
       $qrySql= Yii::$app->db->createCommand($query)->queryAll();
        $dataProvider = new ArrayDataProvider([
            'allModels' => $qrySql,
        ]);

        return $dataProvider;
    }
    public function searchExcelExportNew($params)
    {
        $query = "SELECT `TRANS_ID`, `STORE_ID`, `ACCESS_GROUP`, `TRANS_DATE`, `TGL`, `WAKTU`, `SALDO_DEPOSIT`, `DES_STORE`, `SALDO_CURRENT`, `SALDO_MUTASI`, `SALDO_BACK`, `METODE_PEMBAYARAN`, `DESTINATION_ACCOUNT_NM`, `DESTINATION_ACCOUNT_NO`, `SOURCE_ACCOUNT_NM`, `SOURCE_ACCOUNT_NO`, `EMAIL`, `KETERANGAN`, `STATUS_NM` FROM `ppob_transaksi_saldo` 
            WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' AND STATUS=0";
         $qrySql= Yii::$app->db->createCommand($query)->queryAll();
        $dataProvider = new ArrayDataProvider([
            'allModels' => $qrySql,
        ]);

        return $dataProvider;
    }
    public function searchExcelExportPaid($params)
    {
        $query = "SELECT `TRANS_ID`, `STORE_ID`, `ACCESS_GROUP`, `TRANS_DATE`, `TGL`, `WAKTU`, `SALDO_DEPOSIT`, `DES_STORE`, `SALDO_CURRENT`, `SALDO_MUTASI`, `SALDO_BACK`, `METODE_PEMBAYARAN`, `DESTINATION_ACCOUNT_NM`, `DESTINATION_ACCOUNT_NO`, `SOURCE_ACCOUNT_NM`, `SOURCE_ACCOUNT_NO`, `EMAIL`, `KETERANGAN`, `STATUS_NM` FROM `ppob_transaksi_saldo` 
        WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' AND STATUS=1";
        $qrySql= Yii::$app->db->createCommand($query)->queryAll();
        $dataProvider = new ArrayDataProvider([
            'allModels' => $qrySql,
        ]);

        return $dataProvider;
    }
    public function searchExcelExportMutasi($params)
    {
        $query = "SELECT `TRANS_ID`, `STORE_ID`, `ACCESS_GROUP`, `TRANS_DATE`, `TGL`, `WAKTU`, `SALDO_DEPOSIT`, `DES_STORE`, `SALDO_CURRENT`, `SALDO_MUTASI`, `SALDO_BACK`, `METODE_PEMBAYARAN`, `DESTINATION_ACCOUNT_NM`, `DESTINATION_ACCOUNT_NO`, `SOURCE_ACCOUNT_NM`, `SOURCE_ACCOUNT_NO`, `EMAIL`, `KETERANGAN`, `STATUS_NM` FROM `ppob_transaksi_saldo` 
        WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' AND STATUS=2";
        $qrySql= Yii::$app->db->createCommand($query)->queryAll();
        $dataProvider = new ArrayDataProvider([
            'allModels' => $qrySql,
        ]);

        return $dataProvider;
    }
    public function searchExcelExportExpierd($params)
    {
        $query = "SELECT `TRANS_ID`, `STORE_ID`, `ACCESS_GROUP`, `TRANS_DATE`, `TGL`, `WAKTU`, `SALDO_DEPOSIT`, `DES_STORE`, `SALDO_CURRENT`, `SALDO_MUTASI`, `SALDO_BACK`, `METODE_PEMBAYARAN`, `DESTINATION_ACCOUNT_NM`, `DESTINATION_ACCOUNT_NO`, `SOURCE_ACCOUNT_NM`, `SOURCE_ACCOUNT_NO`, `EMAIL`, `KETERANGAN`, `STATUS_NM` FROM `ppob_transaksi_saldo` 
            WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' AND STATUS=3";
        $qrySql= Yii::$app->db->createCommand($query)->queryAll();
        $dataProvider = new ArrayDataProvider([
            'allModels' => $qrySql,
        ]);

        return $dataProvider;
    }
    public function searchExcelExportAmbil($params)
    {
        $query = "SELECT `TRANS_ID`, `STORE_ID`, `ACCESS_GROUP`, `TRANS_DATE`, `TGL`, `WAKTU`, `SALDO_DEPOSIT`, `DES_STORE`, `SALDO_CURRENT`, `SALDO_MUTASI`, `SALDO_BACK`, `METODE_PEMBAYARAN`, `DESTINATION_ACCOUNT_NM`, `DESTINATION_ACCOUNT_NO`, `SOURCE_ACCOUNT_NM`, `SOURCE_ACCOUNT_NO`, `EMAIL`, `KETERANGAN`, `STATUS_NM` FROM `ppob_transaksi_saldo` 
            WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' AND STATUS=4";
        $qrySql= Yii::$app->db->createCommand($query)->queryAll();
        $dataProvider = new ArrayDataProvider([
            'allModels' => $qrySql,
        ]);

        return $dataProvider;
    }
}
