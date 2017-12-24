<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\backend\basic\models\MerchantTypeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="merchant-type-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'TYPE_PAY_ID') ?>

    <?= $form->field($model, 'TYPE_PAY_NM') ?>

    <?= $form->field($model, 'STATUS') ?>

    <?= $form->field($model, 'DCRP_DETIL') ?>

    <?= $form->field($model, 'CREATE_BY') ?>

    <?php // echo $form->field($model, 'CREATE_AT') ?>

    <?php // echo $form->field($model, 'UPDATE_BY') ?>

    <?php // echo $form->field($model, 'UPDATE_AT') ?>

    <?php // echo $form->field($model, 'CREATE_UUID') ?>

    <?php // echo $form->field($model, 'UPDATE_UUID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
