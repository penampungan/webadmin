<?php

namespace frontend\backend\basic\models;

use Yii;

/**
 * This is the model class for table "merchant_type".
 *
 * @property int $TYPE_PAY_ID
 * @property string $TYPE_PAY_NM
 * @property int $STATUS
 * @property string $DCRP_DETIL
 * @property string $CREATE_BY USER CREATED
 * @property string $CREATE_AT Tanggal dibuat
 * @property string $UPDATE_BY USER UPDATE
 * @property string $UPDATE_AT Tanggal di update
 * @property string $CREATE_UUID
 * @property string $UPDATE_UUID
 */
class MerchantType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'merchant_type';
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
            [['TYPE_PAY_NM'], 'string', 'max' => 150],
            [['CREATE_BY', 'UPDATE_BY'], 'string', 'max' => 50],
            [['CREATE_UUID', 'UPDATE_UUID'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'TYPE_PAY_ID' => 'Type  Pay  ID',
            'TYPE_PAY_NM' => 'Type  Pay  Nm',
            'STATUS' => 'Status',
            'DCRP_DETIL' => 'Dcrp  Detil',
            'CREATE_BY' => 'Create  By',
            'CREATE_AT' => 'Create  At',
            'UPDATE_BY' => 'Update  By',
            'UPDATE_AT' => 'Update  At',
            'CREATE_UUID' => 'Create  Uuid',
            'UPDATE_UUID' => 'Update  Uuid',
        ];
    }
}
