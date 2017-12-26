<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\backend\account\models\StoreMembershipSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Store Memberships';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="store-membership-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Store Membership', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'CREATE_BY',
            'CREATE_AT',
            'UPDATE_BY',
            'UPDATE_AT',
            //'STATUS',
            //'ACCESS_GROUP',
            //'STORE_ID',
            //'STORE_NM',
            //'STORE_STATUS',
            //'FAKTURE',
            //'FAKTURE_DATE',
            //'FAKTURE_TEMPO',
            //'PAY_PAKAGE',
            //'PAY_DATE',
            //'PAY_DURATION_ACTIVE',
            //'PAY_DURATION_BONUS',
            //'PAY_TOTAL',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
