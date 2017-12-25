<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\backend\account\models\StoreMembershipPakage */

$this->title = 'Create Store Membership Pakage';
$this->params['breadcrumbs'][] = ['label' => 'Store Membership Pakages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="store-membership-pakage-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
