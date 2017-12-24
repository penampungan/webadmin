<?php

namespace frontend\backend\basic\models;

use Yii;

/**
 * This is the model class for table "industri".
 *
 * @property int $INDUSTRY_ID
 * @property int $INDUSTRY_GRP_ID
 * @property string $INDUSTRY_NM
 * @property string $CREATE_BY USER CREATED
 * @property string $CREATE_AT Tanggal dibuat
 * @property string $UPDATE_BY USER UPDATE
 * @property string $UPDATE_AT Tanggal di update
 * @property int $STATUS 1=enable;3=delete
 */
class Industri extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'industri';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['INDUSTRY_GRP_ID', 'STATUS'], 'integer'],
            [['CREATE_AT', 'UPDATE_AT'], 'safe'],
            [['INDUSTRY_NM'], 'string', 'max' => 255],
            [['CREATE_BY', 'UPDATE_BY'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'INDUSTRY_ID' => 'Industry  ID',
            'INDUSTRY_GRP_ID' => 'Industry  Grp  ID',
            'INDUSTRY_NM' => 'Industry  Nm',
            'CREATE_BY' => 'Create  By',
            'CREATE_AT' => 'Create  At',
            'UPDATE_BY' => 'Update  By',
            'UPDATE_AT' => 'Update  At',
            'STATUS' => 'Status',
        ];
    }
}
