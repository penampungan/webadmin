<?php

namespace frontend\backend\ppob\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\backend\ppob\models\PpobMasterHarga;

/**
 * PpobMasterHargaSearch represents the model behind the search form of `frontend\backend\ppob\models\PpobMasterHarga`.
 */
class PpobMasterHargaSearch extends PpobMasterHarga
{
    public $typeNm;
    public $klp;
    public $ktgNm;
    public $cde;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_PRODUK', 'TYPE_NM','klp', 'KELOMPOK', 'KTG_ID', 'ktgNm','KTG_NM','typeNm','ID_CODE','cde', 'CODE', 'NAME', 'TGL_AKTIF', 'FUNGSI', 'KETERANGAN', 'CREATE_BY', 'CREATE_AT', 'UPDATE_BY', 'UPDATE_AT'], 'safe'],
            [['DENOM', 'HARGA_BARU', 'HARGA_DASAR', 'MARGIN_FEE_KG', 'MARGIN_FEE_MEMBER', 'HARGA_JUAL'], 'number'],
            [['PERMIT', 'STATUS'], 'integer'],
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
        $query = PpobMasterHarga::find();

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
            'DENOM' => $this->DENOM,
            'HARGA_BARU' => $this->HARGA_BARU,
            'TGL_AKTIF' => $this->TGL_AKTIF,
            'HARGA_DASAR' => $this->HARGA_DASAR,
            'MARGIN_FEE_KG' => $this->MARGIN_FEE_KG,
            'MARGIN_FEE_MEMBER' => $this->MARGIN_FEE_MEMBER,
            'HARGA_JUAL' => $this->HARGA_JUAL,
            'PERMIT' => $this->PERMIT,
            'STATUS' => $this->STATUS,
            'CREATE_AT' => $this->CREATE_AT,
            'UPDATE_AT' => $this->UPDATE_AT,
        ]);

        $query->andFilterWhere(['like', 'ID_PRODUK', $this->ID_PRODUK])
            ->andFilterWhere(['like', 'TYPE_NM', $this->TYPE_NM])
            ->andFilterWhere(['like', 'KELOMPOK', $this->klp])
            ->andFilterWhere(['like', 'KTG_ID', $this->KTG_ID])
            ->andFilterWhere(['like', 'KTG_NM', $this->KTG_NM])
            ->andFilterWhere(['like', 'ID_CODE', $this->ID_CODE])
            ->andFilterWhere(['like', 'CODE', $this->CODE])
            ->andFilterWhere(['like', 'NAME', $this->NAME])
            ->andFilterWhere(['like', 'FUNGSI', $this->FUNGSI])
            ->andFilterWhere(['like', 'KETERANGAN', $this->KETERANGAN])
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
    public function searchUpdate($params)
    {
        $query = PpobMasterHarga::find();

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
            'DENOM' => $this->DENOM,
            'HARGA_BARU' => $this->HARGA_BARU,
            'TGL_AKTIF' => $this->TGL_AKTIF,
            'HARGA_DASAR' => $this->HARGA_DASAR,
            'MARGIN_FEE_KG' => $this->MARGIN_FEE_KG,
            'MARGIN_FEE_MEMBER' => $this->MARGIN_FEE_MEMBER,
            'HARGA_JUAL' => $this->HARGA_JUAL,
            'PERMIT' => $this->PERMIT,
            'STATUS' =>2,
            'CREATE_AT' => $this->CREATE_AT,
            'UPDATE_AT' => $this->UPDATE_AT,
        ]);

        $query->andFilterWhere(['like', 'ID_PRODUK', $this->ID_PRODUK])
            ->andFilterWhere(['like', 'TYPE_NM', $this->typeNm])
            ->andFilterWhere(['like', 'KELOMPOK', $this->KELOMPOK])
            ->andFilterWhere(['like', 'KTG_ID', $this->KTG_ID])
            ->andFilterWhere(['like', 'KTG_NM', $this->ktgNm])
            ->andFilterWhere(['like', 'ID_CODE', $this->ID_CODE])
            ->andFilterWhere(['like', 'CODE', $this->cde])
            ->andFilterWhere(['like', 'NAME', $this->NAME])
            ->andFilterWhere(['like', 'FUNGSI', $this->FUNGSI])
            ->andFilterWhere(['like', 'KETERANGAN', $this->KETERANGAN])
            ->andFilterWhere(['like', 'CREATE_BY', $this->CREATE_BY])
            ->andFilterWhere(['like', 'UPDATE_BY', $this->UPDATE_BY]);

        return $dataProvider;
    }
    public function updateHargaProduk(){
		$sqlstr="
			INSERT INTO ppob_master_harga(
				ID_PRODUK,TYPE_NM,KELOMPOK,KTG_ID,KTG_NM,ID_CODE,CODE,NAME,DENOM,HARGA_DASAR,HARGA_BARU,FUNGSI,PERMIT,STATUS
			)
			SELECT 
				ID_PRODUK,TYPE_NM,KELOMPOK,KTG_ID,KTG_NM,ID_CODE,CODE,NAME,DENOM,HARGA_DASAR,HARGA_BARU,FUNGSI,PERMIT,STATUS	
			FROM
			(	SELECT 
				(CASE WHEN x2.ID_PRODUK IS NOT NULL THEN x2.ID_PRODUK ELSE x1.ID_PRODUK END) AS ID_PRODUK,
			    x1.TYPE_NM,x1.KELOMPOK,x1.KTG_ID,x1.KTG_NM,x1.ID_CODE,x1.CODE,x1.NAME,x1.DENOM,
				x1.HARGA AS HARGA_DASAR,x1.HARGA AS HARGA_BARU,
				x1.FUNGSI,x1.PERMIT,x1.PERMIT AS STATUS		
				FROM ppob_master_data x1 LEFT JOIN ppob_master_harga x2 ON x2.ID_PRODUK=x1.ID_PRODUK
			) a1
			ON DUPLICATE KEY UPDATE
				DENOM=a1.DENOM,HARGA_BARU=a1.HARGA_BARU,PERMIT=a1.PERMIT,STATUS=a1.STATUS
		";
		$rslt = Yii::$app->db->createCommand($sqlstr)->execute();
		return $rslt;
	}
}
