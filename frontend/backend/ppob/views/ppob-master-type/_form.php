<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\backend\ppob\models\PpobMasterType */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ppob-master-type-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TYPE_CODE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TYPE_NM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KETERANGAN')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
