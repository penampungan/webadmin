<?php

namespace frontend\backend\basic\models;

use Yii;

/**
 * This is the model class for table "jurnal_kategori".
 *
 * @property string $KTG_CODE
 * @property string $KTG_NM
 * @property int $STATUS
 * @property string $KETERANGAN
 */
class JurnalKategori extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jurnal_kategori';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['KTG_CODE'], 'required'],
            [['KTG_CODE', 'STATUS'], 'integer'],
            [['KETERANGAN'], 'string'],
            [['KTG_NM'], 'string', 'max' => 100],
            [['KTG_CODE'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'KTG_CODE' => 'Ktg  Code',
            'KTG_NM' => 'Ktg  Nm',
            'STATUS' => 'Status',
            'KETERANGAN' => 'Keterangan',
        ];
    }
}
