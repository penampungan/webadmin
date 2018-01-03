<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\backend\ppob\models\PpobMasterData */

$this->title = $model->NAME;
$this->params['breadcrumbs'][] = ['label' => 'Ppob Master Datas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ppob-master-data-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID_PRODUK], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID_PRODUK], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID_PRODUK',
            'TYPE_NM',
            'KELOMPOK',
            'KTG_ID',
            'KTG_NM',
            'ID_CODE',
            'CODE',
            'NAME:ntext',
            'DENOM',
            'HARGA',
            'FUNGSI',
            'PERMIT',
            'STATUS',
            'KETERANGAN:ntext',
            'CREATE_BY',
            'CREATE_AT',
            'UPDATE_BY',
            'UPDATE_AT',
        ],
    ]) ?>

</div>
