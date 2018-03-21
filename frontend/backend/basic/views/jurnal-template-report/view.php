<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\backend\basic\models\JurnalTemplateReport */

?>
<div class="jurnal-template-report-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'RPT_GROUP__ID',
            'RPT_GROUP_NM',
            'KETERANGAN:ntext',
        ],
    ]) ?>

</div>
