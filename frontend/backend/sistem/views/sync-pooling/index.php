<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\backend\sistem\models\SyncPoolingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sync Poolings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sync-pooling-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sync Pooling', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'NM_TABLE',
            'PRIMARIKEY_NM:ntext',
            'PRIMARIKEY_VAL:ntext',
            'PRIMARIKEY_ID:ntext',
            //'TYPE_ACTION',
            //'ACCESS_GROUP',
            //'STORE_ID',
            //'ARY_UUID:ntext',
            //'ARY_PLAYERID:ntext',
            //'STATUS',
            //'CREATE_BY',
            //'CREATE_AT',
            //'UPDATE_BY',
            //'UPDATE_AT',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
