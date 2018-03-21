<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\backend\ppob\models\PpobDetail */
?>
<div class="ppob-detail-view">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'DETAIL_ID',
            'HEADER_ID',
            'PROVIDER_ID',
            'DETAIL_NM',
            'PROVIDER_NM',
            'DETAIL_DCRP:ntext',
            'STATUS',
        ],
    ]) ?>

</div>
