<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\backend\account\models\EndUserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'End Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="end-user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create End User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'CUSTOMER_ID',
            'ACCESS_GROUP',
            'STORE_ID',
            'NAME',
            'EMAIL:email',
            //'PHONE',
            //'CREATE_BY',
            //'CREATE_AT',
            //'UPDATE_BY',
            //'UPDATE_AT',
            //'STATUS',
            //'DCRP_DETIL:ntext',
            //'YEAR_AT',
            //'MONTH_AT',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
