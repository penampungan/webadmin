<?php

namespace frontend\backend\basic\models;

use Yii;

/**
 * This is the model class for table "product_unit".
 *
 * @property string $UNIT_ID
 * @property string $UNIT_NM
 * @property int $UNIT_ID_GRP
 * @property int $STATUS 1=enable;3=delete
 * @property string $DCRP_DETIL
 * @property string $CREATE_BY USER CREATED
 * @property string $CREATE_AT Tanggal dibuat
 * @property string $UPDATE_BY USER UPDATE
 * @property string $UPDATE_AT Tanggal di update
 * @property string $CREATE_UUID
 * @property string $UPDATE_UUID
 */
class ProductUnit extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_unit';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            //[['UNIT_ID'], 'required'],
            [['UNIT_ID_GRP', 'STATUS'], 'integer'],
            [['DCRP_DETIL'], 'string'],
            [['CREATE_AT', 'UPDATE_AT'], 'safe'],
            [['UNIT_ID'], 'string', 'max' => 6],
            [['UNIT_NM', 'CREATE_BY', 'UPDATE_BY'], 'string', 'max' => 50],
            [['CREATE_UUID', 'UPDATE_UUID'], 'string', 'max' => 255],
            [['UNIT_ID'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'UNIT_ID' => 'Unit  ID',
            'UNIT_NM' => 'Unit  Nm',
            'UNIT_ID_GRP' => 'Unit  Id  Grp',
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
