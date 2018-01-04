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
            'PAKAGE',
            'PAKAGE_PARENT',
            'PAKAGE_NM',
            'PAKAGE_DURATION',
            'PAKAGE_BONUS',
            'AFILIASI_KODE',
            'AFILIASI_BONUS',
            'PAKAGE_PRICE',
            'STATUS',
        ],
    ]) ?>

</div>
