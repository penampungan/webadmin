<?php

use yii\helpers\Html;
use kartik\detail\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\backend\sistem\models\UserKg */
?>
<div class="user-kg-view">
    <?= DetailView::widget([
        'id'=>'dv-user-kg-view',
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            'auth_key:ntext',
            'email',
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
            'ID_YAHOO'
        ],
        'hover'=>true,
        'panel'=>[
			'heading'=>'<span class="fa fa-user"><span><b> User Detail</b>',
			'type'=>DetailView::TYPE_INFO,
		],
		'mode'=>DetailView::MODE_VIEW,
    ]) ?>

</div>
