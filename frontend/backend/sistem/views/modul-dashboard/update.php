<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\backend\sistem\models\ModulDashboard */

$this->title = 'Update Modul Dashboard: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Modul Dashboards', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'ID' => $model->ID, 'MODUL_ID' => $model->MODUL_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="modul-dashboard-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
