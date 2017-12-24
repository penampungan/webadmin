<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\backend\account\models\EndUser */

$this->title = 'Create End User';
$this->params['breadcrumbs'][] = ['label' => 'End Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="end-user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
