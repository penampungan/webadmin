<?php

namespace frontend\backend\account\models;

use Yii;

/**
 * This is the model class for table "store".
 *
 * @property string $ID RECEVED & RELEASE: ID UNIX, POSTING URL DAN AJAX
 * @property string $ACCESS_GROUP
 * @property string $STORE_ID
 * @property string $STORE_NM
 * @property string $ACCESS_ID ACCESS_ID - Array 
 * @property string $UUID
 * @property resource $PLAYER_ID
 * @property string $PROVINCE_ID
 * @property string $PROVINCE_NM
 * @property string $CITY_ID
 * @property string $CITY_NAME
 * @property double $LATITUDE
 * @property double $LONGITUDE
 * @property string $ALAMAT
 * @property string $PIC
 * @property string $TLP
 * @property string $FAX
 * @property string $PPN
 * @property string $INDUSTRY_ID
 * @property string $INDUSTRY_NM
 * @property string $INDUSTRY_GRP_ID
 * @property string $INDUSTRY_GRP_NM
 * @property string $CREATE_BY USER pembuat
 * @property string $CREATE_AT Tanggal dibuat
 * @property string $UPDATE_BY user Ubah
 * @property string $UPDATE_AT Tanggal diubah
 * @property int $PAKET_ID paket id pembayaran
 * @property int $DOMPET_AUTODEBET 0=tidak; 1=autodebet
 * @property string $DATE_START TANGGAL PEMBAYARAN
 * @property string $DATE_END TANGGAL AKHIR PEMBAYARAN. FORMULA  1. Jumlah Pembayaran  2. lama waktu aktif.  3. 8 Hari sebelum berakhir masa tengang.      a. create invoice.      b. show list masa tengang.      c. send invoice email.      d. prosess pembayaran
 * @property string $BANK_NO
 * @property string $BANK_NM
 * @property string $KONTRAK_DURASI
 * @property string $KONTRAK_DATE
 * @property int $STATUS 0=TRIAL (14 hari) ;1=Active; 2=Deactive (BALUM BAYAR) 3=Delete
 * @property string $DCRP_DETIL
 * @property int $YEAR_AT partisi unix
 * @property int $MONTH_AT partisi unix
 */
class Store extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'store';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['STORE_ID', 'KONTRAK_DURASI', 'YEAR_AT', 'MONTH_AT'], 'required'],
            [['ACCESS_ID', 'UUID', 'PLAYER_ID', 'ALAMAT', 'DCRP_DETIL'], 'string'],
            [['PROVINCE_ID', 'CITY_ID', 'INDUSTRY_ID', 'INDUSTRY_GRP_ID', 'PAKET_ID', 'DOMPET_AUTODEBET', 'STATUS', 'YEAR_AT', 'MONTH_AT'], 'integer'],
            [['LATITUDE', 'LONGITUDE', 'PPN'], 'number'],
            [['CREATE_AT', 'UPDATE_AT', 'DATE_START', 'DATE_END', 'KONTRAK_DATE'], 'safe'],
            [['ACCESS_GROUP'], 'string', 'max' => 15],
            [['STORE_ID'], 'string', 'max' => 25],
            [['STORE_NM', 'PIC', 'BANK_NM'], 'string', 'max' => 100],
            [['PROVINCE_NM', 'CITY_NAME', 'TLP', 'FAX', 'CREATE_BY', 'UPDATE_BY', 'BANK_NO', 'KONTRAK_DURASI'], 'string', 'max' => 50],
            [['INDUSTRY_NM', 'INDUSTRY_GRP_NM'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'ACCESS_GROUP' => 'Access  Group',
            'STORE_ID' => 'Store  ID',
            'STORE_NM' => 'Store  Nm',
            'ACCESS_ID' => 'Access  ID',
            'UUID' => 'Uuid',
            'PLAYER_ID' => 'Player  ID',
            'PROVINCE_ID' => 'Province  ID',
            'PROVINCE_NM' => 'Province  Nm',
            'CITY_ID' => 'City  ID',
            'CITY_NAME' => 'City  Name',
            'LATITUDE' => 'Latitude',
            'LONGITUDE' => 'Longitude',
            'ALAMAT' => 'Alamat',
            'PIC' => 'Pic',
            'TLP' => 'Tlp',
            'FAX' => 'Fax',
            'PPN' => 'Ppn',
            'INDUSTRY_ID' => 'Industry  ID',
            'INDUSTRY_NM' => 'Industry  Nm',
            'INDUSTRY_GRP_ID' => 'Industry  Grp  ID',
            'INDUSTRY_GRP_NM' => 'Industry  Grp  Nm',
            'CREATE_BY' => 'Create  By',
            'CREATE_AT' => 'Create  At',
            'UPDATE_BY' => 'Update  By',
            'UPDATE_AT' => 'Update  At',
            'PAKET_ID' => 'Paket  ID',
            'DOMPET_AUTODEBET' => 'Dompet  Autodebet',
            'DATE_START' => 'Date  Start',
            'DATE_END' => 'Date  End',
            'BANK_NO' => 'Bank  No',
            'BANK_NM' => 'Bank  Nm',
            'KONTRAK_DURASI' => 'Kontrak  Durasi',
            'KONTRAK_DATE' => 'Kontrak  Date',
            'STATUS' => 'Status',
            'DCRP_DETIL' => 'Dcrp  Detil',
            'YEAR_AT' => 'Year  At',
            'MONTH_AT' => 'Month  At',
        ];
    }
}
