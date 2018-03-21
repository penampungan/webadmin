<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\backend\ppob\models\PpobTransaksiSaldoMetodeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ppob-transaksi-saldo-metode-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'METODE_PEMBAYARAN') ?>

    <?= $form->field($model, 'DESTINATION_ACCOUNT_NM') ?>

    <?= $form->field($model, 'DESTINATION_ACCOUNT_NO') ?>

    <?= $form->field($model, 'KETERANGAN') ?>

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
