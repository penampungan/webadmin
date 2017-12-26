<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\backend\account\models\StoreMembershipPakage */

$this->title = 'Update Store Membership Pakage: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Store Membership Pakages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="store-membership-pakage-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
