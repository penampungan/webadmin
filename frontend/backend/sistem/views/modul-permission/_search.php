<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\backend\sistem\models\ModulPermissionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="modul-permission-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'USER_UNIX') ?>

    <?= $form->field($model, 'MODUL_ID') ?>

    <?= $form->field($model, 'STATUS') ?>

    <?= $form->field($model, 'BTN_VIEW') ?>

    <?php // echo $form->field($model, 'BTN_REVIEW') ?>

    <?php // echo $form->field($model, 'BTN_CREATE') ?>

    <?php // echo $form->field($model, 'BTN_EDIT') ?>

    <?php // echo $form->field($model, 'BTN_DELETE') ?>

    <?php // echo $form->field($model, 'BTN_SIGN1') ?>

    <?php // echo $form->field($model, 'BTN_SIGN2') ?>

    <?php // echo $form->field($model, 'BTN_SIGN3') ?>

    <?php // echo $form->field($model, 'BTN_SIGN4') ?>

    <?php // echo $form->field($model, 'BTN_SIGN5') ?>

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
