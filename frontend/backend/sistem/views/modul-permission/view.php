<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\backend\sistem\models\ModulPermission */

?>
<div class="modul-permission-view">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'USER_UNIX',
            'MODUL_ID',
            'STATUS',
            'BTN_VIEW',
            'BTN_REVIEW',
            'BTN_CREATE',
            'BTN_EDIT',
            'BTN_DELETE',
            'BTN_SIGN1',
            'BTN_SIGN2',
            'BTN_SIGN3',
            'BTN_SIGN4',
            'BTN_SIGN5',
            'CREATE_BY',
            'CREATE_AT',
            'UPDATE_BY',
            'UPDATE_AT',
        ],
    ]) ?>

</div>
