<?php

namespace frontend\backend\sistem\models;

use Yii;

/**
 * This is the model class for table "modul".
 *
 * @property int $ID
 * @property int $MODUL_ID Modul.001  Base.001     =1-100 Board.001   =1-100 acct.001       =1-100 hrd.001        =1-100 sales.001      =1-100
 * @property int $MODUL_GRP
 * @property int $SORT_PARENT
 * @property int $SORT
 * @property int $MODUL_STS
 * @property string $MODUL_NM
 * @property string $MODUL_DCRP
 * @property string $BTN_NM
 * @property string $BTN_URL
 * @property string $BTN_ICON
 */
class ModulDashboard extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'modul';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MODUL_ID'], 'required'],
            [['MODUL_ID', 'MODUL_GRP', 'SORT_PARENT', 'SORT', 'MODUL_STS'], 'integer'],
            [['MODUL_DCRP'], 'string'],
            [['MODUL_NM', 'BTN_NM', 'BTN_ICON'], 'string', 'max' => 100],
            [['BTN_URL'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'MODUL_ID' => 'Modul  ID',
            'MODUL_GRP' => 'Modul  Grp',
            'SORT_PARENT' => 'Sort  Parent',
            'SORT' => 'Sort',
            'MODUL_STS' => 'Modul  Sts',
            'MODUL_NM' => 'Modul  Nm',
            'MODUL_DCRP' => 'Modul  Dcrp',
            'BTN_NM' => 'Btn  Nm',
            'BTN_URL' => 'Btn  Url',
            'BTN_ICON' => 'Btn  Icon',
        ];
    }
}
