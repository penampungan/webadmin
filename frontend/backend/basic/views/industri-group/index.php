<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\backend\basic\models\IndustriGroupSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Industri Groups';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="industri-group-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Industri Group', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'INDUSTRY_GRP_ID',
            'INDUSTRY_GRP_NM',
            'CREATE_BY',
            'CREATE_AT',
            'UPDATE_BY',
            //'UPDATE_AT',
            //'STATUS',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
