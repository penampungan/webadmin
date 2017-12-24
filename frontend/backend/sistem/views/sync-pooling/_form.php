<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\backend\sistem\models\SyncPooling */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sync-pooling-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NM_TABLE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PRIMARIKEY_NM')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'PRIMARIKEY_VAL')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'PRIMARIKEY_ID')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'TYPE_ACTION')->textInput() ?>

    <?= $form->field($model, 'ACCESS_GROUP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'STORE_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ARY_UUID')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ARY_PLAYERID')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'STATUS')->textInput() ?>

    <?= $form->field($model, 'CREATE_BY')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CREATE_AT')->textInput() ?>

    <?= $form->field($model, 'UPDATE_BY')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UPDATE_AT')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
