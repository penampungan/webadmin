<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\backend\sistem\models\UserKgProfile */

$this->title = 'Create User Kg Profile';
$this->params['breadcrumbs'][] = ['label' => 'User Kg Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-kg-profile-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
