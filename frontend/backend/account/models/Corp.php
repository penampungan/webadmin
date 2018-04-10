<?php

namespace frontend\backend\account\models;

use Yii;

use frontend\backend\account\models\Corp64;
use frontend\backend\account\models\Corp64Search;
use frontend\backend\account\models\UserProfile;
use frontend\backend\account\models\UserProfileSearch;
/**
 * This is the model class for table "corp".
 *
 * @property string $ID
 * @property string $ACCESS_ID user.ACCESS_UNIX=many of group( corp.ACCESS_UNIX)
 * @property string $CORP_NM
 * @property string $ALAMAT
 * @property double $MAP_LAG
 * @property double $MAP_LAT
 * @property int $STATUS
 * @property string $CREATE_BY
 * @property string $CREATE_AT
 * @property string $UPDATE_BY
 * @property string $UPDATE_AT
 */
class Corp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'corp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ACCESS_ID'], 'required'],
            [['ACCESS_ID', 'ALAMAT'], 'string'],
            [['MAP_LAG', 'MAP_LAT'], 'number'],
            [['STATUS'], 'integer'],
            [['CREATE_AT', 'UPDATE_AT'], 'safe'],
            [['CORP_NM'], 'string', 'max' => 255],
            [['CREATE_BY', 'UPDATE_BY'], 'string', 'max' => 50],
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
            'CORP_NM' => 'Corp  Nm',
            'ALAMAT' => 'Alamat',
            'MAP_LAG' => 'Map  Lag',
            'MAP_LAT' => 'Map  Lat',
            'STATUS' => 'Status',
            'CREATE_BY' => 'Create  By',
            'CREATE_AT' => 'Create  At',
            'UPDATE_BY' => 'Update  By',
            'UPDATE_AT' => 'Update  At',
        ];
    }
    public function getImages()
    {
        return $this->hasOne(Corp64::className(),['ACCESS_ID'=>'ACCESS_ID']);
    }
    public function getProfile()
    {
        return $this->hasOne(UserProfile::className(),['ACCESS_ID'=>'ACCESS_ID']);
    }
    public function getLogo(){
        $result=$this->images;
        return $result!=''?$result->CORP_64:'';
    }
    public function getGambar(){
        $result=$this->images;
        return $result!=''?$result->BERKAS_IMG:'';
    }
    public function getNama(){
        $result=$this->profile;
        return $result!=''?$result->NM_DEPAN.' '.$result->NM_TENGAH.' '.$result->NM_BELAKANG:'';
    }
    public function getAlamat(){
        $result=$this->profile;
        return $result!=''?$result->NM_DEPAN.' '.$result->NM_TENGAH.' '.$result->NM_BELAKANG:'';
    }
    public function getTtl(){
        $result=$this->profile;
        return $result!=''?$result->LAHIR_TEMPAT.'/'.$result->LAHIR_TGL:'';
    }
    public function getKontak(){
        $result=$this->profile;
        return $result!=''?$result->HP.'/'.$result->EMAIL:'';
    }
}
