<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\backend\sistem\models\UserKgSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-kg-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'auth_key') ?>

    <?= $form->field($model, 'password_hash') ?>

    <?= $form->field($model, 'password_reset_token') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'create_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'ACCESS_ID') ?>

    <?php // echo $form->field($model, 'ACCESS_GROUP') ?>

    <?php // echo $form->field($model, 'ACCESS_LEVEL') ?>

    <?php // echo $form->field($model, 'ACCESS_SITE') ?>

    <?php // echo $form->field($model, 'UUID') ?>

    <?php // echo $form->field($model, 'ONLINE') ?>

    <?php // echo $form->field($model, 'ID_GOOGLE') ?>

    <?php // echo $form->field($model, 'ID_FB') ?>

    <?php // echo $form->field($model, 'ID_TWITTER') ?>

    <?php // echo $form->field($model, 'ID_LINKEDIN') ?>

    <?php // echo $form->field($model, 'ID_YAHOO') ?>

    <?php // echo $form->field($model, 'TEMPLATE') ?>

    <?php // echo $form->field($model, 'lft') ?>

    <?php // echo $form->field($model, 'rgt') ?>

    <?php // echo $form->field($model, 'lvl') ?>

    <?php // echo $form->field($model, 'icon') ?>

    <?php // echo $form->field($model, 'icon_type') ?>

    <?php // echo $form->field($model, 'YEAR_AT') ?>

    <?php // echo $form->field($model, 'MONTH_AT') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
