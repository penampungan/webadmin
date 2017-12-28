<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\backend\sistem\models\UserKg */
?>
<div class="user-kg-view">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            'auth_key:ntext',
            'password_hash',
            'password_reset_token',
            'email:email',
            'status',
            'create_at',
            'updated_at',
            'ACCESS_ID',
            'ACCESS_GROUP',
            'ACCESS_LEVEL',
            'ACCESS_SITE',
            'UUID',
            'ONLINE',
            'ID_GOOGLE',
            'ID_FB',
            'ID_TWITTER',
            'ID_LINKEDIN',
            'ID_YAHOO',
            'TEMPLATE',
            'lft',
            'rgt',
            'lvl',
            'icon',
            'icon_type',
            'YEAR_AT',
            'MONTH_AT',
        ],
    ]) ?>

</div>
