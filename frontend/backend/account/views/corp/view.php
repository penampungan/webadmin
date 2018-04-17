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
        $datas='User Tidak Mengupload gambar/bukti';
	}	
}
$attributes = [
    [
        'attribute'=>'ACCESS_ID',
        'valueColOptions'=>['style'=>'width:40%'],
    ],
    [
        'attribute'=>'CORP_NM',
        'valueColOptions'=>['style'=>'width:40%'],
        'value'=>$model->CORP_NM,
    ],
    [
        'attribute'=>'ALAMAT',
        'valueColOptions'=>['style'=>'width:40%'],
        'value'=>$model->ALAMAT,
    ],
];
$attributesprofile = [
    [
        'attribute'=>'Nama',
        'valueColOptions'=>['style'=>'width:40%'],
        'value'=>$model->nama,
    ],
    [
        'attribute'=>'Ttl',
        'valueColOptions'=>['style'=>'width:40%'],
        'value'=>$model->Ttl,
    ],
    [
        'attribute'=>'Kontak',
        'valueColOptions'=>['style'=>'width:40%'],
        'value'=>$model->Kontak,
    ],
    [
        'attribute'=>'ALAMAT',
        'valueColOptions'=>['style'=>'width:40%'],
        'value'=>$model->Alamat,
    ],
];
?>
<div class="item-fdiscount-form">
<div class="row">
<div class="col-md-6">
    <?= DetailView::widget([
        'id'=>'dv-data-barang-view',
        'model' => $model,
        'attributes' =>$attributesprofile,
        'hover'=>true,
        'panel'=>[
			'type'=>DetailView::TYPE_INFO,
		],
        'mode'=>DetailView::MODE_VIEW,
        'buttons1'=>'',
		'buttons2'=>'{view}{save}',		
    ]) ;
    ?>

    </div>
<div class="col-md-6">
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
</div>
    </div>
    <div style="margin-top:10px;margin-bottom:10px">
    <?php
    foreach($datas as $data){
        echo $data.'&nbsp&nbsp&nbsp';
    }
    ?>
    </div>
    <div class="text-right">
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
</div>

