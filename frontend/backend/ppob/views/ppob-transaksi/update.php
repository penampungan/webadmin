<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\backend\ppob\models\PpobTransaksi */

$this->title = 'Update Ppob Transaksi: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Ppob Transaksis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ppob-transaksi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
