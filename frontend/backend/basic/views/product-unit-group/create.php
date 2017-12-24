<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\backend\basic\models\ProductUnitGroup */

$this->title = 'Create Product Unit Group';
$this->params['breadcrumbs'][] = ['label' => 'Product Unit Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-unit-group-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
