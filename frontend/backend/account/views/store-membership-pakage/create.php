<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\backend\account\models\StoreMembershipPakage */

?>
<div class="store-membership-pakage-create">

<div class="store-membership-pakage-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'PAKAGE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PAKAGE_PARENT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PAKAGE_NM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PAKAGE_DURATION')->textInput() ?>

    <?= $form->field($model, 'PAKAGE_BONUS')->textInput() ?>

    <?= $form->field($model, 'AFILIASI_KODE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AFILIASI_BONUS')->textInput() ?>

    <?= $form->field($model, 'PAKAGE_PRICE')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

</div>
