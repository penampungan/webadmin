<?php

namespace frontend\backend\ppob\models;

use Yii;

/**
 * This is the model class for table "ppob_transaksi".
 *
 * @property string $ID
 * @property string $TRANS_ID
 * @property string $TRANS_DATE
 * @property string $ACCESS_GROUP
 * @property string $STORE_ID
 * @property string $DETAIL_ID ID MENU DETAIL
 * @property string $KODE KODE B to B
 * @property string $NUMBER_ID
 * @property string $KETERANGAN
 * @property string $NOMINAL
 * @property string $HARGA_KG
 * @property string $HARGA_JUAL
 * @property int $QTY
 * @property int $STATUS 0=(first transaksi); 1=(success B to B to A to C); 2=Panding; 3=Gagal
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
            [['TRANS_DATE', 'CREATE_AT', 'UPDATE_AT'], 'safe'],
            [['ACCESS_GROUP', 'STORE_ID', 'DETAIL_ID'], 'required'],
            [['HARGA_KG', 'HARGA_JUAL'], 'number'],
            [['QTY', 'STATUS'], 'integer'],
            [['TRANS_ID', 'DETAIL_ID', 'KODE', 'NOMINAL', 'CREATE_BY', 'UPDATE_BY'], 'string', 'max' => 50],
            [['ACCESS_GROUP'], 'string', 'max' => 15],
            [['STORE_ID'], 'string', 'max' => 25],
            [['NUMBER_ID'], 'string', 'max' => 255],
            [['KETERANGAN'], 'string', 'max' => 100],
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
            'ACCESS_GROUP' => 'Access  Group',
            'STORE_ID' => 'Store  ID',
            'DETAIL_ID' => 'Detail  ID',
            'KODE' => 'Kode',
            'NUMBER_ID' => 'Number  ID',
            'KETERANGAN' => 'Keterangan',
            'NOMINAL' => 'Nominal',
            'HARGA_KG' => 'Harga  Kg',
            'HARGA_JUAL' => 'Harga  Jual',
            'QTY' => 'Qty',
            'STATUS' => 'Status',
            'CREATE_BY' => 'Create  By',
            'CREATE_AT' => 'Create  At',
            'UPDATE_BY' => 'Update  By',
            'UPDATE_AT' => 'Update  At',
        ];
    }
}
