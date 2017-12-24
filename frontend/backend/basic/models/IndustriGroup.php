<?php

namespace frontend\backend\basic\models;

use Yii;

/**
 * This is the model class for table "industri_group".
 *
 * @property int $INDUSTRY_GRP_ID
 * @property string $INDUSTRY_GRP_NM
 * @property string $CREATE_BY USER CREATED
 * @property string $CREATE_AT Tanggal dibuat
 * @property string $UPDATE_BY USER UPDATE
 * @property string $UPDATE_AT Tanggal di update
 * @property int $STATUS 1=enable;3=delete
 */
class IndustriGroup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'industri_group';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CREATE_AT', 'UPDATE_AT'], 'safe'],
            [['STATUS'], 'integer'],
            [['INDUSTRY_GRP_NM'], 'string', 'max' => 255],
            [['CREATE_BY', 'UPDATE_BY'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'INDUSTRY_GRP_ID' => 'Industry  Grp  ID',
            'INDUSTRY_GRP_NM' => 'Industry  Grp  Nm',
            'CREATE_BY' => 'Create  By',
            'CREATE_AT' => 'Create  At',
            'UPDATE_BY' => 'Update  By',
            'UPDATE_AT' => 'Update  At',
            'STATUS' => 'Status',
        ];
    }
}
