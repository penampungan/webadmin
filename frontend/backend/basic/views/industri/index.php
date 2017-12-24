<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\backend\basic\models\IndustriSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Industris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="industri-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Industri', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'INDUSTRY_ID',
            'INDUSTRY_GRP_ID',
            'INDUSTRY_NM',
            'CREATE_BY',
            'CREATE_AT',
            //'UPDATE_BY',
            //'UPDATE_AT',
            //'STATUS',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
