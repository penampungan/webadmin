<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\backend\ppob\models\PpobMasterHarga */
?>
<div class="ppob-master-harga-view">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'DETAIL_ID',
            'KODE',
            'KETERANGAN',
            'NOMINAL',
            'HARGA1',
            'HARGA2',
            'HARGA3',
            'STATUS',
            'DCRIP:ntext',
            'CREATE_BY',
            'CREATE_AT',
            'UPDATE_BY',
            'UPDATE_AT',
        ],
    ]) ?>

</div>
