<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\backend\ppob\models\PpobTransaksiSaldoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ppob-transaksi-saldo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'TRANS_ID') ?>

    <?= $form->field($model, 'STORE_ID') ?>

    <?= $form->field($model, 'ACCESS_GROUP') ?>

    <?= $form->field($model, 'TRANS_DATE') ?>

    <?php // echo $form->field($model, 'TGL') ?>

    <?php // echo $form->field($model, 'WAKTU') ?>

    <?php // echo $form->field($model, 'SALDO_DEPOSIT') ?>

    <?php // echo $form->field($model, 'DES_STORE') ?>

    <?php // echo $form->field($model, 'SALDO_CURRENT') ?>

    <?php // echo $form->field($model, 'SALDO_MUTASI') ?>

    <?php // echo $form->field($model, 'SALDO_BACK') ?>

    <?php // echo $form->field($model, 'METODE_PEMBAYARAN') ?>

    <?php // echo $form->field($model, 'DESTINATION_ACCOUNT_NM') ?>

    <?php // echo $form->field($model, 'DESTINATION_ACCOUNT_NO') ?>

    <?php // echo $form->field($model, 'SOURCE_ACCOUNT_NM') ?>

    <?php // echo $form->field($model, 'SOURCE_ACCOUNT_NO') ?>

    <?php // echo $form->field($model, 'EMAIL') ?>

    <?php // echo $form->field($model, 'KETERANGAN') ?>

    <?php // echo $form->field($model, 'STATUS') ?>

    <?php // echo $form->field($model, 'STATUS_NM') ?>

    <?php // echo $form->field($model, 'CREATE_BY') ?>

    <?php // echo $form->field($model, 'CREATE_AT') ?>

    <?php // echo $form->field($model, 'UPDATE_BY') ?>

    <?php // echo $form->field($model, 'UPDATE_AT') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
