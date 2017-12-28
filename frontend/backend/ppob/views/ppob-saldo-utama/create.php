<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model frontend\backend\ppob\models\PpobSaldoUtama */
?>
<div class="ppob-saldo-utama-create">

<div class="ppob-saldo-utama-form">

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'ACCESS_GROUP')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'STORE_ID')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'SALDO_DEPOSIT')->textInput(['maxlength' => true]) ?>

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
</div>
