<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\backend\ppob\models\PpobMasterData */
?>
<div class="ppob-master-data-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID_PRODUK',
            'TYPE_NM',
            'KELOMPOK',
            'KTG_ID',
            'KTG_NM',
            'ID_CODE',
            'CODE',
            'NAME:ntext',
            'DENOM',
            'HARGA',
            'FUNGSI',
            'PERMIT',
            'STATUS',
            'KETERANGAN:ntext',
            'CREATE_BY',
            'CREATE_AT',
            'UPDATE_BY',
            'UPDATE_AT',
        ],
    ]) ?>

</div>
