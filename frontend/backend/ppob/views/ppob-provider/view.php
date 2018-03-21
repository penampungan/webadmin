<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\backend\ppob\models\PpobProvider */

?>
<div class="ppob-provider-view">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'PROVIDER_ID',
            'PROVIDER_NM',
            'PROVIDER_DCRP:ntext',
            'STATUS',
        ],
    ]) ?>

</div>
