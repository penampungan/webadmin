<?php

use yii\helpers\Html;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use kartik\widgets\ActiveForm;
use frontend\backend\basic\models\JurnalTemplateReport;

/* @var $this yii\web\View */
/* @var $model frontend\backend\basic\models\JurnalTemplateTitle */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jurnal-template-title-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'RPT_GROUP_ID')->widget(Select2::classname(),[
            'data'=>ArrayHelper::map(JurnalTemplateReport::find()->all(),'RPT_GROUP__ID','RPT_GROUP_NM'),'language' => 'en',
            'options' => ['placeholder'=>'Select Group....'],
            'pluginOptions' => [
                'allowClear' => true
            ], 
        ])->label('RPT GROUP') ?>

    <?= $form->field($model, 'RPT_TITLE_NM')->textInput(['maxlength' => true])->label('RPT NAMA TITLE') ?>

    <?= $form->field($model, 'KETERANGAN')->textarea(['rows' => 6])->label('KETERANGAN') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
