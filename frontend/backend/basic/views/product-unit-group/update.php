<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\backend\basic\models\ProductUnitGroup */

$this->title = 'Update Product Unit Group: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Product Unit Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->UNIT_ID_GRP, 'url' => ['view', 'id' => $model->UNIT_ID_GRP]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="product-unit-group-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
