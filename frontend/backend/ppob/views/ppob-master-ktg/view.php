<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\backend\ppob\models\PpobMasterKtg */

$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Ppob Master Ktgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ppob-master-ktg-view">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'KTG_ID',
            'KTG_NM',
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
