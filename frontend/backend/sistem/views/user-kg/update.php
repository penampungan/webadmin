<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\backend\sistem\models\UserKg */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-kg-update">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'auth_key')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'password_hash')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password_reset_token')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'create_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'ACCESS_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ACCESS_GROUP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ACCESS_LEVEL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ACCESS_SITE')->textInput() ?>

    <?= $form->field($model, 'UUID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ONLINE')->textInput() ?>

    <?= $form->field($model, 'ID_GOOGLE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_FB')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_TWITTER')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_LINKEDIN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_YAHOO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TEMPLATE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lft')->textInput() ?>

    <?= $form->field($model, 'rgt')->textInput() ?>

    <?= $form->field($model, 'lvl')->textInput() ?>

    <?= $form->field($model, 'icon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'icon_type')->textInput() ?>

    <?= $form->field($model, 'YEAR_AT')->textInput() ?>

    <?= $form->field($model, 'MONTH_AT')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
