<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model frontend\backend\ppob\models\PpobMasterHarga */

?>
<div class="ppob-master-harga-update">

<div class="ppob-master-harga-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'MARGIN_FEE_KG')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MARGIN_FEE_MEMBER')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
