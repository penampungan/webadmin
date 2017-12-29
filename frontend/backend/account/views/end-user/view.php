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
            'EMAIL:email',
            'PHONE',
            'CREATE_BY',
            'CREATE_AT',
            'UPDATE_BY',
            'UPDATE_AT',
            'STATUS',
            'DCRP_DETIL:ntext',
            'YEAR_AT',
            'MONTH_AT',
        ],
    ]) ?>

</div>
