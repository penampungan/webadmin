<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\backend\sistem\models\ModulPermission */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="modul-permission-update">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'USER_UNIX')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MODUL_ID')->textInput() ?>

    <?= $form->field($model, 'STATUS')->textInput() ?>

    <?= $form->field($model, 'BTN_VIEW')->textInput() ?>

    <?= $form->field($model, 'BTN_REVIEW')->textInput() ?>

    <?= $form->field($model, 'BTN_CREATE')->textInput() ?>

    <?= $form->field($model, 'BTN_EDIT')->textInput() ?>

    <?= $form->field($model, 'BTN_DELETE')->textInput() ?>

    <?= $form->field($model, 'BTN_SIGN1')->textInput() ?>

    <?= $form->field($model, 'BTN_SIGN2')->textInput() ?>

    <?= $form->field($model, 'BTN_SIGN3')->textInput() ?>

    <?= $form->field($model, 'BTN_SIGN4')->textInput() ?>

    <?= $form->field($model, 'BTN_SIGN5')->textInput() ?>

    <?= $form->field($model, 'CREATE_BY')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CREATE_AT')->textInput() ?>

    <?= $form->field($model, 'UPDATE_BY')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UPDATE_AT')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
