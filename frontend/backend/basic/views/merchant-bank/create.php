<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\backend\basic\models\MerchantBank */

$this->title = 'Create Merchant Bank';
$this->params['breadcrumbs'][] = ['label' => 'Merchant Banks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="merchant-bank-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
