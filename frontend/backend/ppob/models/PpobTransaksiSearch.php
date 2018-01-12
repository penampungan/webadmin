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
	// public $TAHUN;
	// public $BULAN;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'PERMIT', 'STATUS'], 'integer'],
            [['TRANS_ID', 'TRANS_DATE', 'TGL', 'JAM', 'ACCESS_GROUP', 'STORE_ID', 'ID_PRODUK', 'TYPE_NM', 'KELOMPOK', 'KTG_ID', 'KTG_NM', 'ID_CODE', 'CODE', 'NAME', 'FUNGSI', 'MSISDN', 'ID_PELANGGAN', 'RESPON_REFF_ID', 'RESPON_NAMA_PELANGGAN', 'RESPON_MESSAGE', 'RESPON_STRUK', 'RESPON_TOKEN', 'CREATE_BY', 'CREATE_AT', 'UPDATE_BY', 'UPDATE_AT','tgllama','tglbaru'], 'safe'],
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
    public function searchExcelExport($params)
    {
        $query = "SELECT ID,TRANS_ID,TRANS_DATE,TGL,JAM,ACCESS_GROUP,STORE_ID,ID_PRODUK,TYPE_NM,KELOMPOK,KTG_ID,KTG_NM,ID_CODE,CODE,`NAME`,DENOM,HARGA_DASAR,MARGIN_FEE_KG,MARGIN_FEE_MEMBER,HARGA_JUAL,PERMIT,FUNGSI,MSISDN,ID_PELANGGAN,PEMBAYARAN,RESPON_REFF_ID,RESPON_NAMA_PELANGGAN,RESPON_ADMIN_BANK,RESPON_TAGIHAN,RESPON_TOTAL_BAYAR,RESPON_MESSAGE,RESPON_STRUK,RESPON_TOKEN,STATUS FROM `ppob_transaksi` 
        WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' AND 
        ACCESS_GROUP=(SELECT ACCESS_GROUP FROM ppob_transaksi WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."'  GROUP BY ACCESS_GROUP LIMIT 1) AND 
        STORE_ID=(SELECT STORE_ID FROM ppob_transaksi WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' GROUP BY STORE_ID LIMIT 1)";
        $qrySql= Yii::$app->db->createCommand($query)->queryAll();

        $dataProvider = new ArrayDataProvider([
            'allModels' => $qrySql,
        ]);

        return $dataProvider;
    }
    public function searchExcelExportBaru($params)
    {
        $query = "SELECT ID,TRANS_ID,TRANS_DATE,TGL,JAM,ACCESS_GROUP,STORE_ID,ID_PRODUK,TYPE_NM,KELOMPOK,KTG_ID,KTG_NM,ID_CODE,CODE,`NAME`,DENOM,HARGA_DASAR,MARGIN_FEE_KG,MARGIN_FEE_MEMBER,HARGA_JUAL,PERMIT,FUNGSI,MSISDN,ID_PELANGGAN,PEMBAYARAN,RESPON_REFF_ID,RESPON_NAMA_PELANGGAN,RESPON_ADMIN_BANK,RESPON_TAGIHAN,RESPON_TOTAL_BAYAR,RESPON_MESSAGE,RESPON_STRUK,RESPON_TOKEN,STATUS FROM `ppob_transaksi` 
        WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' AND STATUS=0 AND 
        ACCESS_GROUP=(SELECT ACCESS_GROUP FROM ppob_transaksi WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' AND STATUS=0 GROUP BY ACCESS_GROUP LIMIT 1) AND 
        STORE_ID=(SELECT STORE_ID FROM ppob_transaksi WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' AND STATUS=0 GROUP BY STORE_ID LIMIT 1)";
        $qrySql= Yii::$app->db->createCommand($query)->queryAll();

        $dataProvider = new ArrayDataProvider([
            'allModels' => $qrySql,
        ]);

        return $dataProvider;
    }
    public function searchExcelExportPending($params)
    {
        $query = "SELECT ID,TRANS_ID,TRANS_DATE,TGL,JAM,ACCESS_GROUP,STORE_ID,ID_PRODUK,TYPE_NM,KELOMPOK,KTG_ID,KTG_NM,ID_CODE,CODE,`NAME`,DENOM,HARGA_DASAR,MARGIN_FEE_KG,MARGIN_FEE_MEMBER,HARGA_JUAL,PERMIT,FUNGSI,MSISDN,ID_PELANGGAN,PEMBAYARAN,RESPON_REFF_ID,RESPON_NAMA_PELANGGAN,RESPON_ADMIN_BANK,RESPON_TAGIHAN,RESPON_TOTAL_BAYAR,RESPON_MESSAGE,RESPON_STRUK,RESPON_TOKEN,STATUS FROM `ppob_transaksi`
        WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' AND STATUS=1 AND 
        ACCESS_GROUP=(SELECT ACCESS_GROUP FROM ppob_transaksi WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' AND STATUS=1 GROUP BY ACCESS_GROUP LIMIT 1) AND 
        STORE_ID=(SELECT STORE_ID FROM ppob_transaksi WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' AND STATUS=1 GROUP BY STORE_ID LIMIT 1)";
        $qrySql= Yii::$app->db->createCommand($query)->queryAll();

        $dataProvider = new ArrayDataProvider([
            'allModels' => $qrySql,
        ]);

        return $dataProvider;
    }
    public function searchExcelExportSuccess($params)
    {
        $query = "SELECT ID,TRANS_ID,TRANS_DATE,TGL,JAM,ACCESS_GROUP,STORE_ID,ID_PRODUK,TYPE_NM,KELOMPOK,KTG_ID,KTG_NM,ID_CODE,CODE,`NAME`,DENOM,HARGA_DASAR,MARGIN_FEE_KG,MARGIN_FEE_MEMBER,HARGA_JUAL,PERMIT,FUNGSI,MSISDN,ID_PELANGGAN,PEMBAYARAN,RESPON_REFF_ID,RESPON_NAMA_PELANGGAN,RESPON_ADMIN_BANK,RESPON_TAGIHAN,RESPON_TOTAL_BAYAR,RESPON_MESSAGE,RESPON_STRUK,RESPON_TOKEN,STATUS FROM `ppob_transaksi` 
        WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' AND STATUS=2 AND 
        ACCESS_GROUP=(SELECT ACCESS_GROUP FROM ppob_transaksi WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' AND STATUS=1 GROUP BY ACCESS_GROUP LIMIT 1) AND 
        STORE_ID=(SELECT STORE_ID FROM ppob_transaksi WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' AND STATUS=2 GROUP BY STORE_ID LIMIT 1)";
        $qrySql= Yii::$app->db->createCommand($query)->queryAll();

        $dataProvider = new ArrayDataProvider([
            'allModels' => $qrySql,
        ]);

        return $dataProvider;
    }
    public function searchExcelExportGagal($params)
    {
        $query = "SELECT ID,TRANS_ID,TRANS_DATE,TGL,JAM,ACCESS_GROUP,STORE_ID,ID_PRODUK,TYPE_NM,KELOMPOK,KTG_ID,KTG_NM,ID_CODE,CODE,`NAME`,DENOM,HARGA_DASAR,MARGIN_FEE_KG,MARGIN_FEE_MEMBER,HARGA_JUAL,PERMIT,FUNGSI,MSISDN,ID_PELANGGAN,PEMBAYARAN,RESPON_REFF_ID,RESPON_NAMA_PELANGGAN,RESPON_ADMIN_BANK,RESPON_TAGIHAN,RESPON_TOTAL_BAYAR,RESPON_MESSAGE,RESPON_STRUK,RESPON_TOKEN,STATUS FROM `ppob_transaksi` 
        WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' AND STATUS=3 AND 
        ACCESS_GROUP=(SELECT ACCESS_GROUP FROM ppob_transaksi WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' AND STATUS=3 GROUP BY ACCESS_GROUP LIMIT 1) AND 
        STORE_ID=(SELECT STORE_ID FROM ppob_transaksi WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' AND STATUS=3 GROUP BY STORE_ID LIMIT 1)";
        $qrySql= Yii::$app->db->createCommand($query)->queryAll();

        $dataProvider = new ArrayDataProvider([
            'allModels' => $qrySql,
        ]);

        return $dataProvider;
    }
    
    public function searchDataSeluruh($params)
    {
		$qryStr="SELECT * FROM `ppob_transaksi` WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' AND 
        ACCESS_GROUP=(SELECT ACCESS_GROUP FROM ppob_transaksi WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."'  GROUP BY ACCESS_GROUP LIMIT 1) AND 
        STORE_ID=(SELECT STORE_ID FROM ppob_transaksi WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' GROUP BY STORE_ID LIMIT 1)";
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
		$qryStr="SELECT * FROM `ppob_transaksi` WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' AND STATUS=0 ;";
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
    public function searchPending($params)
    {
		$qryStr="SELECT * FROM `ppob_transaksi` WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' AND STATUS=1 ;";
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
    public function searchSuccess($params)
    {
		$qryStr="SELECT * FROM `ppob_transaksi` WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' AND STATUS=2 ;";
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
    public function searchGagal($params)
    {
		$qryStr="SELECT * FROM `ppob_transaksi` WHERE TGL BETWEEN '".$this->tgllama."' AND '".$this->tglbaru."' AND STATUS=3 ;";
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
