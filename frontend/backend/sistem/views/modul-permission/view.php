<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\backend\sistem\models\ModulPermission */

$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Modul Permissions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modul-permission-view">

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
            'USER_UNIX',
            'MODUL_ID',
            'STATUS',
            'BTN_VIEW',
            'BTN_REVIEW',
            'BTN_CREATE',
            'BTN_EDIT',
            'BTN_DELETE',
            'BTN_SIGN1',
            'BTN_SIGN2',
            'BTN_SIGN3',
            'BTN_SIGN4',
            'BTN_SIGN5',
            'CREATE_BY',
            'CREATE_AT',
            'UPDATE_BY',
            'UPDATE_AT',
        ],
    ]) ?>

</div>
