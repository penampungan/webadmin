<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\backend\basic\models\MerchantBank */

$this->title = 'Update Merchant Bank: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Merchant Banks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->BANK_ID, 'url' => ['view', 'id' => $model->BANK_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="merchant-bank-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
