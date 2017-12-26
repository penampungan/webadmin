<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\backend\sistem\models\UserKg */

$this->title = 'Update User Kg: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'User Kgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'ACCESS_ID' => $model->ACCESS_ID, 'YEAR_AT' => $model->YEAR_AT, 'MONTH_AT' => $model->MONTH_AT]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-kg-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
