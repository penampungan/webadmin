<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\backend\account\models\DompetRekening */

$this->title = 'Create Dompet Rekening';
$this->params['breadcrumbs'][] = ['label' => 'Dompet Rekenings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dompet-rekening-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
