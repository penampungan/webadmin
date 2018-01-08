<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\backend\ppob\models\PpobTransaksiSaldo */

$this->title = 'Update Ppob Transaksi Saldo: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Ppob Transaksi Saldos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'ID' => $model->ID, 'STORE_ID' => $model->STORE_ID, 'TRANS_DATE' => $model->TRANS_DATE]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ppob-transaksi-saldo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
