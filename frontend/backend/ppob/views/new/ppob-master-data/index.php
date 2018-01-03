<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\backend\ppob\models\PpobMasterDataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ppob Master Datas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ppob-master-data-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ppob Master Data', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_PRODUK',
            'TYPE_NM',
            'KELOMPOK',
            'KTG_ID',
            'KTG_NM',
            //'ID_CODE',
            //'CODE',
            //'NAME:ntext',
            //'DENOM',
            //'HARGA',
            //'FUNGSI',
            //'PERMIT',
            //'STATUS',
            //'KETERANGAN:ntext',
            //'CREATE_BY',
            //'CREATE_AT',
            //'UPDATE_BY',
            //'UPDATE_AT',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
