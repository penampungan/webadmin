<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\backend\basic\models\ProductUnit */
?>
<div class="product-unit-view">
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
