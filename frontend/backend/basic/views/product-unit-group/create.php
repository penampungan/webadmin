<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model frontend\backend\basic\models\ProductUnitGroup */

?>
<div class="product-unit-group-create">

<div class="product-unit-group-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'UNIT_NM_GRP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DCRP_DETIL')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

</div>
