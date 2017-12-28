<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\backend\sistem\models\SyncPooling */

?>
<div class="sync-pooling-view">
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
