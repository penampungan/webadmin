<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\backend\ppob\models\PpobTransaksi */
?>
<div class="ppob-transaksi-create">

<div class="ppob-transaksi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TRANS_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TRANS_DATE')->textInput() ?>

    <?= $form->field($model, 'TGL')->textInput() ?>

    <?= $form->field($model, 'JAM')->textInput() ?>

    <?= $form->field($model, 'ACCESS_GROUP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'STORE_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_PRODUK')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TYPE_NM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KELOMPOK')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KTG_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KTG_NM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_CODE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CODE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NAME')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'DENOM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'HARGA_DASAR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MARGIN_FEE_KG')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MARGIN_FEE_MEMBER')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'HARGA_JUAL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PERMIT')->textInput() ?>

    <?= $form->field($model, 'FUNGSI')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MSISDN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_PELANGGAN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PEMBAYARAN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RESPON_REFF_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RESPON_NAMA_PELANGGAN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RESPON_ADMIN_BANK')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RESPON_TAGIHAN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RESPON_TOTAL_BAYAR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RESPON_MESSAGE')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'RESPON_STRUK')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'RESPON_TOKEN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'STATUS')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
