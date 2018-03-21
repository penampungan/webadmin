<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\backend\account\models\StoreMembershipPaket */

?>
<div class="store-membership-paket-view">


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'PAKET_ID',
            'PAKET_GROUP',
            'PAKET_NM',
            'PAKET_DURATION',
            'PAKET_DURATION_BONUS',
            'HARGA_BULAN',
            'HARGA_HARI',
            'HARGA_PAKET',
            'HARGA_PAKET_HARI',
        ],
    ]) ?>

</div>
