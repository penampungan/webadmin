<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\backend\basic\models\Industri */

$this->title = 'Update Industri: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Industris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->INDUSTRY_ID, 'url' => ['view', 'id' => $model->INDUSTRY_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="industri-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
