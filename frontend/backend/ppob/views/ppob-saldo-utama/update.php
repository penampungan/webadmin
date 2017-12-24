<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\backend\ppob\models\PpobSaldoUtama */

$this->title = 'Update Ppob Saldo Utama: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Ppob Saldo Utamas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ppob-saldo-utama-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
