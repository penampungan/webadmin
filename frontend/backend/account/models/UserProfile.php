<?php

namespace frontend\backend\account\models;

use Yii;

/**
 * This is the model class for table "user_profile".
 *
 * @property string $ID
 * @property string $ACCESS_ID
 * @property string $NM_DEPAN
 * @property string $NM_TENGAH
 * @property string $NM_BELAKANG
 * @property string $KTP
 * @property string $ALMAT
 * @property string $LAHIR_TEMPAT
 * @property string $LAHIR_TGL
 * @property string $LAHIR_GENDER
 * @property string $HP
 * @property string $EMAIL
 * @property string $CREATE_BY USER pembuat
 * @property string $CREATE_AT Tanggal dibuat
 * @property string $UPDATE_BY user Ubah
 * @property string $UPDATE_AT Tanggal diubah
 * @property int $STATUS
 * @property string $DCRP_DETIL
 * @property int $YEAR_AT partisi unix
 * @property int $MONTH_AT partisi unix
 */
class UserProfile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_profile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ACCESS_ID', 'YEAR_AT', 'MONTH_AT'], 'required'],
            [['ALMAT', 'DCRP_DETIL'], 'string'],
            [['LAHIR_TGL', 'CREATE_AT', 'UPDATE_AT'], 'safe'],
            [['STATUS', 'YEAR_AT', 'MONTH_AT'], 'integer'],
            [['ACCESS_ID', 'NM_DEPAN', 'NM_TENGAH', 'NM_BELAKANG', 'KTP', 'LAHIR_GENDER', 'HP', 'CREATE_BY', 'UPDATE_BY'], 'string', 'max' => 50],
            [['LAHIR_TEMPAT'], 'string', 'max' => 255],
            [['EMAIL'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'ACCESS_ID' => 'Access  ID',
            'NM_DEPAN' => 'Nm  Depan',
            'NM_TENGAH' => 'Nm  Tengah',
            'NM_BELAKANG' => 'Nm  Belakang',
            'KTP' => 'Ktp',
            'ALMAT' => 'Almat',
            'LAHIR_TEMPAT' => 'Lahir  Tempat',
            'LAHIR_TGL' => 'Lahir  Tgl',
            'LAHIR_GENDER' => 'Lahir  Gender',
            'HP' => 'Hp',
            'EMAIL' => 'Email',
            'CREATE_BY' => 'Create  By',
            'CREATE_AT' => 'Create  At',
            'UPDATE_BY' => 'Update  By',
            'UPDATE_AT' => 'Update  At',
            'STATUS' => 'Status',
            'DCRP_DETIL' => 'Dcrp  Detil',
            'YEAR_AT' => 'Year  At',
            'MONTH_AT' => 'Month  At',
        ];
    }
}
