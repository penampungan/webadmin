<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\backend\basic\models\JurnalStatusSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jurnal-status-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'STT_PAY') ?>

    <?= $form->field($model, 'STT_PAY_NM') ?>

    <?= $form->field($model, 'KETERANGAN') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
