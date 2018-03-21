<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\Breadcrumbs;
use yii\bootstrap\Modal;
use kartik\grid\GridView;
use kartik\widgets\ActiveForm;
use kartik\tabs\TabsX;
use kartik\date\DatePicker;
use kartik\builder\Form;
use yii\helpers\Url;
use yii\web\View;
use modulprj\payroll\models\AbsenPayrollSearch;	
use modulprj\absensi\models\AbsenImportPeriode;

	$this->registerCss("
		#list-karyawan :link {
			color:black;
		}
		/* mouse over link */
		#list-karyawan a:hover {
			color: black;
		}
		/* selected link */
		list-karyawan a:active {
			color: black;
		}
		.kv-panel {
			//min-height: 340px;
			height: 300px;
		}
		#list-karyawan .kv-grid-container{
			height:250px
		}
	");

	$aryFieldKar= [
        ['ID' =>0, 'ATTR' =>['FIELD'=>'store.STORE_NM','SIZE' => '180px','label'=>'Karyawan','align'=>'left','format'=>'raw','mergeHeader'=>false,'ATR_GROUP'=>true,'ATR_GROUPROW'=>true]],
		['ID' =>1, 'ATTR' =>['FIELD'=>'NAMA_DPN','SIZE' => '180px','label'=>'Karyawan','align'=>'left','format'=>'raw','mergeHeader'=>false,'ATR_GROUP'=>false,'ATR_GROUPROW'=>false]],
		['ID' =>2, 'ATTR' =>['FIELD'=>'GENDER','SIZE' => '180px','label'=>'Jenis Kelamin','align'=>'left','format'=>'raw','mergeHeader'=>false,'ATR_GROUP'=>false,'ATR_GROUPROW'=>false]],
		['ID' =>3, 'ATTR' =>['FIELD'=>'HP','SIZE' => '180px','label'=>'Phone','align'=>'left','format'=>'raw','mergeHeader'=>false,'ATR_GROUP'=>false,'ATR_GROUPROW'=>false]],
		['ID' =>4, 'ATTR' =>['FIELD'=>'EMAIL','SIZE' => '180px','label'=>'e-Mail','align'=>'left','format'=>'raw','mergeHeader'=>false,'ATR_GROUP'=>false,'ATR_GROUPROW'=>false]],
	];
	
	$valFieldsKaryawan = ArrayHelper::map($aryFieldKar, 'ID', 'ATTR'); 
	$bColor='rgba(87,114,111, 1)';
	
	$attDinamikListKaryawan[] =[			
			'class'=>'kartik\grid\SerialColumn',
			'contentOptions'=>['class'=>'kartik-sheet-style'],
			'width'=>'10px',
			'header'=>'No.',
			'headerOptions'=>[
				'style'=>[
					'text-align'=>'center',
					'width'=>'10px',
					'font-family'=>'verdana, arial, sans-serif',
					'font-size'=>'9pt',
					'background-color'=>$bColor,
					'color'=>'white',
				]
			],
			'contentOptions'=>[
				'style'=>[
					'text-align'=>'center',
					'width'=>'10px',
					'font-family'=>'tahoma, arial, sans-serif',
					'font-size'=>'9pt',
					'color'=>'red',
				]
			],					
	];

		
	/*OTHER ATTRIBUTE*/
	foreach($valFieldsKaryawan as $key =>$value[]){	
		// if($key=='SUB_PAY_PAGI'){
			// $format='raw';//['decimal', 2];
		// }else{
			// $format='raw';
		// }
		$attDinamikListKaryawan[]=[		
			'attribute'=>$value[$key]['FIELD'],
			'label'=>$value[$key]['label'],
			// 'filterType'=>$gvfilterType,
			// 'filter'=>$gvfilter,
			// 'filterWidgetOptions'=>$filterWidgetOpt,	
			//'filterInputOptions'=>$filterInputOpt,				
			'hAlign'=>'right',
			'vAlign'=>'middle',
			'mergeHeader'=>$value[$key]['mergeHeader'],
			'noWrap'=>true,			
			'headerOptions'=>[		
					'style'=>[									
					'text-align'=>'center',
					'width'=>$value[$key]['SIZE'],
					'font-family'=>'tahoma, arial, sans-serif',
					'font-size'=>'8pt',
					'background-color'=>$bColor,
					'color'=>'white',
				]
			],  
			'format'=>$value[$key]['format'],
			'contentOptions'=>[
				'style'=>[
					'text-align'=>$value[$key]['align'],
					//'width'=>'12px',
					'font-family'=>'tahoma, arial, sans-serif',
					'font-size'=>'8pt',
					
					//'background-color'=>'rgba(13, 127, 3, 0.1)',
				]
			],
			//'pageSummaryFunc'=>GridView::F_SUM,
			//'pageSummary'=>true,
			'pageSummaryOptions' => [
				'style'=>[
						'text-align'=>'right',		
						//'width'=>'12px',
						'font-family'=>'tahoma',
						'font-size'=>'8pt',	
						'text-decoration'=>'underline',
						'font-weight'=>'bold',
						'border-left-color'=>'transparant',		
						'border-left'=>'0px',									
				]
			],        			
			'group'=>$value[$key]['ATR_GROUP'],
			'groupedRow'=>$value[$key]['ATR_GROUPROW'],			
		];	
	};	
	
	$attDinamikListKaryawan[]=[
		'attribute'=>'STATUS',
		'label'=>'STATUS',
		/* 'filterType'=>GridView::FILTER_SELECT2,
		'filterWidgetOptions'=>[
			'pluginOptions' =>Yii::$app->gv->gvPliginSelect2(),
		],
		'filterInputOptions'=>['placeholder'=>'Select'],
		'filter'=>$valSttAbsensi,//Yii::$app->gv->gvStatusArray(),
		'filterOptions'=>Yii::$app->gv->gvFilterContainHeader('0','50px',$bColor), */
		'filter'=>false,
		'hAlign'=>'right',
		'vAlign'=>'middle',
		'mergeHeader'=>true,
		'noWrap'=>false,
		'format' => 'raw',	
		'value'=>function($model){
			if($model['STATUS']==1){
				return 'Ready';
			}elseif($model->STATUS==2){
				return 'Paid';
			};
			//return sttMsgImport($model->STATUS);				 
		},
		//gvContainHeader($align,$width,$bColor)
		'headerOptions'=>Yii::$app->gv->gvContainHeader('center','50',$bColor,'white'),
		'contentOptions'=>Yii::$app->gv->gvContainBody('center','50','')			
	];

	
	$gvListKaryawan= GridView::widget([
		'id'=>'list-karyawan',
		'dataProvider' => $dataProviderKar,
		//'filterModel' => $searchModelAbsensi,	
		'columns' =>$attDinamikListKaryawan,	
		'toolbar' => [
			'{export}',
		],	
		'panel'=>false,
		'pjax'=>true,
		'pjaxSettings'=>[
			'options'=>[
				'enablePushState'=>false,
				'id'=>'list-karyawan',
			],
		],
		'hover'=>true, //cursor select
		'responsive'=>true,
		'responsiveWrap'=>true,
		'bordered'=>true,
		'striped'=>'4px',
		'autoXlFormat'=>true,
		'export' => false,
		'export'=>[//export like view grid --ptr.nov-
			'fontAwesome'=>true,
			'showConfirmAlert'=>false,
			'target'=>GridView::TARGET_BLANK
		],
		//'floatHeader'=>false,
		// 'floatHeaderOptions'=>['scrollingTop'=>'200'] 
		// 'floatOverflowContainer'=>true,
		//'floatHeader'=>true,
	]);

?>
<?=$gvListKaryawan?>



