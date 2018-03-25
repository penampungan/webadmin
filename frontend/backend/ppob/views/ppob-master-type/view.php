<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\backend\ppob\models\PpobMasterType */

?>
<div class="ppob-master-type-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'TYPE_ID',
            'TYPE_CODE',
            'TYPE_NM',
            'STATUS',
            'KETERANGAN:ntext',
            'CREATE_BY',
            'CREATE_AT',
            'UPDATE_BY',
            'UPDATE_AT',
        ],
    ]) ?>

</div>
