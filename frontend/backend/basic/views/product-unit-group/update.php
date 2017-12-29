<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model frontend\backend\basic\models\ProductUnitGroup */

$this->title = 'Create Product Unit Group';
$this->params['breadcrumbs'][] = ['label' => 'Product Unit Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-unit-group-update">

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
