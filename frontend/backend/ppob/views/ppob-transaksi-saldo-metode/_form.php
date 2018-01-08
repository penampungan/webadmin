<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\backend\ppob\models\PpobTransaksiSaldoMetode */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ppob-transaksi-saldo-metode-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'METODE_PEMBAYARAN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DESTINATION_ACCOUNT_NM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DESTINATION_ACCOUNT_NO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KETERANGAN')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'STATUS')->textInput() ?>

    <?= $form->field($model, 'STATUS_NM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CREATE_BY')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CREATE_AT')->textInput() ?>

    <?= $form->field($model, 'UPDATE_BY')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UPDATE_AT')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
