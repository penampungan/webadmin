<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\backend\afiliasi\models\Afiliasi */

$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Afiliasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="afiliasi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'CREATE_BY',
            'CREATE_AT',
            'UPDATE_BY',
            'UPDATE_AT',
            'STATUS',
            'ACCESS_UNIX',
            'AFILIASI_KODE',
            'AFILIASI_URL:ntext',
            'PAKAGE',
            'PAKAGE_NM',
            'PAKAGE_DURATION',
            'PAKAGE_PRICE',
        ],
    ]) ?>

</div>
