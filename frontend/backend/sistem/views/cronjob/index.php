<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\backend\sistem\models\CronjobSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cronjobs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cronjob-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cronjob', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'TABEL',
            'ACCESS_GROUP',
            'STORE_ID',
            'UPDATE_TABEL',
            //'UPDATE_CRONJOB',
            //'STT',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
