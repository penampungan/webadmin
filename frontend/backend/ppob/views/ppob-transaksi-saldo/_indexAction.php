<?php
use kartik\helpers\Html;
use kartik\detail\DetailView;
use kartik\widgets\DepDrop;
use yii\helpers\Url;
use kartik\widgets\Select2;
use yii\helpers\ArrayHelper;
use kartik\widgets\FileInput;
use kartik\widgets\ActiveField;
use kartik\widgets\ActiveForm;

$indexTransaksiSaldo=$this->render('_indexTransaksiSaldo',[
    'searchModel' => $searchModel,
    'dataProvider' => $dataProvider,
]);


	$attSroreData=[	
		[
			'attribute' =>'TRANS_ID',
			'labelColOptions' => ['style' => 'text-align:right;width: 30%'],
			'displayOnly'=>true,	
			'format'=>'raw', 
    	]	
	];
	
	$attSroreInfo=[
		[
            'attribute' =>'STORE_ID',
            'labelColOptions' => ['style' => 'text-align:right;width: 30%'],
			'displayOnly'=>true,	
			'format'=>'raw', 
		],
	];
		
	
	
	$dvStoreData=DetailView::widget([
		'id'=>'dv-transaksi-data',
		'model' => $dataProviderDetail,
		'attributes'=>$attSroreData,
		'condensed'=>true,
		'hover'=>true,
		'panel'=>[
			'heading'=>'<b>Info Store </b>',
			'type'=>DetailView::TYPE_DEFAULT,
		],
		'mode'=>DetailView::MODE_VIEW,
		//'buttons1'=>'{update}',
		'buttons1'=>'',
		'buttons2'=>'{view}{save}',		
		/* 'saveOptions'=>[ 
			'id' =>'editBtn1',
			'value'=>'/marketing/sales-promo/review?id='.$model->ID,
			'params' => ['custom_param' => true],
		],	 */	
	]);
	
	$dvStoreInfo=DetailView::widget([
		'id'=>'dv-transaksi-data',
		'model' => $dataProviderDetail,
		'attributes'=>$attSroreInfo,
		'condensed'=>true,
		'hover'=>true,
		'panel'=>[
			'heading'=>'<b>Info Transaksi Deposit</b>',
			'type'=>DetailView::TYPE_DEFAULT,
		],
		'mode'=>DetailView::MODE_VIEW,
		'buttons1'=>'',
		'buttons2'=>'{view}{save}'
	]);
	
	
	
?>

<div class="container-fluid" style="font-family: verdana, arial, sans-serif ;font-size: 8pt">
	<div class="col-xs-12 col-sm-4 col-lg-4" style="font-family: tahoma ;font-size: 9pt;">
		<div class="row">
         <?=$indexTransaksiSaldo?>
		</div>
	</div>
    <div class="col-xs-12 col-sm-8 col-lg-8" style="font-family: tahoma ;font-size: 9pt;">
		<div class="row">
            <div class="col-xs-12 col-sm-6 col-lg-6" style="font-family: tahoma ;font-size: 9pt;">
		        <?=$dvStoreInfo ?>	
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-6" style="font-family: tahoma ;font-size: 9pt;">
	    	    <?=$dvStoreData ?>	
		    </div>
        </div>
	</div>
</div>