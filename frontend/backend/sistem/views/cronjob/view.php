<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\backend\sistem\models\Cronjob */

?>
<div class="cronjob-view">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'TABEL',
            'ACCESS_GROUP',
            'STORE_ID',
            'UPDATE_TABEL',
            'UPDATE_CRONJOB',
            'STT',
        ],
    ]) ?>

</div>
