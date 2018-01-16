<?php

namespace frontend\backend\ppob\models;

use Yii;
use common\models\Store;
use frontend\backend\sistem\models\UserKgProfile;
/**
 * This is the model class for table "ppob_transaksi_saldo".
 *
 * @property string $ID
 * @property string $TRANS_ID
 * @property string $STORE_ID
 * @property string $ACCESS_GROUP
 * @property string $TRANS_DATE
 * @property string $TGL
 * @property string $WAKTU
 * @property string $SALDO_DEPOSIT
 * @property string $DES_STORE
 * @property string $SALDO_CURRENT
 * @property string $SALDO_MUTASI
 * @property string $SALDO_BACK
 * @property string $METODE_PEMBAYARAN REF TABLE  ppob_saldo_payment
 * @property string $DESTINATION_ACCOUNT_NM REF TABLE  ppob_saldo_payment
 * @property string $DESTINATION_ACCOUNT_NO REF TABLE  ppob_saldo_payment
 * @property string $SOURCE_ACCOUNT_NM INPUT MANUAL Merchant
 * @property string $SOURCE_ACCOUNT_NO INPUT MANUAL Merchant
 * @property string $EMAIL
 * @property string $KETERANGAN
 * @property int $STATUS 0=New Deposit; 1=Bayar; 2=Mutasi Saldo; 3=Gagal(Expired Invoice,); 4=Pengembalian Saldo; 5=SaldoTest
 * @property string $STATUS_NM
 * @property string $CREATE_BY
 * @property string $CREATE_AT
 * @property string $UPDATE_BY
 * @property string $UPDATE_AT
 */
class PpobTransaksiSaldo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public static function tableName()
    {
        return 'ppob_transaksi_saldo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TRANS_ID', 'STORE_ID', 'ACCESS_GROUP', 'TRANS_DATE'], 'required'],
            [['TRANS_DATE', 'TGL', 'WAKTU', 'CREATE_AT', 'UPDATE_AT','nmdepan'], 'safe'],
            [['SALDO_DEPOSIT', 'SALDO_CURRENT', 'SALDO_MUTASI', 'SALDO_BACK'], 'number'],
            [['KETERANGAN'], 'string'],
            [['STATUS'], 'integer'],
            [['TRANS_ID', 'CREATE_BY', 'UPDATE_BY'], 'string', 'max' => 50],
            [['STORE_ID', 'DES_STORE'], 'string', 'max' => 25],
            [['ACCESS_GROUP'], 'string', 'max' => 15],
            [['METODE_PEMBAYARAN', 'DESTINATION_ACCOUNT_NM', 'DESTINATION_ACCOUNT_NO', 'SOURCE_ACCOUNT_NM', 'SOURCE_ACCOUNT_NO', 'EMAIL', 'STATUS_NM'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'TRANS_ID' => 'Trans  ID',
            'STORE_ID' => 'Store  ID',
            'ACCESS_GROUP' => 'Access  Group',
            'TRANS_DATE' => 'Trans  Date',
            'TGL' => 'Tgl',
            'WAKTU' => 'Waktu',
            'SALDO_DEPOSIT' => 'Saldo  Deposit',
            'DES_STORE' => 'Des  Store',
            'SALDO_CURRENT' => 'Saldo  Current',
            'SALDO_MUTASI' => 'Saldo  Mutasi',
            'SALDO_BACK' => 'Saldo  Back',
            'METODE_PEMBAYARAN' => 'Metode  Pembayaran',
            'DESTINATION_ACCOUNT_NM' => 'Destination  Account  Nm',
            'DESTINATION_ACCOUNT_NO' => 'Destination  Account  No',
            'SOURCE_ACCOUNT_NM' => 'Source  Account  Nm',
            'SOURCE_ACCOUNT_NO' => 'Source  Account  No',
            'EMAIL' => 'Email',
            'KETERANGAN' => 'Keterangan',
            'STATUS' => 'Status',
            'STATUS_NM' => 'Status  Nm',
            'CREATE_BY' => 'Create  By',
            'CREATE_AT' => 'Create  At',
            'UPDATE_BY' => 'Update  By',
            'UPDATE_AT' => 'Update  At',
        ];
    }

  
    public function getStore()
    {
        if ($this->STORE_ID){
            return $this->hasOne(Store::className(),['STORE_ID'=>'STORE_ID']);
        }else{
            return '';
        }
    }
    public function getUser()
    {
        if ($this->ACCESS_GROUP){
            return $this->hasOne(UserKgProfile::className(),['ACCESS_ID'=>'ACCESS_GROUP']);
        }else{
            return '';
        }
        
         
    }
    public function getNmdepan(){
        $result=$this->user;
        return $result!=''?$result->NM_DEPAN.' '.$result->NM_TENGAH.' '.$result->NM_BELAKANG:'';
    }
    public function getAlamat(){
        $result=$this->user;
        return $result!=''?$result->ALMAT:'';
    }
    public function getTgllahir(){
        $result=$this->user;
        return $result!=''?$result->LAHIR_TEMPAT.'/'.$result->LAHIR_TGL:'';
    }
    public function getLahirtempat(){
        $result=$this->user;
        return $result!=''?:'';
    }
    public function getKtp(){
        $result=$this->user;
        return $result!=''?$result->KTP:'';
    }
    public function getStoreid(){
        $result=$this->store;
        return $result!=''?$result->STORE_ID:'';
    }
    public function getStorenm(){
        $result=$this->store;
        return $result!=''?$result->STORE_NM:'';
    }
    public function getAlamatstore(){
        $result=$this->store;
        return $result!=''?$result->ALAMAT:'';
    }
    public function getPic(){
        $result=$this->store;
        return $result!=''?$result->PIC:'';
    }
    public function getTlp(){
        $result=$this->store;
        return $result!=''?$result->TLP:'';
    }
    public function getFax(){
        $result=$this->store;
        return $result!=''?$result->FAX:'';
    }
    
    public function getStoreidpaid(){
        return $this->STORE_ID;
    }
    public function getAccessgrouppaid(){
        return $this->ACCESS_GROUP;
    }
    public function getStoreidmutasi(){
        return $this->STORE_ID;
    }
    public function getAccessgroupmutasi(){
        return $this->ACCESS_GROUP;
    }
    public function getStoreidexpierd(){
        return $this->STORE_ID;
    }
    public function getAccessgroupexpierd(){
        return $this->ACCESS_GROUP;
    }
    public function getStoreidambil(){
        return $this->STORE_ID;
    }
    public function getAccessgroupambil(){
        return $this->ACCESS_GROUP;
    }
}
