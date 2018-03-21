<?php
use yii\helpers\ArrayHelper;
use kartik\grid\GridView;
use yii\helpers\Html;

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
function enduserAryColumn(){
	$H_FONT_COLOR1='white';
	$H_BG_COLOR1='rgb(51, 102, 153)';
	$C_FONT_COLOR1='black';
	$C_FONT_COLOR2='red';
	$C_BG_COLOR1=false;

	$aryStt= [
		['STATUS' => 1, 'STT_NM' => 'Active'],		  
		['STATUS' => 3, 'STT_NM' => 'Deactive'],
	  ];

	$aryFieldColomn[]=[
	'ID' =>0, 'ATTR' =>[
		'ATR_FIELD'=>'STORE_ID','ATR_LABEL'=>'STORE','ATR_HEADER_MERGE'=>false,'ATR_GROUP'=>TRUE,'ATR_GROUPROW'=>TRUE,'ATR_PAGESUMMARY'=>false,'ATR_FORMAT'=>'raw',
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
	$aryFieldColomn[]=[
	'ID' =>1, 'ATTR' =>[
		'ATR_FIELD'=>'NAME','ATR_LABEL'=>'Name','ATR_HEADER_MERGE'=>false,'ATR_GROUP'=>false,'ATR_GROUPROW'=>false,'ATR_PAGESUMMARY'=>false,'ATR_FORMAT'=>'raw',
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
	'ID' =>2, 'ATTR' =>[
		'ATR_FIELD'=>'EMAIL','ATR_LABEL'=>'Email','ATR_HEADER_MERGE'=>false,'ATR_GROUP'=>false,'ATR_GROUPROW'=>false,'ATR_PAGESUMMARY'=>false,'ATR_FORMAT'=>'raw',
		'H_WIDTH'=>'15px','H_ALIGN'=>'center','H_FONT_SIZE' =>'11px','H_FONT_COLOR'=>$H_FONT_COLOR1,'H_BG_COLOR' =>$H_BG_COLOR1,'H_VALIGN'=>'RIGHT','V_VALIGN'=>'top','H_COLSPAN'=>'0',
		'C_FONT_SIZE' =>'12px','C_ALIGN'=>'left','C_FONT_BOLD'=>false,'C_FONT_COLOR' =>$C_FONT_COLOR1,'C_BG_COLOR' =>$C_BG_COLOR1,
		'FILTER'=>true,'FILTER_TYPE'=>false,'FILTER_WIDGET_OPTION'=>[],'FILTER_INPUT_OPTION'=>['class'=>'form-control'],'FILTER_OPTION'=>[],
		//PENGUNAAN FILTER 
		// 'FILTER'=>true,'FILTER_TYPE'=>GridView::FILTER_SELECT2,
		// 'FILTER_WIDGET_OPTION'=>['pluginOptions'=>['allowClear'=>true]],
		// 'FILTER_INPUT_OPTION'=>['placeholder'=>'-Pilih-'],
		// 'FILTER_OPTION'=>[],
		//DATE TIME PLUGIN
		// 'FILTER_WIDGET_OPTION'=>['pluginOptions'=>['format' => 'yyyy-mm-dd','autoclose' => true,'todayHighlight' => true,'autoWidget' => false,'todayBtn' => true,]],
		]
	];
	//--NAMA---	
	$aryFieldColomn[]=[
	'ID' =>3, 'ATTR' =>[
		'ATR_FIELD'=>'PHONE','ATR_LABEL'=>'Phone','ATR_HEADER_MERGE'=>false,'ATR_GROUP'=>false,'ATR_GROUPROW'=>false,'ATR_PAGESUMMARY'=>false,'ATR_FORMAT'=>'raw',
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
	$aryFieldColomn[]=[
		'ID' =>4, 'ATTR' =>[
			'ATR_FIELD'=>'STORE_ID','ATR_LABEL'=>'Store ID','ATR_HEADER_MERGE'=>false,'ATR_GROUP'=>false,'ATR_GROUPROW'=>false,'ATR_PAGESUMMARY'=>false,'ATR_FORMAT'=>'raw',
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
		'ID' =>5, 'ATTR' =>[
			'ATR_FIELD'=>'DCRP_DETIL','ATR_LABEL'=>'DCRP Detail','ATR_HEADER_MERGE'=>false,'ATR_GROUP'=>false,'ATR_GROUPROW'=>false,'ATR_PAGESUMMARY'=>false,'ATR_FORMAT'=>'raw',
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
			'ATR_FIELD'=>'STATUS','ATR_LABEL'=>'STATUS','ATR_HEADER_MERGE'=>false,'ATR_GROUP'=>false,'ATR_GROUPROW'=>false,'ATR_PAGESUMMARY'=>false,'ATR_FORMAT'=>'raw',
			'H_WIDTH'=>'15px','H_ALIGN'=>'center','H_FONT_SIZE' =>'11px','H_FONT_COLOR'=>$H_FONT_COLOR1,'H_BG_COLOR' =>$H_BG_COLOR1,'H_VALIGN'=>'RIGHT','V_VALIGN'=>'top','H_COLSPAN'=>'0',
			'C_FONT_SIZE' =>'12px','C_ALIGN'=>'left','C_FONT_BOLD'=>false,'C_FONT_COLOR' =>$C_FONT_COLOR1,'C_BG_COLOR' =>$C_BG_COLOR1,
			'FILTER'=>true,'FILTER_TYPE'=>false,'FILTER_WIDGET_OPTION'=>[],'FILTER_INPUT_OPTION'=>['class'=>'form-control'],'FILTER_OPTION'=>[],
			//PENGUNAAN FILTER 
			'FILTER'=>ArrayHelper::map($aryStt, 'STATUS', 'STT_NM'),'FILTER_TYPE'=>GridView::FILTER_SELECT2,
			'FILTER_WIDGET_OPTION'=>['pluginOptions'=>['allowClear'=>true]],
			'FILTER_INPUT_OPTION'=>['placeholder'=>'-Pilih-'],
			'FILTER_OPTION'=>[],
			]
		];
	$valFields = ArrayHelper::map($aryFieldColomn, 'ID', 'ATTR');	
	return $valFields;
};


?>