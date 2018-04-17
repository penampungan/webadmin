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
	$attSroreData=[	
		[
			'attribute' =>'username',
			'labelColOptions' => ['style' => 'text-align:right;width: 30%'],
			'displayOnly'=>true,	
			'format'=>'raw', 
    	],
		[
			'attribute' =>'email',
			'labelColOptions' => ['style' => 'text-align:right;width: 30%'],
			'displayOnly'=>true,	
			'format'=>'raw', 
    	],
		
		[		
			'attribute' =>'ACCESS_ID',			
    		'labelColOptions' => ['style' => 'text-align:right;width: 30%'],
			'displayOnly'=>true,	
			'format'=>'raw', 
        ],
		[	
            'attribute' =>'ACCESS_GROUP',
            'labelColOptions' => ['style' => 'text-align:right;width: 30%'],
			'displayOnly'=>true,	
			'format'=>'raw', 
		],[
			'attribute' =>'ACCESS_LEVEL',
			'labelColOptions' => ['style' => 'text-align:right;width: 30%'],
			'displayOnly'=>true,	
			'format'=>'raw', 
        ]		
	];
	
	$attSroreInfo=[
		[
            'attribute' =>'Nama Lengkap',
            'value'=>(empty($modelUser->profile->NM_DEPAN)) ? '' : $modelUser->profile->NM_DEPAN .' '.(empty($modelUser->profile->NM_TENGAH)) ? '' : $modelUser->profile->NM_TENGAH .' '.(empty($modelUser->profile->NM_BELAKANG)) ? '' : $modelUser->profile->NM_BELAKANG,
			'labelColOptions' => ['style' => 'text-align:right;width: 30%'],
			'displayOnly'=>true,	
			'format'=>'raw', 
		],
		[
            'attribute' =>'Nomer KTP',
			'value'=>(empty($modelUser->profile->KTP))?'':$modelUser->profile->KTP,
			'labelColOptions' => ['style' => 'text-align:right;width: 30%'],
			'displayOnly'=>true,	
			'format'=>'raw', 
		],
		[
            'attribute' =>'Alamat',
			'value'=>(empty($modelUser->profile->ALMAT))?'':$modelUser->profile->ALMAT,
			'labelColOptions' => ['style' => 'text-align:right;width: 30%'],
			'displayOnly'=>true,	
			'format'=>'raw', 
		],
		[
            'attribute' =>'Tempat/Tanggal Lahir',
			'value'=>(empty($modelUser->profile->LAHIR_TEMPAT))?'':$modelUser->profile->LAHIR_TEMPAT.'/'.$modelUser->profile->LAHIR_TGL,
			'labelColOptions' => ['style' => 'text-align:right;width: 30%'],
			'displayOnly'=>true,	
			'format'=>'raw', 
		],
		[
            'attribute' =>'Jenis Kelamin',
			'value'=>($modelUser->profile->LAHIR_GENDER=='1')?'Laki-laki':(($modelUser->profile->LAHIR_GENDER=='2')?'Prempuan':''),
			'labelColOptions' => ['style' => 'text-align:right;width: 30%'],
			'displayOnly'=>true,	
			'format'=>'raw', 
		],
		[
            'attribute' =>'Nomer Handphone',
			'value'=>(empty($modelUser->profile->HP))?'':$modelUser->profile->HP,
			'labelColOptions' => ['style' => 'text-align:right;width: 30%'],
			'displayOnly'=>true,	
			'format'=>'raw', 
		],
	];
	$attPerusahaanInfo=[
		[
            'attribute' =>'Nama Perusahaan',
            'value'=>(empty($modelUser->perusahaan->CORP_NM)) ? '' : $modelUser->perusahaan->CORP_NM,
			'labelColOptions' => ['style' => 'text-align:right;width: 30%'],
			'displayOnly'=>true,	
			'format'=>'raw', 
		],
		[
            'attribute' =>'Alamat',
			'value'=>(empty($modelUser->perusahaan->ALAMAT))?'':$modelUser->perusahaan->ALAMAT,
			'labelColOptions' => ['style' => 'text-align:right;width: 30%'],
			'displayOnly'=>true,	
			'format'=>'raw', 
		],
	];
	$attBankInfo=[
		[
            'attribute' =>'Nama Lengkap',
            'value'=>(empty($modelUser->bank->NAMA_LENGKAP)) ? '' : $modelUser->bank->NAMA_LENGKAP,
			'labelColOptions' => ['style' => 'text-align:right;width: 30%'],
			'displayOnly'=>true,	
			'format'=>'raw', 
		],
		[
            'attribute' =>'BANK',
			'value'=>(empty($modelUser->bank->BANK))?'':$modelUser->bank->BANK,
			'labelColOptions' => ['style' => 'text-align:right;width: 30%'],
			'displayOnly'=>true,	
			'format'=>'raw', 
		],
		[
            'attribute' =>'Nomer Rekening',
			'value'=>(empty($modelUser->bank->NO_REK))?'':$modelUser->bank->NO_REK,
			'labelColOptions' => ['style' => 'text-align:right;width: 30%'],
			'displayOnly'=>true,	
			'format'=>'raw', 
		],
		[
			'attribute' =>'TLP',
			'value'=>(empty($modelUser->bank->TLP))?'':$modelUser->bank->TLP,
			'labelColOptions' => ['style' => 'text-align:right;width: 30%'],
			'displayOnly'=>true,	
			'format'=>'raw', 
		],
		[
            'attribute' =>'Alamat',
			'value'=>(empty($modelUser->bank->ALAMAT))?'':$modelUser->bank->ALAMAT,
			'labelColOptions' => ['style' => 'text-align:right;width: 30%'],
			'displayOnly'=>true,	
			'format'=>'raw', 
		],
	];
		
	
	
	$dvStoreData=DetailView::widget([
		'id'=>'dv-store-data',
		'model' => $modelUser,
		'attributes'=>$attSroreData,
		'condensed'=>true,
		'hover'=>true,
		'panel'=>[
			'heading'=>'<b>User Data </b>',
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
		'id'=>'dv-store-info',
		'model' => $modelUser,
		'attributes'=>$attSroreInfo,
		'condensed'=>true,
		'hover'=>true,
		'panel'=>[
			'heading'=>'<b>User Info</b>',
			'type'=>DetailView::TYPE_DEFAULT,
		],
		'mode'=>DetailView::MODE_VIEW,
		'buttons1'=>'',
		'buttons2'=>'{view}{save}'
	]);
	$dvPerusahaan=DetailView::widget([
		'id'=>'dv-perusahaan-data',
		'model' => $modelUser,
		'attributes'=>$attPerusahaanInfo,
		'condensed'=>true,
		'hover'=>true,
		'panel'=>[
			'heading'=>'<b>PERUSAHAAN </b>',
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
	
	$dvBank=DetailView::widget([
		'id'=>'dv-bank-info',
		'model' => $modelUser,
		'attributes'=>$attBankInfo,
		'condensed'=>true,
		'hover'=>true,
		'panel'=>[
			'heading'=>'<b>BANK</b>',
			'type'=>DetailView::TYPE_DEFAULT,
		],
		'mode'=>DetailView::MODE_VIEW,
		'buttons1'=>'',
		'buttons2'=>'{view}{save}'
	]);
	
	
	
?>
<div class="container-fluid">

<div style="height:100%;font-family: verdana, arial, sans-serif ;font-size: 8pt">

	<div class="row" >
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<?=$dvStoreData ?>		
			<?=$dvBank ?>			
		</div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<?=$dvStoreInfo ?>			
			<?=$dvPerusahaan ?>		
		</div>
	</div>
</div>
</div>

