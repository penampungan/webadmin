<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\backend\ppob\models\PpobTransaksi1Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ppob-transaksi1-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'TRANS_ID') ?>

    <?= $form->field($model, 'TRANS_DATE') ?>

    <?= $form->field($model, 'TGL') ?>

    <?= $form->field($model, 'JAM') ?>

    <?php // echo $form->field($model, 'ACCESS_GROUP') ?>

    <?php // echo $form->field($model, 'STORE_ID') ?>

    <?php // echo $form->field($model, 'ID_PRODUK') ?>

    <?php // echo $form->field($model, 'TYPE_NM') ?>

    <?php // echo $form->field($model, 'KELOMPOK') ?>

    <?php // echo $form->field($model, 'KTG_ID') ?>

    <?php // echo $form->field($model, 'KTG_NM') ?>

    <?php // echo $form->field($model, 'ID_CODE') ?>

    <?php // echo $form->field($model, 'CODE') ?>

    <?php // echo $form->field($model, 'NAME') ?>

    <?php // echo $form->field($model, 'DENOM') ?>

    <?php // echo $form->field($model, 'HARGA_DASAR') ?>

    <?php // echo $form->field($model, 'MARGIN_FEE_KG') ?>

    <?php // echo $form->field($model, 'MARGIN_FEE_MEMBER') ?>

    <?php // echo $form->field($model, 'HARGA_JUAL') ?>

    <?php // echo $form->field($model, 'PERMIT') ?>

    <?php // echo $form->field($model, 'FUNGSI') ?>

    <?php // echo $form->field($model, 'MSISDN') ?>

    <?php // echo $form->field($model, 'ID_PELANGGAN') ?>

    <?php // echo $form->field($model, 'PEMBAYARAN') ?>

    <?php // echo $form->field($model, 'RESPON_REFF_ID') ?>

    <?php // echo $form->field($model, 'RESPON_NAMA_PELANGGAN') ?>

    <?php // echo $form->field($model, 'RESPON_ADMIN_BANK') ?>

    <?php // echo $form->field($model, 'RESPON_TAGIHAN') ?>

    <?php // echo $form->field($model, 'RESPON_TOTAL_BAYAR') ?>

    <?php // echo $form->field($model, 'RESPON_MESSAGE') ?>

    <?php // echo $form->field($model, 'RESPON_STRUK') ?>

    <?php // echo $form->field($model, 'RESPON_TOKEN') ?>

    <?php // echo $form->field($model, 'STATUS') ?>

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
