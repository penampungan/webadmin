<?php

use yii\helpers\Html;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use kartik\widgets\ActiveForm;
use frontend\backend\basic\models\ProductUnitGroup;

/* @var $this yii\web\View */
/* @var $model frontend\backend\basic\models\ProductUnit */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="product-unit-create">

<div class="product-unit-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'UNIT_ID_GRP')->widget(Select2::classname(),[
            'data'=>ArrayHelper::map(ProductUnitGroup::find()->all(),'UNIT_ID_GRP','UNIT_NM_GRP'),'language' => 'en',
            'options' => ['placeholder'=>'Select Product Group....'],
            'pluginOptions' => [
                'allowClear' => true
            ], 
        ])?>

    <?= $form->field($model, 'UNIT_NM',[
                        'addon' => [
                            'append' => [
                                'content' => '<span class="fa fa-industry"></span>', 
                            ],							
                        ]
                    ])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DCRP_DETIL')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

</div>
