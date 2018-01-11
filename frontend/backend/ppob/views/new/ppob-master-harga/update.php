<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\backend\ppob\models\PpobMasterHarga1 */

$this->title = 'Update Ppob Master Harga1: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Ppob Master Harga1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->NAME, 'url' => ['view', 'id' => $model->ID_PRODUK]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ppob-master-harga1-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
