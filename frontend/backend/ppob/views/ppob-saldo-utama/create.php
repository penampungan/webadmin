<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\backend\ppob\models\PpobSaldoUtama */

$this->title = 'Create Ppob Saldo Utama';
$this->params['breadcrumbs'][] = ['label' => 'Ppob Saldo Utamas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ppob-saldo-utama-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
