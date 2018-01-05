<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\backend\sistem\models\UserKgProfile */
?>
<div class="user-kg-profile-view">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ACCESS_ID',
            'NM_DEPAN',
            'NM_TENGAH',
            'NM_BELAKANG',
            'KTP',
            'ALMAT:ntext',
            'LAHIR_TEMPAT',
            'LAHIR_TGL',
            'LAHIR_GENDER',
            'HP',
            'EMAIL',
            'DCRP_DETIL:ntext',
        ],
    ]) ?>

</div>
