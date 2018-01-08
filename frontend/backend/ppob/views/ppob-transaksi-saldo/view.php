<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\backend\ppob\models\PpobTransaksiSaldo */

$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Ppob Transaksi Saldos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ppob-transaksi-saldo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'ID' => $model->ID, 'STORE_ID' => $model->STORE_ID, 'TRANS_DATE' => $model->TRANS_DATE], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'ID' => $model->ID, 'STORE_ID' => $model->STORE_ID, 'TRANS_DATE' => $model->TRANS_DATE], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

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
