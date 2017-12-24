<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\backend\basic\models\ProductUnit */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-unit-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'UNIT_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UNIT_NM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UNIT_ID_GRP')->textInput() ?>

    <?= $form->field($model, 'STATUS')->textInput() ?>

    <?= $form->field($model, 'DCRP_DETIL')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'CREATE_BY')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CREATE_AT')->textInput() ?>

    <?= $form->field($model, 'UPDATE_BY')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UPDATE_AT')->textInput() ?>

    <?= $form->field($model, 'CREATE_UUID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UPDATE_UUID')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
