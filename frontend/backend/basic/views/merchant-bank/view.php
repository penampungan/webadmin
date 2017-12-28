<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\backend\basic\models\MerchantBank */
?>
<div class="merchant-bank-view">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'BANK_ID',
            'BANK_NM',
            'STATUS',
            'DCRP_DETIL:ntext',
            'CREATE_BY',
            'CREATE_AT',
            'UPDATE_BY',
            'UPDATE_AT',
        ],
    ]) ?>

</div>
