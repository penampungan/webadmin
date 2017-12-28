<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\backend\account\models\StoreMembership */

?>
<div class="store-membership-view">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'CREATE_BY',
            'CREATE_AT',
            'UPDATE_BY',
            'UPDATE_AT',
            'STATUS',
            'ACCESS_GROUP',
            'STORE_ID',
            'STORE_NM',
            'STORE_STATUS',
            'FAKTURE',
            'FAKTURE_DATE',
            'FAKTURE_TEMPO',
            'PAY_PAKAGE',
            'PAY_DATE',
            'PAY_DURATION_ACTIVE',
            'PAY_DURATION_BONUS',
            'PAY_TOTAL',
        ],
    ]) ?>

</div>
