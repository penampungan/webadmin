<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\backend\account\models\EndUser */

$this->title = 'Update End User: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'End Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->NAME, 'url' => ['view', 'CUSTOMER_ID' => $model->CUSTOMER_ID, 'YEAR_AT' => $model->YEAR_AT, 'MONTH_AT' => $model->MONTH_AT]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="end-user-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
