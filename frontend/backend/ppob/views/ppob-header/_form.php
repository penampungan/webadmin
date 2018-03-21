<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\backend\ppob\models\PpobHeader */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ppob-header-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'HEADER_NM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'HEADER_DCRP')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
