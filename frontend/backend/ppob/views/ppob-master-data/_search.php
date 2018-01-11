<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\backend\ppob\models\PpobMasterDataSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ppob-master-data-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_PRODUK') ?>

    <?= $form->field($model, 'TYPE_NM') ?>

    <?= $form->field($model, 'KELOMPOK') ?>

    <?= $form->field($model, 'KTG_ID') ?>

    <?= $form->field($model, 'KTG_NM') ?>

    <?php // echo $form->field($model, 'ID_CODE') ?>

    <?php // echo $form->field($model, 'CODE') ?>

    <?php // echo $form->field($model, 'NAME') ?>

    <?php // echo $form->field($model, 'DENOM') ?>

    <?php // echo $form->field($model, 'HARGA') ?>

    <?php // echo $form->field($model, 'FUNGSI') ?>

    <?php // echo $form->field($model, 'PERMIT') ?>

    <?php // echo $form->field($model, 'STATUS') ?>

    <?php // echo $form->field($model, 'KETERANGAN') ?>

    <?php // echo $form->field($model, 'CREATE_BY') ?>

    <?php // echo $form->field($model, 'CREATE_AT') ?>

    <?php // echo $form->field($model, 'UPDATE_BY') ?>

    <?php // echo $form->field($model, 'UPDATE_AT') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
