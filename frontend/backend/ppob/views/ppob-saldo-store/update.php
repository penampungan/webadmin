<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\backend\ppob\models\PpobSaldoStore */

$this->title = 'Update Ppob Saldo Store: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Ppob Saldo Stores', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ppob-saldo-store-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
