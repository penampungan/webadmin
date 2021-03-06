<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model frontend\backend\ppob\models\PpobMasterKtg */
?>
<div class="ppob-master-ktg-update">
    
    <div class="ppob-master-ktg-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'KTG_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KTG_NM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'STATUS')->textInput() ?>

    <?= $form->field($model, 'KETERANGAN')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
</div>
