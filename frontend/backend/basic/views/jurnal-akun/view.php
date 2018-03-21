<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\backend\basic\models\JurnalAkun */

?>
<div class="jurnal-akun-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'AKUN_CODE',
            'AKUN_NM',
            'KTG_CODE',
            'KTG_NM',
            'KETERANGAN:ntext',
        ],
    ]) ?>

</div>
