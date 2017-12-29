<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model frontend\backend\ppob\models\PpobMasterHarga */

?>
<div class="ppob-master-harga-update">

<div class="ppob-master-harga-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'DETAIL_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KODE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KETERANGAN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NOMINAL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'HARGA1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'HARGA2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'HARGA3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'STATUS')->textInput() ?>

    <?= $form->field($model, 'DCRIP')->textarea(['rows' => 6]) ?>

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
