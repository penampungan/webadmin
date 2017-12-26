<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\backend\sistem\models\ModulDashboardSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="modul-dashboard-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'MODUL_ID') ?>

    <?= $form->field($model, 'MODUL_GRP') ?>

    <?= $form->field($model, 'SORT_PARENT') ?>

    <?= $form->field($model, 'SORT') ?>

    <?php // echo $form->field($model, 'MODUL_STS') ?>

    <?php // echo $form->field($model, 'MODUL_NM') ?>

    <?php // echo $form->field($model, 'MODUL_DCRP') ?>

    <?php // echo $form->field($model, 'BTN_NM') ?>

    <?php // echo $form->field($model, 'BTN_URL') ?>

    <?php // echo $form->field($model, 'BTN_ICON') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
