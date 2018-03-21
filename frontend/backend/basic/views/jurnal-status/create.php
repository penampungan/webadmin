<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\backend\basic\models\JurnalStatus */

$this->title = 'Create Jurnal Status';
$this->params['breadcrumbs'][] = ['label' => 'Jurnal Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jurnal-status-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
