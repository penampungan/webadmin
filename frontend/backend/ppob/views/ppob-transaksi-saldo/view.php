<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\backend\ppob\models\PpobTransaksiSaldo */
?>
<div class="ppob-transaksi-saldo-view">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'TRANS_ID',
            'STORE_ID',
            'ACCESS_GROUP',
            'TRANS_DATE',
            'TGL',
            'WAKTU',
            'SALDO_DEPOSIT',
            'DES_STORE',
            'SALDO_CURRENT',
            'SALDO_MUTASI',
            'SALDO_BACK',
            'METODE_PEMBAYARAN',
            'DESTINATION_ACCOUNT_NM',
            'DESTINATION_ACCOUNT_NO',
            'SOURCE_ACCOUNT_NM',
            'SOURCE_ACCOUNT_NO',
            'EMAIL:email',
            'KETERANGAN:ntext',
            'STATUS',
            'STATUS_NM',
            'CREATE_BY',
            'CREATE_AT',
            'UPDATE_BY',
            'UPDATE_AT',
        ],
    ]) ?>

</div>
