<?php

use yii\helpers\Html;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use kartik\widgets\ActiveForm;
use frontend\backend\basic\models\JurnalKategori;

/* @var $this yii\web\View */
/* @var $model frontend\backend\basic\models\JurnalAkun */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jurnal-akun-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'KTG_CODE')->widget(Select2::classname(),[
            'data'=>ArrayHelper::map(JurnalKategori::find()->all(),'KTG_CODE','KTG_NM'),'language' => 'en',
            'options' => ['placeholder'=>'Select Group....'],
            'pluginOptions' => [
                'allowClear' => true
            ], 
        ]) ?>
    <?= $form->field($model, 'AKUN_NM')->textInput(['maxlength' => true])->label('NAMA AKUN') ?>

    <?= $form->field($model, 'KETERANGAN')->textarea(['rows' => 6])->label('KETERANGAN') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
