<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\backend\ppob\models\PpobSaldoStore */

$this->title = 'Create Ppob Saldo Store';
$this->params['breadcrumbs'][] = ['label' => 'Ppob Saldo Stores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ppob-saldo-store-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
