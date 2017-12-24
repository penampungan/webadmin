<?php

namespace frontend\backend\basic\models;

use Yii;

/**
 * This is the model class for table "merchant_bank".
 *
 * @property int $BANK_ID
 * @property string $BANK_NM
 * @property int $STATUS
 * @property string $DCRP_DETIL
 * @property string $CREATE_BY USER CREATED
 * @property string $CREATE_AT Tanggal dibuat
 * @property string $UPDATE_BY USER UPDATE
 * @property string $UPDATE_AT Tanggal di update
 */
class MerchantBank extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'merchant_bank';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['STATUS'], 'integer'],
            [['DCRP_DETIL'], 'string'],
            [['CREATE_AT', 'UPDATE_AT'], 'safe'],
            [['BANK_NM'], 'string', 'max' => 150],
            [['CREATE_BY', 'UPDATE_BY'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'BANK_ID' => 'Bank  ID',
            'BANK_NM' => 'Bank  Nm',
            'STATUS' => 'Status',
            'DCRP_DETIL' => 'Dcrp  Detil',
            'CREATE_BY' => 'Create  By',
            'CREATE_AT' => 'Create  At',
            'UPDATE_BY' => 'Update  By',
            'UPDATE_AT' => 'Update  At',
        ];
    }
}
