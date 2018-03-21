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

$this->registerCss("
	:link {
		color: #fdfdfd;
	}
	/* mouse over link */
	a:hover {
		color: #5a96e7;
	}
	/* selected link */
	a:active {
		color: blue;
	}
	#gv-data-industri .kv-grid-container{
			height:400px
		}
");

$this->registerJs($this->render('endUser_script.js'),View::POS_READY);
echo $this->render('endUser_button'); //echo difinition
echo $this->render('endUser_modal'); //echo difinition
echo $this->render('endUser_colum'); //echo difinition
$this->title = 'Member Konsumer';


$bColor='rgb(51, 102, 153)';
$pageNm='<span class="fa-stack fa-xs text-left" style="float:left">
        <b class="fa fa-trophy fa-stack-2x" style="color:#000000"></b>
        </span> <div style="float:left;padding:10px 20px 0px 5px"><b> Data Member Konsumer</b></div>';
	
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
        
        foreach(enduserAryColumn() as $key =>$value[]){			
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
                'value'=>function($data)use($value,$key){
                    $val=$value[$key]['ATR_FIELD'];	
                    if($val=='STATUS'){
                        if ($data->STATUS == 0) {
                          return Html::a('
                            <span class="fa-stack fa-xl">
                              <i class="fa fa-circle-thin fa-stack-2x"  style="color:#25ca4f"></i>
                              <i class="fa fa-close fa-stack-1x" style="color:#ee0b0b"></i>
                            </span>','',['title'=>'KELUAR']);
                        }else if ($data->STATUS == 1) {
                          return Html::a('<span class="fa-stack fa-xl">
                              <i class="fa fa-circle-thin fa-stack-2x"  style="color:#25ca4f"></i>
                              <i class="fa fa-check fa-stack-1x" style="color:#0f39ab"></i>
                            </span>','',['title'=>'AKTIF']);
                        }else if ($data->STATUS == 2) {
                            return Html::a(' <span class="fa-stack fa-xl">
                            <i class="fa fa-circle-thin fa-stack-2x"  style="color:#25ca4f"></i>
                            <i class="fa fa-close fa-stack-1x" style="color:#ee0b0b"></i>
                          </span>','',['title'=>'KELUAR']);
                          }else if ($data->STATUS == 3) {
                            return Html::a(' <span class="fa-stack fa-xl">
                            <i class="fa fa-circle-thin fa-stack-2x"  style="color:#25ca4f"></i>
                            <i class="fa fa-close fa-stack-1x" style="color:#ee0b0b"></i>
                          </span>','',['title'=>'KELUAR']);
                          }
                    }
                    if($val=='STORE_ID'){
                        return  $data->STORE_NM;
                    }
                    else{						
                        if($data->{$val}){					
                            return  $data->{$val};			//USE ArrayData
                        }else {
                            return  $data->{$val};
                        }						
                    }		
                },
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
        
        $attDinamikField[]=[			
            //ACTION
            'class' => 'kartik\grid\ActionColumn',
            'template' => '{view}{edit}{delete}',
            'header'=>'ACTION',
            'dropdown' => true,
            'dropdownOptions'=>[
                'class'=>'pull-right dropdown',
                'style'=>'width:100%;background-color:#E6E6FA'				
            ],
            'dropdownButton'=>[
                'label'=>'ACTION',
                'class'=>'btn btn-info btn-xs',
                'style'=>'width:100%'		
            ],
            'buttons' => [
                'view' =>function ($url, $model){
                    return  tombolView($url, $model);
                },
                'edit' =>function($url, $model,$key){
                    //if($model->STATUS!=1){ //Jika sudah close tidak bisa di edit.
                    return  tombolUpdate($url, $model);
                    //}					
                },
                'delete' =>function($url, $model,$key){
                    return  tombolDelete($url, $model);
                }
            ],
            'headerOptions'=>Yii::$app->gv->gvContainHeader('center','10px',$bColor,'#ffffff'),
            'contentOptions'=>Yii::$app->gv->gvContainBody('center','10px',''),
        ]; 
    
    $gvendUser=GridView::widget([
        'id'=>'gv-data-industri',
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns'=>$attDinamikField,				
        'pjax'=>true,
        'pjaxSettings'=>[
            'options'=>[
                'enablePushState'=>false,
                'id'=>'gv-data-industri',
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
            'heading'=>$pageNm.'<div style="float:right;padding:0px 10px 0px 5px">'.tombolCreate().'</div>',  
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
<div style="margin-top: -10px;margin-bottom: 10px;">
		<?=tombolKembali()?>
	</div>
	<div class="col-xs-12 col-sm-12 col-lg-12" style="font-family: tahoma ;font-size: 9pt;">
		<div class="row">
			<?=$gvendUser?>
		</div>
	</div>
</div>