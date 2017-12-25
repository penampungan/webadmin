<?php

namespace frontend\backend\account\models;

use Yii;

/**
 * This is the model class for table "store_membership_pakage".
 *
 * @property int $ID RECEVED & RELEASE: ID UNIX, POSTING URL DAN AJAX
 * @property string $CREATE_BY USER CREATED
 * @property string $CREATE_AT Tanggal dibuat
 * @property string $UPDATE_BY USER UPDATE
 * @property string $UPDATE_AT Tanggal di update
 * @property int $STATUS 0=deactive    1=active
 * @property string $PAKAGE
 * @property string $PAKAGE_PARENT HOME|PREMIUM|PRO
 * @property string $PAKAGE_NM
 * @property int $PAKAGE_DURATION DURATION 1 bulan 3 bulan = gratis 15 hari. 6 bulan = gratis 30 hari 12 bulan = gratis 60 hari
 * @property int $PAKAGE_BONUS
 * @property string $AFILIASI_KODE
 * @property int $AFILIASI_BONUS
 * @property string $PAKAGE_PRICE TANGGAL AKHIR PEMBAYARAN. FORMULA  1. Jumlah Pembayaran 2. lama waktu aktif
 */
class StoreMembershipPakage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'store_membership_pakage';
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
            'ID' => 'ID',
            'CREATE_BY' => 'Create  By',
            'CREATE_AT' => 'Create  At',
            'UPDATE_BY' => 'Update  By',
            'UPDATE_AT' => 'Update  At',
            'STATUS' => 'Status',
            'PAKAGE' => 'Pakage',
            'PAKAGE_PARENT' => 'Pakage  Parent',
            'PAKAGE_NM' => 'Pakage  Nm',
            'PAKAGE_DURATION' => 'Pakage  Duration',
            'PAKAGE_BONUS' => 'Pakage  Bonus',
            'AFILIASI_KODE' => 'Afiliasi  Kode',
            'AFILIASI_BONUS' => 'Afiliasi  Bonus',
            'PAKAGE_PRICE' => 'Pakage  Price',
        ];
    }
}
