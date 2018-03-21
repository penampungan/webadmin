<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\backend\basic\models\JurnalKategori */
?>
<div class="jurnal-kategori-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'KTG_CODE',
            'KTG_NM',
            'KETERANGAN:ntext',
        ],
    ]) ?>

</div>
