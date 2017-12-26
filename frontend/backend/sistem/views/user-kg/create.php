<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\backend\sistem\models\UserKg */

$this->title = 'Create User Kg';
$this->params['breadcrumbs'][] = ['label' => 'User Kgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-kg-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
