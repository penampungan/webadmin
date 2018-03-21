<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\backend\basic\models\JurnalKategori */

$this->title = 'Create Jurnal Kategori';
$this->params['breadcrumbs'][] = ['label' => 'Jurnal Kategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jurnal-kategori-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
