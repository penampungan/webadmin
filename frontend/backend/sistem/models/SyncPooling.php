<?php

namespace frontend\backend\sistem\models;

use Yii;

/**
 * This is the model class for table "sync_pooling".
 *
 * @property string $ID
 * @property string $NM_TABLE
 * @property string $PRIMARIKEY_NM
 * @property string $PRIMARIKEY_VAL
 * @property string $PRIMARIKEY_ID
 * @property int $TYPE_ACTION 1=CREATE; 2=UPDATE;3=DELETE
 * @property string $ACCESS_GROUP
 * @property string $STORE_ID
 * @property string $ARY_UUID
 * @property string $ARY_PLAYERID
 * @property int $STATUS
 * @property string $CREATE_BY
 * @property string $CREATE_AT
 * @property string $UPDATE_BY
 * @property string $UPDATE_AT
 */
class SyncPooling extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sync_pooling';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PRIMARIKEY_NM', 'PRIMARIKEY_VAL', 'PRIMARIKEY_ID', 'ARY_UUID', 'ARY_PLAYERID'], 'string'],
            [['TYPE_ACTION', 'STATUS'], 'integer'],
            [['CREATE_AT', 'UPDATE_AT'], 'safe'],
            [['NM_TABLE'], 'string', 'max' => 255],
            [['ACCESS_GROUP'], 'string', 'max' => 15],
            [['STORE_ID'], 'string', 'max' => 20],
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
            'NM_TABLE' => 'Nm  Table',
            'PRIMARIKEY_NM' => 'Primarikey  Nm',
            'PRIMARIKEY_VAL' => 'Primarikey  Val',
            'PRIMARIKEY_ID' => 'Primarikey  ID',
            'TYPE_ACTION' => 'Type  Action',
            'ACCESS_GROUP' => 'Access  Group',
            'STORE_ID' => 'Store  ID',
            'ARY_UUID' => 'Ary  Uuid',
            'ARY_PLAYERID' => 'Ary  Playerid',
            'STATUS' => 'Status',
            'CREATE_BY' => 'Create  By',
            'CREATE_AT' => 'Create  At',
            'UPDATE_BY' => 'Update  By',
            'UPDATE_AT' => 'Update  At',
        ];
    }
}
