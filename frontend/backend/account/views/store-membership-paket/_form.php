<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\money\MaskMoney;

/* @var $this yii\web\View */
/* @var $model frontend\backend\account\models\StoreMembershipPaket */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="store-membership-paket-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'PAKET_GROUP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PAKET_NM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PAKET_DURATION')->textInput()->textInput(['type'=>'number','min'=>1,'max'=>31,'allowEmpty' => true,'integerOnly' => false])  ?>

    <?= $form->field($model, 'PAKET_DURATION_BONUS')->textInput()->textInput(['type'=>'number','min'=>1,'max'=>30,'allowEmpty' => true,'integerOnly' => false])  ?>

    <?= $form->field($model, 'HARGA_BULAN')->widget(MaskMoney::classname(), [
                'options' => ['placeholder' => 'Harga Barang ...'],
                'pluginOptions'=>[
                    'prefix'=>'Rp ',
                    'precision' => 0
                ],
            ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
