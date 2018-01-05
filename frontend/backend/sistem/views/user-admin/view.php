<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\backend\sistem\models\UserAdmin */

?>
<div class="user-admin-view">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'username',
            'password_hash',
            'email',
            'status',
            'EMP_ID',
            'avatar:ntext',
            'TEMPLATE',
            'avatarImage:ntext',
        ],
    ]) ?>

</div>
