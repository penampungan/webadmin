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
            'ID',
            'TRANS_ID',
            'TRANS_DATE',
            'ACCESS_GROUP',
            'STORE_ID',
            'DETAIL_ID',
            'KODE',
            'NUMBER_ID',
            'KETERANGAN',
            'NOMINAL',
            'HARGA_KG',
            'HARGA_JUAL',
            'QTY',
            'STATUS',
            'CREATE_BY',
            'CREATE_AT',
            'UPDATE_BY',
            'UPDATE_AT',
        ],
    ]) ?>

</div>
