<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\backend\ppob\models\PpobTransaksi */

$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Ppob Transaksis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ppob-transaksi-view">
<?= DetailView::widget([
        'model' => $model,
        'attributes' => [
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
        ],
    ]) ?>
</div>
