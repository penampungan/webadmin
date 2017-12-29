<?php

use yii\helpers\Html;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use kartik\widgets\ActiveForm;
use frontend\backend\basic\models\IndustriGroup;

/* @var $this yii\web\View */
/* @var $model frontend\backend\basic\models\Industri */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="industri-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'INDUSTRY_GRP_ID')->widget(Select2::classname(),[
            'data'=>ArrayHelper::map(IndustriGroup::find()->all(),'INDUSTRY_GRP_ID','INDUSTRY_GRP_NM'),'language' => 'en',
            'options' => ['placeholder'=>'Select Industri Group....'],
            'pluginOptions' => [
                'allowClear' => true
            ], 
        ]) ?>

    <?= $form->field($model, 'INDUSTRY_NM', [
                        'addon' => [
                            'append' => [
                                'content' => '<span class="fa fa-industry"></span>', 
                            ],							
                        ]
                    ])->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
