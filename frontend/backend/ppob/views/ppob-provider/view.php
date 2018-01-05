<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\backend\ppob\models\PpobProvider */

$this->title = $model->PROVIDER_ID;
$this->params['breadcrumbs'][] = ['label' => 'Ppob Providers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
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
