<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\backend\sistem\models\SyncPoolingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sync-pooling-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'NM_TABLE') ?>

    <?= $form->field($model, 'PRIMARIKEY_NM') ?>

    <?= $form->field($model, 'PRIMARIKEY_VAL') ?>

    <?= $form->field($model, 'PRIMARIKEY_ID') ?>

    <?php // echo $form->field($model, 'TYPE_ACTION') ?>

    <?php // echo $form->field($model, 'ACCESS_GROUP') ?>

    <?php // echo $form->field($model, 'STORE_ID') ?>

    <?php // echo $form->field($model, 'ARY_UUID') ?>

    <?php // echo $form->field($model, 'ARY_PLAYERID') ?>

    <?php // echo $form->field($model, 'STATUS') ?>

    <?php // echo $form->field($model, 'CREATE_BY') ?>

    <?php // echo $form->field($model, 'CREATE_AT') ?>

    <?php // echo $form->field($model, 'UPDATE_BY') ?>

    <?php // echo $form->field($model, 'UPDATE_AT') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
