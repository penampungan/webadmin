<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\backend\sistem\models\SyncPooling */

$this->title = 'Create Sync Pooling';
$this->params['breadcrumbs'][] = ['label' => 'Sync Poolings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sync-pooling-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
