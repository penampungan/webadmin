
<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
/* @var $this yii\web\View */
/* @var $model app\backend\master\models\ItemFdiscount */
/* @var $form yii\widgets\ActiveForm */
$data=unserialize($model->gambar);
foreach ($data as $key) {
    if (!empty($key)) {
        $datas[]='<img src="'.$key.'" alt="Your Avatar" style="width:160px;align:center">';
	} else {
        $datas='<img src="https://www.mautic.org/media/images/default_avatar.png" alt="Your Avatar" style="width:160px;align:center">';
	}	
}
$attributes = [
    [
        'attribute'=>'NAMA_LENGKAP',
        'valueColOptions'=>['style'=>'width:40%'],
    ],
    [
        'attribute'=>'BANK',
        'valueColOptions'=>['style'=>'width:40%'],
        'value'=>$model->BANK,
    ],
    [
        'attribute'=>'NO_REK',
        'valueColOptions'=>['style'=>'width:40%'],
        'value'=>$model->NO_REK,
    ],
    [
        'attribute'=>'TLP',
        'valueColOptions'=>['style'=>'width:40%'],
        'value'=>$model->TLP,
    ],
    [
        'attribute'=>'ALAMAT',
        'valueColOptions'=>['style'=>'width:40%'],
        'value'=>$model->ALAMAT,
    ],
];
?>
<div class="item-fdiscount-form">
    <?= DetailView::widget([
        'id'=>'dv-data-barang-view',
        'model' => $model,
        'attributes' =>$attributes,
        'hover'=>true,
        'panel'=>[
			'type'=>DetailView::TYPE_INFO,
		],
        'mode'=>DetailView::MODE_VIEW,
        'buttons1'=>'',
		'buttons2'=>'{view}{save}',		
    ]) ;
    ?>
    <div style="margin:10px">
    <?php
    foreach($datas as $data){
        echo $data.'&nbsp&nbsp&nbsp';
    }
    ?>
    </div>
    <?= Html::a('Pending', ['pending', 'id' => $model->ID], ['class' => 'btn btn-warning']) ?>
    <?= Html::a('Success', ['success', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
    <?= Html::a('Delete', ['delete', 'id' => $model->ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
</div>
