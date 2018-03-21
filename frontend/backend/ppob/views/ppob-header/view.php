<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\backend\ppob\models\PpobHeader */

?>
<div class="ppob-header-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'HEADER_ID',
            'HEADER_NM',
            'HEADER_DCRP:ntext',
            'STATUS',
            'CREATE_BY',
            'CREATE_AT',
            'UPDATE_BY',
            'UPDATE_AT',
        ],
    ]) ?>

</div>
