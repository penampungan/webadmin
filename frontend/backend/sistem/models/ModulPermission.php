<?php

namespace frontend\backend\sistem\models;

use Yii;

/**
 * This is the model class for table "modul_permission".
 *
 * @property int $ID
 * @property string $USER_UNIX
 * @property int $MODUL_ID
 * @property int $STATUS
 * @property int $BTN_VIEW View general | Can't Insert|update|delete
 * @property int $BTN_REVIEW Menu Revew For Signature Mengetahui/Approved
 * @property int $BTN_CREATE
 * @property int $BTN_EDIT EDITING | Customize 
 * @property int $BTN_DELETE Menu Delete | STATUS=0
 * @property int $BTN_SIGN1
 * @property int $BTN_SIGN2
 * @property int $BTN_SIGN3
 * @property int $BTN_SIGN4
 * @property int $BTN_SIGN5
 * @property string $CREATE_BY
 * @property int $CREATE_AT
 * @property string $UPDATE_BY
 * @property string $UPDATE_AT
 */
class ModulPermission extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'modul_permission';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MODUL_ID', 'STATUS', 'BTN_VIEW', 'BTN_REVIEW', 'BTN_CREATE', 'BTN_EDIT', 'BTN_DELETE', 'BTN_SIGN1', 'BTN_SIGN2', 'BTN_SIGN3', 'BTN_SIGN4', 'BTN_SIGN5', 'CREATE_AT'], 'integer'],
            [['UPDATE_AT'], 'safe'],
            [['USER_UNIX', 'CREATE_BY', 'UPDATE_BY'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'USER_UNIX' => 'User  Unix',
            'MODUL_ID' => 'Modul  ID',
            'STATUS' => 'Status',
            'BTN_VIEW' => 'Btn  View',
            'BTN_REVIEW' => 'Btn  Review',
            'BTN_CREATE' => 'Btn  Create',
            'BTN_EDIT' => 'Btn  Edit',
            'BTN_DELETE' => 'Btn  Delete',
            'BTN_SIGN1' => 'Btn  Sign1',
            'BTN_SIGN2' => 'Btn  Sign2',
            'BTN_SIGN3' => 'Btn  Sign3',
            'BTN_SIGN4' => 'Btn  Sign4',
            'BTN_SIGN5' => 'Btn  Sign5',
            'CREATE_BY' => 'Create  By',
            'CREATE_AT' => 'Create  At',
            'UPDATE_BY' => 'Update  By',
            'UPDATE_AT' => 'Update  At',
        ];
    }
}
