<?php
use yii\helpers\ArrayHelper;
use kartik\grid\GridView;
use yii\helpers\Html;
use frontend\backend\account\models\StoreMembershipPaket;

/**
 * DESCRIPTION REFRENCE
 * FORMAT 		: 'raw' atau ['decimal', 2]
 * hAlign		: right,left,top,middle
 * vAlign		: right,left,top,middle
 * FILTER ON:
 *  - PLUGIN DATE 	:'FILTER_WIDGET_OPTION'=>['pluginOptions'=>['format' => 'yyyy-mm-dd','autoclose' => true,'todayHighlight' => true,'autoWidget' => false,'todayBtn' => true,]],
 *  - PLUGIN SELECT2:'FILTER_WIDGET_OPTION'=>['pluginOptions'=>['allowClear'=>true]]
 *  - INPUT SELECT2 :'FILTER_INPUT_OPTION'=>['placeholder'=>'-Pilih-'],
 *  'FILTER_OPTION'=>['style'=>'background-color:rgba(255, 255, 255, 1); align:center','colspan'=>'0',],
 * FILTER OFF:
 *  'FILTER'=>false,'FILTER_TYPE'=>false,
 *  'FILTER_WIDGET_OPTION'=>[],
 *  'FILTER_INPUT_OPTION'=>['class'=>'form-control'],
 *	'FILTER_OPTION'=>[],
 */
function storeMembershipAryColumn(){
	$H_FONT_COLOR1='white';
	$H_BG_COLOR1='rgb(51, 102, 153)';
	$C_FONT_COLOR1='black';
	$C_FONT_COLOR2='red';
	$C_BG_COLOR1=false;
	
	$aryStt1= [
		['STORE_STT' => 0, 'STORE_STT_NM' => 'TRIAL'],		  
		['STORE_STT' => 1, 'STORE_STT_NM' => 'Active'],
		['STORE_STT' => 2, 'STORE_STT_NM' => 'Deactive'],
		['STORE_STT' => 3, 'STORE_STT_NM' => 'Delete'],
	  ];	
	$aryStt2= [
		['DOMPET_AUTODEBET' => 0, 'DOMPET_AUTODEBET_NM' => 'tidak autodebet'],		  
		['DOMPET_AUTODEBET' => 1, 'DOMPET_AUTODEBET_NM' => 'autodebet'],
	  ];	
	$aryStt3= [
		['PAYMENT_STT' => 0, 'PAYMENT_STT_NM' => 'TRIAL'],		  
		['PAYMENT_STT' => 1, 'PAYMENT_STT_NM' => 'LUNAS'],
		['PAYMENT_STT' => 2, 'PAYMENT_STT_NM' => 'BELUM BAYAR'],
		['PAYMENT_STT' => 3, 'PAYMENT_STT_NM' => 'INVOICE EXPIRED/Dibatalkan'],
	  ];
	$aryStt4= [
		['PAYMENT_METHODE' => 0, 'PAYMENT_METHODE_NM' => 'Debet Dompet'],		  
		['PAYMENT_METHODE' => 1, 'PAYMENT_METHODE_NM' => 'kartu kredit'],
		['PAYMENT_METHODE' => 2, 'PAYMENT_METHODE_NM' => 'Transfer manual'],
	  ];

	$aryFieldColomn[]=[
	'ID' =>0, 'ATTR' =>[
		'ATR_FIELD'=>'STORE_ID','ATR_LABEL'=>'STORE','ATR_HEADER_MERGE'=>false,'ATR_GROUP'=>true,'ATR_GROUPROW'=>true,'ATR_PAGESUMMARY'=>false,'ATR_FORMAT'=>'raw',
		'H_WIDTH'=>'100px','H_ALIGN'=>'center','H_FONT_SIZE' =>'11px','H_FONT_COLOR'=>$H_FONT_COLOR1,'H_BG_COLOR' =>$H_BG_COLOR1,'H_VALIGN'=>'RIGHT','V_VALIGN'=>'top','H_COLSPAN'=>'0',
		'C_FONT_SIZE' =>'12px','C_ALIGN'=>'left','C_FONT_BOLD'=>false,'C_FONT_COLOR' =>$C_FONT_COLOR1,'C_BG_COLOR' =>$C_BG_COLOR1,
		'FILTER'=>true,'FILTER_TYPE'=>false,'FILTER_WIDGET_OPTION'=>[],'FILTER_INPUT_OPTION'=>['class'=>'form-control'],'FILTER_OPTION'=>[],
		//PENGUNAAN FILTER 
		// 'FILTER'=>true,'FILTER_TYPE'=>GridView::FILTER_SELECT2,
		// 'FILTER_WIDGET_OPTION'=>['pluginOptions'=>['allowClear'=>true]],
		// 'FILTER_INPUT_OPTION'=>['placeholder'=>'-Pilih-'],
		// 'FILTER_OPTION'=>[],		
		]
	];
	//--NAMA---	
	$aryFieldColomn[]=[
	'ID' =>1, 'ATTR' =>[
		'ATR_FIELD'=>'KASIR_ID','ATR_LABEL'=>'KASIR ID','ATR_HEADER_MERGE'=>false,'ATR_GROUP'=>false,'ATR_GROUPROW'=>false,'ATR_PAGESUMMARY'=>false,'ATR_FORMAT'=>'raw',
		'H_WIDTH'=>'15px','H_ALIGN'=>'center','H_FONT_SIZE' =>'11px','H_FONT_COLOR'=>$H_FONT_COLOR1,'H_BG_COLOR' =>$H_BG_COLOR1,'H_VALIGN'=>'RIGHT','V_VALIGN'=>'top','H_COLSPAN'=>'0',
		'C_FONT_SIZE' =>'12px','C_ALIGN'=>'left','C_FONT_BOLD'=>false,'C_FONT_COLOR' =>$C_FONT_COLOR1,'C_BG_COLOR' =>$C_BG_COLOR1,
		'FILTER'=>true,'FILTER_TYPE'=>false,'FILTER_WIDGET_OPTION'=>[],'FILTER_INPUT_OPTION'=>['class'=>'form-control'],'FILTER_OPTION'=>[],
		//PENGUNAAN FILTER 
		// 'FILTER'=>true,'FILTER_TYPE'=>GridView::FILTER_SELECT2,
		// 'FILTER_WIDGET_OPTION'=>['pluginOptions'=>['allowClear'=>true]],
		// 'FILTER_INPUT_OPTION'=>['placeholder'=>'-Pilih-'],
		// 'FILTER_OPTION'=>[],
		]
	];
	//--NAMA---	
	$aryFieldColomn[]=[
		'ID' =>2, 'ATTR' =>[
			'ATR_FIELD'=>'STORE_DATE_START','ATR_LABEL'=>'WAKTU AWAL STORE','ATR_HEADER_MERGE'=>false,'ATR_GROUP'=>false,'ATR_GROUPROW'=>false,'ATR_PAGESUMMARY'=>false,'ATR_FORMAT'=>'raw',
			'H_WIDTH'=>'15px','H_ALIGN'=>'center','H_FONT_SIZE' =>'11px','H_FONT_COLOR'=>$H_FONT_COLOR1,'H_BG_COLOR' =>$H_BG_COLOR1,'H_VALIGN'=>'RIGHT','V_VALIGN'=>'top','H_COLSPAN'=>'0',
			'C_FONT_SIZE' =>'12px','C_ALIGN'=>'left','C_FONT_BOLD'=>false,'C_FONT_COLOR' =>$C_FONT_COLOR1,'C_BG_COLOR' =>$C_BG_COLOR1,
			'FILTER'=>true,'FILTER_TYPE'=>false,'FILTER_WIDGET_OPTION'=>[],'FILTER_INPUT_OPTION'=>['class'=>'form-control'],'FILTER_OPTION'=>[],
			//PENGUNAAN FILTER 
			'FILTER'=>true,'FILTER_TYPE'=>GridView::FILTER_DATE,
				'FILTER_WIDGET_OPTION'=>['pluginOptions' => [				
					'format' => 'yyyy-mm-dd',					 
					'autoclose' => true,
					'todayHighlight' => true,
					//'format' => 'dd-mm-yyyy hh:mm',
					'autoWidget' => false,
					//'todayBtn' => true,
				]],
				'FILTER_INPUT_OPTION'=>[],
				'FILTER_OPTION'=>[],
				]
		];
	//--NAMA---	
	$aryFieldColomn[]=[
		'ID' =>3, 'ATTR' =>[
			'ATR_FIELD'=>'STORE_DATE_END_LATES','ATR_LABEL'=>'WAKTU JATUH TEMPO STORE','ATR_HEADER_MERGE'=>false,'ATR_GROUP'=>false,'ATR_GROUPROW'=>false,'ATR_PAGESUMMARY'=>false,'ATR_FORMAT'=>'raw',
			'H_WIDTH'=>'15px','H_ALIGN'=>'center','H_FONT_SIZE' =>'11px','H_FONT_COLOR'=>$H_FONT_COLOR1,'H_BG_COLOR' =>$H_BG_COLOR1,'H_VALIGN'=>'RIGHT','V_VALIGN'=>'top','H_COLSPAN'=>'0',
			'C_FONT_SIZE' =>'12px','C_ALIGN'=>'left','C_FONT_BOLD'=>false,'C_FONT_COLOR' =>$C_FONT_COLOR1,'C_BG_COLOR' =>$C_BG_COLOR1,
			'FILTER'=>true,'FILTER_TYPE'=>false,'FILTER_WIDGET_OPTION'=>[],'FILTER_INPUT_OPTION'=>['class'=>'form-control'],'FILTER_OPTION'=>[],
			//PENGUNAAN FILTER 
			'FILTER'=>true,'FILTER_TYPE'=>GridView::FILTER_DATE,
				'FILTER_WIDGET_OPTION'=>['pluginOptions' => [				
					'format' => 'yyyy-mm-dd',					 
					'autoclose' => true,
					'todayHighlight' => true,
					//'format' => 'dd-mm-yyyy hh:mm',
					'autoWidget' => false,
					//'todayBtn' => true,
				]],
				'FILTER_INPUT_OPTION'=>[],
				'FILTER_OPTION'=>[],
				]
		];
	//--NAMA---	
	$aryFieldColomn[]=[
		'ID' =>4, 'ATTR' =>[
			'ATR_FIELD'=>'STORE_DATE_END','ATR_LABEL'=>'WAKTU AKHIR STORE','ATR_HEADER_MERGE'=>false,'ATR_GROUP'=>false,'ATR_GROUPROW'=>false,'ATR_PAGESUMMARY'=>false,'ATR_FORMAT'=>'raw',
			'H_WIDTH'=>'15px','H_ALIGN'=>'center','H_FONT_SIZE' =>'11px','H_FONT_COLOR'=>$H_FONT_COLOR1,'H_BG_COLOR' =>$H_BG_COLOR1,'H_VALIGN'=>'RIGHT','V_VALIGN'=>'top','H_COLSPAN'=>'0',
			'C_FONT_SIZE' =>'12px','C_ALIGN'=>'left','C_FONT_BOLD'=>false,'C_FONT_COLOR' =>$C_FONT_COLOR1,'C_BG_COLOR' =>$C_BG_COLOR1,
			'FILTER'=>true,'FILTER_TYPE'=>false,'FILTER_WIDGET_OPTION'=>[],'FILTER_INPUT_OPTION'=>['class'=>'form-control'],'FILTER_OPTION'=>[],
			//PENGUNAAN FILTER 
			'FILTER'=>true,'FILTER_TYPE'=>GridView::FILTER_DATE,
				'FILTER_WIDGET_OPTION'=>['pluginOptions' => [				
					'format' => 'yyyy-mm-dd',					 
					'autoclose' => true,
					'todayHighlight' => true,
					//'format' => 'dd-mm-yyyy hh:mm',
					'autoWidget' => false,
					//'todayBtn' => true,
				]],
				'FILTER_INPUT_OPTION'=>[],
				'FILTER_OPTION'=>[],
				]
		];
		//--NAMA---	
		$aryFieldColomn[]=[
			'ID' =>5, 'ATTR' =>[
				'ATR_FIELD'=>'FAKTURE_NO','ATR_LABEL'=>'NOMER FAKTURE','ATR_HEADER_MERGE'=>false,'ATR_GROUP'=>false,'ATR_GROUPROW'=>false,'ATR_PAGESUMMARY'=>false,'ATR_FORMAT'=>'raw',
				'H_WIDTH'=>'15px','H_ALIGN'=>'center','H_FONT_SIZE' =>'11px','H_FONT_COLOR'=>$H_FONT_COLOR1,'H_BG_COLOR' =>$H_BG_COLOR1,'H_VALIGN'=>'RIGHT','V_VALIGN'=>'top','H_COLSPAN'=>'0',
				'C_FONT_SIZE' =>'12px','C_ALIGN'=>'left','C_FONT_BOLD'=>false,'C_FONT_COLOR' =>$C_FONT_COLOR1,'C_BG_COLOR' =>$C_BG_COLOR1,
				'FILTER'=>true,'FILTER_TYPE'=>false,'FILTER_WIDGET_OPTION'=>[],'FILTER_INPUT_OPTION'=>['class'=>'form-control'],'FILTER_OPTION'=>[],
				//PENGUNAAN FILTER 
				// 'FILTER'=>true,'FILTER_TYPE'=>GridView::FILTER_SELECT2,
				// 'FILTER_WIDGET_OPTION'=>['pluginOptions'=>['allowClear'=>true]],
				// 'FILTER_INPUT_OPTION'=>['placeholder'=>'-Pilih-'],
				// 'FILTER_OPTION'=>[],
				]
			];	
		//--NAMA---	
		$aryFieldColomn[]=[
			'ID' =>6, 'ATTR' =>[
				'ATR_FIELD'=>'FAKTURE_TEMPO','ATR_LABEL'=>'FAKTURE TEMPO','ATR_HEADER_MERGE'=>false,'ATR_GROUP'=>false,'ATR_GROUPROW'=>false,'ATR_PAGESUMMARY'=>false,'ATR_FORMAT'=>'raw',
				'H_WIDTH'=>'15px','H_ALIGN'=>'center','H_FONT_SIZE' =>'11px','H_FONT_COLOR'=>$H_FONT_COLOR1,'H_BG_COLOR' =>$H_BG_COLOR1,'H_VALIGN'=>'RIGHT','V_VALIGN'=>'top','H_COLSPAN'=>'0',
				'C_FONT_SIZE' =>'12px','C_ALIGN'=>'left','C_FONT_BOLD'=>false,'C_FONT_COLOR' =>$C_FONT_COLOR1,'C_BG_COLOR' =>$C_BG_COLOR1,
				'FILTER'=>true,'FILTER_TYPE'=>false,'FILTER_WIDGET_OPTION'=>[],'FILTER_INPUT_OPTION'=>['class'=>'form-control'],'FILTER_OPTION'=>[],
				//PENGUNAAN FILTER 
				// 'FILTER'=>true,'FILTER_TYPE'=>GridView::FILTER_SELECT2,
				// 'FILTER_WIDGET_OPTION'=>['pluginOptions'=>['allowClear'=>true]],
				// 'FILTER_INPUT_OPTION'=>['placeholder'=>'-Pilih-'],
				// 'FILTER_OPTION'=>[],
				]
			];	
		//--NAMA---	
		$aryFieldColomn[]=[
			'ID' =>7, 'ATTR' =>[
				'ATR_FIELD'=>'FAKTURE_DATE_START','ATR_LABEL'=>'FAKTURE TANGGAL AWAL','ATR_HEADER_MERGE'=>false,'ATR_GROUP'=>false,'ATR_GROUPROW'=>false,'ATR_PAGESUMMARY'=>false,'ATR_FORMAT'=>'raw',
				'H_WIDTH'=>'15px','H_ALIGN'=>'center','H_FONT_SIZE' =>'11px','H_FONT_COLOR'=>$H_FONT_COLOR1,'H_BG_COLOR' =>$H_BG_COLOR1,'H_VALIGN'=>'RIGHT','V_VALIGN'=>'top','H_COLSPAN'=>'0',
				'C_FONT_SIZE' =>'12px','C_ALIGN'=>'left','C_FONT_BOLD'=>false,'C_FONT_COLOR' =>$C_FONT_COLOR1,'C_BG_COLOR' =>$C_BG_COLOR1,
				'FILTER'=>true,'FILTER_TYPE'=>false,'FILTER_WIDGET_OPTION'=>[],'FILTER_INPUT_OPTION'=>['class'=>'form-control'],'FILTER_OPTION'=>[],
				//PENGUNAAN FILTER 
				'FILTER'=>true,'FILTER_TYPE'=>GridView::FILTER_DATE,
				'FILTER_WIDGET_OPTION'=>['pluginOptions' => [				
					'format' => 'yyyy-mm-dd',					 
					'autoclose' => true,
					'todayHighlight' => true,
					//'format' => 'dd-mm-yyyy hh:mm',
					'autoWidget' => false,
					//'todayBtn' => true,
				]],
				'FILTER_INPUT_OPTION'=>[],
				'FILTER_OPTION'=>[],
				]
			];	
		//--NAMA---	
		$aryFieldColomn[]=[
			'ID' =>8, 'ATTR' =>[
				'ATR_FIELD'=>'FAKTURE_DATE_END','ATR_LABEL'=>'FAKTURE TANGGAL AKHIR','ATR_HEADER_MERGE'=>false,'ATR_GROUP'=>false,'ATR_GROUPROW'=>false,'ATR_PAGESUMMARY'=>false,'ATR_FORMAT'=>'raw',
				'H_WIDTH'=>'15px','H_ALIGN'=>'center','H_FONT_SIZE' =>'11px','H_FONT_COLOR'=>$H_FONT_COLOR1,'H_BG_COLOR' =>$H_BG_COLOR1,'H_VALIGN'=>'RIGHT','V_VALIGN'=>'top','H_COLSPAN'=>'0',
				'C_FONT_SIZE' =>'12px','C_ALIGN'=>'left','C_FONT_BOLD'=>false,'C_FONT_COLOR' =>$C_FONT_COLOR1,'C_BG_COLOR' =>$C_BG_COLOR1,
				'FILTER'=>true,'FILTER_TYPE'=>false,'FILTER_WIDGET_OPTION'=>[],'FILTER_INPUT_OPTION'=>['class'=>'form-control'],'FILTER_OPTION'=>[],
				//PENGUNAAN FILTER 
				'FILTER'=>true,'FILTER_TYPE'=>GridView::FILTER_DATE,
				'FILTER_WIDGET_OPTION'=>['pluginOptions' => [				
					'format' => 'yyyy-mm-dd',					 
					'autoclose' => true,
					'todayHighlight' => true,
					//'format' => 'dd-mm-yyyy hh:mm',
					'autoWidget' => false,
					//'todayBtn' => true,
				]],
				'FILTER_INPUT_OPTION'=>[],
				'FILTER_OPTION'=>[],
				]
			];	
		//--NAMA---	
		$aryFieldColomn[]=[
			'ID' =>9, 'ATTR' =>[
				'ATR_FIELD'=>'STORE_STT','ATR_LABEL'=>'STATUS STORE','ATR_HEADER_MERGE'=>false,'ATR_GROUP'=>false,'ATR_GROUPROW'=>false,'ATR_PAGESUMMARY'=>false,'ATR_FORMAT'=>'raw',
				'H_WIDTH'=>'15px','H_ALIGN'=>'center','H_FONT_SIZE' =>'11px','H_FONT_COLOR'=>$H_FONT_COLOR1,'H_BG_COLOR' =>$H_BG_COLOR1,'H_VALIGN'=>'RIGHT','V_VALIGN'=>'top','H_COLSPAN'=>'0',
				'C_FONT_SIZE' =>'12px','C_ALIGN'=>'left','C_FONT_BOLD'=>false,'C_FONT_COLOR' =>$C_FONT_COLOR1,'C_BG_COLOR' =>$C_BG_COLOR1,
				'FILTER'=>true,'FILTER_TYPE'=>false,'FILTER_WIDGET_OPTION'=>[],'FILTER_INPUT_OPTION'=>['class'=>'form-control'],'FILTER_OPTION'=>[],
				//PENGUNAAN FILTER 
				'FILTER'=>ArrayHelper::map($aryStt1,'STORE_STT','STORE_STT_NM'),
				'FILTER_TYPE'=>GridView::FILTER_SELECT2,
				'FILTER_WIDGET_OPTION'=>['pluginOptions'=>['allowClear'=>true]],
				'FILTER_INPUT_OPTION'=>['placeholder'=>'-Pilih-'],
				'FILTER_OPTION'=>[],
				]
			];	
		//--NAMA---	
		$aryFieldColomn[]=[
			'ID' =>10, 'ATTR' =>[
				'ATR_FIELD'=>'PAYMENT_STT','ATR_LABEL'=>'STATUS PAYMENT','ATR_HEADER_MERGE'=>false,'ATR_GROUP'=>false,'ATR_GROUPROW'=>false,'ATR_PAGESUMMARY'=>false,'ATR_FORMAT'=>'raw',
				'H_WIDTH'=>'15px','H_ALIGN'=>'center','H_FONT_SIZE' =>'11px','H_FONT_COLOR'=>$H_FONT_COLOR1,'H_BG_COLOR' =>$H_BG_COLOR1,'H_VALIGN'=>'RIGHT','V_VALIGN'=>'top','H_COLSPAN'=>'0',
				'C_FONT_SIZE' =>'12px','C_ALIGN'=>'left','C_FONT_BOLD'=>false,'C_FONT_COLOR' =>$C_FONT_COLOR1,'C_BG_COLOR' =>$C_BG_COLOR1,
				'FILTER'=>true,'FILTER_TYPE'=>false,'FILTER_WIDGET_OPTION'=>[],'FILTER_INPUT_OPTION'=>['class'=>'form-control'],'FILTER_OPTION'=>[],
				//PENGUNAAN FILTER 
				'FILTER'=>ArrayHelper::map($aryStt3,'PAYMENT_STT','PAYMENT_STT_NM'),
				'FILTER_TYPE'=>GridView::FILTER_SELECT2,
				'FILTER_WIDGET_OPTION'=>['pluginOptions'=>['allowClear'=>true]],
				'FILTER_INPUT_OPTION'=>['placeholder'=>'-Pilih-'],
				'FILTER_OPTION'=>[],
				]
			];	
		//--NAMA---	
		$aryFieldColomn[]=[
			'ID' =>11, 'ATTR' =>[
				'ATR_FIELD'=>'PAYMENT_METHODE','ATR_LABEL'=>'METHODE PEMBAYARAN','ATR_HEADER_MERGE'=>false,'ATR_GROUP'=>false,'ATR_GROUPROW'=>false,'ATR_PAGESUMMARY'=>false,'ATR_FORMAT'=>'raw',
				'H_WIDTH'=>'15px','H_ALIGN'=>'center','H_FONT_SIZE' =>'11px','H_FONT_COLOR'=>$H_FONT_COLOR1,'H_BG_COLOR' =>$H_BG_COLOR1,'H_VALIGN'=>'RIGHT','V_VALIGN'=>'top','H_COLSPAN'=>'0',
				'C_FONT_SIZE' =>'12px','C_ALIGN'=>'left','C_FONT_BOLD'=>false,'C_FONT_COLOR' =>$C_FONT_COLOR1,'C_BG_COLOR' =>$C_BG_COLOR1,
				'FILTER'=>true,'FILTER_TYPE'=>false,'FILTER_WIDGET_OPTION'=>[],'FILTER_INPUT_OPTION'=>['class'=>'form-control'],'FILTER_OPTION'=>[],
				//PENGUNAAN FILTER 
				'FILTER'=>ArrayHelper::map($aryStt4,'PAYMENT_METHODE','PAYMENT_METHODE_NM'),'FILTER_TYPE'=>GridView::FILTER_SELECT2,
				'FILTER_WIDGET_OPTION'=>['pluginOptions'=>['allowClear'=>true]],
				'FILTER_INPUT_OPTION'=>['placeholder'=>'-Pilih-'],
				'FILTER_OPTION'=>[],
				]
			];	
		//--NAMA---	
		$aryFieldColomn[]=[
			'ID' =>12, 'ATTR' =>[
				'ATR_FIELD'=>'DOMPET_AUTODEBET','ATR_LABEL'=>'DOMPET AUTODEBET','ATR_HEADER_MERGE'=>false,'ATR_GROUP'=>false,'ATR_GROUPROW'=>false,'ATR_PAGESUMMARY'=>false,'ATR_FORMAT'=>'raw',
				'H_WIDTH'=>'15px','H_ALIGN'=>'center','H_FONT_SIZE' =>'11px','H_FONT_COLOR'=>$H_FONT_COLOR1,'H_BG_COLOR' =>$H_BG_COLOR1,'H_VALIGN'=>'RIGHT','V_VALIGN'=>'top','H_COLSPAN'=>'0',
				'C_FONT_SIZE' =>'12px','C_ALIGN'=>'left','C_FONT_BOLD'=>false,'C_FONT_COLOR' =>$C_FONT_COLOR1,'C_BG_COLOR' =>$C_BG_COLOR1,
				'FILTER'=>true,'FILTER_TYPE'=>false,'FILTER_WIDGET_OPTION'=>[],'FILTER_INPUT_OPTION'=>['class'=>'form-control'],'FILTER_OPTION'=>[],
				//PENGUNAAN FILTER 
				'FILTER'=>ArrayHelper::map($aryStt2,'DOMPET_AUTODEBET','DOMPET_AUTODEBET_NM'),
				'FILTER_TYPE'=>GridView::FILTER_SELECT2,
				'FILTER_WIDGET_OPTION'=>['pluginOptions'=>['allowClear'=>true]],
				'FILTER_INPUT_OPTION'=>['placeholder'=>'-Pilih-'],
				'FILTER_OPTION'=>[],
				]
			];	
		//--NAMA---	
		$aryFieldColomn[]=[
			'ID' =>13, 'ATTR' =>[
				'ATR_FIELD'=>'PAKET_ID','ATR_LABEL'=>'PAKET','ATR_HEADER_MERGE'=>false,'ATR_GROUP'=>false,'ATR_GROUPROW'=>false,'ATR_PAGESUMMARY'=>false,'ATR_FORMAT'=>'raw',
				'H_WIDTH'=>'15px','H_ALIGN'=>'center','H_FONT_SIZE' =>'11px','H_FONT_COLOR'=>$H_FONT_COLOR1,'H_BG_COLOR' =>$H_BG_COLOR1,'H_VALIGN'=>'RIGHT','V_VALIGN'=>'top','H_COLSPAN'=>'0',
				'C_FONT_SIZE' =>'12px','C_ALIGN'=>'left','C_FONT_BOLD'=>false,'C_FONT_COLOR' =>$C_FONT_COLOR1,'C_BG_COLOR' =>$C_BG_COLOR1,
				'FILTER'=>true,'FILTER_TYPE'=>false,'FILTER_WIDGET_OPTION'=>[],'FILTER_INPUT_OPTION'=>['class'=>'form-control'],'FILTER_OPTION'=>[],
				//PENGUNAAN FILTER
				// yii2:drop-down list for multiple values concat in one line
				// 'FILTER'=>ArrayHelper::map(StoreMembershipPaket::find()->all(),'PAKET_ID',function($model) {
					// 	return $model['PAKET_GROUP'].'/'.$model['PAKET_NM'];
					// }),
				'FILTER'=>ArrayHelper::map(StoreMembershipPaket::find()->all(),'PAKET_ID','PAKET_NM'),
				'FILTER_TYPE'=>GridView::FILTER_SELECT2,
				'FILTER_WIDGET_OPTION'=>['pluginOptions'=>['allowClear'=>true]],
				'FILTER_INPUT_OPTION'=>['placeholder'=>'-Pilih-'],
				'FILTER_OPTION'=>[],
				]
			];	
	$valFields = ArrayHelper::map($aryFieldColomn, 'ID', 'ATTR');	
	return $valFields;
};


?>