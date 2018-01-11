<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\backend\ppob\models\PpobTransaksi1Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ppob Transaksi1s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ppob-transaksi1-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ppob Transaksi1', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'TRANS_ID',
            'TRANS_DATE',
            'TGL',
            'JAM',
            //'ACCESS_GROUP',
            //'STORE_ID',
            //'ID_PRODUK',
            //'TYPE_NM',
            //'KELOMPOK',
            //'KTG_ID',
            //'KTG_NM',
            //'ID_CODE',
            //'CODE',
            //'NAME:ntext',
            //'DENOM',
            //'HARGA_DASAR',
            //'MARGIN_FEE_KG',
            //'MARGIN_FEE_MEMBER',
            //'HARGA_JUAL',
            //'PERMIT',
            //'FUNGSI',
            //'MSISDN',
            //'ID_PELANGGAN',
            //'PEMBAYARAN',
            //'RESPON_REFF_ID',
            //'RESPON_NAMA_PELANGGAN',
            //'RESPON_ADMIN_BANK',
            //'RESPON_TAGIHAN',
            //'RESPON_TOTAL_BAYAR',
            //'RESPON_MESSAGE:ntext',
            //'RESPON_STRUK:ntext',
            //'RESPON_TOKEN',
            //'STATUS',
            //'CREATE_BY',
            //'CREATE_AT',
            //'UPDATE_BY',
            //'UPDATE_AT',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
