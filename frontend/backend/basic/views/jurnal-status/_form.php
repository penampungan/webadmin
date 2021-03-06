<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\backend\basic\models\JurnalStatus */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jurnal-status-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'STT_PAY_NM')->textInput(['maxlength' => true])->label('NAMA PEMBAYARAN') ?>

    <?= $form->field($model, 'KETERANGAN')->textarea(['rows' => 6])->label('KETERANGAN') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
