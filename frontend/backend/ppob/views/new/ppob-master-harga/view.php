<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\backend\ppob\models\PpobMasterHarga1 */

$this->title = $model->NAME;
$this->params['breadcrumbs'][] = ['label' => 'Ppob Master Harga1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ppob-master-harga1-view">

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
            'HARGA_BARU',
            'TGL_AKTIF',
            'HARGA_DASAR',
            'MARGIN_FEE_KG',
            'MARGIN_FEE_MEMBER',
            'HARGA_JUAL',
            'PERMIT',
            'FUNGSI',
            'STATUS',
            'KETERANGAN:ntext',
            'CREATE_BY',
            'CREATE_AT',
            'UPDATE_BY',
            'UPDATE_AT',
        ],
    ]) ?>

</div>
