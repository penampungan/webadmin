<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\backend\sistem\models\UserKgProfileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Kg Profiles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-kg-profile-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User Kg Profile', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'ACCESS_ID',
            'NM_DEPAN',
            'NM_TENGAH',
            'NM_BELAKANG',
            //'KTP',
            //'ALMAT:ntext',
            //'LAHIR_TEMPAT',
            //'LAHIR_TGL',
            //'LAHIR_GENDER',
            //'HP',
            //'EMAIL:email',
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
