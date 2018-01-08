<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\backend\ppob\models\PpobTransaksiSaldoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ppob Transaksi Saldos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ppob-transaksi-saldo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ppob Transaksi Saldo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'TRANS_ID',
            'STORE_ID',
            'ACCESS_GROUP',
            'TRANS_DATE',
            //'TGL',
            //'WAKTU',
            //'SALDO_DEPOSIT',
            //'DES_STORE',
            //'SALDO_CURRENT',
            //'SALDO_MUTASI',
            //'SALDO_BACK',
            //'METODE_PEMBAYARAN',
            //'DESTINATION_ACCOUNT_NM',
            //'DESTINATION_ACCOUNT_NO',
            //'SOURCE_ACCOUNT_NM',
            //'SOURCE_ACCOUNT_NO',
            //'EMAIL:email',
            //'KETERANGAN:ntext',
            //'STATUS',
            //'STATUS_NM',
            //'CREATE_BY',
            //'CREATE_AT',
            //'UPDATE_BY',
            //'UPDATE_AT',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
