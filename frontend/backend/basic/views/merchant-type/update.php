<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\backend\basic\models\MerchantType */

$this->title = 'Update Merchant Type: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Merchant Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->TYPE_PAY_ID, 'url' => ['view', 'id' => $model->TYPE_PAY_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="merchant-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
