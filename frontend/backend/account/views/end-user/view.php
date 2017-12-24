<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\backend\account\models\EndUser */

$this->title = $model->NAME;
$this->params['breadcrumbs'][] = ['label' => 'End Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="end-user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'CUSTOMER_ID' => $model->CUSTOMER_ID, 'YEAR_AT' => $model->YEAR_AT, 'MONTH_AT' => $model->MONTH_AT], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'CUSTOMER_ID' => $model->CUSTOMER_ID, 'YEAR_AT' => $model->YEAR_AT, 'MONTH_AT' => $model->MONTH_AT], [
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
            'CUSTOMER_ID',
            'ACCESS_GROUP',
            'STORE_ID',
            'NAME',
            'EMAIL:email',
            'PHONE',
            'CREATE_BY',
            'CREATE_AT',
            'UPDATE_BY',
            'UPDATE_AT',
            'STATUS',
            'DCRP_DETIL:ntext',
            'YEAR_AT',
            'MONTH_AT',
        ],
    ]) ?>

</div>
