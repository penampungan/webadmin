<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\backend\account\models\EndUser */

?>
<div class="end-user-view">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'CUSTOMER_ID',
            'ACCESS_GROUP',
            'STORE_ID',
            'NAME',
            'EMAIL',
            'PHONE',
            'STATUS',
            'DCRP_DETIL:ntext',
        ],
    ]) ?>

</div>
