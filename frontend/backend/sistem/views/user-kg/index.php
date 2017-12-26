<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\backend\sistem\models\UserKgSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Kgs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-kg-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User Kg', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'auth_key:ntext',
            'password_hash',
            'password_reset_token',
            //'email:email',
            //'status',
            //'create_at',
            //'updated_at',
            //'ACCESS_ID',
            //'ACCESS_GROUP',
            //'ACCESS_LEVEL',
            //'ACCESS_SITE',
            //'UUID',
            //'ONLINE',
            //'ID_GOOGLE',
            //'ID_FB',
            //'ID_TWITTER',
            //'ID_LINKEDIN',
            //'ID_YAHOO',
            //'TEMPLATE',
            //'lft',
            //'rgt',
            //'lvl',
            //'icon',
            //'icon_type',
            //'YEAR_AT',
            //'MONTH_AT',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
