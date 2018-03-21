<?php

namespace frontend\backend\basic\models;

use Yii;

/**
 * This is the model class for table "jurnal_status".
 *
 * @property int $STT_PAY
 * @property string $STT_PAY_NM
 * @property string $KETERANGAN
 */
class JurnalStatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jurnal_status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['STT_PAY'], 'required'],
            [['STT_PAY'], 'integer'],
            [['KETERANGAN'], 'string'],
            [['STT_PAY_NM'], 'string', 'max' => 100],
            [['STT_PAY'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'STT_PAY' => 'Stt  Pay',
            'STT_PAY_NM' => 'Stt  Pay  Nm',
            'KETERANGAN' => 'Keterangan',
        ];
    }
}
