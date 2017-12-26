<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\backend\sistem\models\ModulDashboard */

$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Modul Dashboards', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modul-dashboard-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'ID' => $model->ID, 'MODUL_ID' => $model->MODUL_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'ID' => $model->ID, 'MODUL_ID' => $model->MODUL_ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'MODUL_ID',
            'MODUL_GRP',
            'SORT_PARENT',
            'SORT',
            'MODUL_STS',
            'MODUL_NM',
            'MODUL_DCRP:ntext',
            'BTN_NM',
            'BTN_URL:url',
            'BTN_ICON',
        ],
    ]) ?>

</div>
