<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\backend\basic\models\IndustriGroup */

$this->title = 'Update Industri Group: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Industri Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->INDUSTRY_GRP_ID, 'url' => ['view', 'id' => $model->INDUSTRY_GRP_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="industri-group-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
