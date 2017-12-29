<?php

namespace frontend\backend\payment\models;

use Yii;

/**
 * This is the model class for table "store_pakage".
 *
 * @property string $ID RECEVED & RELEASE:
 * @property string $CREATE_BY USER CREATED
 * @property string $CREATE_AT Tanggal dibuat
 * @property string $UPDATE_BY USER UPDATE
 * @property string $UPDATE_AT Tanggal di update
 * @property int $STATUS 0=deactive   
 * @property string $PAKAGE
 * @property string $PAKAGE_PARENT HOME|PREMIUM|PRO
 * @property string $PAKAGE_NM
 * @property int $PAKAGE_DURATION DURATION
 * @property int $PAKAGE_BONUS
 * @property string $AFILIASI_KODE
 * @property int $AFILIASI_BONUS
 * @property string $PAKAGE_PRICE TANGGAL AKHIR PEMBAYARAN.
 */
class StorePakage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'store_pakage';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CREATE_AT', 'UPDATE_AT'], 'safe'],
            [['STATUS', 'PAKAGE_DURATION', 'PAKAGE_BONUS', 'AFILIASI_BONUS'], 'integer'],
            [['PAKAGE_PRICE'], 'number'],
            [['CREATE_BY', 'UPDATE_BY', 'PAKAGE', 'PAKAGE_PARENT', 'AFILIASI_KODE'], 'string', 'max' => 50],
            [['PAKAGE_NM'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => Yii::t('app', 'ID'),
            'CREATE_BY' => Yii::t('app', 'Create  By'),
            'CREATE_AT' => Yii::t('app', 'Create  At'),
            'UPDATE_BY' => Yii::t('app', 'Update  By'),
            'UPDATE_AT' => Yii::t('app', 'Update  At'),
            'STATUS' => Yii::t('app', 'Status'),
            'PAKAGE' => Yii::t('app', 'Pakage'),
            'PAKAGE_PARENT' => Yii::t('app', 'Pakage  Parent'),
            'PAKAGE_NM' => Yii::t('app', 'Pakage  Nm'),
            'PAKAGE_DURATION' => Yii::t('app', 'Pakage  Duration'),
            'PAKAGE_BONUS' => Yii::t('app', 'Pakage  Bonus'),
            'AFILIASI_KODE' => Yii::t('app', 'Afiliasi  Kode'),
            'AFILIASI_BONUS' => Yii::t('app', 'Afiliasi  Bonus'),
            'PAKAGE_PRICE' => Yii::t('app', 'Pakage  Price'),
        ];
    }
}