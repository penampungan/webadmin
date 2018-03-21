<?php

namespace frontend\backend\ppob\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use yii\data\ArrayDataProvider;
use yii\debug\components\search\Filter;
use yii\debug\components\search\matchers;

use frontend\backend\ppob\models\PpobTransaksi;

/**
 * PpobTransaksiSearch represents the model behind the search form of `frontend\backend\ppob\models\PpobTransaksi`.
 */
class PpobTransaksiSearch extends PpobTransaksi
{
    public $tgllama;
    public $tglbaru;
	public $ACCESS_GROUP;
    public $STORE_ID;

    public $username;
    public $STORE_NM;

    public $BARU_username;
    public $BARU_STORE_NM;
    public $BARU_ID;
    public $BARU_TRANS_DATE;
    public $BARU_TGL;
    public $BARU_JAM;
    public $BARU_HARGA_DASAR;
    public $BARU_MARGIN_FEE_KG;
    public $BARU_MARGIN_FEE_MEMBER;
    public $BARU_HARGA_JUAL;
    public $BARU_PERMIT;
    public $BARU_PEMBAYARAN;
    public $BARU_RESPON_ADMIN_BANK;
    public $BARU_RESPON_TAGIHAN;
    public $BARU_RESPON_TOTAL_BAYAR;
    public $BARU_CREATE_AT;
    public $BARU_UPDATE_AT;
    public $BARU_TRANS_ID;
    public $BARU_ACCESS_GROUP;
    public $BARU_STORE_ID;
    public $BARU_ID_PRODUK;
    public $BARU_TYPE_NM;
    public $BARU_KELOMPOK;
    public $BARU_KTG_ID;
    public $BARU_KTG_NM;
    public $BARU_ID_CODE;
    public $BARU_NAME;
    public $BARU_FUNGSI;
    public $BARU_MSISDN;
    public $BARU_ID_PELANGGAN;
    public $BARU_RESPON_REFF_ID;
    public $BARU_RESPON_NAMA_PELANGGAN;
    public $BARU_RESPON_MESSAGE;
    public $BARU_RESPON_STRUK;
    public $BARU_RESPON_TOKEN;
    public $BARU_CREATE_BY;
    public $BARU_UPDATE_BY;
    public $BARU_CODE;
    public $BARU_DENOM;	
    public $BARU_STATUS;	

    public $PENDING_username;
    public $PENDING_STORE_NM;
    public $PENDING_ID;
    public $PENDING_TRANS_DATE;
    public $PENDING_TGL;
    public $PENDING_JAM;
    public $PENDING_HARGA_DASAR;
    public $PENDING_MARGIN_FEE_KG;
    public $PENDING_MARGIN_FEE_MEMBER;
    public $PENDING_HARGA_JUAL;
    public $PENDING_PERMIT;
    public $PENDING_PEMBAYARAN;
    public $PENDING_RESPON_ADMIN_BANK;
    public $PENDING_RESPON_TAGIHAN;
    public $PENDING_RESPON_TOTAL_BAYAR;
    public $PENDING_CREATE_AT;
    public $PENDING_UPDATE_AT;
    public $PENDING_TRANS_ID;
    public $PENDING_ACCESS_GROUP;
    public $PENDING_STORE_ID;
    public $PENDING_ID_PRODUK;
    public $PENDING_TYPE_NM;
    public $PENDING_KELOMPOK;
    public $PENDING_KTG_ID;
    public $PENDING_KTG_NM;
    public $PENDING_ID_CODE;
    public $PENDING_NAME;
    public $PENDING_FUNGSI;
    public $PENDING_MSISDN;
    public $PENDING_ID_PELANGGAN;
    public $PENDING_RESPON_REFF_ID;
    public $PENDING_RESPON_NAMA_PELANGGAN;
    public $PENDING_RESPON_MESSAGE;
    public $PENDING_RESPON_STRUK;
    public $PENDING_RESPON_TOKEN;
    public $PENDING_CREATE_BY;
    public $PENDING_UPDATE_BY;
    public $PENDING_CODE;
    public $PENDING_DENOM;	
    public $PENDING_STATUS;	
    
    public $SUCCESS_username;
    public $SUCCESS_STORE_NM;
    public $SUCCESS_ID;
    public $SUCCESS_TRANS_DATE;
    public $SUCCESS_TGL;
    public $SUCCESS_JAM;
    public $SUCCESS_HARGA_DASAR;
    public $SUCCESS_MARGIN_FEE_KG;
    public $SUCCESS_MARGIN_FEE_MEMBER;
    public $SUCCESS_HARGA_JUAL;
    public $SUCCESS_PERMIT;
    public $SUCCESS_PEMBAYARAN;
    public $SUCCESS_RESPON_ADMIN_BANK;
    public $SUCCESS_RESPON_TAGIHAN;
    public $SUCCESS_RESPON_TOTAL_BAYAR;
    public $SUCCESS_CREATE_AT;
    public $SUCCESS_UPDATE_AT;
    public $SUCCESS_TRANS_ID;
    public $SUCCESS_ACCESS_GROUP;
    public $SUCCESS_STORE_ID;
    public $SUCCESS_ID_PRODUK;
    public $SUCCESS_TYPE_NM;
    public $SUCCESS_KELOMPOK;
    public $SUCCESS_KTG_ID;
    public $SUCCESS_KTG_NM;
    public $SUCCESS_ID_CODE;
    public $SUCCESS_NAME;
    public $SUCCESS_FUNGSI;
    public $SUCCESS_MSISDN;
    public $SUCCESS_ID_PELANGGAN;
    public $SUCCESS_RESPON_REFF_ID;
    public $SUCCESS_RESPON_NAMA_PELANGGAN;
    public $SUCCESS_RESPON_MESSAGE;
    public $SUCCESS_RESPON_STRUK;
    public $SUCCESS_RESPON_TOKEN;
    public $SUCCESS_CREATE_BY;
    public $SUCCESS_UPDATE_BY;
    public $SUCCESS_CODE;
    public $SUCCESS_DENOM;	
    public $SUCCESS_STATUS;

    public $GAGAL_username;
    public $GAGAL_STORE_NM;
    public $GAGAL_ID;
    public $GAGAL_TRANS_DATE;
    public $GAGAL_TGL;
    public $GAGAL_JAM;
    public $GAGAL_HARGA_DASAR;
    public $GAGAL_MARGIN_FEE_KG;
    public $GAGAL_MARGIN_FEE_MEMBER;
    public $GAGAL_HARGA_JUAL;
    public $GAGAL_PERMIT;
    public $GAGAL_PEMBAYARAN;
    public $GAGAL_RESPON_ADMIN_BANK;
    public $GAGAL_RESPON_TAGIHAN;
    public $GAGAL_RESPON_TOTAL_BAYAR;
    public $GAGAL_CREATE_AT;
    public $GAGAL_UPDATE_AT;
    public $GAGAL_TRANS_ID;
    public $GAGAL_ACCESS_GROUP;
    public $GAGAL_STORE_ID;
    public $GAGAL_ID_PRODUK;
    public $GAGAL_TYPE_NM;
    public $GAGAL_KELOMPOK;
    public $GAGAL_KTG_ID;
    public $GAGAL_KTG_NM;
    public $GAGAL_ID_CODE;
    public $GAGAL_NAME;
    public $GAGAL_FUNGSI;
    public $GAGAL_MSISDN;
    public $GAGAL_ID_PELANGGAN;
    public $GAGAL_RESPON_REFF_ID;
    public $GAGAL_RESPON_NAMA_PELANGGAN;
    public $GAGAL_RESPON_MESSAGE;
    public $GAGAL_RESPON_STRUK;
    public $GAGAL_RESPON_TOKEN;
    public $GAGAL_CREATE_BY;
    public $GAGAL_UPDATE_BY;
    public $GAGAL_CODE;
    public $GAGAL_DENOM;	
    public $GAGAL_STATUS;	
    // public function attributes()
	// {
	// 	return array_merge(parent::attributes(), ['typenmbaru']);
	// }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'PERMIT', 'STATUS'], 'integer'],
            [['TRANS_ID', 'typenmbaru','kelompokbaru','typenmgagal','kelompokgagal','typenmpending','kelompokpending','typenmsuccess','kelompoksuccess','TRANS_DATE', 'TGL', 'JAM', 'ACCESS_GROUP', 'STORE_ID', 'ID_PRODUK', 'TYPE_NM', 'KELOMPOK', 'KTG_ID', 'KTG_NM', 'ID_CODE', 'CODE', 'NAME', 'FUNGSI', 'MSISDN', 'ID_PELANGGAN', 'RESPON_REFF_ID', 'RESPON_NAMA_PELANGGAN', 'RESPON_MESSAGE', 'RESPON_STRUK', 'RESPON_TOKEN', 'CREATE_BY', 'CREATE_AT', 'UPDATE_BY', 'UPDATE_AT','tgllama','tglbaru','username','STORE_NM'], 'safe'],
            [['DENOM', 'HARGA_DASAR', 'MARGIN_FEE_KG', 'MARGIN_FEE_MEMBER', 'HARGA_JUAL', 'PEMBAYARAN', 'RESPON_ADMIN_BANK', 'RESPON_TAGIHAN', 'RESPON_TOTAL_BAYAR'], 'number'],
            
            [['BARU_ID', 'BARU_PERMIT', 'BARU_STATUS'], 'integer'],
            [['BARU_TRANS_ID', 'BARU_TRANS_DATE', 'BARU_TGL', 'BARU_JAM', 'BARU_ACCESS_GROUP', 'BARU_STORE_ID', 'BARU_ID_PRODUK', 'BARU_TYPE_NM', 'BARU_KELOMPOK', 'BARU_KTG_ID', 'BARU_KTG_NM', 'BARU_ID_CODE', 'BARU_CODE', 'BARU_NAME', 'BARU_FUNGSI', 'BARU_MSISDN', 'BARU_ID_PELANGGAN', 'BARU_RESPON_REFF_ID', 'BARU_RESPON_NAMA_PELANGGAN', 'BARU_RESPON_MESSAGE', 'BARU_RESPON_STRUK', 'BARU_RESPON_TOKEN', 'BARU_CREATE_BY', 'BARU_CREATE_AT', 'BARU_UPDATE_BY', 'BARU_UPDATE_AT','tgllama','tglbaru','BARU_username','BARU_STORE_NM'], 'safe'],
            [['BARU_DENOM', 'BARU_HARGA_DASAR', 'BARU_MARGIN_FEE_KG', 'BARU_MARGIN_FEE_MEMBER', 'BARU_HARGA_JUAL', 'BARU_PEMBAYARAN', 'BARU_RESPON_ADMIN_BANK', 'BARU_RESPON_TAGIHAN', 'BARU_RESPON_TOTAL_BAYAR'], 'number'],
            
            [['PENDING_ID', 'PENDING_PERMIT', 'PENDING_STATUS'], 'integer'],
            [['PENDING_TRANS_ID', 'PENDING_TRANS_DATE', 'PENDING_TGL', 'PENDING_JAM', 'PENDING_ACCESS_GROUP', 'PENDING_STORE_ID', 'PENDING_ID_PRODUK', 'PENDING_TYPE_NM', 'PENDING_KELOMPOK', 'PENDING_KTG_ID', 'PENDING_KTG_NM', 'PENDING_ID_CODE', 'PENDING_CODE', 'PENDING_NAME', 'PENDING_FUNGSI', 'PENDING_MSISDN', 'PENDING_ID_PELANGGAN', 'PENDING_RESPON_REFF_ID', 'PENDING_RESPON_NAMA_PELANGGAN', 'PENDING_RESPON_MESSAGE', 'PENDING_RESPON_STRUK', 'PENDING_RESPON_TOKEN', 'PENDING_CREATE_BY', 'PENDING_CREATE_AT', 'PENDING_UPDATE_BY', 'PENDING_UPDATE_AT','tgllama','tglbaru','PENDING_username','PENDING_STORE_NM'], 'safe'],
            [['PENDING_DENOM', 'PENDING_HARGA_DASAR', 'PENDING_MARGIN_FEE_KG', 'PENDING_MARGIN_FEE_MEMBER', 'PENDING_HARGA_JUAL', 'PENDING_PEMBAYARAN', 'PENDING_RESPON_ADMIN_BANK', 'PENDING_RESPON_TAGIHAN', 'PENDING_RESPON_TOTAL_BAYAR'], 'number'],
            
            [['SUCCESS_ID', 'SUCCESS_PERMIT', 'SUCCESS_STATUS'], 'integer'],
            [['SUCCESS_TRANS_ID', 'SUCCESS_TRANS_DATE', 'SUCCESS_TGL', 'SUCCESS_JAM', 'SUCCESS_ACCESS_GROUP', 'SUCCESS_STORE_ID', 'SUCCESS_ID_PRODUK', 'SUCCESS_TYPE_NM', 'SUCCESS_KELOMPOK', 'SUCCESS_KTG_ID', 'SUCCESS_KTG_NM', 'SUCCESS_ID_CODE', 'SUCCESS_CODE', 'SUCCESS_NAME', 'SUCCESS_FUNGSI', 'SUCCESS_MSISDN', 'SUCCESS_ID_PELANGGAN', 'SUCCESS_RESPON_REFF_ID', 'SUCCESS_RESPON_NAMA_PELANGGAN', 'SUCCESS_RESPON_MESSAGE', 'SUCCESS_RESPON_STRUK', 'SUCCESS_RESPON_TOKEN', 'SUCCESS_CREATE_BY', 'SUCCESS_CREATE_AT', 'SUCCESS_UPDATE_BY', 'SUCCESS_UPDATE_AT','tgllama','tglbaru','SUCCESS_username','SUCCESS_STORE_NM'], 'safe'],
            [['SUCCESS_DENOM', 'SUCCESS_HARGA_DASAR', 'SUCCESS_MARGIN_FEE_KG', 'SUCCESS_MARGIN_FEE_MEMBER', 'SUCCESS_HARGA_JUAL', 'SUCCESS_PEMBAYARAN', 'SUCCESS_RESPON_ADMIN_BANK', 'SUCCESS_RESPON_TAGIHAN', 'SUCCESS_RESPON_TOTAL_BAYAR'], 'number'],
            
            [['GAGAL_ID', 'GAGAL_PERMIT', 'GAGAL_STATUS'], 'integer'],
            [['GAGAL_TRANS_ID', 'GAGAL_TRANS_DATE', 'GAGAL_TGL', 'GAGAL_JAM', 'GAGAL_ACCESS_GROUP', 'GAGAL_STORE_ID', 'GAGAL_ID_PRODUK', 'GAGAL_TYPE_NM', 'GAGAL_KELOMPOK', 'GAGAL_KTG_ID', 'GAGAL_KTG_NM', 'GAGAL_ID_CODE', 'GAGAL_CODE', 'GAGAL_NAME', 'GAGAL_FUNGSI', 'GAGAL_MSISDN', 'GAGAL_ID_PELANGGAN', 'GAGAL_RESPON_REFF_ID', 'GAGAL_RESPON_NAMA_PELANGGAN', 'GAGAL_RESPON_MESSAGE', 'GAGAL_RESPON_STRUK', 'GAGAL_RESPON_TOKEN', 'GAGAL_CREATE_BY', 'GAGAL_CREATE_AT', 'GAGAL_UPDATE_BY', 'GAGAL_UPDATE_AT','tgllama','tglbaru','GAGAL_username','GAGAL_STORE_NM'], 'safe'],
            [['GAGAL_DENOM', 'GAGAL_HARGA_DASAR', 'GAGAL_MARGIN_FEE_KG', 'GAGAL_MARGIN_FEE_MEMBER', 'GAGAL_HARGA_JUAL', 'GAGAL_PEMBAYARAN', 'GAGAL_RESPON_ADMIN_BANK', 'GAGAL_RESPON_TAGIHAN', 'GAGAL_RESPON_TOTAL_BAYAR'], 'number'],


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
    public function searchExcelExport($params)
    {
        // print_r($this->ACCESS_GROUP);die();
        if ($this->tgllama!='' && $this->tglbaru!='' && $this->ACCESS_GROUP!='' && $this->STORE_ID!='') {
            $query = "SELECT ID,TRANS_ID,TRANS_DATE,TGL,JAM,ACCESS_GROUP,STORE_ID,ID_PRODUK,TYPE_NM,KELOMPOK,KTG_ID,KTG_NM,ID_CODE,CODE,`NAME`,DENOM,HARGA_DASAR,MARGIN_FEE_KG,MARGIN_FEE_MEMBER,HARGA_JUAL,PERMIT,FUNGSI,MSISDN,ID_PELANGGAN,PEMBAYARAN,RESPON_REFF_ID,RESPON_NAMA_PELANGGAN,RESPON_ADMIN_BANK,RESPON_TAGIHAN,RESPON_TOTAL_BAYAR,RESPON_MESSAGE,RESPON_STRUK,RESPON_TOKEN,STATUS FROM `ppob_transaksi` 
            WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' AND 
            ACCESS_GROUP='".$this->ACCESS_GROUP."' AND 
            STORE_ID='".$this->STORE_ID."'";
        } else {
            $query = "SELECT ID,TRANS_ID,TRANS_DATE,TGL,JAM,ACCESS_GROUP,STORE_ID,ID_PRODUK,TYPE_NM,KELOMPOK,KTG_ID,KTG_NM,ID_CODE,CODE,`NAME`,DENOM,HARGA_DASAR,MARGIN_FEE_KG,MARGIN_FEE_MEMBER,HARGA_JUAL,PERMIT,FUNGSI,MSISDN,ID_PELANGGAN,PEMBAYARAN,RESPON_REFF_ID,RESPON_NAMA_PELANGGAN,RESPON_ADMIN_BANK,RESPON_TAGIHAN,RESPON_TOTAL_BAYAR,RESPON_MESSAGE,RESPON_STRUK,RESPON_TOKEN,STATUS FROM `ppob_transaksi` 
            WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' AND 
            ACCESS_GROUP=(SELECT ACCESS_GROUP FROM ppob_transaksi WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."'  GROUP BY ACCESS_GROUP LIMIT 1) AND 
            STORE_ID=(SELECT STORE_ID FROM ppob_transaksi WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' GROUP BY STORE_ID LIMIT 1)";
        }
        $qrySql= Yii::$app->db->createCommand($query)->queryAll();
        $dataProvider = new ArrayDataProvider([
            'allModels' => $qrySql,
        ]);

        return $dataProvider;
    }
    public function searchExcelExportBaru($params)
    {
        if ($this->tgllama!='' && $this->tglbaru!='' && $this->ACCESS_GROUP!='' && $this->STORE_ID!='') {
            $query = "SELECT ID,TRANS_ID,TRANS_DATE,TGL,JAM,ACCESS_GROUP,STORE_ID,ID_PRODUK,TYPE_NM,KELOMPOK,KTG_ID,KTG_NM,ID_CODE,CODE,`NAME`,DENOM,HARGA_DASAR,MARGIN_FEE_KG,MARGIN_FEE_MEMBER,HARGA_JUAL,PERMIT,FUNGSI,MSISDN,ID_PELANGGAN,PEMBAYARAN,RESPON_REFF_ID,RESPON_NAMA_PELANGGAN,RESPON_ADMIN_BANK,RESPON_TAGIHAN,RESPON_TOTAL_BAYAR,RESPON_MESSAGE,RESPON_STRUK,RESPON_TOKEN,STATUS FROM `ppob_transaksi` 
            WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' AND STATUS='0' AND
            ACCESS_GROUP='".$this->ACCESS_GROUP."' AND 
            STORE_ID='".$this->STORE_ID."'";
        } else {
            $query = "SELECT ID,TRANS_ID,TRANS_DATE,TGL,JAM,ACCESS_GROUP,STORE_ID,ID_PRODUK,TYPE_NM,KELOMPOK,KTG_ID,KTG_NM,ID_CODE,CODE,`NAME`,DENOM,HARGA_DASAR,MARGIN_FEE_KG,MARGIN_FEE_MEMBER,HARGA_JUAL,PERMIT,FUNGSI,MSISDN,ID_PELANGGAN,PEMBAYARAN,RESPON_REFF_ID,RESPON_NAMA_PELANGGAN,RESPON_ADMIN_BANK,RESPON_TAGIHAN,RESPON_TOTAL_BAYAR,RESPON_MESSAGE,RESPON_STRUK,RESPON_TOKEN,STATUS FROM `ppob_transaksi` 
            WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' AND STATUS='0' AND
            ACCESS_GROUP=(SELECT ACCESS_GROUP FROM ppob_transaksi WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."'  GROUP BY ACCESS_GROUP LIMIT 1) AND 
            STORE_ID=(SELECT STORE_ID FROM ppob_transaksi WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' GROUP BY STORE_ID LIMIT 1)";
        }
        $qrySql= Yii::$app->db->createCommand($query)->queryAll();
        $dataProvider = new ArrayDataProvider([
            'allModels' => $qrySql,
        ]);

        return $dataProvider;
    }
    public function searchExcelExportPending($params)
    {
        if ($this->tgllama!='' && $this->tglbaru!='' && $this->ACCESS_GROUP!='' && $this->STORE_ID!='') {
            $query = "SELECT ID,TRANS_ID,TRANS_DATE,TGL,JAM,ACCESS_GROUP,STORE_ID,ID_PRODUK,TYPE_NM,KELOMPOK,KTG_ID,KTG_NM,ID_CODE,CODE,`NAME`,DENOM,HARGA_DASAR,MARGIN_FEE_KG,MARGIN_FEE_MEMBER,HARGA_JUAL,PERMIT,FUNGSI,MSISDN,ID_PELANGGAN,PEMBAYARAN,RESPON_REFF_ID,RESPON_NAMA_PELANGGAN,RESPON_ADMIN_BANK,RESPON_TAGIHAN,RESPON_TOTAL_BAYAR,RESPON_MESSAGE,RESPON_STRUK,RESPON_TOKEN,STATUS FROM `ppob_transaksi` 
            WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' AND STATUS='3' AND
            ACCESS_GROUP='".$this->ACCESS_GROUP."' AND 
            STORE_ID='".$this->STORE_ID."'";
        } else {
            $query = "SELECT ID,TRANS_ID,TRANS_DATE,TGL,JAM,ACCESS_GROUP,STORE_ID,ID_PRODUK,TYPE_NM,KELOMPOK,KTG_ID,KTG_NM,ID_CODE,CODE,`NAME`,DENOM,HARGA_DASAR,MARGIN_FEE_KG,MARGIN_FEE_MEMBER,HARGA_JUAL,PERMIT,FUNGSI,MSISDN,ID_PELANGGAN,PEMBAYARAN,RESPON_REFF_ID,RESPON_NAMA_PELANGGAN,RESPON_ADMIN_BANK,RESPON_TAGIHAN,RESPON_TOTAL_BAYAR,RESPON_MESSAGE,RESPON_STRUK,RESPON_TOKEN,STATUS FROM `ppob_transaksi` 
            WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' AND STATUS='3' AND
            ACCESS_GROUP=(SELECT ACCESS_GROUP FROM ppob_transaksi WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."'  GROUP BY ACCESS_GROUP LIMIT 1) AND 
            STORE_ID=(SELECT STORE_ID FROM ppob_transaksi WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' GROUP BY STORE_ID LIMIT 1)";
        }
        $qrySql= Yii::$app->db->createCommand($query)->queryAll();
        $dataProvider = new ArrayDataProvider([
            'allModels' => $qrySql,
        ]);

        return $dataProvider;
    }
    public function searchExcelExportSuccess($params)
    {
        if ($this->tgllama!='' && $this->tglbaru!='' && $this->ACCESS_GROUP!='' && $this->STORE_ID!='') {
            $query = "SELECT ID,TRANS_ID,TRANS_DATE,TGL,JAM,ACCESS_GROUP,STORE_ID,ID_PRODUK,TYPE_NM,KELOMPOK,KTG_ID,KTG_NM,ID_CODE,CODE,`NAME`,DENOM,HARGA_DASAR,MARGIN_FEE_KG,MARGIN_FEE_MEMBER,HARGA_JUAL,PERMIT,FUNGSI,MSISDN,ID_PELANGGAN,PEMBAYARAN,RESPON_REFF_ID,RESPON_NAMA_PELANGGAN,RESPON_ADMIN_BANK,RESPON_TAGIHAN,RESPON_TOTAL_BAYAR,RESPON_MESSAGE,RESPON_STRUK,RESPON_TOKEN,STATUS FROM `ppob_transaksi` 
            WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' AND STATUS='1' AND
            ACCESS_GROUP='".$this->ACCESS_GROUP."' AND 
            STORE_ID='".$this->STORE_ID."'";
        } else {
            $query = "SELECT ID,TRANS_ID,TRANS_DATE,TGL,JAM,ACCESS_GROUP,STORE_ID,ID_PRODUK,TYPE_NM,KELOMPOK,KTG_ID,KTG_NM,ID_CODE,CODE,`NAME`,DENOM,HARGA_DASAR,MARGIN_FEE_KG,MARGIN_FEE_MEMBER,HARGA_JUAL,PERMIT,FUNGSI,MSISDN,ID_PELANGGAN,PEMBAYARAN,RESPON_REFF_ID,RESPON_NAMA_PELANGGAN,RESPON_ADMIN_BANK,RESPON_TAGIHAN,RESPON_TOTAL_BAYAR,RESPON_MESSAGE,RESPON_STRUK,RESPON_TOKEN,STATUS FROM `ppob_transaksi` 
            WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' AND STATUS='1' AND
            ACCESS_GROUP=(SELECT ACCESS_GROUP FROM ppob_transaksi WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."'  GROUP BY ACCESS_GROUP LIMIT 1) AND 
            STORE_ID=(SELECT STORE_ID FROM ppob_transaksi WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' GROUP BY STORE_ID LIMIT 1)";
        }
        $qrySql= Yii::$app->db->createCommand($query)->queryAll();
        $dataProvider = new ArrayDataProvider([
            'allModels' => $qrySql,
        ]);

        return $dataProvider;
    }
    public function searchExcelExportGagal($params)
    {
        if ($this->tgllama!='' && $this->tglbaru!='' && $this->ACCESS_GROUP!='' && $this->STORE_ID!='') {
            $query = "SELECT ID,TRANS_ID,TRANS_DATE,TGL,JAM,ACCESS_GROUP,STORE_ID,ID_PRODUK,TYPE_NM,KELOMPOK,KTG_ID,KTG_NM,ID_CODE,CODE,`NAME`,DENOM,HARGA_DASAR,MARGIN_FEE_KG,MARGIN_FEE_MEMBER,HARGA_JUAL,PERMIT,FUNGSI,MSISDN,ID_PELANGGAN,PEMBAYARAN,RESPON_REFF_ID,RESPON_NAMA_PELANGGAN,RESPON_ADMIN_BANK,RESPON_TAGIHAN,RESPON_TOTAL_BAYAR,RESPON_MESSAGE,RESPON_STRUK,RESPON_TOKEN,STATUS FROM `ppob_transaksi` 
            WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' AND STATUS='3' AND
            ACCESS_GROUP='".$this->ACCESS_GROUP."' AND 
            STORE_ID='".$this->STORE_ID."'";
        } else {
            $query = "SELECT ID,TRANS_ID,TRANS_DATE,TGL,JAM,ACCESS_GROUP,STORE_ID,ID_PRODUK,TYPE_NM,KELOMPOK,KTG_ID,KTG_NM,ID_CODE,CODE,`NAME`,DENOM,HARGA_DASAR,MARGIN_FEE_KG,MARGIN_FEE_MEMBER,HARGA_JUAL,PERMIT,FUNGSI,MSISDN,ID_PELANGGAN,PEMBAYARAN,RESPON_REFF_ID,RESPON_NAMA_PELANGGAN,RESPON_ADMIN_BANK,RESPON_TAGIHAN,RESPON_TOTAL_BAYAR,RESPON_MESSAGE,RESPON_STRUK,RESPON_TOKEN,STATUS FROM `ppob_transaksi` 
            WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' AND STATUS='3' AND
            ACCESS_GROUP=(SELECT ACCESS_GROUP FROM ppob_transaksi WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."'  GROUP BY ACCESS_GROUP LIMIT 1) AND 
            STORE_ID=(SELECT STORE_ID FROM ppob_transaksi WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' GROUP BY STORE_ID LIMIT 1)";
        }
        $qrySql= Yii::$app->db->createCommand($query)->queryAll();
        $dataProvider = new ArrayDataProvider([
            'allModels' => $qrySql,
        ]);

        return $dataProvider;
    }
    
    public function searchDataSeluruh($params)
    {
       
        if ($this->tgllama!='' && $this->tglbaru!='' && $this->ACCESS_GROUP!='' && $this->STORE_ID!='') {
            $qryStr="SELECT ppob_transaksi.*,user.username,store.STORE_NM FROM `ppob_transaksi` LEFT JOIN user on ppob_transaksi.ACCESS_GROUP=user.ACCESS_GROUP LEFT JOIN store on ppob_transaksi.STORE_ID=store.STORE_ID WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' AND ppob_transaksi.ACCESS_GROUP='".$this->ACCESS_GROUP."' AND ppob_transaksi.STORE_ID='".$this->STORE_ID."';";
        } else {
            $qryStr="SELECT ppob_transaksi.*,user.username,store.STORE_NM FROM `ppob_transaksi` LEFT JOIN user on ppob_transaksi.ACCESS_GROUP=user.ACCESS_GROUP LEFT JOIN store on ppob_transaksi.STORE_ID=store.STORE_ID WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."';";
        }

        $qrySql= Yii::$app->db->createCommand($qryStr)->queryAll();
        $provider = new ArrayDataProvider([
			'allModels' => $qrySql,
			'pagination' => [
				'pageSize' => 20,
			],
		]);		
        
        if (!($this->load($params) && $this->validate())) {
            return $provider;
        }
        
        //return $provider;
        $filter = new Filter();
        $this->addCondition($filter,'ID' , true);
        $this->addCondition($filter,'TRANS_DATE' , true);
        $this->addCondition($filter,'TGL' , true);
        $this->addCondition($filter,'JAM' , true);
        $this->addCondition($filter,'HARGA_DASAR' , true);
        $this->addCondition($filter,'MARGIN_FEE_KG' , true);
        $this->addCondition($filter,'MARGIN_FEE_MEMBER' , true);
        $this->addCondition($filter,'HARGA_JUAL' , true);
        $this->addCondition($filter,'PERMIT' , true);
        $this->addCondition($filter,'PEMBAYARAN' , true);
        $this->addCondition($filter,'RESPON_ADMIN_BANK' , true);
        $this->addCondition($filter,'RESPON_TAGIHAN' , true);
        $this->addCondition($filter,'RESPON_TOTAL_BAYAR', true);
        $this->addCondition($filter,'CREATE_AT' , true);
        $this->addCondition($filter,'UPDATE_AT' , true);
        $this->addCondition($filter, 'TRANS_ID', true);
        $this->addCondition($filter, 'ACCESS_GROUP', true);
        $this->addCondition($filter, 'STORE_ID', true);
        $this->addCondition($filter, 'ID_PRODUK', true);
        $this->addCondition($filter, 'TYPE_NM', true);
        $this->addCondition($filter, 'KELOMPOK', true);
        $this->addCondition($filter, 'KTG_ID',true);
        $this->addCondition($filter, 'KTG_NM', true);
        $this->addCondition($filter, 'ID_CODE', true);
        $this->addCondition($filter, 'NAME', true);
        $this->addCondition($filter, 'FUNGSI', true);
        $this->addCondition($filter, 'MSISDN', true);
        $this->addCondition($filter, 'ID_PELANGGAN', true);
        $this->addCondition($filter, 'RESPON_REFF_ID', true);
        $this->addCondition($filter, 'RESPON_NAMA_PELANGGAN', true);
        $this->addCondition($filter, 'RESPON_MESSAGE', true);
        $this->addCondition($filter, 'RESPON_STRUK', true);
        $this->addCondition($filter, 'RESPON_TOKEN', true);
        $this->addCondition($filter, 'CREATE_BY', true);
        $this->addCondition($filter, 'UPDATE_BY',true);
 		$this->addCondition($filter, 'CODE', true);
 		$this->addCondition($filter, 'DENOM', true);	
 		$this->addCondition($filter, 'STATUS', true);	
 		$provider->allModels = $filter->filter($qrySql);
		
		return $provider;
    }
    public function searchFirst($params)
    {
        if ($this->tgllama!='' && $this->tglbaru!='' && $this->ACCESS_GROUP!='' && $this->STORE_ID!='') {
            $qryStr="SELECT store.STORE_NM AS BARU_STORE_NM,user.username AS BARU_username, ppob_transaksi.ID AS BARU_ID,TRANS_DATE AS BARU_TRANS_DATE,TGL AS BARU_TGL,JAM AS BARU_JAM,HARGA_DASAR AS BARU_HARGA_DASAR,MARGIN_FEE_KG AS BARU_MARGIN_FEE_KG,MARGIN_FEE_MEMBER AS BARU_MARGIN_FEE_MEMBER,HARGA_JUAL AS BARU_HARGA_JUAL,PERMIT AS BARU_PERMIT,PEMBAYARAN AS BARU_PEMBAYARAN,RESPON_ADMIN_BANK AS BARU_RESPON_ADMIN_BANK,RESPON_TAGIHAN AS BARU_RESPON_TAGIHAN,RESPON_TOTAL_BAYAR AS BARU_RESPON_TOTAL_BAYAR,
            ppob_transaksi.CREATE_AT AS BARU_CREATE_AT, ppob_transaksi.UPDATE_AT AS BARU_UPDATE_AT, TRANS_ID AS BARU_TRANS_ID, ppob_transaksi.ACCESS_GROUP AS BARU_ACCESS_GROUP, ppob_transaksi.STORE_ID AS BARU_STORE_ID, ID_PRODUK AS BARU_ID_PRODUK, TYPE_NM AS BARU_TYPE_NM, KELOMPOK AS BARU_KELOMPOK, KTG_ID AS BARU_KTG_ID,
            KTG_NM AS BARU_KTG_NM, ID_CODE AS BARU_ID_CODE, NAME AS BARU_NAME, FUNGSI AS BARU_FUNGSI, MSISDN AS BARU_MSISDN, ID_PELANGGAN AS BARU_ID_PELANGGAN, RESPON_REFF_ID AS BARU_RESPON_REFF_ID, RESPON_NAMA_PELANGGAN AS BARU_RESPON_NAMA_PELANGGAN, RESPON_MESSAGE AS BARU_RESPON_MESSAGE, RESPON_STRUK AS BARU_RESPON_STRUK, RESPON_TOKEN AS BARU_RESPON_TOKEN, ppob_transaksi.CREATE_BY AS BARU_CREATE_BY,
            CODE AS BARU_CODE,DENOM AS BARU_DENOM, ppob_transaksi.STATUS AS BARU_STATUS  FROM `ppob_transaksi` LEFT JOIN user on ppob_transaksi.ACCESS_GROUP=user.ACCESS_GROUP LEFT JOIN store on ppob_transaksi.STORE_ID=store.STORE_ID WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' AND ppob_transaksi.ACCESS_GROUP='".$this->ACCESS_GROUP."' AND ppob_transaksi.STORE_ID='".$this->STORE_ID."' AND ppob_transaksi.STATUS=0 ;";
        } else {
            $qryStr="SELECT store.STORE_NM AS BARU_STORE_NM,user.username AS BARU_username, ppob_transaksi.ID AS BARU_ID,TRANS_DATE AS BARU_TRANS_DATE,TGL AS BARU_TGL,JAM AS BARU_JAM,HARGA_DASAR AS BARU_HARGA_DASAR,MARGIN_FEE_KG AS BARU_MARGIN_FEE_KG,MARGIN_FEE_MEMBER AS BARU_MARGIN_FEE_MEMBER,HARGA_JUAL AS BARU_HARGA_JUAL,PERMIT AS BARU_PERMIT,PEMBAYARAN AS BARU_PEMBAYARAN,RESPON_ADMIN_BANK AS BARU_RESPON_ADMIN_BANK,RESPON_TAGIHAN AS BARU_RESPON_TAGIHAN,RESPON_TOTAL_BAYAR AS BARU_RESPON_TOTAL_BAYAR,
            ppob_transaksi.CREATE_AT AS BARU_CREATE_AT, ppob_transaksi.UPDATE_AT AS BARU_UPDATE_AT, TRANS_ID AS BARU_TRANS_ID, ppob_transaksi.ACCESS_GROUP AS BARU_ACCESS_GROUP, ppob_transaksi.STORE_ID AS BARU_STORE_ID, ID_PRODUK AS BARU_ID_PRODUK, TYPE_NM AS BARU_TYPE_NM, KELOMPOK AS BARU_KELOMPOK, KTG_ID AS BARU_KTG_ID,
            KTG_NM AS BARU_KTG_NM, ID_CODE AS BARU_ID_CODE, NAME AS BARU_NAME, FUNGSI AS BARU_FUNGSI, MSISDN AS BARU_MSISDN, ID_PELANGGAN AS BARU_ID_PELANGGAN, RESPON_REFF_ID AS BARU_RESPON_REFF_ID, RESPON_NAMA_PELANGGAN AS BARU_RESPON_NAMA_PELANGGAN, RESPON_MESSAGE AS BARU_RESPON_MESSAGE, RESPON_STRUK AS BARU_RESPON_STRUK, RESPON_TOKEN AS BARU_RESPON_TOKEN, ppob_transaksi.CREATE_BY AS BARU_CREATE_BY,
            CODE AS BARU_CODE,DENOM AS BARU_DENOM, ppob_transaksi.STATUS AS BARU_STATUS  FROM `ppob_transaksi` LEFT JOIN user on ppob_transaksi.ACCESS_GROUP=user.ACCESS_GROUP LEFT JOIN store on ppob_transaksi.STORE_ID=store.STORE_ID WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' AND ppob_transaksi.STATUS=0 ;";
        }
        $qrySql= Yii::$app->production_api->createCommand($qryStr)->queryAll(); 
		$provider = new ArrayDataProvider([
			'allModels' => $qrySql,
			'pagination' => [
				'pageSize' => 20,
			],
		]);		
        
        if (!($this->load($params) && $this->validate())) {
            return $provider;
        }
        
        //return $provider;
        $filter = new Filter();
        $this->addCondition($filter,'BARU_ID' , true);
        $this->addCondition($filter,'BARU_username' , true);
        $this->addCondition($filter,'BARU_STORE_NM' , true);
        $this->addCondition($filter,'BARU_TRANS_DATE' , true);
        $this->addCondition($filter,'BARU_TGL' , true);
        $this->addCondition($filter,'BARU_JAM' , true);
        $this->addCondition($filter,'BARU_HARGA_DASAR' , true);
        $this->addCondition($filter,'BARU_MARGIN_FEE_KG' , true);
        $this->addCondition($filter,'BARU_MARGIN_FEE_MEMBER' , true);
        $this->addCondition($filter,'BARU_HARGA_JUAL' , true);
        $this->addCondition($filter,'BARU_PERMIT' , true);
        $this->addCondition($filter,'BARU_PEMBAYARAN' , true);
        $this->addCondition($filter,'BARU_RESPON_ADMIN_BANK' , true);
        $this->addCondition($filter,'BARU_RESPON_TAGIHAN' , true);
        $this->addCondition($filter,'BARU_RESPON_TOTAL_BAYAR', true);
        $this->addCondition($filter,'BARU_CREATE_AT' , true);
        $this->addCondition($filter,'BARU_UPDATE_AT' , true);
        $this->addCondition($filter, 'BARU_TRANS_ID', true);
        $this->addCondition($filter, 'BARU_ACCESS_GROUP', true);
        $this->addCondition($filter, 'BARU_STORE_ID', true);
        $this->addCondition($filter, 'BARU_ID_PRODUK', true);
        $this->addCondition($filter, 'BARU_TYPE_NM', true);
        $this->addCondition($filter, 'BARU_KELOMPOK', true);
        $this->addCondition($filter, 'BARU_KTG_ID',true);
        $this->addCondition($filter, 'BARU_KTG_NM', true);
        $this->addCondition($filter, 'BARU_ID_CODE', true);
        $this->addCondition($filter, 'BARU_NAME', true);
        $this->addCondition($filter, 'BARU_FUNGSI', true);
        $this->addCondition($filter, 'BARU_MSISDN', true);
        $this->addCondition($filter, 'BARU_ID_PELANGGAN', true);
        $this->addCondition($filter, 'BARU_RESPON_REFF_ID', true);
        $this->addCondition($filter, 'BARU_RESPON_NAMA_PELANGGAN', true);
        $this->addCondition($filter, 'BARU_RESPON_MESSAGE', true);
        $this->addCondition($filter, 'BARU_RESPON_STRUK', true);
        $this->addCondition($filter, 'BARU_RESPON_TOKEN', true);
        $this->addCondition($filter, 'BARU_CREATE_BY', true);
        $this->addCondition($filter, 'BARU_UPDATE_BY',true);
 		$this->addCondition($filter, 'BARU_CODE', true);
 		$this->addCondition($filter, 'BARU_DENOM', true);	
 		$this->addCondition($filter, 'BARU_STATUS', true);	
 		$provider->allModels = $filter->filter($qrySql);
		
		return $provider;
    }
    public function searchPending($params)
    {
		if ($this->tgllama!='' && $this->tglbaru!='' && $this->ACCESS_GROUP!='' && $this->STORE_ID!='') {
            $qryStr="SELECT store.STORE_NM AS PENDING_STORE_NM,user.username AS PENDING_username, ppob_transaksi.ID AS PENDING_ID,TRANS_DATE AS PENDING_TRANS_DATE,TGL AS PENDING_TGL,JAM AS PENDING_JAM,HARGA_DASAR AS PENDING_HARGA_DASAR,MARGIN_FEE_KG AS PENDING_MARGIN_FEE_KG,MARGIN_FEE_MEMBER AS PENDING_MARGIN_FEE_MEMBER,HARGA_JUAL AS PENDING_HARGA_JUAL,PERMIT AS PENDING_PERMIT,PEMBAYARAN AS PENDING_PEMBAYARAN,RESPON_ADMIN_BANK AS PENDING_RESPON_ADMIN_BANK,RESPON_TAGIHAN AS PENDING_RESPON_TAGIHAN,RESPON_TOTAL_BAYAR AS PENDING_RESPON_TOTAL_BAYAR,
            ppob_transaksi.CREATE_AT AS PENDING_CREATE_AT, ppob_transaksi.UPDATE_AT AS PENDING_UPDATE_AT, TRANS_ID AS PENDING_TRANS_ID, ppob_transaksi.ACCESS_GROUP AS PENDING_ACCESS_GROUP, ppob_transaksi.STORE_ID AS PENDING_STORE_ID, ID_PRODUK AS PENDING_ID_PRODUK, TYPE_NM AS PENDING_TYPE_NM, KELOMPOK AS PENDING_KELOMPOK, KTG_ID AS PENDING_KTG_ID,
            KTG_NM AS PENDING_KTG_NM, ID_CODE AS PENDING_ID_CODE, NAME AS PENDING_NAME, FUNGSI AS PENDING_FUNGSI, MSISDN AS PENDING_MSISDN, ID_PELANGGAN AS PENDING_ID_PELANGGAN, RESPON_REFF_ID AS PENDING_RESPON_REFF_ID, RESPON_NAMA_PELANGGAN AS PENDING_RESPON_NAMA_PELANGGAN, RESPON_MESSAGE AS PENDING_RESPON_MESSAGE, RESPON_STRUK AS PENDING_RESPON_STRUK, RESPON_TOKEN AS PENDING_RESPON_TOKEN, ppob_transaksi.CREATE_BY AS PENDING_CREATE_BY,
            CODE AS PENDING_CODE,DENOM AS PENDING_DENOM, ppob_transaksi.STATUS AS PENDING_STATUS  FROM `ppob_transaksi` LEFT JOIN user on ppob_transaksi.ACCESS_GROUP=user.ACCESS_GROUP LEFT JOIN store on ppob_transaksi.STORE_ID=store.STORE_ID WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' AND ppob_transaksi.ACCESS_GROUP='".$this->ACCESS_GROUP."' AND ppob_transaksi.STORE_ID='".$this->STORE_ID."' AND ppob_transaksi.STATUS=1 ;";
        } else {
            $qryStr="SELECT store.STORE_NM AS PENDING_STORE_NM,user.username AS PENDING_username, ppob_transaksi.ID AS PENDING_ID,TRANS_DATE AS PENDING_TRANS_DATE,TGL AS PENDING_TGL,JAM AS PENDING_JAM,HARGA_DASAR AS PENDING_HARGA_DASAR,MARGIN_FEE_KG AS PENDING_MARGIN_FEE_KG,MARGIN_FEE_MEMBER AS PENDING_MARGIN_FEE_MEMBER,HARGA_JUAL AS PENDING_HARGA_JUAL,PERMIT AS PENDING_PERMIT,PEMBAYARAN AS PENDING_PEMBAYARAN,RESPON_ADMIN_BANK AS PENDING_RESPON_ADMIN_BANK,RESPON_TAGIHAN AS PENDING_RESPON_TAGIHAN,RESPON_TOTAL_BAYAR AS PENDING_RESPON_TOTAL_BAYAR,
            ppob_transaksi.CREATE_AT AS PENDING_CREATE_AT, ppob_transaksi.UPDATE_AT AS PENDING_UPDATE_AT, TRANS_ID AS PENDING_TRANS_ID, ppob_transaksi.ACCESS_GROUP AS PENDING_ACCESS_GROUP, ppob_transaksi.STORE_ID AS PENDING_STORE_ID, ID_PRODUK AS PENDING_ID_PRODUK, TYPE_NM AS PENDING_TYPE_NM, KELOMPOK AS PENDING_KELOMPOK, KTG_ID AS PENDING_KTG_ID,
            KTG_NM AS PENDING_KTG_NM, ID_CODE AS PENDING_ID_CODE, NAME AS PENDING_NAME, FUNGSI AS PENDING_FUNGSI, MSISDN AS PENDING_MSISDN, ID_PELANGGAN AS PENDING_ID_PELANGGAN, RESPON_REFF_ID AS PENDING_RESPON_REFF_ID, RESPON_NAMA_PELANGGAN AS PENDING_RESPON_NAMA_PELANGGAN, RESPON_MESSAGE AS PENDING_RESPON_MESSAGE, RESPON_STRUK AS PENDING_RESPON_STRUK, RESPON_TOKEN AS PENDING_RESPON_TOKEN, ppob_transaksi.CREATE_BY AS PENDING_CREATE_BY,
            CODE AS PENDING_CODE,DENOM AS PENDING_DENOM, ppob_transaksi.STATUS AS PENDING_STATUS  FROM `ppob_transaksi` LEFT JOIN user on ppob_transaksi.ACCESS_GROUP=user.ACCESS_GROUP LEFT JOIN store on ppob_transaksi.STORE_ID=store.STORE_ID WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' AND ppob_transaksi.STATUS=1 ;";
        }
        $qrySql= Yii::$app->production_api->createCommand($qryStr)->queryAll(); 
		$provider = new ArrayDataProvider([
			'allModels' => $qrySql,
			'pagination' => [
				'pageSize' => 20,
			],
		]);		
        
        if (!($this->load($params) && $this->validate())) {
            return $provider;
        }
        
        //return $provider;
        $filter = new Filter();
        $this->addCondition($filter,'PENDING_ID' , true);
        $this->addCondition($filter,'PENDING_username' , true);
        $this->addCondition($filter,'PENDING_STORE_NM' , true);
        $this->addCondition($filter,'PENDING_TRANS_DATE' , true);
        $this->addCondition($filter,'PENDING_TGL' , true);
        $this->addCondition($filter,'PENDING_JAM' , true);
        $this->addCondition($filter,'PENDING_HARGA_DASAR' , true);
        $this->addCondition($filter,'PENDING_MARGIN_FEE_KG' , true);
        $this->addCondition($filter,'PENDING_MARGIN_FEE_MEMBER' , true);
        $this->addCondition($filter,'PENDING_HARGA_JUAL' , true);
        $this->addCondition($filter,'PENDING_PERMIT' , true);
        $this->addCondition($filter,'PENDING_PEMBAYARAN' , true);
        $this->addCondition($filter,'PENDING_RESPON_ADMIN_BANK' , true);
        $this->addCondition($filter,'PENDING_RESPON_TAGIHAN' , true);
        $this->addCondition($filter,'PENDING_RESPON_TOTAL_BAYAR', true);
        $this->addCondition($filter,'PENDING_CREATE_AT' , true);
        $this->addCondition($filter,'PENDING_UPDATE_AT' , true);
        $this->addCondition($filter, 'PENDING_TRANS_ID', true);
        $this->addCondition($filter, 'PENDING_ACCESS_GROUP', true);
        $this->addCondition($filter, 'PENDING_STORE_ID', true);
        $this->addCondition($filter, 'PENDING_ID_PRODUK', true);
        $this->addCondition($filter, 'PENDING_TYPE_NM', true);
        $this->addCondition($filter, 'PENDING_KELOMPOK', true);
        $this->addCondition($filter, 'PENDING_KTG_ID',true);
        $this->addCondition($filter, 'PENDING_KTG_NM', true);
        $this->addCondition($filter, 'PENDING_ID_CODE', true);
        $this->addCondition($filter, 'PENDING_NAME', true);
        $this->addCondition($filter, 'PENDING_FUNGSI', true);
        $this->addCondition($filter, 'PENDING_MSISDN', true);
        $this->addCondition($filter, 'PENDING_ID_PELANGGAN', true);
        $this->addCondition($filter, 'PENDING_RESPON_REFF_ID', true);
        $this->addCondition($filter, 'PENDING_RESPON_NAMA_PELANGGAN', true);
        $this->addCondition($filter, 'PENDING_RESPON_MESSAGE', true);
        $this->addCondition($filter, 'PENDING_RESPON_STRUK', true);
        $this->addCondition($filter, 'PENDING_RESPON_TOKEN', true);
        $this->addCondition($filter, 'PENDING_CREATE_BY', true);
        $this->addCondition($filter, 'PENDING_UPDATE_BY',true);
 		$this->addCondition($filter, 'PENDING_CODE', true);
 		$this->addCondition($filter, 'PENDING_DENOM', true);	
 		$this->addCondition($filter, 'PENDING_STATUS', true);	
 		$provider->allModels = $filter->filter($qrySql);
		
		return $provider;
    }
    public function searchSuccess($params)
    {
		if ($this->tgllama!='' && $this->tglbaru!='' && $this->ACCESS_GROUP!='' && $this->STORE_ID!='') {
            $qryStr="SELECT store.STORE_NM AS SUCCESS_STORE_NM,user.username AS SUCCESS_username, ppob_transaksi.ID AS SUCCESS_ID,TRANS_DATE AS SUCCESS_TRANS_DATE,TGL AS SUCCESS_TGL,JAM AS SUCCESS_JAM,HARGA_DASAR AS SUCCESS_HARGA_DASAR,MARGIN_FEE_KG AS SUCCESS_MARGIN_FEE_KG,MARGIN_FEE_MEMBER AS SUCCESS_MARGIN_FEE_MEMBER,HARGA_JUAL AS SUCCESS_HARGA_JUAL,PERMIT AS SUCCESS_PERMIT,PEMBAYARAN AS SUCCESS_PEMBAYARAN,RESPON_ADMIN_BANK AS SUCCESS_RESPON_ADMIN_BANK,RESPON_TAGIHAN AS SUCCESS_RESPON_TAGIHAN,RESPON_TOTAL_BAYAR AS SUCCESS_RESPON_TOTAL_BAYAR,
            ppob_transaksi.CREATE_AT AS SUCCESS_CREATE_AT, ppob_transaksi.UPDATE_AT AS SUCCESS_UPDATE_AT, TRANS_ID AS SUCCESS_TRANS_ID, ppob_transaksi.ACCESS_GROUP AS SUCCESS_ACCESS_GROUP, ppob_transaksi.STORE_ID AS SUCCESS_STORE_ID, ID_PRODUK AS SUCCESS_ID_PRODUK, TYPE_NM AS SUCCESS_TYPE_NM, KELOMPOK AS SUCCESS_KELOMPOK, KTG_ID AS SUCCESS_KTG_ID,
            KTG_NM AS SUCCESS_KTG_NM, ID_CODE AS SUCCESS_ID_CODE, NAME AS SUCCESS_NAME, FUNGSI AS SUCCESS_FUNGSI, MSISDN AS SUCCESS_MSISDN, ID_PELANGGAN AS SUCCESS_ID_PELANGGAN, RESPON_REFF_ID AS SUCCESS_RESPON_REFF_ID, RESPON_NAMA_PELANGGAN AS SUCCESS_RESPON_NAMA_PELANGGAN, RESPON_MESSAGE AS SUCCESS_RESPON_MESSAGE, RESPON_STRUK AS SUCCESS_RESPON_STRUK, RESPON_TOKEN AS SUCCESS_RESPON_TOKEN, ppob_transaksi.CREATE_BY AS SUCCESS_CREATE_BY,
            CODE AS SUCCESS_CODE,DENOM AS SUCCESS_DENOM, ppob_transaksi.STATUS AS SUCCESS_STATUS  FROM `ppob_transaksi` LEFT JOIN user on ppob_transaksi.ACCESS_GROUP=user.ACCESS_GROUP LEFT JOIN store on ppob_transaksi.STORE_ID=store.STORE_ID WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' AND ppob_transaksi.ACCESS_GROUP='".$this->ACCESS_GROUP."' AND ppob_transaksi.STORE_ID='".$this->STORE_ID."' AND ppob_transaksi.STATUS=2 ;";
        } else {
            $qryStr="SELECT store.STORE_NM AS SUCCESS_STORE_NM,user.username AS SUCCESS_username, ppob_transaksi.ID AS SUCCESS_ID,TRANS_DATE AS SUCCESS_TRANS_DATE,TGL AS SUCCESS_TGL,JAM AS SUCCESS_JAM,HARGA_DASAR AS SUCCESS_HARGA_DASAR,MARGIN_FEE_KG AS SUCCESS_MARGIN_FEE_KG,MARGIN_FEE_MEMBER AS SUCCESS_MARGIN_FEE_MEMBER,HARGA_JUAL AS SUCCESS_HARGA_JUAL,PERMIT AS SUCCESS_PERMIT,PEMBAYARAN AS SUCCESS_PEMBAYARAN,RESPON_ADMIN_BANK AS SUCCESS_RESPON_ADMIN_BANK,RESPON_TAGIHAN AS SUCCESS_RESPON_TAGIHAN,RESPON_TOTAL_BAYAR AS SUCCESS_RESPON_TOTAL_BAYAR,
            ppob_transaksi.CREATE_AT AS SUCCESS_CREATE_AT, ppob_transaksi.UPDATE_AT AS SUCCESS_UPDATE_AT, TRANS_ID AS SUCCESS_TRANS_ID, ppob_transaksi.ACCESS_GROUP AS SUCCESS_ACCESS_GROUP, ppob_transaksi.STORE_ID AS SUCCESS_STORE_ID, ID_PRODUK AS SUCCESS_ID_PRODUK, TYPE_NM AS SUCCESS_TYPE_NM, KELOMPOK AS SUCCESS_KELOMPOK, KTG_ID AS SUCCESS_KTG_ID,
            KTG_NM AS SUCCESS_KTG_NM, ID_CODE AS SUCCESS_ID_CODE, NAME AS SUCCESS_NAME, FUNGSI AS SUCCESS_FUNGSI, MSISDN AS SUCCESS_MSISDN, ID_PELANGGAN AS SUCCESS_ID_PELANGGAN, RESPON_REFF_ID AS SUCCESS_RESPON_REFF_ID, RESPON_NAMA_PELANGGAN AS SUCCESS_RESPON_NAMA_PELANGGAN, RESPON_MESSAGE AS SUCCESS_RESPON_MESSAGE, RESPON_STRUK AS SUCCESS_RESPON_STRUK, RESPON_TOKEN AS SUCCESS_RESPON_TOKEN, ppob_transaksi.CREATE_BY AS SUCCESS_CREATE_BY,
            CODE AS SUCCESS_CODE,DENOM AS SUCCESS_DENOM, ppob_transaksi.STATUS AS SUCCESS_STATUS  FROM `ppob_transaksi` LEFT JOIN user on ppob_transaksi.ACCESS_GROUP=user.ACCESS_GROUP LEFT JOIN store on ppob_transaksi.STORE_ID=store.STORE_ID WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' AND ppob_transaksi.STATUS=2 ;";
        }
        $qrySql= Yii::$app->production_api->createCommand($qryStr)->queryAll(); 
		$provider = new ArrayDataProvider([
			'allModels' => $qrySql,
			'pagination' => [
				'pageSize' => 20,
			],
		]);		
        
        if (!($this->load($params) && $this->validate())) {
            return $provider;
        }
        
        //return $provider;
        $filter = new Filter();
        $this->addCondition($filter,'SUCCESS_ID' , true);
        $this->addCondition($filter,'SUCCESS_username' , true);
        $this->addCondition($filter,'SUCCESS_STORE_NM' , true);
        $this->addCondition($filter,'SUCCESS_TRANS_DATE' , true);
        $this->addCondition($filter,'SUCCESS_TGL' , true);
        $this->addCondition($filter,'SUCCESS_JAM' , true);
        $this->addCondition($filter,'SUCCESS_HARGA_DASAR' , true);
        $this->addCondition($filter,'SUCCESS_MARGIN_FEE_KG' , true);
        $this->addCondition($filter,'SUCCESS_MARGIN_FEE_MEMBER' , true);
        $this->addCondition($filter,'SUCCESS_HARGA_JUAL' , true);
        $this->addCondition($filter,'SUCCESS_PERMIT' , true);
        $this->addCondition($filter,'SUCCESS_PEMBAYARAN' , true);
        $this->addCondition($filter,'SUCCESS_RESPON_ADMIN_BANK' , true);
        $this->addCondition($filter,'SUCCESS_RESPON_TAGIHAN' , true);
        $this->addCondition($filter,'SUCCESS_RESPON_TOTAL_BAYAR', true);
        $this->addCondition($filter,'SUCCESS_CREATE_AT' , true);
        $this->addCondition($filter,'SUCCESS_UPDATE_AT' , true);
        $this->addCondition($filter, 'SUCCESS_TRANS_ID', true);
        $this->addCondition($filter, 'SUCCESS_ACCESS_GROUP', true);
        $this->addCondition($filter, 'SUCCESS_STORE_ID', true);
        $this->addCondition($filter, 'SUCCESS_ID_PRODUK', true);
        $this->addCondition($filter, 'SUCCESS_TYPE_NM', true);
        $this->addCondition($filter, 'SUCCESS_KELOMPOK', true);
        $this->addCondition($filter, 'SUCCESS_KTG_ID',true);
        $this->addCondition($filter, 'SUCCESS_KTG_NM', true);
        $this->addCondition($filter, 'SUCCESS_ID_CODE', true);
        $this->addCondition($filter, 'SUCCESS_NAME', true);
        $this->addCondition($filter, 'SUCCESS_FUNGSI', true);
        $this->addCondition($filter, 'SUCCESS_MSISDN', true);
        $this->addCondition($filter, 'SUCCESS_ID_PELANGGAN', true);
        $this->addCondition($filter, 'SUCCESS_RESPON_REFF_ID', true);
        $this->addCondition($filter, 'SUCCESS_RESPON_NAMA_PELANGGAN', true);
        $this->addCondition($filter, 'SUCCESS_RESPON_MESSAGE', true);
        $this->addCondition($filter, 'SUCCESS_RESPON_STRUK', true);
        $this->addCondition($filter, 'SUCCESS_RESPON_TOKEN', true);
        $this->addCondition($filter, 'SUCCESS_CREATE_BY', true);
        $this->addCondition($filter, 'SUCCESS_UPDATE_BY',true);
 		$this->addCondition($filter, 'SUCCESS_CODE', true);
 		$this->addCondition($filter, 'SUCCESS_DENOM', true);	
 		$this->addCondition($filter, 'SUCCESS_STATUS', true);	
 		$provider->allModels = $filter->filter($qrySql);
		
		return $provider;
    }
    public function searchGagal($params)
    {
		if ($this->tgllama!='' && $this->tglbaru!='' && $this->ACCESS_GROUP!='' && $this->STORE_ID!='') {
            $qryStr="SELECT store.STORE_NM AS GAGAL_STORE_NM,user.username AS GAGAL_username, ppob_transaksi.ID AS GAGAL_ID,TRANS_DATE AS GAGAL_TRANS_DATE,TGL AS GAGAL_TGL,JAM AS GAGAL_JAM,HARGA_DASAR AS GAGAL_HARGA_DASAR,MARGIN_FEE_KG AS GAGAL_MARGIN_FEE_KG,MARGIN_FEE_MEMBER AS GAGAL_MARGIN_FEE_MEMBER,HARGA_JUAL AS GAGAL_HARGA_JUAL,PERMIT AS GAGAL_PERMIT,PEMBAYARAN AS GAGAL_PEMBAYARAN,RESPON_ADMIN_BANK AS GAGAL_RESPON_ADMIN_BANK,RESPON_TAGIHAN AS GAGAL_RESPON_TAGIHAN,RESPON_TOTAL_BAYAR AS GAGAL_RESPON_TOTAL_BAYAR,
            ppob_transaksi.CREATE_AT AS GAGAL_CREATE_AT, ppob_transaksi.UPDATE_AT AS GAGAL_UPDATE_AT, TRANS_ID AS GAGAL_TRANS_ID, ppob_transaksi.ACCESS_GROUP AS GAGAL_ACCESS_GROUP, ppob_transaksi.STORE_ID AS GAGAL_STORE_ID, ID_PRODUK AS GAGAL_ID_PRODUK, TYPE_NM AS GAGAL_TYPE_NM, KELOMPOK AS GAGAL_KELOMPOK, KTG_ID AS GAGAL_KTG_ID,
            KTG_NM AS GAGAL_KTG_NM, ID_CODE AS GAGAL_ID_CODE, NAME AS GAGAL_NAME, FUNGSI AS GAGAL_FUNGSI, MSISDN AS GAGAL_MSISDN, ID_PELANGGAN AS GAGAL_ID_PELANGGAN, RESPON_REFF_ID AS GAGAL_RESPON_REFF_ID, RESPON_NAMA_PELANGGAN AS GAGAL_RESPON_NAMA_PELANGGAN, RESPON_MESSAGE AS GAGAL_RESPON_MESSAGE, RESPON_STRUK AS GAGAL_RESPON_STRUK, RESPON_TOKEN AS GAGAL_RESPON_TOKEN, ppob_transaksi.CREATE_BY AS GAGAL_CREATE_BY,
            CODE AS GAGAL_CODE,DENOM AS GAGAL_DENOM, ppob_transaksi.STATUS AS GAGAL_STATUS  FROM `ppob_transaksi` LEFT JOIN user on ppob_transaksi.ACCESS_GROUP=user.ACCESS_GROUP LEFT JOIN store on ppob_transaksi.STORE_ID=store.STORE_ID WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' AND ppob_transaksi.ACCESS_GROUP='".$this->ACCESS_GROUP."' AND ppob_transaksi.STORE_ID='".$this->STORE_ID."' AND ppob_transaksi.STATUS=3 ;";
        } else {
            $qryStr="SELECT store.STORE_NM AS GAGAL_STORE_NM,user.username AS GAGAL_username, ppob_transaksi.ID AS GAGAL_ID,TRANS_DATE AS GAGAL_TRANS_DATE,TGL AS GAGAL_TGL,JAM AS GAGAL_JAM,HARGA_DASAR AS GAGAL_HARGA_DASAR,MARGIN_FEE_KG AS GAGAL_MARGIN_FEE_KG,MARGIN_FEE_MEMBER AS GAGAL_MARGIN_FEE_MEMBER,HARGA_JUAL AS GAGAL_HARGA_JUAL,PERMIT AS GAGAL_PERMIT,PEMBAYARAN AS GAGAL_PEMBAYARAN,RESPON_ADMIN_BANK AS GAGAL_RESPON_ADMIN_BANK,RESPON_TAGIHAN AS GAGAL_RESPON_TAGIHAN,RESPON_TOTAL_BAYAR AS GAGAL_RESPON_TOTAL_BAYAR,
            ppob_transaksi.CREATE_AT AS GAGAL_CREATE_AT, ppob_transaksi.UPDATE_AT AS GAGAL_UPDATE_AT, TRANS_ID AS GAGAL_TRANS_ID, ppob_transaksi.ACCESS_GROUP AS GAGAL_ACCESS_GROUP, ppob_transaksi.STORE_ID AS GAGAL_STORE_ID, ID_PRODUK AS GAGAL_ID_PRODUK, TYPE_NM AS GAGAL_TYPE_NM, KELOMPOK AS GAGAL_KELOMPOK, KTG_ID AS GAGAL_KTG_ID,
            KTG_NM AS GAGAL_KTG_NM, ID_CODE AS GAGAL_ID_CODE, NAME AS GAGAL_NAME, FUNGSI AS GAGAL_FUNGSI, MSISDN AS GAGAL_MSISDN, ID_PELANGGAN AS GAGAL_ID_PELANGGAN, RESPON_REFF_ID AS GAGAL_RESPON_REFF_ID, RESPON_NAMA_PELANGGAN AS GAGAL_RESPON_NAMA_PELANGGAN, RESPON_MESSAGE AS GAGAL_RESPON_MESSAGE, RESPON_STRUK AS GAGAL_RESPON_STRUK, RESPON_TOKEN AS GAGAL_RESPON_TOKEN, ppob_transaksi.CREATE_BY AS GAGAL_CREATE_BY,
            CODE AS GAGAL_CODE,DENOM AS GAGAL_DENOM, ppob_transaksi.STATUS AS GAGAL_STATUS  FROM `ppob_transaksi` LEFT JOIN user on ppob_transaksi.ACCESS_GROUP=user.ACCESS_GROUP LEFT JOIN store on ppob_transaksi.STORE_ID=store.STORE_ID WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' AND ppob_transaksi.STATUS=3 ;";
        }
        $qrySql= Yii::$app->production_api->createCommand($qryStr)->queryAll(); 
		$provider = new ArrayDataProvider([
			'allModels' => $qrySql,
			'pagination' => [
				'pageSize' => 20,
			],
		]);		
        
        if (!($this->load($params) && $this->validate())) {
            return $provider;
        }
        
        //return $provider;
        $filter = new Filter();
        $this->addCondition($filter,'GAGAL_ID' , true);
        $this->addCondition($filter,'GAGAL_username' , true);
        $this->addCondition($filter,'GAGAL_STORE_NM' , true);
        $this->addCondition($filter,'GAGAL_TRANS_DATE' , true);
        $this->addCondition($filter,'GAGAL_TGL' , true);
        $this->addCondition($filter,'GAGAL_JAM' , true);
        $this->addCondition($filter,'GAGAL_HARGA_DASAR' , true);
        $this->addCondition($filter,'GAGAL_MARGIN_FEE_KG' , true);
        $this->addCondition($filter,'GAGAL_MARGIN_FEE_MEMBER' , true);
        $this->addCondition($filter,'GAGAL_HARGA_JUAL' , true);
        $this->addCondition($filter,'GAGAL_PERMIT' , true);
        $this->addCondition($filter,'GAGAL_PEMBAYARAN' , true);
        $this->addCondition($filter,'GAGAL_RESPON_ADMIN_BANK' , true);
        $this->addCondition($filter,'GAGAL_RESPON_TAGIHAN' , true);
        $this->addCondition($filter,'GAGAL_RESPON_TOTAL_BAYAR', true);
        $this->addCondition($filter,'GAGAL_CREATE_AT' , true);
        $this->addCondition($filter,'GAGAL_UPDATE_AT' , true);
        $this->addCondition($filter, 'GAGAL_TRANS_ID', true);
        $this->addCondition($filter, 'GAGAL_ACCESS_GROUP', true);
        $this->addCondition($filter, 'GAGAL_STORE_ID', true);
        $this->addCondition($filter, 'GAGAL_ID_PRODUK', true);
        $this->addCondition($filter, 'GAGAL_TYPE_NM', true);
        $this->addCondition($filter, 'GAGAL_KELOMPOK', true);
        $this->addCondition($filter, 'GAGAL_KTG_ID',true);
        $this->addCondition($filter, 'GAGAL_KTG_NM', true);
        $this->addCondition($filter, 'GAGAL_ID_CODE', true);
        $this->addCondition($filter, 'GAGAL_NAME', true);
        $this->addCondition($filter, 'GAGAL_FUNGSI', true);
        $this->addCondition($filter, 'GAGAL_MSISDN', true);
        $this->addCondition($filter, 'GAGAL_ID_PELANGGAN', true);
        $this->addCondition($filter, 'GAGAL_RESPON_REFF_ID', true);
        $this->addCondition($filter, 'GAGAL_RESPON_NAMA_PELANGGAN', true);
        $this->addCondition($filter, 'GAGAL_RESPON_MESSAGE', true);
        $this->addCondition($filter, 'GAGAL_RESPON_STRUK', true);
        $this->addCondition($filter, 'GAGAL_RESPON_TOKEN', true);
        $this->addCondition($filter, 'GAGAL_CREATE_BY', true);
        $this->addCondition($filter, 'GAGAL_UPDATE_BY',true);
 		$this->addCondition($filter, 'GAGAL_CODE', true);
 		$this->addCondition($filter, 'GAGAL_DENOM', true);	
 		$this->addCondition($filter, 'GAGAL_STATUS', true);	
 		$provider->allModels = $filter->filter($qrySql);
		
		return $provider;
    }
    
    public function addCondition(Filter $filter, $attribute, $partial = false)
    {
        $value = $this->$attribute;

        if (mb_strpos($value, '>') !== false) {
            $value = intval(str_replace('>', '', $value));
            $filter->addMatcher($attribute, new matchers\GreaterThan(['value' => $value]));

        } elseif (mb_strpos($value, '<') !== false) {
            $value = intval(str_replace('<', '', $value));
            $filter->addMatcher($attribute, new matchers\LowerThan(['value' => $value]));
        } else {
            $filter->addMatcher($attribute, new matchers\SameAs(['value' => $value, 'partial' => $partial]));
        }
    }
}
