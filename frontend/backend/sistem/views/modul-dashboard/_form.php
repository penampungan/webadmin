<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\backend\sistem\models\ModulDashboard */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="modul-dashboard-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'MODUL_ID')->textInput() ?>

    <?= $form->field($model, 'MODUL_GRP')->textInput() ?>

    <?= $form->field($model, 'SORT_PARENT')->textInput() ?>

    <?= $form->field($model, 'SORT')->textInput() ?>

    <?= $form->field($model, 'MODUL_STS')->textInput() ?>

    <?= $form->field($model, 'MODUL_NM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MODUL_DCRP')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'BTN_NM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'BTN_URL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'BTN_ICON')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
