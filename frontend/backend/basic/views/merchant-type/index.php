<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\backend\basic\models\MerchantTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Merchant Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="merchant-type-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Merchant Type', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'TYPE_PAY_ID',
            'TYPE_PAY_NM',
            'STATUS',
            'DCRP_DETIL:ntext',
            'CREATE_BY',
            //'CREATE_AT',
            //'UPDATE_BY',
            //'UPDATE_AT',
            //'CREATE_UUID',
            //'UPDATE_UUID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
