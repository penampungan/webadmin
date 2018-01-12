<?php
use yii\helpers\Html;
use kartik\widgets\Select2;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\widgets\Breadcrumbs;
use kartik\widgets\Spinner;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use kartik\widgets\FileInput;
use yii\helpers\Json;
use yii\web\Response;
use yii\widgets\Pjax;
use kartik\widgets\ActiveForm;
use kartik\tabs\TabsX;
use kartik\date\DatePicker;
use yii\web\View;

$bColor='rgb(51, 102, 153)';
$pageNm='<span class="fa-stack fa-xs text-left" style="float:left">
        <b class="fa fa-handshake-o fa-stack-2x" style="color:#000000"></b>
        </span> <div style="float:left;padding:10px 20px 0px 5px"><b>&nbsp Data Transaksi</b></div>';
	
        $attDinamikField=[
            [
                'class'=>'kartik\grid\SerialColumn',
                'contentOptions'=>['class'=>'kartik-sheet-style'],
                'width'=>'10px',
                'header'=>'No.',
                'headerOptions'=>Yii::$app->gv->gvContainHeader('center','5px',$bColor,'#ffffff'),
                'contentOptions'=>Yii::$app->gv->gvContainBody('center','5px',''),
            ],
        ];
        
        foreach(ppobTransaksiAryColumn() as $key =>$value[]){			
            $attDinamikField[]=[
                'attribute'=>$value[$key]['ATR_FIELD'],
                'label'=>$value[$key]['ATR_LABEL'],
                'filter'=>$value[$key]['FILTER'],
                'filterType'=>$value[$key]['FILTER_TYPE'],
                'filterWidgetOptions'=>$value[$key]['FILTER_WIDGET_OPTION'],	
                'filterInputOptions'=>$value[$key]['FILTER_INPUT_OPTION'],
                'filterOptions'=>$value[$key]['FILTER_OPTION'],
                'mergeHeader'=>$value[$key]['ATR_HEADER_MERGE'],
                'hAlign'=>$value[$key]['H_VALIGN'],
                'vAlign'=>$value[$key]['V_VALIGN'],
                //'hidden'=>false,
                'noWrap'=>true,	
                'format'=>$value[$key]['ATR_FORMAT'],
                'headerOptions'=>[		
                    'style'=>[		
                        'width'=>$value[$key]['H_WIDTH'],
                        'text-align'=>$value[$key]['H_ALIGN'],				
                        'font-size'=>$value[$key]['H_FONT_SIZE'],				
                        'color'=>$value[$key]['H_FONT_COLOR'],
                        'background-color'=>$value[$key]['H_BG_COLOR'],
                        'font-family'=>'tahoma, arial, sans-serif',	
                        'font-weight'=>'bold',	
                    ]
                ],
                'contentOptions'=>[
                    'style'=>[
                        'font-size'=>$value[$key]['C_FONT_SIZE'],
                        'text-align'=>$value[$key]['C_ALIGN'],
                        'color'=>$value[$key]['C_FONT_COLOR'],
                        'background-color'=>$value[$key]['C_BG_COLOR'],
                        'font-family'=>'tahoma, arial, sans-serif',						
                        'font-weight'=>$value[$key]['C_FONT_BOLD'],
                    ]
                ],				
                'group'=>$value[$key]['ATR_GROUP'],
                'groupedRow'=>$value[$key]['ATR_GROUPROW'],	
            ];
        };
    
    $gvppobMasterHarga4=GridView::widget([
        'id'=>'gv-data-ppobtransaksi',
        'dataProvider' => $dataProviderSuccess,
        'filterModel' => $searchModel,
        'columns'=>$attDinamikField,
        'beforeHeader'=>[
            [
                'columns'=>[
                    ['content'=>'DATA OWNER', 'options'=>[
                            'colspan'=>4,
                            'style'=>[
                                'width'=>'10px',
                                'text-align'=>'center',
                                'font-family'=>'tahoma',
                                'font-size'=>'8pt',
                                'background-color'=>'#FFB400',
                            ]
                        ]
                    ],
                    ['content'=>'DATA Prodak', 'options'=>[
                            'colspan'=>14,
                            'style'=>[
                                'width'=>'10px',
                                'text-align'=>'center',
                                'font-family'=>'tahoma',
                                'font-size'=>'8pt',
                                'background-color'=>'#FFB400',
                            ]
                        ]
                    ],
                ]
            ]
        ], 
        'rowOptions' => function($model, $key, $index, $grid){
            if($model['STATUS']==1){return ['class' => 'success'];}	
        },					
        'pjax'=>true,
        'pjaxSettings'=>[
            'options'=>[
                'enablePushState'=>false,
                'id'=>'gv-data-ppobtransaksi',
            ],						  
        ],
        'hover'=>true, //cursor select
        'responsive'=>true,
        'responsiveWrap'=>true,
        'bordered'=>true,
        'striped'=>true,
        'autoXlFormat'=>true,
        'export' => false,
        'panel'=>[''],
        'toolbar' => false,
        'panel' => [
            //'heading'=>false,
            //'heading'=>tombolBack().'<div style="float:right"> '.tombolCreate().' '.tombolExportExcel().'</div>',  
            'heading'=>$pageNm.'<div style="float:right;padding:0px 10px 0px 5px"></div>',  
            'type'=>'info',
            //'before'=> tombolBack().'<div style="float:right"> '.tombolCreate().' '.tombolExportExcel().'</div>',
            'before'=>false,
            'showFooter'=>false,
        ],
        'floatOverflowContainer'=>true,
        'floatHeader'=>true,
    ]); 	
?>

<div class="container-fluid" style="font-family: verdana, arial, sans-serif ;font-size: 8pt">
	<div class="col-xs-12 col-sm-12 col-lg-12" style="font-family: tahoma ;font-size: 9pt;">
		<div class="row">
			<?=$gvppobMasterHarga4?>
		</div>
	</div>
</div>
