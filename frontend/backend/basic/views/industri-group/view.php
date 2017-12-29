<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\backend\basic\models\IndustriGroup */

$this->title = $model->INDUSTRY_GRP_ID;
$this->params['breadcrumbs'][] = ['label' => 'Industri Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="industri-group-view">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'INDUSTRY_GRP_ID',
            'INDUSTRY_GRP_NM',
            'CREATE_BY',
            'CREATE_AT',
            'UPDATE_BY',
            'UPDATE_AT',
            'STATUS',
        ],
    ]) ?>

</div>
