<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\backend\sistem\models\ModulPermission */

$this->title = 'Create Modul Permission';
$this->params['breadcrumbs'][] = ['label' => 'Modul Permissions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modul-permission-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
