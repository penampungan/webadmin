<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model frontend\backend\account\models\StoreMembership */
?>
<div class="store-membership-update">

    
<div class="store-membership-form">

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'ACCESS_GROUP')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'STORE_ID')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'STORE_NM')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'STORE_STATUS')->textInput() ?>

<?= $form->field($model, 'FAKTURE')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'FAKTURE_DATE')->textInput() ?>

<?= $form->field($model, 'FAKTURE_TEMPO')->textInput() ?>

<?= $form->field($model, 'PAY_PAKAGE')->textInput() ?>

<?= $form->field($model, 'PAY_DATE')->textInput() ?>

<?= $form->field($model, 'PAY_DURATION_ACTIVE')->textInput() ?>

<?= $form->field($model, 'PAY_DURATION_BONUS')->textInput() ?>

<?= $form->field($model, 'PAY_TOTAL')->textInput(['maxlength' => true]) ?>

<div class="form-group">
    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>

</div>

</div>
