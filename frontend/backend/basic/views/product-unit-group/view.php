<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\backend\basic\models\ProductUnitGroup */
?>
<div class="product-unit-group-view">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'UNIT_ID_GRP',
            'UNIT_NM_GRP',
            'STATUS',
            'DCRP_DETIL:ntext',
            'CREATE_BY',
            'CREATE_AT',
            'UPDATE_BY',
            'UPDATE_AT',
        ],
    ]) ?>

</div>
