<?php

namespace frontend\backend\ppob\models;

use Yii;

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
            [['TRANS_DATE', 'TGL', 'WAKTU', 'CREATE_AT', 'UPDATE_AT'], 'safe'],
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
}
