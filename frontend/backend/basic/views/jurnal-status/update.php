<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\backend\basic\models\JurnalStatus */

$this->title = 'Update Jurnal Status: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Jurnal Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->STT_PAY, 'url' => ['view', 'id' => $model->STT_PAY]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jurnal-status-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
