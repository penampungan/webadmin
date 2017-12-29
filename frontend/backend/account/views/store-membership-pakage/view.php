<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\backend\account\models\StoreMembershipPakage */

?>
<div class="store-membership-pakage-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'CREATE_BY',
            'CREATE_AT',
            'UPDATE_BY',
            'UPDATE_AT',
            'STATUS',
            'PAKAGE',
            'PAKAGE_PARENT',
            'PAKAGE_NM',
            'PAKAGE_DURATION',
            'PAKAGE_BONUS',
            'AFILIASI_KODE',
            'AFILIASI_BONUS',
            'PAKAGE_PRICE',
        ],
    ]) ?>

</div>
