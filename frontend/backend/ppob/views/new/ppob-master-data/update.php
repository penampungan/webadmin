<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\backend\ppob\models\PpobMasterData */

$this->title = 'Update Ppob Master Data: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Ppob Master Datas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->NAME, 'url' => ['view', 'id' => $model->ID_PRODUK]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ppob-master-data-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
