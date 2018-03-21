<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model frontend\backend\ppob\models\PpobTransaksiSaldo */
?>
<div class="ppob-transaksi-saldo-create">

    <div class="ppob-transaksi-saldo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TRANS_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'STORE_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ACCESS_GROUP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TRANS_DATE')->textInput() ?>

    <?= $form->field($model, 'TGL')->textInput() ?>

    <?= $form->field($model, 'WAKTU')->textInput() ?>

    <?= $form->field($model, 'SALDO_DEPOSIT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DES_STORE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SALDO_CURRENT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SALDO_MUTASI')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SALDO_BACK')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'METODE_PEMBAYARAN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DESTINATION_ACCOUNT_NM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DESTINATION_ACCOUNT_NO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SOURCE_ACCOUNT_NM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SOURCE_ACCOUNT_NO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EMAIL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KETERANGAN')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>

</div>
