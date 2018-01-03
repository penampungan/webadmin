<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\backend\ppob\models\PpobMasterHarga1 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ppob-master-harga1-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_PRODUK')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TYPE_NM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KELOMPOK')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KTG_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KTG_NM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_CODE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CODE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NAME')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'DENOM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'HARGA_BARU')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TGL_AKTIF')->textInput() ?>

    <?= $form->field($model, 'HARGA_DASAR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MARGIN_FEE_KG')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MARGIN_FEE_MEMBER')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'HARGA_JUAL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PERMIT')->textInput() ?>

    <?= $form->field($model, 'FUNGSI')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'STATUS')->textInput() ?>

    <?= $form->field($model, 'KETERANGAN')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'CREATE_BY')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CREATE_AT')->textInput() ?>

    <?= $form->field($model, 'UPDATE_BY')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UPDATE_AT')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
