<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\backend\sistem\models\SyncPooling */

$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Sync Poolings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sync-pooling-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID], [
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
            'ID',
            'NM_TABLE',
            'PRIMARIKEY_NM:ntext',
            'PRIMARIKEY_VAL:ntext',
            'PRIMARIKEY_ID:ntext',
            'TYPE_ACTION',
            'ACCESS_GROUP',
            'STORE_ID',
            'ARY_UUID:ntext',
            'ARY_PLAYERID:ntext',
            'STATUS',
            'CREATE_BY',
            'CREATE_AT',
            'UPDATE_BY',
            'UPDATE_AT',
        ],
    ]) ?>

</div>
