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
            'ID',
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
            'EMAIL:email',
            'CREATE_BY',
            'CREATE_AT',
            'UPDATE_BY',
            'UPDATE_AT',
            'STATUS',
            'DCRP_DETIL:ntext',
            'YEAR_AT',
            'MONTH_AT',
        ],
    ]) ?>

</div>
