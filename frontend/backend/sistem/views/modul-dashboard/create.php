<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\backend\sistem\models\ModulDashboard */

$this->title = 'Create Modul Dashboard';
$this->params['breadcrumbs'][] = ['label' => 'Modul Dashboards', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modul-dashboard-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
