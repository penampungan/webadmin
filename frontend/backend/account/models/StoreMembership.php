<?php

namespace frontend\backend\account\models;

use Yii;

/**
 * This is the model class for table "store_membership".
 *
 * @property int $ID RECEVED & RELEASE:
 * @property string $CREATE_BY USER CREATED
 * @property string $CREATE_AT Tanggal dibuat
 * @property string $UPDATE_BY USER UPDATE
 * @property string $UPDATE_AT Tanggal di update
 * @property int $STATUS 0=TRIAL
 * @property string $ACCESS_GROUP ACCESS_GROUP
 * @property string $STORE_ID
 * @property string $STORE_NM
 * @property int $STORE_STATUS 0=TRIAL
 * @property string $FAKTURE kode [ACCESS_UNIX.OUTLET_CODE.TimeStamp].
 * @property string $FAKTURE_DATE
 * @property int $FAKTURE_TEMPO 8 Hari, invoice expired = 
 * @property string $PAY_PAKAGE TANGGAL AKHIR PEMBAYARAN.
 * @property string $PAY_DATE Jika 
 * @property int $PAY_DURATION_ACTIVE
 * @property int $PAY_DURATION_BONUS
 * @property string $PAY_TOTAL
 */
class StoreMembership extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'store_membership';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CREATE_AT', 'UPDATE_AT', 'FAKTURE_DATE', 'PAY_PAKAGE', 'PAY_DATE'], 'safe'],
            [['STATUS', 'STORE_STATUS', 'FAKTURE_TEMPO', 'PAY_DURATION_ACTIVE', 'PAY_DURATION_BONUS'], 'integer'],
            [['PAY_TOTAL'], 'number'],
            [['CREATE_BY', 'UPDATE_BY', 'ACCESS_GROUP', 'STORE_ID', 'FAKTURE'], 'string', 'max' => 50],
            [['STORE_NM'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'CREATE_BY' => 'Create  By',
            'CREATE_AT' => 'Create  At',
            'UPDATE_BY' => 'Update  By',
            'UPDATE_AT' => 'Update  At',
            'STATUS' => 'Status',
            'ACCESS_GROUP' => 'Access  Group',
            'STORE_ID' => 'Store  ID',
            'STORE_NM' => 'Store  Nm',
            'STORE_STATUS' => 'Store  Status',
            'FAKTURE' => 'Fakture',
            'FAKTURE_DATE' => 'Fakture  Date',
            'FAKTURE_TEMPO' => 'Fakture  Tempo',
            'PAY_PAKAGE' => 'Pay  Pakage',
            'PAY_DATE' => 'Pay  Date',
            'PAY_DURATION_ACTIVE' => 'Pay  Duration  Active',
            'PAY_DURATION_BONUS' => 'Pay  Duration  Bonus',
            'PAY_TOTAL' => 'Pay  Total',
        ];
    }
}