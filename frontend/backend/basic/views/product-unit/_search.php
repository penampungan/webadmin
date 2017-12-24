<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\backend\basic\models\ProductUnitSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-unit-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'UNIT_ID') ?>

    <?= $form->field($model, 'UNIT_NM') ?>

    <?= $form->field($model, 'UNIT_ID_GRP') ?>

    <?= $form->field($model, 'STATUS') ?>

    <?= $form->field($model, 'DCRP_DETIL') ?>

    <?php // echo $form->field($model, 'CREATE_BY') ?>

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
