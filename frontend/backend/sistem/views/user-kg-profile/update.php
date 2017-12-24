<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\backend\sistem\models\UserKgProfile */

$this->title = 'Update User Kg Profile: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'User Kg Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'ID' => $model->ID, 'ACCESS_ID' => $model->ACCESS_ID, 'YEAR_AT' => $model->YEAR_AT, 'MONTH_AT' => $model->MONTH_AT]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-kg-profile-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
