<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\backend\ppob\models\PpobMasterData */

$this->title = 'Create Ppob Master Data';
$this->params['breadcrumbs'][] = ['label' => 'Ppob Master Datas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ppob-master-data-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
