<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\backend\account\models\StoreMembership */

$this->title = 'Create Store Membership';
$this->params['breadcrumbs'][] = ['label' => 'Store Memberships', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="store-membership-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
