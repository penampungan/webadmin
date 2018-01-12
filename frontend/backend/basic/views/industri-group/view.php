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
            'INDUSTRY_GRP_NM',
            'STATUS',
        ],
    ]) ?>

</div>
