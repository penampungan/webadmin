<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\backend\basic\models\JurnalTemplateTitle */

?>
<div class="jurnal-template-title-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'RPT_TITLE_ID',
            'RPT_TITLE_NM',
            'RPT_GROUP_ID',
            'RPT_GROUP_NM',
            'KETERANGAN:ntext',
        ],
    ]) ?>

</div>
