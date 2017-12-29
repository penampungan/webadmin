<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\backend\sistem\models\Cronjob */
?>
<div class="cronjob-update">

<div class="cronjob-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TABEL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ACCESS_GROUP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'STORE_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UPDATE_TABEL')->textInput() ?>

    <?= $form->field($model, 'UPDATE_CRONJOB')->textInput() ?>

    <?= $form->field($model, 'STT')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
