<?php

namespace frontend\backend\ppob\models;

use Yii;

/**
 * This is the model class for table "ppob_transaksi".
 *
 * @property string $ID
 * @property string $TRANS_ID INPUTAN
 TRANS_ID,TRANS_DATE,STORE_ID, ID_PRODUK
 - MSISDN (POST=notify/PRE=topup)    
 - PEMBAYARAN
     (POST=Respon TotalBayar|PRE=HargaJual)
 - ID_ PELANGGAN (POST)
 - REFF_ID=(POST=resend respon)
 - ID_CODE=(POST=resend respon)
 
 * @property string $TRANS_DATE
 * @property string $TGL
 * @property string $JAM
 * @property string $ACCESS_GROUP
 * @property string $STORE_ID
 * @property string $ID_PRODUK
 * @property string $TYPE_NM
 * @property string $KELOMPOK
 * @property string $KTG_ID
 * @property string $KTG_NM
 * @property string $ID_CODE
 * @property string $CODE
 * @property string $NAME
 * @property string $DENOM
 * @property string $HARGA_DASAR
 * @property string $MARGIN_FEE_KG
 * @property string $MARGIN_FEE_MEMBER
 * @property string $HARGA_JUAL
 * @property int $PERMIT
 * @property string $FUNGSI
 * @property string $MSISDN No Pelanggan/No-Tlp-topup / No-TlpNotifikasi
 * @property string $ID_PELANGGAN
 * @property string $PEMBAYARAN respon potong_saldo,
 * @property string $RESPON_REFF_ID
 * @property string $RESPON_NAMA_PELANGGAN
 * @property string $RESPON_ADMIN_BANK
 * @property string $RESPON_TAGIHAN
 * @property string $RESPON_TOTAL_BAYAR
 * @property string $RESPON_MESSAGE respon message
 * @property string $RESPON_STRUK
 * @property string $RESPON_TOKEN
 * @property int $STATUS 0=(first transaksi); 1=(success B to B to A to C); 2=Panding; 3=Gagal
 
 Jika sudah mendapatkan update respon, status 0 pmenjadi status=1, 
 maka menjadi 1, maka tidak akan bisa di kembalikan ke Status=0,
 
 jika masih bisa di jadikan 0 maka akan di kirim
 * @property string $CREATE_BY
 * @property string $CREATE_AT
 * @property string $UPDATE_BY
 * @property string $UPDATE_AT
 */
class PpobTransaksi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ppob_transaksi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TRANS_ID', 'TRANS_DATE', 'STORE_ID', 'ID_PRODUK'], 'required'],
            [['TRANS_DATE', 'TGL', 'JAM', 'CREATE_AT', 'UPDATE_AT'], 'safe'],
            [['NAME', 'RESPON_MESSAGE', 'RESPON_STRUK'], 'string'],
            [['DENOM', 'HARGA_DASAR', 'MARGIN_FEE_KG', 'MARGIN_FEE_MEMBER', 'HARGA_JUAL', 'PEMBAYARAN', 'RESPON_ADMIN_BANK', 'RESPON_TAGIHAN', 'RESPON_TOTAL_BAYAR'], 'number'],
            [['PERMIT', 'STATUS'], 'integer'],
            [['TRANS_ID', 'KTG_ID', 'ID_CODE', 'CODE', 'CREATE_BY', 'UPDATE_BY'], 'string', 'max' => 50],
            [['ACCESS_GROUP'], 'string', 'max' => 15],
            [['STORE_ID'], 'string', 'max' => 25],
            [['ID_PRODUK', 'FUNGSI'], 'string', 'max' => 100],
            [['TYPE_NM', 'KELOMPOK', 'KTG_NM', 'MSISDN', 'ID_PELANGGAN', 'RESPON_REFF_ID', 'RESPON_NAMA_PELANGGAN', 'RESPON_TOKEN'], 'string', 'max' => 255],
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
            'TRANS_DATE' => 'Trans  Date',
            'TGL' => 'Tgl',
            'JAM' => 'Jam',
            'ACCESS_GROUP' => 'Access  Group',
            'STORE_ID' => 'Store  ID',
            'ID_PRODUK' => 'Id  Produk',
            'TYPE_NM' => 'Type  Nm',
            'KELOMPOK' => 'Kelompok',
            'KTG_ID' => 'Ktg  ID',
            'KTG_NM' => 'Ktg  Nm',
            'ID_CODE' => 'Id  Code',
            'CODE' => 'Code',
            'NAME' => 'Name',
            'DENOM' => 'Denom',
            'HARGA_DASAR' => 'Harga  Dasar',
            'MARGIN_FEE_KG' => 'Margin  Fee  Kg',
            'MARGIN_FEE_MEMBER' => 'Margin  Fee  Member',
            'HARGA_JUAL' => 'Harga  Jual',
            'PERMIT' => 'Permit',
            'FUNGSI' => 'Fungsi',
            'MSISDN' => 'Msisdn',
            'ID_PELANGGAN' => 'Id  Pelanggan',
            'PEMBAYARAN' => 'Pembayaran',
            'RESPON_REFF_ID' => 'Respon  Reff  ID',
            'RESPON_NAMA_PELANGGAN' => 'Respon  Nama  Pelanggan',
            'RESPON_ADMIN_BANK' => 'Respon  Admin  Bank',
            'RESPON_TAGIHAN' => 'Respon  Tagihan',
            'RESPON_TOTAL_BAYAR' => 'Respon  Total  Bayar',
            'RESPON_MESSAGE' => 'Respon  Message',
            'RESPON_STRUK' => 'Respon  Struk',
            'RESPON_TOKEN' => 'Respon  Token',
            'STATUS' => 'Status',
            'CREATE_BY' => 'Create  By',
            'CREATE_AT' => 'Create  At',
            'UPDATE_BY' => 'Update  By',
            'UPDATE_AT' => 'Update  At',
        ];
    }
}
