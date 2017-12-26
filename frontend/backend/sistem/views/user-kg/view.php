<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\backend\sistem\models\UserKg */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'User Kgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-kg-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'ACCESS_ID' => $model->ACCESS_ID, 'YEAR_AT' => $model->YEAR_AT, 'MONTH_AT' => $model->MONTH_AT], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'ACCESS_ID' => $model->ACCESS_ID, 'YEAR_AT' => $model->YEAR_AT, 'MONTH_AT' => $model->MONTH_AT], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

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
