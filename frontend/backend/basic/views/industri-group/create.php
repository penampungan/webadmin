<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\backend\basic\models\IndustriGroup */

$this->title = 'Create Industri Group';
$this->params['breadcrumbs'][] = ['label' => 'Industri Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="industri-group-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
