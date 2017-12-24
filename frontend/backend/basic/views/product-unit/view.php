<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\backend\basic\models\ProductUnit */

$this->title = $model->UNIT_ID;
$this->params['breadcrumbs'][] = ['label' => 'Product Units', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-unit-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->UNIT_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->UNIT_ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'UNIT_ID',
            'UNIT_NM',
            'UNIT_ID_GRP',
            'STATUS',
            'DCRP_DETIL:ntext',
            'CREATE_BY',
            'CREATE_AT',
            'UPDATE_BY',
            'UPDATE_AT',
            'CREATE_UUID',
            'UPDATE_UUID',
        ],
    ]) ?>

</div>
