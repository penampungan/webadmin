<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\backend\basic\models\ProductUnit */

$this->title = 'Update Product Unit: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Product Units', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->UNIT_ID, 'url' => ['view', 'id' => $model->UNIT_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="product-unit-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
