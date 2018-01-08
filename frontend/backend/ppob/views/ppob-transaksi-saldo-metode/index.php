<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\backend\ppob\models\PpobTransaksiSaldoMetodeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ppob Transaksi Saldo Metodes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ppob-transaksi-saldo-metode-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ppob Transaksi Saldo Metode', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'METODE_PEMBAYARAN',
            'DESTINATION_ACCOUNT_NM',
            'DESTINATION_ACCOUNT_NO',
            'KETERANGAN:ntext',
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
