<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\backend\sistem\models\ModulDashboardSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Modul Dashboards';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modul-dashboard-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Modul Dashboard', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'MODUL_ID',
            'MODUL_GRP',
            'SORT_PARENT',
            'SORT',
            //'MODUL_STS',
            //'MODUL_NM',
            //'MODUL_DCRP:ntext',
            //'BTN_NM',
            //'BTN_URL:url',
            //'BTN_ICON',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
