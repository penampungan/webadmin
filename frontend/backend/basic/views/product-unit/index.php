<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\backend\basic\models\ProductUnitSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Product Units';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-unit-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Product Unit', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'UNIT_ID',
            'UNIT_NM',
            'UNIT_ID_GRP',
            'STATUS',
            'DCRP_DETIL:ntext',
            //'CREATE_BY',
            //'CREATE_AT',
            //'UPDATE_BY',
            //'UPDATE_AT',
            //'CREATE_UUID',
            //'UPDATE_UUID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
