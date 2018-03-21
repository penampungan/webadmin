<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\backend\ppob\models\PpobTransaksiSaldoMetode */

$this->title = 'Update Ppob Transaksi Saldo Metode: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Ppob Transaksi Saldo Metodes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ppob-transaksi-saldo-metode-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
