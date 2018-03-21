<?php

namespace frontend\backend\ppob\models;

use Yii;

/**
 * This is the model class for table "ppob_transaksi_saldo_metode".
 *
 * @property string $ID
 * @property string $METODE_PEMBAYARAN
 * @property string $DESTINATION_ACCOUNT_NM
 * @property string $DESTINATION_ACCOUNT_NO
 * @property string $KETERANGAN
 * @property int $STATUS 0=disable;1=enable
 * @property string $STATUS_NM
 * @property string $CREATE_BY
 * @property string $CREATE_AT
 * @property string $UPDATE_BY
 * @property string $UPDATE_AT
 */
class PpobTransaksiSaldoMetode extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ppob_transaksi_saldo_metode';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['METODE_PEMBAYARAN', 'KETERANGAN'], 'required'],
            [['KETERANGAN'], 'string'],
            [['STATUS'], 'integer'],
            [['CREATE_AT', 'UPDATE_AT'], 'safe'],
            [['METODE_PEMBAYARAN'], 'string', 'max' => 15],
            [['DESTINATION_ACCOUNT_NM', 'DESTINATION_ACCOUNT_NO'], 'string', 'max' => 100],
            [['STATUS_NM', 'CREATE_BY', 'UPDATE_BY'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'METODE_PEMBAYARAN' => 'Metode  Pembayaran',
            'DESTINATION_ACCOUNT_NM' => 'Destination  Account  Nm',
            'DESTINATION_ACCOUNT_NO' => 'Destination  Account  No',
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
