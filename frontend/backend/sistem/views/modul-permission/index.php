<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\backend\sistem\models\ModulPermissionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Modul Permissions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modul-permission-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Modul Permission', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'USER_UNIX',
            'MODUL_ID',
            'STATUS',
            'BTN_VIEW',
            //'BTN_REVIEW',
            //'BTN_CREATE',
            //'BTN_EDIT',
            //'BTN_DELETE',
            //'BTN_SIGN1',
            //'BTN_SIGN2',
            //'BTN_SIGN3',
            //'BTN_SIGN4',
            //'BTN_SIGN5',
            //'CREATE_BY',
            //'CREATE_AT',
            //'UPDATE_BY',
            //'UPDATE_AT',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
