<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\backend\ppob\models\PpobMasterKelompok */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ppob-master-kelompok-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'KELOMPOK')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KETERANGAN')->textarea(['rows' => 6]) ?>
    
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
