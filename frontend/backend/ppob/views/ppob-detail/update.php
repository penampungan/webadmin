<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\backend\ppob\models\PpobDetail */

?>
<div class="ppob-detail-update">

<div class="ppob-detail-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'DETAIL_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'HEADER_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PROVIDER_ID')->textInput() ?>

    <?= $form->field($model, 'DETAIL_NM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PROVIDER_NM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DETAIL_DCRP')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

</div>
