<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\label\LabelInPlace;


/* @var $this yii\web\View */
/* @var $model frontend\backend\basic\models\IndustriGroup */

?>
<div class="industri-group-create">

<div class="industri-group-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'INDUSTRY_GRP_NM', [
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
</div>
