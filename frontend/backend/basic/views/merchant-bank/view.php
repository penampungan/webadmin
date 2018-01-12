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
            'BANK_NM',
            'DCRP_DETIL:ntext',
            'STATUS',
        ],
    ]) ?>

</div>
