<?php
use yii\helpers\ArrayHelper;
use kartik\grid\GridView;
use kartik\widgets\Select2;
use kartik\date\DatePicker;
use yii\helpers\Html;
use frontend\backend\ppob\models\PpobMasterHarga;

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
function sttMsg($stt){
	if($stt==0){ //TRIAL
		 return Html::a('<span class="fa-stack fa-xl">
				  <i class="fa fa-circle-thin fa-stack-2x"  style="color:#25ca4f"></i>
				  <i class="fa fa-check fa-stack-1x" style="color:#ee0b0b"></i>
				</span>','',['title'=>'Trial']);
	}elseif($stt==1){
		 return Html::a('<span class="fa-stack fa-xl">
				  <i class="fa fa-circle-thin fa-stack-2x"  style="color:#25ca4f"></i>
				  <i class="fa fa-check fa-stack-1x" style="color:#05944d"></i>
				</span>','',['title'=>'Active']);
	}elseif($stt==2){
		return Html::a('<span class="fa-stack fa-xl">
				  <i class="fa fa-circle-thin fa-stack-2x"  style="color:#25ca4f"></i>
				  <i class="fa fa-remove fa-stack-1x" style="color:#01190d"></i>
				</span>','',['title'=>'Deactive']);
	}elseif($stt==3){
		return Html::a('<span class="fa-stack fa-xl">
				  <i class="fa fa-circle-thin fa-stack-2x"  style="color:#25ca4f"></i>
				  <i class="fa fa-close fa-stack-1x" style="color:#ee0b0b"></i>
				</span>','',['title'=>'Delete']);
	}
};	
function ppobMasterHargaAryColumn(){
	$H_FONT_COLOR1='white';
	$H_BG_COLOR1='rgb(51, 102, 153)';
	$C_FONT_COLOR1='black';
	$C_FONT_COLOR2='red';
	$C_BG_COLOR1=false;
	$aryStt= [
		['STATUS' => 0, 'STT_NM' => 'Deactife'],		  
		['STATUS' => 1, 'STT_NM' => 'Active'],
		['STATUS' => 2, 'STT_NM' => 'New Price'],
	  ];	
	  
	$aryFieldColomn[]=[
	'ID' =>0, 'ATTR' =>[
		'ATR_FIELD'=>'ID_PRODUK','ATR_LABEL'=>'Id Produk','ATR_HEADER_MERGE'=>false,'ATR_GROUP'=>false,'ATR_GROUPROW'=>false,'ATR_PAGESUMMARY'=>false,'ATR_FORMAT'=>'raw',
		'H_WIDTH'=>'100px','H_ALIGN'=>'center','H_FONT_SIZE' =>'11px','H_FONT_COLOR'=>$H_FONT_COLOR1,'H_BG_COLOR' =>$H_BG_COLOR1,'H_VALIGN'=>'RIGHT','V_VALIGN'=>'top','H_COLSPAN'=>'0',
		'C_FONT_SIZE' =>'12px','C_ALIGN'=>'left','C_FONT_BOLD'=>false,'C_FONT_COLOR' =>$C_FONT_COLOR1,'C_BG_COLOR' =>$C_BG_COLOR1,
		'FILTER'=>true,'FILTER_TYPE'=>false,'FILTER_WIDGET_OPTION'=>[],'FILTER_INPUT_OPTION'=>['class'=>'form-control'],'FILTER_OPTION'=>[],
		// PENGUNAAN FILTER 
		// 'FILTER'=>true,'FILTER_TYPE'=>GridView::FILTER_SELECT2,
		// 'FILTER_WIDGET_OPTION'=>['pluginOptions'=>['allowClear'=>true]],
		// 'FILTER_INPUT_OPTION'=>['placeholder'=>'-Pilih-']	
		// 'FILTER_OPTION'=>[],
		]
	];	  
	$aryFieldColomn[]=[
	'ID' =>1, 'ATTR' =>[
		'ATR_FIELD'=>'TYPE_NM','ATR_LABEL'=>'Nama Type','ATR_HEADER_MERGE'=>false,'ATR_GROUP'=>false,'ATR_GROUPROW'=>false,'ATR_PAGESUMMARY'=>false,'ATR_FORMAT'=>'raw',
		'H_WIDTH'=>'100px','H_ALIGN'=>'center','H_FONT_SIZE' =>'11px','H_FONT_COLOR'=>$H_FONT_COLOR1,'H_BG_COLOR' =>$H_BG_COLOR1,'H_VALIGN'=>'RIGHT','V_VALIGN'=>'top','H_COLSPAN'=>'0',
		'C_FONT_SIZE' =>'12px','C_ALIGN'=>'left','C_FONT_BOLD'=>false,'C_FONT_COLOR' =>$C_FONT_COLOR1,'C_BG_COLOR' =>$C_BG_COLOR1,
		//PENGUNAAN FILTER 
		'FILTER'=>ArrayHelper::map(PpobMasterHarga::find()->groupBy('TYPE_NM')->all(),'TYPE_NM','TYPE_NM'),'FILTER_TYPE'=>GridView::FILTER_SELECT2,
		'FILTER_WIDGET_OPTION'=>['pluginOptions'=>['allowClear'=>true]],
		'FILTER_INPUT_OPTION'=>['placeholder'=>'-Pilih-','class'=>'form-control'],
		'FILTER_OPTION'=>[],		
		]
	];	
	//--NAMA---
	$aryFieldColomn[]=[
	'ID' =>2, 'ATTR' =>[
		'ATR_FIELD'=>'KELOMPOK','ATR_LABEL'=>'Kelompok','ATR_HEADER_MERGE'=>false,'ATR_GROUP'=>false,'ATR_GROUPROW'=>false,'ATR_PAGESUMMARY'=>false,'ATR_FORMAT'=>'raw',
		'H_WIDTH'=>'15px','H_ALIGN'=>'center','H_FONT_SIZE' =>'11px','H_FONT_COLOR'=>$H_FONT_COLOR1,'H_BG_COLOR' =>$H_BG_COLOR1,'H_VALIGN'=>'RIGHT','V_VALIGN'=>'top','H_COLSPAN'=>'0',
		'C_FONT_SIZE' =>'12px','C_ALIGN'=>'left','C_FONT_BOLD'=>false,'C_FONT_COLOR' =>$C_FONT_COLOR1,'C_BG_COLOR' =>$C_BG_COLOR1,
		//PENGUNAAN FILTER 
		'FILTER'=>ArrayHelper::map(PpobMasterHarga::find()->groupBy('KELOMPOK')->all(),'KELOMPOK','KELOMPOK'),'FILTER_TYPE'=>GridView::FILTER_SELECT2,
		'FILTER_WIDGET_OPTION'=>['pluginOptions'=>['allowClear'=>true]],
		'FILTER_INPUT_OPTION'=>['placeholder'=>'-Pilih-'],
		'FILTER_OPTION'=>[],
		//DATE TIME PLUGIN
		// 'FILTER_WIDGET_OPTION'=>['pluginOptions'=>['format' => 'yyyy-mm-dd','autoclose' => true,'todayHighlight' => true,'autoWidget' => false,'todayBtn' => true,]],
		]
	];
	//--NAMA---	
	$aryFieldColomn[]=[
	'ID' =>3, 'ATTR' =>[
		'ATR_FIELD'=>'KTG_NM','ATR_LABEL'=>'Nama Kategori','ATR_HEADER_MERGE'=>false,'ATR_GROUP'=>false,'ATR_GROUPROW'=>false,'ATR_PAGESUMMARY'=>false,'ATR_FORMAT'=>'raw',
		'H_WIDTH'=>'15px','H_ALIGN'=>'center','H_FONT_SIZE' =>'11px','H_FONT_COLOR'=>$H_FONT_COLOR1,'H_BG_COLOR' =>$H_BG_COLOR1,'H_VALIGN'=>'RIGHT','V_VALIGN'=>'top','H_COLSPAN'=>'0',
		'C_FONT_SIZE' =>'12px','C_ALIGN'=>'left','C_FONT_BOLD'=>false,'C_FONT_COLOR' =>$C_FONT_COLOR1,'C_BG_COLOR' =>$C_BG_COLOR1,
		//PENGUNAAN FILTER 
		'FILTER'=>ArrayHelper::map(PpobMasterHarga::find()->groupBy('KTG_NM')->all(),'KTG_NM','KTG_NM'),'FILTER_TYPE'=>GridView::FILTER_SELECT2,
		'FILTER_WIDGET_OPTION'=>['pluginOptions'=>['allowClear'=>true]],
		'FILTER_INPUT_OPTION'=>['placeholder'=>'-Pilih-'],
		'FILTER_OPTION'=>[],
		]
	];
	//--NAMA---	
	$aryFieldColomn[]=[
		'ID' =>4, 'ATTR' =>[
			'ATR_FIELD'=>'HARGA_JUAL','ATR_LABEL'=>'Harga Jual','ATR_HEADER_MERGE'=>false,'ATR_GROUP'=>false,'ATR_GROUPROW'=>false,'ATR_PAGESUMMARY'=>false,'ATR_FORMAT'=>'raw',
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
			'ATR_FIELD'=>'CODE','ATR_LABEL'=>'Code','ATR_HEADER_MERGE'=>false,'ATR_GROUP'=>false,'ATR_GROUPROW'=>false,'ATR_PAGESUMMARY'=>false,'ATR_FORMAT'=>'raw',
			'H_WIDTH'=>'15px','H_ALIGN'=>'center','H_FONT_SIZE' =>'11px','H_FONT_COLOR'=>$H_FONT_COLOR1,'H_BG_COLOR' =>$H_BG_COLOR1,'H_VALIGN'=>'RIGHT','V_VALIGN'=>'top','H_COLSPAN'=>'0',
			'C_FONT_SIZE' =>'12px','C_ALIGN'=>'left','C_FONT_BOLD'=>false,'C_FONT_COLOR' =>$C_FONT_COLOR1,'C_BG_COLOR' =>$C_BG_COLOR1,
			//PENGUNAAN FILTER 
			'FILTER'=>ArrayHelper::map(PpobMasterHarga::find()->groupBy('CODE')->all(),'CODE','CODE'),'FILTER_TYPE'=>GridView::FILTER_SELECT2,
			'FILTER_WIDGET_OPTION'=>['pluginOptions'=>['allowClear'=>true]],
			'FILTER_INPUT_OPTION'=>['placeholder'=>'-Pilih-'],
			'FILTER_OPTION'=>[],
			]
		];
		//--NAMA---	
	$aryFieldColomn[]=[
		'ID' =>6, 'ATTR' =>[
			'ATR_FIELD'=>'NAME','ATR_LABEL'=>'Name','ATR_HEADER_MERGE'=>false,'ATR_GROUP'=>false,'ATR_GROUPROW'=>false,'ATR_PAGESUMMARY'=>false,'ATR_FORMAT'=>'raw',
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
			'ATR_FIELD'=>'DENOM','ATR_LABEL'=>'Denom','ATR_HEADER_MERGE'=>false,'ATR_GROUP'=>false,'ATR_GROUPROW'=>false,'ATR_PAGESUMMARY'=>false,'ATR_FORMAT'=>'raw',
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
	'ID' =>8, 'ATTR' =>[
		'ATR_FIELD'=>'HARGA_BARU','ATR_LABEL'=>'Harga Baru','ATR_HEADER_MERGE'=>false,'ATR_GROUP'=>false,'ATR_GROUPROW'=>false,'ATR_PAGESUMMARY'=>false,'ATR_FORMAT'=>'raw',
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
	'ID' =>9, 'ATTR' =>[
		'ATR_FIELD'=>'TGL_AKTIF','ATR_LABEL'=>'Tanggal Aktif','ATR_HEADER_MERGE'=>false,'ATR_GROUP'=>false,'ATR_GROUPROW'=>false,'ATR_PAGESUMMARY'=>false,'ATR_FORMAT'=>'raw',
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
	'ID' =>10, 'ATTR' =>[
		'ATR_FIELD'=>'HARGA_DASAR','ATR_LABEL'=>'Harga Dasar','ATR_HEADER_MERGE'=>false,'ATR_GROUP'=>false,'ATR_GROUPROW'=>false,'ATR_PAGESUMMARY'=>false,'ATR_FORMAT'=>'raw',
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
	'ID' =>11, 'ATTR' =>[
		'ATR_FIELD'=>'MARGIN_FEE_KG','ATR_LABEL'=>'Margin Fee KG','ATR_HEADER_MERGE'=>false,'ATR_GROUP'=>false,'ATR_GROUPROW'=>false,'ATR_PAGESUMMARY'=>false,'ATR_FORMAT'=>'raw',
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
		'ID' =>12, 'ATTR' =>[
			'ATR_FIELD'=>'MARGIN_FEE_MEMBER','ATR_LABEL'=>'Margin Fee Member','ATR_HEADER_MERGE'=>false,'ATR_GROUP'=>false,'ATR_GROUPROW'=>false,'ATR_PAGESUMMARY'=>false,'ATR_FORMAT'=>'raw',
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
			'ID' =>13, 'ATTR' =>[
				'ATR_FIELD'=>'HARGA_JUAL','ATR_LABEL'=>'Harga Jual','ATR_HEADER_MERGE'=>false,'ATR_GROUP'=>false,'ATR_GROUPROW'=>false,'ATR_PAGESUMMARY'=>false,'ATR_FORMAT'=>'raw',
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
				'ID' =>14, 'ATTR' =>[
					'ATR_FIELD'=>'STATUS','ATR_LABEL'=>'Status','ATR_HEADER_MERGE'=>false,'ATR_GROUP'=>false,'ATR_GROUPROW'=>false,'ATR_PAGESUMMARY'=>false,'ATR_FORMAT'=>'raw',
					'H_WIDTH'=>'15px','H_ALIGN'=>'center','H_FONT_SIZE' =>'11px','H_FONT_COLOR'=>$H_FONT_COLOR1,'H_BG_COLOR' =>$H_BG_COLOR1,'H_VALIGN'=>'RIGHT','V_VALIGN'=>'top','H_COLSPAN'=>'0',
					'C_FONT_SIZE' =>'12px','C_ALIGN'=>'left','C_FONT_BOLD'=>false,'C_FONT_COLOR' =>$C_FONT_COLOR1,'C_BG_COLOR' =>$C_BG_COLOR1,
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