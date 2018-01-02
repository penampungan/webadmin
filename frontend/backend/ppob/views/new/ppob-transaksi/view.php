<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\backend\ppob\models\PpobTransaksi1 */

$this->title = $model->NAME;
$this->params['breadcrumbs'][] = ['label' => 'Ppob Transaksi1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ppob-transaksi1-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID], [
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
            'TRANS_DATE',
            'TGL',
            'JAM',
            'ACCESS_GROUP',
            'STORE_ID',
            'ID_PRODUK',
            'TYPE_NM',
            'KELOMPOK',
            'KTG_ID',
            'KTG_NM',
            'ID_CODE',
            'CODE',
            'NAME:ntext',
            'DENOM',
            'HARGA_DASAR',
            'MARGIN_FEE_KG',
            'MARGIN_FEE_MEMBER',
            'HARGA_JUAL',
            'PERMIT',
            'FUNGSI',
            'MSISDN',
            'ID_PELANGGAN',
            'PEMBAYARAN',
            'RESPON_REFF_ID',
            'RESPON_NAMA_PELANGGAN',
            'RESPON_ADMIN_BANK',
            'RESPON_TAGIHAN',
            'RESPON_TOTAL_BAYAR',
            'RESPON_MESSAGE:ntext',
            'RESPON_STRUK:ntext',
            'RESPON_TOKEN',
            'STATUS',
            'CREATE_BY',
            'CREATE_AT',
            'UPDATE_BY',
            'UPDATE_AT',
        ],
    ]) ?>

</div>
