<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\backend\ppob\models\PpobMasterKelompok */

?>
<div class="ppob-master-kelompok-view">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'KELOMPOK',
            'STATUS',
            'KETERANGAN:ntext',
            'CREATE_BY',
            'CREATE_AT',
            'UPDATE_BY',
            'UPDATE_AT',
        ],
    ]) ?>

</div>
