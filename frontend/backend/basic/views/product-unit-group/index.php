<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\backend\basic\models\ProductUnitGroupSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Product Unit Groups';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-unit-group-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Product Unit Group', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'UNIT_ID_GRP',
            'UNIT_NM_GRP',
            'STATUS',
            'DCRP_DETIL:ntext',
            'CREATE_BY',
            //'CREATE_AT',
            //'UPDATE_BY',
            //'UPDATE_AT',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
