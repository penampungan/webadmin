<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\backend\ppob\models\PpobMasterTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ppob Master Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ppob-master-type-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ppob Master Type', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'TYPE_ID',
            'TYPE_CODE',
            'TYPE_NM',
            'STATUS',
            'KETERANGAN:ntext',
            //'CREATE_BY',
            //'CREATE_AT',
            //'UPDATE_BY',
            //'UPDATE_AT',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
