<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\backend\basic\models\Industri */

$this->title = $model->INDUSTRY_ID;
$this->params['breadcrumbs'][] = ['label' => 'Industris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="industri-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'INDUSTRY_GRP_ID',
            'INDUSTRY_NM',
            'STATUS',
        ],
    ]) ?>

</div>
