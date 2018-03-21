<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\backend\basic\models\JurnalStatus */
?>
<div class="jurnal-status-view">


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'STT_PAY',
            'STT_PAY_NM',
            'KETERANGAN:ntext',
        ],
    ]) ?>

</div>
